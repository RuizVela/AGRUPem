@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">Novedades</div>
            </header>
            <main>
                <section class="d-flex flex-row">
                    <form action="/novelty/{{$novelty->id}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <section class="flex-column p-2">
                        <div>
                            <label for="novelty_title_catalan">Títol</label>
                            <input id="novelty_title_catalan" type="text" name="title_catalan" value="{{$novelty->title_catalan}}"></input>
                        </div>
                        <div>
                            <label for="novelty_content_catalan">Contingut</label>
                            <input type="textarea" id="novelty_content_catalan" name="content_catalan" cols="60" rows="1" value="{{$novelty->content_catalan}}"></input>
                        </div>
                        <div>
                            <label for="novelty_title_catalan">Título</label>
                            <input id="novelty_title_catalan" type="text" name="title_spanish" value="{{$novelty->title_spanish}}"></input>
                        </div>
                        <div>
                            <label for="novelty_content_catalan">Contenido</label>
                            <input type="textarea" id="novelty_content_catalan" name="content_spanish" cols="60" rows="1" value="{{$novelty->content_spanish}}"></input>
                        </div>
                        <div>
                         <input type="file" class="btn btn-outline-primary mt-4" name="novelty_image">
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