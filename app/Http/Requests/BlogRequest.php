<?php

 namespace App\Http\Requests;

 use Illuminate\Foundation\Http\FormRequest;

 class BlogRequest extends FormRequest
 {

     /**
      * Determine if the user is authorized to make this request.
      *
      * @return bool
      */
     public function authorize()
     {
         return Auth()->user()->isAdmin();
     }

     /**
      * Get the validation rules that apply to the request.
      *
      * @return array
      */
     public function rules()
     {
         return [
             'title' => 'required|string|max:255',
             'content' => 'required|string',
             'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
         ];
     }

 }
