<?php

 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\BlogController;
 use App\Http\Controllers\Admin\AuthController;
 use App\Http\Controllers\Admin\BlogController as AdminBlogController;
 use App\Http\Middleware\SetLanguage;

/*
   |--------------------------------------------------------------------------
   | Web Routes
   |--------------------------------------------------------------------------
   |
   | Here is where you can register web routes for your application. These
   | routes are loaded by the RouteServiceProvider within a group which
   | contains the "web" middleware group. Now create something great!
   |
  */



 Route::prefix('{locale?}')->middleware('setlanguage')->group(function () {

     Route::get('/', [BlogController::class, 'renderHomePage'])->name('index');

     Route::get('/blog', [BlogController::class, 'index'])->name('blogIndex');

     Route::get('blog/{blog}', [BlogController::class, 'show'])->name('blogView');

     Route::get('/contact', function () {
         return view('contact/index');
     })->name('contact');
     Route::get('/about', function () {
         return view('about/index');
     })->name('about');
     Route::get('/projects', function () {
         return view('projects/index');
     })->name('projects');

     Route::get('/projects/details', function () {
         return view('projects/details');
     })->name('projectDetails');

     Route::get('/team', function () {
         return view('team/index');
     })->name('team');
     Route::get('/team-view', function () {
         return view('team-view/index');
     })->name('teamView');

     Route::prefix('admin')->group(function () {
         Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');

         Route::post('/login', [AuthController::class, 'tryLogin'])->name('adminLogin');

         Route::middleware(['auth', 'can:isAdmin'])->group(function () {
             Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

             Route::resource('blog', AdminBlogController::class)
                     ->name('index', 'adminBlogIndex')
                     ->name('store', 'adminBlogCreate')
                     ->name('create', 'adminBlogCreateView')
                     ->name('show', 'adminBlogShow')
                     ->name('edit', 'adminBlogEditView')
                     ->name('update', 'adminBlogUpdate')
                     ->name('destroy', 'adminBlogDestroy');
         });
     });
 });
