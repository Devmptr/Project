@extends('layouts.dashboard')

@section('tambahan')
    <script src="/js/moviesetting.js"></script>
@endsection

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
    <button type='submit' class='btn btn-primary' data-toggle="modal" data-target="#insertMovieModal">Tambah Movie</button>

    <table id="tabel-user" class="my-3 table table-hover">
        <thead>
            <tr>
                <th class="col-1">ID</td>
                <th class="col-3">Judul</th>
                <th class="col-3">Deskripsi</th>
                <th class="col-2">Genre</th>
                <th class="col-3">Setting</th>
            </tr>
        </thead>
        <tbody id="datamovie">

        </tbody>
    </table>

    <!--SHOW MOVIE-->
    <div class="modal fade" id="lihatModalMovie" tabindex="-1" role="dialog" aria-labelledby="lihatModalMovieLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lihatModalMovieLabel">Data Movie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="text-center modal-body">
                <img class="col-10" id="cover" src="" alt="No Pict" width="300" height="auto">
                <p class="judul"></p>
                <p class="genre"></p>
                <p>Deskripsi : </p><p class="deskripsi"> </p>
                <a id="link" href="">Link Film</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT -->
    <div class="modal fade" id="editMovieModal" tabindex="-1" role="dialog" aria-labelledby="editMovieModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMovieModalLabel">Data Movie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input value= '' type="text" class="form-control" id="judulmovie" name="edJudul" aria-describedby="namaHelp" placeholder="Enter Judul">
                </div>
                <div class="form-group">
                    <label for="">Genre</label>
                    <input value= '' type="text" class="form-control" id="genremovie" name="edGenre" aria-describedby="emailHelp" placeholder="Enter Genre">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label> 
                    <input value= '' type="text" class="form-control" id="deskripsimovie" name="edDeskripsi" placeholder="Deskripsi Movie">
                </div>
                <div class="form-group">
                    <label for="">Cover</label> 
                    <input value= '' type="text" class="form-control" id="covermovie" name="edCover" placeholder="Cover Movie">
                </div>
                <div class="form-group">
                    <label for="">Link</label> 
                    <input value= '' type="text" class="form-control" id="linkmovie" name="edLink" placeholder="Link Movie">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="text-center movie-edit btn btn-primary">Submit</button>
            </div>
            </div>
        </div>
    </div>

    <!-- INSERT MOVIE -->
    <div class="modal fade" id="insertMovieModal" tabindex="-1" role="dialog" aria-labelledby="insertMovieModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertMovieModalLabel">Data Movie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="insertMovie">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input value= '' type="text" class="form-control" id="judulmovie" name="inJudul" aria-describedby="namaHelp" placeholder="Enter Judul">
                </div>
                <div class="form-group">
                    <label for="">Genre</label>
                    <input value= '' type="text" class="form-control" id="genremovie" name="inGenre" aria-describedby="emailHelp" placeholder="Enter Genre">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label> 
                    <input value= '' type="text" class="form-control" id="deskripsimovie" name="inDeskripsi" placeholder="Deskripsi Movie">
                </div>
                <div class="form-group">
                    <label for="">Cover</label> 
                    <input value= '' type="text" class="form-control" id="covermovie" name="inCover" placeholder="Cover Movie">
                </div>
                <div class="form-group">
                    <label for="">Link</label> 
                    <input value= '' type="text" class="form-control" id="linkmovie" name="inLink" placeholder="Link Movie">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="text-center movie-insert btn btn-primary">Submit</button>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection