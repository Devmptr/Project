@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="head col-12">
        <div class="row">
            <h1>Movies Setting</h1>
            <div class="form-inline ml-auto mr-0">
                <input id="searchmovie" name="Nama" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" value="">
            </div>
        </div>
    </div>
    <table id="tabel-user" class="my-3 table table-hover">
        <!--<caption></caption>-->
        <thead>
            <tr>
                <th scope="col" class="col-1">ID</td>
                <th scope="col" class="col-3">Judul</th>
                <th scope="col" class="col-3">Deskripsi</th>
                <th scope="col" class="col-2">Genre</th>
                <th scope="col" class="col-3">Setting</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
                <tr class="isiauto" id="">
                    <td class="col-1">{{$movie->id_movie}}</td>
                    <td class="col-3">{{$movie->judul}}</td>
                    <td class="col-3">{{$movie->deskripsi}}</td>
                    <td class="col-2">action</td>
                    <td class="col-3">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">Lihat</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">Edit</button>
                        <button id="{{$movie->id_movie}}" type="submit" class="btn-delete btn btn-primary">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!--<div class="d-flex justify-content-center">
    </div>-->
</div>
@endsection