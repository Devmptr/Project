@extends('layouts.home')
@section('title','Home')

@section('content')
<div class="watch">
    <div class="col-xs-6 col-lg-10 mx-auto mt-3">
        <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
        </div>
    </div>
    
    <div class="col-sm-12 col-lg-10 mt-3 mx-auto">
        <h2 id="judul">War</h2>
        <p id="deskripsi" class="text-justify">
            WAR is set to be a visual spectacle for quintessential action cinema lovers as they would witness Hrithik and Tiger pull off jaw-dropping 
            sequences as they try to beat each other. Director Siddharth Anand says, “When you bring two of the biggest and the best action superstars 
            of India in one film and pit them against each other, you need a title that justifies the promise of a massive showdown. Hrithik and Tiger 
            will be seen going at each other ferociously and mercilessly and audiences will want to see who outwits whom in this incredible fight. WAR 
            is the only title that could have delivered on this big promise and justifies the level of an action spectacle that the film is trying to 
            present to audiences globally.”
        </p>
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <img src="img/cover2.jpg" class="w-100 h-100 card-img" height="200px" width="200px">
            </div>
            <div class="col-lg-8 col-sm-12">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>Genre : </th>
                            <td>
                                <a href="#">Action</a>
                            </td>

                            <th>Duration :</th>
                            <td>151 Menit</td>
                        </tr>
                        <tr>
                            <th>Actors :</th>
                            <td>Efraim</td>

                            <th>Quality :</th>
                            <td>HD</td>
                        </tr>
                        <tr>
                            <th>Directors :</th>
                            <td>William</td>

                            <th>Release Date :</th>
                            <td>02 Oktober 2019</td>
                        </tr>
                        <tr>
                            <th>Productions :</th>
                            <td>ABF</td>

                            <th>Countries :</th>
                            <td>Indonesia</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="recomendation">
    <div class="col-md-12 mt-5">
        <hr>
        <h1>Rekomendasi Film</h1>
        <div class="card-deck mt-3">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="img/cover1.jpg" class="h-100 card-img" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. 
                                This content is a little bit longer.</p>
                            <a href="#">Tonton</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="img/cover1.jpg" class="h-100 card-img" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. 
                                This content is a little bit longer.</p>
                            <a href="#">Tonton</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="img/cover1.jpg" class="h-100 card-img" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. 
                                This content is a little bit longer.</p>
                            <a href="#">Tonton</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection