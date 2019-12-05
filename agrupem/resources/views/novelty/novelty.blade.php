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
            <a id="button_return" href="/novelty" class="btn btn-outline-success mt-4">Volver Novedades</a>
            </main>
        </div>
    </div>
</div>

@endsection