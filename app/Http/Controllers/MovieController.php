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

    public function home(){
        $movie = Movie::all();
        $streammovie = Movie::where('id_movie',1);
        return view('pages.welcome',['movies'=>$movie,'idmovie'=>$streammovie]);
    }

}
