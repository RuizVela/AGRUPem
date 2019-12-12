<section class="card">
                <h3 id="resource_link" href="{{$novelty->url}}">{{$novelty->getLocalTitle()}}</h3>
                <p id="resource_link" href="{{$novelty->url}}">{!! Str::words($novelty->getLocalContent(), 20,"...")!!}</p>
                <h3 id="title_catalan">{{$novelty->title_catalan}}</h3>
                <p id="content_catalan">{!! Str::words($novelty->content_catalan, 20,"...")!!}</p>
                @if($novelty->image)
                <img src="{{url($novelty->image->url)}}" style="max-width:100%">
                <!-- TODO poner estilos en app.css -->
                @endif
              
                @auth
                <form action="/novelty/{{$novelty->id}}/edit" method="GET">
                    <input type="submit" id="button_edit" class = "btn btn-outline-primary mt-4" value="Editar">
                </form>

                <form action="/novelty/{{$novelty->id}}" method="post">
                @csrf
                @method('DELETE')
                <input id="button_delete" type="submit" value="Eliminar" class="btn btn-outline-danger mt-4">
                </form>
                @endauth  
            </section>