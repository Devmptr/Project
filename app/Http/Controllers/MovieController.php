<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //

    public function stream(){
        $movie = Movie::all();
        return view('pages.stream',['movies'=>$movie]);
    }

    public function movie(){
        $movie = Movie::all();
        return view('pages.dashboards.movie',['movies'=>$movie]);
    }

    public function home(){
        $movie = Movie::all();
        $streammovie = Movie::where('id_movie',1);
        return view('pages.welcome',['movies'=>$movie,'idmovie'=>$streammovie]);
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
