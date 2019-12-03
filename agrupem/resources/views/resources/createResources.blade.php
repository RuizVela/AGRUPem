@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="card">
                <div class="card-header">Recursos</div>
            </header>
            <main>
                <section class="d-flex flex-row">
                    <form action="/resources" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <section class="flex-column p-2">
                        <div>
                            <label for="resource_title">Títol</label>
                            <input id="resource_title" type="text" name="title"></input>
                        </div>
                        <div>
                            <label for="resource_url">Url</label>
                            <textarea id="resource_url" name="url" cols="60" rows="1"></textarea>
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