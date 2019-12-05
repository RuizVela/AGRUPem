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
            <section class="card">
                <h3 id="resource_link" href="{{$novelty->url}}">{{$novelty->title_catalan}}</h3>
                <p id="resource_link" href="{{$novelty->url}}">{!! Str::words($novelty->content_catalan, 20,"...")!!}</p>
                
                <form action="/novelty/{{$novelty->id}}" method="GET">
                    <input type="submit" id="button_show" class = "btn btn-outline-primary mt-4" value="Ver Mas">
                </form>
                @if (Auth::check())
                <form action="/novelty/{{$novelty->id}}/edit" method="GET">
                    <input type="submit" id="button_edit" class = "btn btn-outline-primary mt-4" value="Editar">
                </form>

                <form action="/novelty/{{$novelty->id}}" method="post">
                @csrf
                @method('DELETE')
                <input id="button_delete" type="submit" value="Eliminar" class="btn btn-outline-danger mt-4">
                </form>
                @endif 
            </section>
            @endforeach
            @if (Auth::check())
            <a id="button_create" href="/novelty/create" class="btn btn-outline-success mt-4">Crear</a>
            @endif 
        </main>
        </div>
    </div>
</div>

@endsection