@extends('layouts.app')

@section('content') 

<div id="" class="container general_container">  
    <div id="resocurce_content" class="window_information">
        <div class="col-md-8">
                    <h1>Recursos</h1>
            <div class="text_container">
            @foreach ($resources as $resource)
            <section class="links_card">
                    <a id="resource_link" href="{{$resource->url}}">
                        {{$resource->getLocalTitle()}}
                    </a>
                @auth
                <div class="row admin_button">
                <form action="/resource/{{$resource->id}}/edit" method="GET">
                    <input type="submit" id="button_edit" class = "btn btn-primary mt-4" value="Editar">
                </form>

                <form action="/resource/{{$resource->id}}" method="post">
                @csrf
                @method('DELETE')
                <input id="button_delete" type="submit" value="Eliminar" class="btn btn-danger mt-4">
                </form>
                </div>
                @endauth 
            </section>
            @endforeach
            @auth
            <a id="button_create" href="/resource/create" class="btn btn-success mt-4 admin_button">Crear</a>
        @endif    
        </div>
        
        </div>
        <div class="right_content">
      <div class="right_buttons">
          <button type="button">Colabora</button>
          <button type="button">Hazte Socio</button>
      </div>
          <img src="images/image1.jpg">
          <img src="images/image2.jpg">
          </div>
    </div>
</div>

@endsection