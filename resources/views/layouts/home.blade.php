<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layouts.head')
</head>
<body>
    <head>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Stream
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Recommend</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Genre
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Drama</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Lainnya</a>
                        </div>
                    </li>
                </ul>
                @if (Session::get('hakakses') == 1)
                    <a type="button" class="mx-1 btn btn-primary btn-sm" href="profileadmin">Dashboard</a>
                @else
                    <a type="button" class="mx-1 btn btn-primary btn-sm" href="profileuser">
                        Hai, {{Session::get('nama')}}</a>
                @endif
                <a type="button" class="mx-1 btn btn-primary btn-sm" href="logout">Logout</a>
            </div>
        </nav>
    </head>

    @yield('content')

    <footer class="container-fluid">
        <div class="col-12">
            <hr>
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2019 Teknologi Informasi, Universitas Udayana. &middot; <a href="#">
                Privacy</a> &middot; <a href="#">Terms</a></p>  
        </div>
    </footer>
</body>
</html>