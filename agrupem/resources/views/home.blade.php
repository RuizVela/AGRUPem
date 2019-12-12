@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Novedades</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        @foreach($novelties as $index=>$novelty)
                        
                    
                            <div class="carousel-item @if($index==0)active @endif">
                             {{$novelty->getLocalTitle()}}   
                            @if($novelty->image)
                            <img src="{{url($novelty->image->url)}}" class="d-block w-100" alt="placeholder">
                            @endif
                            {{$novelty->getLocalContent()}}  
                            </div>

                        @endforeach
                    </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
