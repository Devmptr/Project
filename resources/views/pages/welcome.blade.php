@extends('layouts.home')
@section('title','Home')

@section('content')
<div class="col-sm-12 col-xs-6 col-lg-8 mx-auto mt-3">
    <div id="carouselTop" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselTop1" data-slide-to="0" class="active"></li>
            <li data-target="#carouselTop2" data-slide-to="1"></li>
            <li data-target="#carouselTop3" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/cover1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/cover2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/cover3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselTop" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselTop" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="col-12 mx-auto mt-3">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Action</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Drama</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Comedy</a>
        </li>
    </ul>
    <div class="col-12 row mx-auto">
        @foreach($movies as $movie)
            <div class="col-lg-3 col-sm-6 col-xs-12 mt-3">
            <form action="/stream/{{$movie->id_movie}}" method="GET">
                <div class="card">
                    <img class="h-100 card-img-top" src="{{$movie->cover}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->judul}}</h5>
                        <p class="card-text">{{$movie->deskripsi}}</p>
                        <button type="submit" class="btn-watch btn btn-primary text-center">Watch</button>
                    </div>
                </div>
            </form>
            </div>
        @endforeach
        <div class="col-12 my-3 mx-auto d-flex justify-content-center">
            <button type="button" class="btn btn-outline-primary">Load More</button>    
        </div>
    </div>
</div>
    
@endsection