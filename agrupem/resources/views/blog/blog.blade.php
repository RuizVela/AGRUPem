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
                <h2 id="title">{{$post->title_spanish}}</h2>
                <p id="content">{{$post->content_catalan}}</p>
                <p id="content">{{$post->content_spanish}}</p>

                <!-- TO DO MOSTRAR POST IMAGEN -->
                <img src="{{asset($post->post_image)}}" alt="image">

                <form action="/post/{{$post->id}}/edit" method="GET">
                    <input type="submit" id="button_edit" class = "btn btn-outline-primary mt-4" value="Editar">
                </form>

                <form action="/post/{{$post->id}}" method="post">
                @csrf
                @method('DELETE') 
                <input id="button_delete" type="submit" value="Eliminar post" class="btn btn-outline-danger mt-4">
                </form>

            </section>
            @endforeach
            <a id="button_create" href="/post/create" class="btn btn-outline-success mt-4">Crear post</a>
            </main>
        </div>
    </div>
</div>

@endsection
