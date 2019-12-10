@extends('layouts.home')
@section('title','Home')

@section('content')

<div class="row">
  <div class="col-lg-4">
        <h5 class="text-center mb-5 mt-4">Perbaharui nama anda</h5>
        <div class="col-9 mx-auto my-3 border border-dark rounded-lg p-3">
            <form action="ceklogin" method="POST">  
            <div class="form-group">
                    <label for="">Nama</label>
                    <input value= '{{$users->nama}}' type="nama" class="form-control" id="nama" name="nama" aria-describedby="namaHelp" placeholder="Enter nama">
                </div>
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input value= '{{$users->email}}' type="email" class="form-control" id="email" name="Email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="">Password</label> 
                    <input value= '{{$users->password}}' type="password" class="form-control" id="pass" name="Password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="showpassword()"> Show Password 
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="text-center btn btn-primary">Submit</button>
                </div>
                {{csrf_field()}}
            </form>
        </div>
  </div>

<div class="col-lg-6 mx-auto mt-5 ">
<table class="table  border border-dark rounded-md p-3">
<h5 class="text-center mb-5 mt-4">Data anda</h5>
  <thead>
    <tr>
          <th scope="row">1</th>
          <th scope="col">ID</th>
          <td>{{$users->id_user}}</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">2</th>
      <th scope="col">Nama</th>
      <td>{{$users->nama}}</td>
      </td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <th scope="col">Email</th>
      <td>{{$users->email}}</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <th scope="col">Password</th>
      <td>{{$users->password}}</td>
    </tr>
  </tbody>
</table>
</div>
</div>


@endsection