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
                                <a href="#">{{$movie->genre}}</a>
                            </td>
                            
                            <th>Duration :</th>
                            <td>- Menit</td>
                        </tr>
                        <tr>
                            <th>Actors :</th>
                            <td>-</td>

                            <th>Quality :</th>
                            <td>HD</td>
                        </tr>
                        <tr>
                            <th>Directors :</th>
                            <td>-</td>

                            <th>Release Date :</th>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Productions :</th>
                            <td>-</td>

                            <th>Countries :</th>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection