@extends('layouts.home')
@section('title','Home')

@section('content')
<div class="watch">
    <div class="col-xs-6 col-lg-10 mx-auto mt-3" align="center">
        <iframe class="mx-auto" width="560" height="315" src="{{$movie->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    <div class="col-sm-12 col-lg-10 mt-3 mx-auto">
        <h2 id="judul">{{$movie->judul}}</h2>
        <p id="deskripsi" class="text-justify">
            {{$movie->deskripsi}}
        </p>
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <img src="{{$movie->cover}}" class="w-100 h-100 card-img" height="200px" width="200px">
            </div>
            <div class="col-lg-8 col-sm-12">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>Genre : </th>
                            <td>
                                <a href="#">Action</a>
                            </td>
                            
                            <th>Duration :</th>
                            <td>92 Menit</td>
                        </tr>
                        <tr>
                            <th>Actors :</th>
                            <td>Joaqin Phoenix</td>

                            <th>Quality :</th>
                            <td>HD</td>
                        </tr>
                        <tr>
                            <th>Directors :</th>
                            <td>Tood Phillips</td>

                            <th>Release Date :</th>
                            <td>04 Oktober 2019</td>
                        </tr>
                        <tr>
                            <th>Productions :</th>
                            <td>Warner Bros</td>

                            <th>Countries :</th>
                            <td>USA</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="recomendation">
    <div class="col-md-12 mt-5">
        <hr>
        <h1>Rekomendasi Film</h1>
        <div class="card-deck mt-3">
            @foreach($allmovie as $movies)
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="{{$movies->cover}}" class="h-100 card-img" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title">{{$movies->judul}}</h5>
                                <p class="card-text">{{$movies->deskripsi}}</p>
                                <a id="{{$movies->id_movie}}">Tonton</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection