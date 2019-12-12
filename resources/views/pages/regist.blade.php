<!DOCTYPE html>
<html>
<head>
    @extends('layouts.head')
    @section('title','Register')
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <div class="container mt-5">
        <h5 class="text-center mb-5">Register</h5>
        <div class="col-4 mx-auto my-3 border border-dark rounded-lg p-3">
            <form action="registuser" method="POST">  
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">Nama Depan</label>
                        <input type="text" class="form-control" name="namad" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Nama Belakang</label>
                        <input type="text" class="form-control" name="namab" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="pass" placeholder="">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="text-center btn btn-primary">Submit</button>
                </div>
                {{csrf_field()}}
            </form>
        </div>
        <div class="col-4 mx-auto mb-3 border border-dark rounded-lg p-3">
            <div class="text-center">
                Sudah Punya Akun? <a href="/auth">Masuk</a>
            </div>
        </div>
        <div class="col-4 mx-auto my-5">
            <hr>
            <div class="d-flex justify-content-around">
                <a href="">About</a>
                <a href="">Privacy</a>
                <a href="">Terms</a>
            </div>
        </div>
    </div>
</body>
</html>