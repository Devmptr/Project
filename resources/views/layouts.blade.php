<!DOCTYPE html>
<html lang="en">
<head>
    @extends('head')
</head>
<body>
    <head>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">TubesPrognet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Favorite</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <button type="button" class="mx-1 btn btn-primary btn-sm">Profile</button>
                <button type="button" class="mx-1 btn btn-primary btn-sm">Logout</button>
            </div>
        </nav>
    </head>

    @yield('content')

    <footer class="container-fluid">
        <div class="col-12">
            <hr>
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2019 Teknologi Informasi, Universitas Udayana. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>  
        </div>
    </footer>
</body>
</html>