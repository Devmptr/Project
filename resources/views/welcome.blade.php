@extends('layouts')
@section('title','Home')

@section('content')

<div class="col-8 mx-auto mt-3">
    <div id="carouselTop" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselTop1" data-slide-to="0" class="active"></li>
            <li data-target="#carouselTop2" data-slide-to="1"></li>
            <li data-target="#carouselTop3" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/cover1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/cover2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/cover3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselTop" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselTop" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="col-12 mx-auto mt-3">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Action</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Drama</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Comedy</a>
        </li>
    </ul>
    <div class="col-12 row mx-auto">
        <?php
            for ($x = 1; $x <= 8; $x++) {
                echo '
                <div class="col-lg-3 col-sm-6 col-xs-12 mt-3">
                    <div class="card">
                        <img class="card-img-top" src="img/cover1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Joker (2019)</h5>
                            <p class="card-text">During the 1980s, a failed stand-up comedian is driven insane...</p>
                            <a href="#" class="btn btn-primary text-center">Watch</a>
                        </div>
                    </div>
                </div>';
            }
        ?>
        <div class="my-3 mx-auto">
            <button type="button" class="btn btn-outline-primary">Load More</button>    
        </div>
    </div>
</div>
    
@endsection