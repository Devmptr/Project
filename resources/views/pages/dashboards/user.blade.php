@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="head col-12">
        <div class="row">
            <h1>Users Setting</h1>
            <div class="form-inline ml-auto mr-0">
                <input id="searchn" name="Nama" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" value="">
            </div>
            </nav>
        </div>
    </div>
    <table id="tabel-user" class="my-3 table table-hover">
        <!--<caption></caption>-->
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Authority</th>
                <th scope="col">Setting</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr class="isiauto">
                    <td>{{$user->id_user}}</th>
                    <td>{{$user->nama}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->authority}}</td>
                    <td>
                        <a href="#">Lihat</a>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!--<div class="d-flex justify-content-center">
    </div>-->
    
</div>
@endsection