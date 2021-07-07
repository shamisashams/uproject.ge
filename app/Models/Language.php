<?php

 namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Language extends Model
 {

     use HasFactory;

     public static function getByAbbr($languageAbbreviation)
     {
         return self::where('abbreviation', $languageAbbreviation)->first();
     }

     public static function getDefault()
     {
         return self::where('default', true)->first();
     }

 }
 