@extends('template.layout')

@section('heading')
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />



@endsection
@section('contentheading')

    <div class="col-sm-6">
        <h1 class="m-0 text-dark"></h1>
    </div><!-- /.col -->
    <div class="col-sm-6">

    </div><!-- /.col -->

@endsection

@section('contentbody')



    <div class="overlay"></div>



        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
            <source src="{{asset('images/My Movieeeee.mp4')}}" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-dark">
                    <h1 class="display-3">Video Header</h1>
                    <p class="lead mb-0">Tracktrace/p>
                </div>
            </div>
        </div>


@endsection
