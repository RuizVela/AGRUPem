@extends('layouts.app')

@section('content')

<div class="container">
   <div class="text_container">
   <h1>@lang('slider.who-we-are-title')</h1>
   <p>@lang('slider.who-we-are-content')</p>
   </div>
   <div class="image-qui-som">
   <img src="images/image1.jpg">
   </div>
   <div class="image-qui-som">
   <img src="images/image2.jpg">
   </div>
</div>
@endsection