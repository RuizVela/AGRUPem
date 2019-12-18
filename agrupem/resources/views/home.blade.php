@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
            @include('_slider')
            <div id="home_central_container" class="d-flex">
                <div id="home_left_central_container">
                    @include('_banner')
                    @include('novelty._novelties')
                    @include('_personal-assitance')
                </div>
                <div id="home_right_central_container">
                    @include('event._events-calendar')
                </div>
            </div>
            @include('_blog-entries')
            @include('_collaborators')
    </div>
</div>
@endsection
