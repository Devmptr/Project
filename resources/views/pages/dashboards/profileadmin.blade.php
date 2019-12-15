@extends('layouts.dashboard')

@section('content')
<div class="col-lg-10 border border-dark rounded-lg mx-auto my-4">
    <div class="row">
        <div class="col-md-6 mx-auto p-5 border-right">
            <h5 class="text-center my-4">Data anda</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="row">1</th>
                        <th scope="col">ID</th>
                        <td id="datauser">{{$users->id_user}}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">2</th>
                    <th scope="col">Nama</th>
                    <td id="datanama">{{$users->nama}}</td>
                    </td>

                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <th scope="col">Email</th>
                    <td id="dataemail">{{$users->email}}</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <th scope="col">Password</th>
                    <td id="datapass">{{$users->password}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 mx-auto p-5 border-left">
            <h5 class="text-center my-4">Perbaharui Data Diri</h5>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input value= '{{$users->nama}}' type="nama" class="form-control" id="nama" name="upNama" aria-describedby="namaHelp" placeholder="Enter nama">
                </div>
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input value= '{{$users->email}}' type="email" class="form-control" id="email" name="upEmail" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="">Password</label> 
                    <input value= '{{$users->password}}' type="password" class="form-control" id="pass" name="upPassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="showpassword()"> Show Password 
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <button id="btnupdate" type="submit" class="text-center btn btn-primary">Submit</button>
                </div>
        </div>
    </div>
</div>

@endsection