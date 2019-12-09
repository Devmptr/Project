<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
     public function home(){
        return view('pages.welcome')->with('location','home');
    }
    
    public function auth(){
        return view('pages.auth')->with('location','auth');
    }

    public function regist(){
        return view('pages.regist')->with('location','regist');
    }

    public function dashboard(){
        return view('pages.dashboard')->with('location','dashboard');
    }
    
    public function stream(){
        return view('pages.stream')->with('location','stream');
    }
}
