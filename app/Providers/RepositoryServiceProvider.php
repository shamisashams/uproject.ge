<?php

 namespace App\Providers;

 use App\Repositories\Eloquent\BlogRepository;
 use App\Repositories\BlogRepositoryInterface;
 use Illuminate\Support\ServiceProvider;

 /**
  * Class RepositoryServiceProvider
  * @package App\Providers
  */
 class RepositoryServiceProvider extends ServiceProvider
 {

     /**
      * Register services.
      *
      */
     public function register()
     {
         //
     }

     /**
      * Bootstrap services.
      *
      * @return void
      */
     public function boot()
     {
         $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
     }

 }
 