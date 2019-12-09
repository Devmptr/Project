<!DOCTYPE html>
<html>
<head>
    @extends('layouts.head')
    @section('title','Register')
</head>
<body>
    <div class="container">
        <div class="card col-6 mx-auto my-5">
            <div class="card-body">
                <h5 class="card-title">Register</h5>
                <p class="card-text">Create Your Own Account.</p>
                <form action="" method="post">  
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama Depan</label>
                            <input type="text" class="form-control" id="inputNamadepan" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nama Belakang</label>
                            <input type="text" class="form-control" id="inputNamabelakang" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tgllahir">Tanggal Lahir</label>
                        <input type="textarea" class="form-control" id="tgllahir" placeholder="dd/mm/yy">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Syarat dan Ketentuan
                            </label>
                        </div>
                    </div>
                <a href="#" class="btn btn-primary">Signup</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>