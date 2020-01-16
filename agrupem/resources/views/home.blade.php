@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
            <div id="home_central_container" class="d-flex flex-wrap">
                <div id="home_left_central_container" class="col-sm-12 col-md-6 mt-5">
                    @include('_banner')
                    <img id="inline_home" src="{{ asset('/images/inline.jpg')}}" alt="">
                    @include('novelty._novelties')
                    @include('_personal-assitance')
                </div>
                <div id="home_right_central_container" class="col-sm-12 col-md-6 mb-5">
                    @auth
                    <form method="GET" action="/event/create">
                        <input type="submit" class="btn btn-success" value="Nuevo Evento">
                    </form>
                    @endauth
                    @include('event._events-calendar')
                </div>
            </div>
            @include('_blog-entries')
            @include('_collaborators')
    </div>
</div>
@endsection
