<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Account;
use App\Movie;

class HomeController extends Controller
{
    //

    public function home(){
        if (!Session::has('nama')){
            return redirect('auth');
        }else{
            return view('pages.welcome');
        }
    }
    
    public function auth(){
        if (Session::has('nama')){
            return redirect('home');
        }else{
            return view('pages.auth');
        }
    }

    public function regist(){
        return view('pages.regist')->with('location','regist');
    }
    
    public function stream(){
        return view('pages.stream')->with('location','stream');
    }
    public function profiles(){
        $id=Session::get('iduser');
        $cekuser=Account::where('id_user',$id)->first();
        return view('pages.profiles',['users'=>$cekuser]);
    }
    public function genre(){
        $movie = Movie::all();
        return view('pages.genre',['movies'=>$movie]);
    }
}
