<?php

 namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Notifications\Notifiable;
 use App\Traits\ScopeFilter;

 class Blog extends Model
 {

     use HasFactory,
         Notifiable,
         ScopeFilter;

     protected $fillable = [
         'user_id',
         'language_id',
         'title',
         'content',
         'status'
     ];

     public function getFilterScopes(): array
     {
         return [
             'language_id' => [
                 'hasParam' => true,
                 'scopeMethod' => 'language_id'
             ],
             'user_id' => [
                 'hasParam' => true,
                 'scopeMethod' => 'user_id'
             ],
             'title' => [
                 'status' => true,
                 'scopeMethod' => 'title'
             ],
             'content' => [
                 'status' => true,
                 'scopeMethod' => 'content'
             ]
         ];
     }

     public function files()
     {
         return $this->morphMany('App\Models\File', 'fileable');
     }

 }
 