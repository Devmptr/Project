<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
     public function home(){
        return view('welcome')->with('location','home');
    }
    
    public function auth(){
        return view('auth')->with('location','auth');
    }

    public function regist(){
        return view('regist')->with('location','regist');
    }
}
