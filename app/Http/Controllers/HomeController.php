<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Account;

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
<<<<<<< HEAD
    
    public function stream(){
        return view('pages.stream')->with('location','stream');
    }
    public function profiles(){
        $id=Session::get('iduser');
        $cekuser=Account::where('id_user',$id);
        return view('pages.profiles',['users'=>$cekuser]);
    }
=======
>>>>>>> 7be03b3a7fae1013f72400c317107946605c3283
}
