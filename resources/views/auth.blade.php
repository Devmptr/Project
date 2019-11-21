<!DOCTYPE html>
<html>
<head>
    @extends('head')
    @section('title','Login')
</head>
    <body>
        <div>
            <div class="text-center">
                <img src="img/logo.png" height="200px" width="200px">
            </div>
            <div class="judul text-center">
                <h2>Please Sign In</h2>
            </div>
        </div>

        <form>
            <div class="col-4 mx-auto">
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
            </div>
        </form>
    </body>
</html>