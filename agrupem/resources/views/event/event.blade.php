@extends('layouts.app')

@section('content')

<div class="container">
   <div class="">
         <h1>{{$event->getLocalTitle()}}</h1>
         <div class="text_container">
            <p>{{$event->getLocalContent()}}</p>
            
        
         @auth
<div class="row admin_button">
    <form action="/event/{{$event->id}}/edit" method="GET">
        <input type="submit" id="button_edit" class = "btn btn-primary mt-4" value="Editar">
    </form>

    <form action="/event/{{$event->id}}" method="post">
    @csrf
    @method('DELETE')
    <input id="button_delete" type="submit" value="Eliminar" class="btn btn-danger mt-4">
    </form>
    </div>
@endauth 
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
@endsection