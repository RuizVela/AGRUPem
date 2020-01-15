@extends('layouts.app')

@section('content')

<section id="sectionQuiSom" class="container-fluid row">
    
        <div class="window_information col-sm-12 col-md-12 col-lg-6">
            <h1 class="display-4">@lang('slider.who-we-are-title')</h1>
            <div class="text_container">
            <p>@lang('slider.who-we-are-content')</p>
            </div>
        </div>
        <div class="right_content col-sm-12 col-md-12 col-lg-6">
            <div class="right_buttons">
                <button type="button">Colabora</button>
                <button type="button">Hazte Socio</button>
            </div>
            <div class="">
                <img class="col-sm-12 col-md-12 col-lg-3" src="images/image1.jpg">
                <img class="col-sm-12 col-md-12 col-lg-3 " src="images/image2.jpg">
            </div>
        </div>
    
</section>

@endsection