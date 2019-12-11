<!DOCTYPE html>
<html>
<head>
    @extends('layouts.head')
    @section('title','Login')
</head>
<body>
    <div class="container mt-5">
        <h5 class="text-center mb-5">Login</h5>
        <div class="col-3 mx-auto my-3 border border-dark rounded-lg p-3">
            <form action="ceklogin" method="POST">  
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="email" class="form-control" id="email" name="Email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="">Password</label> 
                    <!--<a href="#" class="float-right">Forgot Password?</a>-->
                    <input type="password" class="form-control" id="pass" name="Password" placeholder="Password">
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
        <div class="col-3 mx-auto mb-3 border border-dark rounded-lg p-3">
            <div class="text-center">
                Baru di Streaming? <a href="/regist">Daftar</a>
            </div>
        </div>
        <div class="col-3 mx-auto mt-5">
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