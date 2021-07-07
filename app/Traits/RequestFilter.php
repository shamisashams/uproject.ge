<?php

 namespace App\Traits;

 use Illuminate\Database\Eloquent\Builder;
 use Illuminate\Http\Request;
 use App\Models\Language;

 trait RequestFilter
 {

     public function setFiltersFromRequest(Builder $modelQueryBuilder, Request $request)
     {
         // SET CORRECT LANGUAGE
         $lang = Language::getByAbbr(app()->getLocale());

         $modelQueryBuilder->where('language_id', '=', (int) $lang->id)
                 ->orderBy('id', 'desc');

         if ($request['id']) {
             $modelQueryBuilder->where('id', '=', (int) $request['id']);
         }

         if ($request['title']) {
             $modelQueryBuilder->where('title', 'like', "%{$request['title']}%");
         }

         if ($request['content']) {
             $modelQueryBuilder->where('content', 'like', "%{$request['content']}%");
         }

         return $modelQueryBuilder;
     }

 }
 