@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">Novedades</div>
            </header>
            <main>
        
            <section class="card">
                <a id="resource_link" href="{{$novelty->id}}">{{$novelty->title_catalan}}</a>
                <a id="resource_link" href="{{$novelty->id}}">{{$novelty->content_catalan}}</a>
            </section>
        
            <a id="button_create" href="/novelty" class="btn btn-outline-success mt-4">Volver Novedades</a>
            </main>
        </div>
    </div>
</div>

@endsection