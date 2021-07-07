<?php

 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Repositories\Eloquent\BlogRepository;
 use App\Models\Blog;
 use App\Models\Language;

 class BlogController extends Controller
 {

     protected $blogRepository;

     public function __construct(BlogRepository $blogRepository)
     {
         $this->blogRepository = $blogRepository;
     }

     public function index(Request $request)
     {
         return view('blog.index', [
             'blogs' => $this->blogRepository->getData($request,5)
         ]);
     }

     public function show($lang, Blog $blog)
     {

         if (!$blog->status || Language::getByAbbr($lang)->id != $blog->language_id) {
             abort(404);
         }

         return view('blog.view', ['blog' => $blog]);
     }

     public function renderHomePage(Request $request)
     {

         return view('index', [
             'blogs' => $this->blogRepository->getData($request, 20)
         ]);
     }

 }
 