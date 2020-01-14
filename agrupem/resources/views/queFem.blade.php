@extends('layouts.app')
@section('content')

<div id="quefem_full_container" class="container" >
    <div id="que_fem_general_container" class="col-md-12 d-flex justify-content-around">
        <div id="que_fem_container">
            <div>
                <h1>@lang('layout.what-we-do')</h1>
            </div>
            <div class="text_container">
                <p>@lang('slider.what-we-do-content')</p>
            </div>
        </div>
        <div id="que_fem_images_buttons_container" class="right_content">
        <div class="right_buttons">
            <button type="button">Colabora</button>
            <button type="button">Hazte Socio</button>
        </div>
            <img src="images/image1.jpg">
            <img src="images/image2.jpg">
        </div>
    </div>
</div>

@endsection