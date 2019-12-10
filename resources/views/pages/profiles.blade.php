@extends('layouts.home')
@section('title','Home')

@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-8">
  <table class="table">
    <thead>
      <tr>
      <div class='col-lg-8'>
            <th scope="col">ID</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <th scope="col">Nama</th>
      </tr>
      <tr>
        <th scope="row">2</th>
        <th scope="col">Email</th>
      </tr>
      <tr>
        <th scope="row">3</th>
        <th scope="col">Password</th>
      </tr>
      <tr>
        <th scope="row">3</th>
        <th scope="col">Authority</th>
      </tr>
      <tr>
        <th scope="row">3</th>
        <th scope="col">Setting</th>
      </tr>
    </tbody>
  </table>

    </div>
  </div>
</div>

@endsection