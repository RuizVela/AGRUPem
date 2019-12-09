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
                    <form action="/post" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <section class="flex-column p-2">
                        <div>
                            <label for="title_catalan">Títol</label>
                            <input id="title_catalan" type="text" name="title_catalan"></input>
                        </div>
                        <div>
                            <label for="content_catalan">Contingut</label>
                            <textarea id="content_catalan" name="content_catalan" cols="30" rows="10"></textarea>
                        </div>
                    </section>
                    <section class="flex-column p-2">
                        <div>
                            <label for="title_spanish">Título</label>
                            <input id="title_spanish" type="text" name="title_spanish"></input>
                        </div>
                        <div>
                            <label for="content_spanish">Contenido</label>
                            <textarea name="content_spanish" id="content_spanish" cols="30" rows="10"></textarea>
                        </div>
                    </section>
                    <input type="file" class="btn btn-outline-primary mt-4" name="post_image">
                    <!-- TODO input alt de la imagen -->
                    <input type="submit" class="btn btn-outline-success mt-4" value="Guardar">
                    </form>
                </section>
            </main>
        </div>
    </div>
</div>

@endsection