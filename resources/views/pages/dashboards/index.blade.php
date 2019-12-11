@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="head col-12">
        <div class="row">
            <h1>Users Setting</h1>
            <div class="form-inline ml-auto mr-0">
                <input id="searchuser" name="Nama" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" value="">
            </div>
        </div>
    </div>
    <table id="tabel-user" class="my-3 table table-hover">
        <!--<caption></caption>-->
        <thead>
            <tr>
                <th scope="col" class="1">ID</td>
                <th scope="col" class="2">Nama</th>
                <th scope="col" class="2">Email</th>
                <th scope="col" class="2">Password</th>
                <th scope="col" class="2">Authority</th>
                <th scope="col" class="3">Setting</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr class="isiauto" id="">
                    <td class="1">{{$user->id_user}}</td>
                    <td class="2">{{$user->nama}}</td>
                    <td class="2">{{$user->email}}</td>
                    <td class="2">{{$user->password}}</td>
                    <td class="2">{{$user->authority}}</td>
                    <td class="3">
                        <button type='button' class='btn btn-primary'>Lihat</button>
                        <button type='button' class='btn btn-primary'>Edit</button>
                        <button id='{{$user->id_user}}' type='submit' class='btn-delete btn btn-primary'>Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 id="judul-modal" class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="isi-modal"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!--<div class="d-flex justify-content-center">
    </div>-->
</div>
@endsection