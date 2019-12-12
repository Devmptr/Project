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
                    <td class="col-1">{{$user->id_user}}</td>
                    <td class="col-2">{{$user->nama}}</td>
                    <td class="col-2">{{$user->email}}</td>
                    <td class="col-2">{{$user->password}}</td>
                    <td class="col-2">{{$user->authority}}</td>
                    <td class="col-3">
                        <button id='{{$user->id_user}}' type='button' class='btn-show btn btn-primary' data-toggle='modal' data-target='#lihatModal'>Lihat</button>
                        <button id='{{$user->id_user}}' type='button' class='btn-showedit btn btn-primary' data-toggle='modal' data-target='#editModal'>Edit</button>
                        <button id='{{$user->id_user}}' type='submit' class='btn-delete btn btn-primary'>Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="modal fade" id="lihatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Nama : </p><p class="body-nama"> </p>
                <p>Email : </p><p class="body-email"> </p>
                <p>Password : </p><p class="body-password"> </p>
                <p>Otoritas : </p><p class="body-authority"> </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="editUser">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input value= '' type="nama" class="form-control" id="nama" name="edNama" aria-describedby="namaHelp" placeholder="Enter nama">
                </div>
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input value= '' type="email" class="form-control" id="email" name="edEmail" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="">Password</label> 
                    <input value= '' type="password" class="form-control" id="pass" name="edPassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="showpassword()"> Show Password 
                </div>
                <div class="form-group">
                    <label for="">Otoritas</label> 
                    <input value= '' type="text" class="form-control" id="auth" name="edAuth" placeholder="Password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="text-center btn-edit btn btn-primary">Submit</button>
            </div>
            </div>
        </div>
    </div>
    <!--<div class="d-flex justify-content-center">
    </div>-->
</div>
@endsection