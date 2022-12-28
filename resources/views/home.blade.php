@extends('layouts.main')

@section('container')
    

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="img"><img class="d-block img-fluid" src="img/{{ $image }}" alt="First slide"></div>
        </div>
        <div class="carousel-item">
            <div class="img"><img class="d-block img-fluid" src="img/{{ $image1 }}" alt="Second slide"></div>
        </div>
        <div class="carousel-item">
            <div class="img"><img class="d-block img-fluid" src="img/{{ $image2 }}" alt="Third slide"></div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
    

@endsection

