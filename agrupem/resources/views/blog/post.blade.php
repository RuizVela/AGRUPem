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
                <h2 id="title">{{$post->title_catalan}}</h2>
                <p id="content">{{$post->content_catalan}}</p>
                <p id="content">{{$post->content_spanish}}</p>

                <!-- TO DO MOSTRAR POST IMAGEN -->
                @if($post->images)
                    <img src="public/{{$post->images[0]}}" alt="image">
                @endif
                

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
                <a id="button_return" href="/post" class="btn btn-outline-success mt-4">Volver index</a>
            </section>
            </main>
        </div>
    </div>
</div>

@endsection