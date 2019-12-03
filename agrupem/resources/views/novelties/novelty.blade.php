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
                <a id="resource_link" href="{{$novelty->url}}">{{$novelty->title_catalan}}</a>
                <a id="resource_link" href="{{$novelty->url}}">{{$novelty->content_catalan}}</a>
                <form action="/novelty/{{$novelty->id}}/edit" method="GET">
                    <input type="submit" id="button_edit" class = "btn btn-outline-primary mt-4" value="Editar">
                </form>

                <form action="//{{$novelty->id}}" method="post">
                @csrf
                @method('DELETE')
                <input id="button_delete" type="submit" value="Eliminar" class="btn btn-outline-danger mt-4">
                </form>

            </section>
            @endforeach
            <a id="button_create" href="/resources/create" class="btn btn-outline-success mt-4">Crear</a>
            </main>
        </div>
    </div>
</div>

@endsection