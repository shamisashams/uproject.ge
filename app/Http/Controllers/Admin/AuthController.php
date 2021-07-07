<?php

 namespace App\Http\Controllers\Admin;

 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
 use Illuminate\Validation\ValidationException;

 class AuthController extends Controller
 {

     public function showLogin()
     {

         if (Auth::user() && Auth::user()->can('isAdmin')) {
             return redirect()->route('adminBlogIndex', app()->getLocale());
         }

         return view('admin.auth.login');
     }

     public function tryLogin(Request $request)
     {

         if (false === Auth::attempt([
                     'email' => $request->email,
                     'password' => $request->password
                 ])) {
             throw ValidationException::withMessages([
                         'auth' => ['Wrong Email or Password, Try Again please.'],
             ]);
         }

         if (false === Auth::user()->isAdmin()) {
             Auth::logout();
             throw ValidationException::withMessages([
                         'auth' => ['User must have admin privileges'],
             ]);
         }

         return redirect()->route('adminBlogIndex', app()->getLocale());
     }

     public function logout(Request $request)
     {
         if (Auth::user()) {
             Auth::logout();

             $request->session()->invalidate();
             $request->session()->regenerateToken();
         }

         return redirect()->route('showLogin',app()->getLocale());
     }

 }
 