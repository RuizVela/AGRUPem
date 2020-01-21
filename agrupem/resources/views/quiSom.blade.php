@extends('layouts.app')

@section('content')

<section  class="container-fluid row section">
    
        <div class="shadow-lg p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-6">
            <div class="text_container text-center shadow-lg">
            <h1 class="">@lang('slider.who-we-are-title')</h1>
            </div>
            <div class="text_container shadow-lg">
            <p>@lang('slider.who-we-are-content')</p>
            </div>
        </div>
        <div class="container right_content col-sm-12 col-md-12 col-lg-6">
            <div class="d-flex flex-wrap flex-md-nowrap">
                <button class="btn btn-primary btn-lg col-sm-12 col-md-6 col-lg-6 m-1" type="button">Colabora</button>
                <button class="btn btn-primary btn-lg col-sm-12 col-md-6 col-lg-6 m-1" type="button">Hazte Socio</button>
            </div>
            <div class="">
                <img class="col-sm-12 col-md-12 col-lg-12 " src="images/image1.jpg">
                <img class="col-sm-12 col-md-12 col-lg-12 " src="images/image1.jpg">
            </div>
        </div>
    
</section>


@endsection

