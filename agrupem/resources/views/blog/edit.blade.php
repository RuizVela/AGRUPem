@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">AGRUPem Blog</div>
            </header>
            <main>
                <section class="d-flex flex-row">
                    <form action="/post/{{$post->id}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <section class="flex-column p-2">
                        <div>
                            <label for="title_catalan">Títol</label>
                            <input id="title_catalan" type="text" name="title_catalan" value="{{$post->title_catalan}}"></input>
                        </div>
                        <div>
                            <label for="content_catalan">Contingut</label>
                            <textarea id="content_edit_catalan" name="content_catalan" cols="70" rows="30">{{$post->content_catalan}}</textarea>
                        </div>
                    </section>
                    <section class="flex-column p-2">
                        <div>
                            <label for="title_spanish">Título</label>
                            <input id="title_spanish" type="text" name="title_spanish" value="{{$post->title_spanish}}"></input>
                        </div>
                        <div>
                            <label for="content_spanish">Contenido</label>
                            <textarea name="content_spanish" id="content_edit_spanish" cols="30" rows="10" value="{{$post->content_spanish}}">{{$post->content_spanish}}</textarea>
                        </div>
                    </section>
                    <input type="submit" class="btn btn-outline-success mt-4" value="Guardar">
                    </form>
                </section>
            </main>
        </div>
    </div>
</div>

@endsection