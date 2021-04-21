<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    
   public function index()
   {
        $user = Auth::user();
        if ($user()->hasRole('user')) {
            return view('userdash');
        } elseif ($user()->hasRole('blogwriter')) {
            return view('blogwriterdash');
        } elseif ($user()->hasRole('admin')) {
            return view('dashboard');
        }
   }

   public function myprofile()
   {
    return view('myprofile');
   }

   public function postcreate()
   {
    return view('postcreate');
   }
}
