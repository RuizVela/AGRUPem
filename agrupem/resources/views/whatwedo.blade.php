@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
            <div class="container justify-content-end">
                <a href="/collaborate" class="slider-button btn btn-primary">@lang('slider.collaborate-button')</a>
            </div>
            <div class="container justify-content-end">
                <a href="/partner" class="slider-button btn btn-primary">@lang('slider.become-a-partner-button')</a>
            </div>
        <div class="col-md-8 d-flex flex-wrap">
            <div class="d-flex nowrap">
                <section class="card">
                    <div class="card-header">
                        <h2>@lang('whatwedo.title')</h2>
                    </div>
                    <div class="card-body">
                    <p>@lang('whatwedo.content')</p>
                    </div>
                </section>
                <section class="card">
                    <img>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection