@extends('layouts.app')

@section('content') 

<div id="" class="container general_container ">  
    <div id="resocurce_content" class="">
        <div class="col-md-8 shadow-lg p-3 mb-5 rounded">
                        <h1>Recursos</h1>
            
            
                @auth
                <a id="button_create" href="/resource/create" class="btn btn-success mt-4 admin_button">Crear</a>
            
                @endauth
            <div class="">
                
                @foreach ($resources as $resource)
                        <div class=" shadow-lg p-3 mb-5 rounded">
                            <a id="resource_link" class="text-dark" href="{{$resource->url}}">
                               <h3> {{$resource->getLocalTitle()}} </h3>
                            </a>
                        </div>
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
                @endforeach
                
            </div>
        </div>
        <div class="container right_content col-sm-12 col-md-12 col-lg-6">
            <div class="d-flex flex-wrap flex-md-nowrap">
                <button class="btn btn-primary btn-lg col-sm-12 col-md-6 col-lg-6 m-1" type="button">Colabora</button>
                <button class="btn btn-primary btn-lg col-sm-12 col-md-6 col-lg-6 m-1" type="button">Hazte Socio</button>
            </div>
            <div class="">
                <img class="col-sm-12 col-md-12 col-lg-12 " src="images/image1.jpg">
                <img class="col-sm-12 col-md-12 col-lg-12 " src="images/image1.jpg">
            </div>
        </div>
    </div>
</div>

@endsection