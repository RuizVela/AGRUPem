@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">AGRUPem Blog</div>
            </header>
            <main>
            @foreach ($posts as $post)
            <section class="card">
                <h2 id="title">{{$post->getLocalTitle()}}</h2>
                {!! html_entity_decode($post->getEncodedImage($post)) !!}
                <p id="content">{!! Str::words($post->getLocalContent(), 10,"...")!!}</p>
                <!-- TODO posicionamiento de la imagen -->

                <form action="/post/{{$post->id}}" method="GET">
                    <input type="submit" id="button_show" class = "btn btn-outline-primary mt-4" value="Ver Mas">
                </form>

                @auth
                <form action="/post/{{$post->id}}/edit" method="GET">
                    <input type="submit" id="button_edit" class = "btn btn-outline-primary mt-4" value="Editar">
                </form>

                <form action="/post/{{$post->id}}" method="post">
                @csrf
                @method('DELETE') 
                <input id="button_delete" type="submit" value="Eliminar post" class="btn btn-outline-danger mt-4">
                </form>
                @endauth
            </section>
            @endforeach 
            @auth
            <a id="button_create" href="/post/create" class="btn btn-outline-success mt-4">Crear post</a>
            @endif    
        </main>
        </div>
    </div>
</div>

@endsection
