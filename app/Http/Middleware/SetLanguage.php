<?php

 namespace App\Http\Middleware;

 use Closure;
 use App\Models\Language;
 use Illuminate\Http\Request;

 class SetLanguage
 {

     /**
      * Handle an incoming request.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \Closure  $next
      * @return mixed
      */
     public function handle(Request $request, Closure $next)
     {
         $chosenLanguage = $request->segment(1);
         $urlSegments = $request->segments();
         
         $lang = Language::getByAbbr($chosenLanguage);
         $defaultLanguage = Language::getDefault();

         if (is_null($lang)) {
             if (strlen($chosenLanguage) === 2) {
                 array_shift($urlSegments);
             }
             array_unshift($urlSegments, $defaultLanguage->abbreviation);
             return redirect()->to(implode('/', $urlSegments));
         }
         if (!$lang->status) {
             array_shift($urlSegments);
             return redirect()->to(implode('/', $urlSegments));
         }
         app()->setLocale($chosenLanguage);
         return $next($request);
     }

 }
 