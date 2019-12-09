<!DOCTYPE html>
<html>
<head>
    @extends('layouts.head')
    @section('title','Register')
</head>
<body>
    <div class="container">
        <div class="card col-5 mx-auto my-5">
            <div class="card-body">
                <h5 class="card-title">Login</h5>
                <p class="card-text"></p>
                <form action="" method="post">  
                    <div class="form-group">
                        <label></label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input type="password" class="form-control" id="pass" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="checkremember">
                        <label class="form-check-label">Remember me</label>
                    </div>
                    <a type="submit" class="btn btn-primary" href="home">Submit</a>
                    <a type="submit" class="btn btn-primary" href="regist">Daftar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>