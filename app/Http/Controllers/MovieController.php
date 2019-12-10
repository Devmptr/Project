<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //

    public function home(){
        $movie = Movie::all();
        return view('pages.welcome',['movies'=>$movie]);
    }

}
