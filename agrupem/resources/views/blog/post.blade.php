@extends('layouts.app')

@section('content') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <main>
            <section id="blog_container">
            
            <header class="card">
                <div class="card-header"><h2 id="title">{{$post->getLocalTitle()}}</h2></div>
            </header>
                {!! html_entity_decode($post->getLocalContent()) !!}

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
            <section>
                <a id="button_return" href="/post" class="btn btn-outline-success mt-4">Volver al index</a>
            </section>
            </main>
        </div>
    </div>
</div>

@endsection