@extends('layouts.app')

@section('content')

<section  class="container-fluid row section">
    
        <div class="box-shadow p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-6" > 
            <div class="text_container text-center shadow-lg">
                <h1 class="">@lang('slider.who-we-are-title')</h1>
            </div>
            <div class="text_container">
                <p>@lang('slider.who-we-are-content')</p>
            </div>
        </div>
        <div class="container right_content col-sm-12 col-md-12 col-lg-6">
            @include('_rightContent') 
        </div>
    
</section>


@endsection

