@extends('layouts.app')
@section('content')
<body>
<div class="container general_container" >
    <div class="window_information">
    <h1>@lang('layout.what-we-do')</h1> 
        <div class="text_container">
        <p>@lang('slider.what-we-do-content')</p>
        </div>
    </div>
    <div class="right_content">
    <div class="right_buttons">
        <button type="button">Colabora</button>
        <button type="button">Hazte Socio</button>
    </div>
        <img src="images/image1.jpg">
        <img src="images/image2.jpg">
        </div>
</div>
</body>
@endsection