<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //

    public function stream($idmovie){
        $movie = Movie::where('id_user','=',$idmovie)->get();
        $allmovie = Movie::all();
        return view('pages.stream',['movie'=>$movie,'allmovie'=>$allmovie]);
    }

    public function movie(){
        $movie = Movie::all();
        return view('pages.dashboards.movie',['movies'=>$movie]);
    }

    public function home(){
        $movie = Movie::all();
        return view('pages.welcome',['movies'=>$movie]);
    }

    public function trending(){
        $movie= Movie::all();
        return view('pages.trending',['movies'=>$movie]);
    }

    public function genre(){
        $movie = Movie::all();
        return view('pages.genre',['movies'=>$movie]);
    }
}
