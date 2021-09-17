<?php

 namespace App\Repositories\Eloquent;

 use App\Http\Requests\BlogRequest;
 use App\Models\Blog;
 use App\Repositories\Eloquent\Base\BaseRepository;
 use App\Repositories\BlogRepositoryInterface;
 use Illuminate\Http\Request;
 use App\Traits\RequestFilter;
 use Illuminate\Support\Facades\DB;
 use App\Models\Language;
 use Illuminate\Support\Facades\Storage;

 class BlogRepository extends BaseRepository implements BlogRepositoryInterface
 {

     use RequestFilter;

     public function __construct(Blog $blogModel)
     {
         parent::__construct($blogModel);
     }

     public function getData($request, int $perPage = 2,  $relation = null)
     {
         $blogModelQuery = $this->model->query();

         $blogModel = $this->setFiltersFromRequest($blogModelQuery, $request);

         if ($request->filled('per_page')) {
             $perPage = $request['per_page'];
         }

         if ($relation) {
             return $blogModel->with($relation)->paginate($perPage);
         }

         return $blogModel->paginate($perPage);
     }

     public function store(string $lang, BlogRequest $request)
     {
         $request['status'] = isset($request['status']) ? 1 : 0;
         // Create new item
         try {
             DB::beginTransaction();

             ### Get language based on chosen lang abbreviation.
             $language = Language::getByAbbr($lang);

             $blogItem = $this->model->create([
                 'title' => $request['title'],
                 'content' => $request['content'],
                 'user_id' => Auth()->user()->id,
                 'language_id' => false === is_null($language) ? $language->id : Language::getDefault()->id,
                 'status' => $request['status']
             ]);

             if ($request->hasFile('images')) {
                 foreach ($request->file('images') as $key => $file) {
                     $imagename = date('Ymhs') . $file->getClientOriginalName();
                     $destination = base_path() . '/storage/app/public/blog/' . $blogItem->id;

                     $request->file('images')[$key]->move($destination, $imagename);
                     $blogItem->files()->create([
                         'name' => $imagename,
                         'path' => '/storage/app/public/blog/' . $blogItem->id,
                         'format' => $file->getClientOriginalExtension(),
                     ]);
                 }
             }
             DB::commit();
             return true;
         } catch (\Exception $queryException) {
             DB::rollBack();
             return false;
         }
     }

     public function update(string $lang, int $id, BlogRequest $request)
     {

         $request['status'] = isset($request['status']) ? 1 : 0;

         try {
             DB::beginTransaction();
             $blogItem = $this->find($id);

             $blogItem->update([
                 'title' => $request['title'],
                 'status' => $request['status'],
                 'content' => $request['content']
             ]);

             $this->updateImages($request, $blogItem);

             DB::commit();
             return true;
         } catch (\Exception $queryException) {
             DB::rollBack();
             return false;
         }
     }

     public function delete(int $id)
     {
         $blog = $this->find($id);

         return ($blog) ? $blog->delete() : false;
     }

     public function updateImages($request, $model)
     {
         if (count($model->files) > 0) {
             foreach ($model->files as $file) {

                 if ($request['old_images'] == null) {
                     if (Storage::exists('public/blog/' . $model->id . '/' . $file->name)) {
                         Storage::delete('public/blog/' . $model->id . '/' . $file->name);
                     }
                     $file->delete();
                     continue;
                 }
                 if (!in_array($file->id, $request['old_images'])) {
                     if (Storage::exists('public/blog/' . $model->id . '/' . $file->name)) {
                         Storage::delete('public/blog/' . $model->id . '/' . $file->name);
                     }
                     $file->delete();
                 }
             }
         }


         if ($request->hasFile('images')) {
             foreach ($request->file('images') as $key => $file) {
                 $imagename = date('Ymhs') . $file->getClientOriginalName();
                 $destination = base_path() . '/storage/app/public/blog/' . $model->id;
                 $request->file('images')[$key]->move($destination, $imagename);
                 $model->files()->create([
                     'name' => $imagename,
                     'path' => '/storage/app/public/blog/' . $model->id,
                     'format' => $file->getClientOriginalExtension(),
                 ]);
             }
         }
     }

 }
