@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <section class="card">
                <div class="card-header">
                    <h2>@lang('whoweare.title')</h2>
                </div>
                <div class="card-body">
                   <p>@lang('whoweare.content')</p>
                </div>
            </section>
            <section class="card">
                <img>
            </section>
        </div>
    </div>
</div>

@endsection