@extends('layouts.app')

@section('content')

<div id="resources_container" class="container">  
    <div id="resocurce_content" class="window_information">
        <div class="col-md-8">
            <header class="card">
                <div class="text_container">
                    <h1>Recursos</h1>
                </div>
            </header>
            <main>
            @foreach ($resources as $resource)
            <section class="card">
                <div class="resource_card">
                    <a id="resource_link" href="{{$resource->url}}">
                        {{$resource->getLocalTitle()}}
                    </a>
                </div>
                @auth
                <form action="/resource/{{$resource->id}}/edit" method="GET">
                    <input type="submit" id="button_edit" class = "btn btn-outline-primary mt-4" value="Editar">
                </form>

                <form action="/resource/{{$resource->id}}" method="post">
                @csrf
                @method('DELETE')
                <input id="button_delete" type="submit" value="Eliminar" class="btn btn-outline-danger mt-4">
                </form>
                @endauth 
            </section>
            @endforeach
            @auth
            <a id="button_create" href="/resource/create" class="btn btn-outline-success mt-4">Crear</a>
        @endif    
        </main>
        </div>
    </div>
</div>

@endsection