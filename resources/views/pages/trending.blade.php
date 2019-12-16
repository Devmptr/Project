@extends('layouts.home')
@section('title','Home')

@section('content')
<div class="recomendation">
    <div class="col-md-12 mt-5">
        <h2 class="text-center mb-5 mt-4">Recomendation</h2>
        <div class="card-deck mt-3">
            @foreach($movies as $movie)
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <img src="{{$movie->cover}}" class="h-100 card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">{{$movie->judul}}</h5>
                                    <p class="card-text">{{$movie->deskripsi}}</p>
                                    <a href="#">Tonton</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection