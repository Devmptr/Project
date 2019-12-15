<head>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
</head>

@foreach($movies as $movie)
    <tr>
        <td class="col-1">{{$movie->id_movie}}</td>
        <td class="col-3">{{$movie->judul}}</td>
        <td class="col-3">{{$movie->deskripsi}}</td>
        <td class="col-2">{{$movie->genre}}</td>
        <td class="col-3">
            <button id="{{$movie->id_movie}}" type="button" class="movie-show btn btn-primary" data-toggle="modal" data-target="#lihatModalMovie">Lihat</button>
            <button id="{{$movie->id_movie}}" type="button" class="movie-showedit btn btn-primary" data-toggle="modal" data-target="#editMovieModal">Edit</button>
            <button id="{{$movie->id_movie}}" type="submit" class="movie-delete btn btn-primary">Delete</button>
        </td>
    </tr>
@endforeach