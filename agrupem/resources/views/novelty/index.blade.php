@extends('layouts.app') 

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">Novedades</div>
            </header>
            <main>
            @foreach ($novelties as $novelty)
            
                @include('novelty._card',$novelty)
           
            @endforeach
            @auth
            <a id="button_create" href="/novelty/create" class="btn btn-outline-success mt-4">Crear</a>
            @endif 
        </main>
        </div>
    </div>
</div>

@endsection