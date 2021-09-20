<?php

 namespace App\Http\Controllers\Admin;

 use App\Http\Requests\BlogRequest;
 use App\Repositories\BlogRepositoryInterface;
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;

 class BlogController extends Controller
 {

     protected $blogRepository;

     public function __construct(BlogRepositoryInterface $blogRepository)
     {
         $this->blogRepository = $blogRepository;
     }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {
         return view('admin.blog.index', [
             'blogs' => $this->blogRepository->getData($request,10)
         ]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('admin.blog.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store($lang, BlogRequest $request)
     {
         if (!$this->blogRepository->store($lang, $request)) {
             return redirect(route('adminBlogCreate', $lang))->with('danger', __('admin.blog_not_created'));
         }

         return redirect(route('adminBlogIndex', $lang))->with('success', __('admin.blog_created_successfully'));
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($lang, $id)
     {
         return view('admin.blog.view', [
             'blogItem' => $this->blogRepository->find($id)
         ]);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($lang, int $id)
     {

         return view('admin.blog.update', [
             'blogItem' => $this->blogRepository->find($id)
         ]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update($lang, BlogRequest $request, $id)
     {
         if (!$this->blogRepository->update($lang, $id, $request)) {
             return redirect(route('adminBlogEdit', [$lang, $id]))->with('danger', __('admin.blog_not_updated'));
         }

         return redirect(route('adminBlogIndex', $lang))->with('success', __('admin.blog_updated_succesfully'));
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy(string $lang, int $id)
     {
         if (!$this->blogRepository->delete($id)) {
             return redirect(route('adminBlogIndex', $lang))->with('danger', __('admin.blog_not_deleted'));
         }
         return redirect(route('adminBlogIndex', $lang))->with('success', __('admin.blog_deleted_succesfully'));
     }

 }
