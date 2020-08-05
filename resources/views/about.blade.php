@extends('template.layout')


@section('contentheading')

    <div class="col-sm-6">
        <h1 class="m-0 text-dark"></h1>
    </div><!-- /.col -->
    <div class="col-sm-6">

    </div><!-- /.col -->

@endsection

@section('contentbody')

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('slides/1.jpg')}}" alt="car 1" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="{{asset('slides/2.jpg')}}" alt="car 2" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="{{asset('slides/3.png')}}" alt="Car 3" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="{{asset('slides/4.jpg')}}" alt="car 4" width="1100" height="500">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid">
        <h3>Brand / Logo</h3>
        <p>The .navbar-brand class is used to highlight the brand/logo/project name of your page.</p>
    </div>
    </div>


@endsection
