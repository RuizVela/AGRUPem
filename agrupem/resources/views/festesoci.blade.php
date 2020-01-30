@extends('layouts.app')
@section('content')
<section class="container-fluid row section justify-content-center">
    <div class="box-shadow p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-8">
        <header id="socio_title" class="text-center shadow-lg">
            <h1 id="socio_h1">@lang('socio.socio')</h1>
        </header>
        <article class="socio_container">
            <h2 id="ventajas_h1">
                @lang('socio.socio_ficha')
                <a href="/pdf/fitxa soci.pdf">@lang('socio.socio_link')</a>
            </h2>
        </article>

        <article id="editVentajas">
            <header class="shadow-lg">
            <h1>{!!html_entity_decode($festeSoci->getLocalTitle())!!}</h1>
            </header>
            <div class="colabora_text">
                {!!html_entity_decode($festeSoci->getLocalContent())!!}
            </div>
            @auth
            <a class="btn btn-primary" href="#" onClick="toggleForm(['editVentajas', 'editVentajas1'])">Editar</a>
            @endauth
        </article>
        @auth
        <section id="editVentajas1" class="hidden">
            <form action="/text/{{$festeSoci->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="d-flex flex-wrap">
                    <div class="novelties_container">
                        <div>
                            <label for="title_cat">Títol</label><br>
                            <input id="title_cat" type="text" name="title_catalan" value="{{$festeSoci->title_catalan}}">
                        </div>
                        <div>
                            <label for="content_edit_catalan">Contingut</label><br>
                            <textarea id="content_edit_catalan" name="content_catalan" cols="30" rows="10">{{$festeSoci->content_catalan}}</textarea>
                        </div>
                    </div>
                    <div class="novelties_container">
                        <div>
                            <label for="title_spa">Título</label><br>
                            <input id="title_spa" type="text" name="title_spanish" value="{{$festeSoci->title_spanish}}">
                        </div>
                        <div>
                            <label for="content_edit_spanish">Contenido</label><br>
                            <textarea name="content_spanish" id="content_edit_spanish" cols="30" rows="10">{{$festeSoci->content_spanish}}</textarea>
                        </div>
                    </div>
                </div>
                <input class="btn btn-success" type="submit">
            </form>
            <a class="btn btn-primary" href="#" onClick="toggleForm(['editVentajas', 'editVentajas1'])">Cancelar</a>
        </section>
        @endauth
        <article id="editSocis">
            <header>
                <div class="shadow-lg">
                <h1 id="ec">
                    {!!html_entity_decode($serveisSoci->getLocalTitle())!!}</h1>
                </div>
            </header>
            <div class="colabora_text">
                {!!html_entity_decode($serveisSoci->getLocalContent())!!}
            </div>
            @auth
            <a class="btn btn-primary" href="#" onClick="toggleForm(['editSocis', 'editSocis1'])">Editar</a>
            @endauth
        </article>
        @auth
        <section id="editSocis1" class="hidden">
            <form action="/text/{{$serveisSoci->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="d-flex flex-wrap">
                    <div class="novelties_container">
                        <div>
                            <label for="title_cat">Títol</label><br>
                            <input id="title_cat" type="text" name="title_catalan" value="{{$serveisSoci->title_catalan}}">
                        </div>
                        <div>
                            <label for="content_edit_catalan">Contingut</label><br>
                            <textarea id="content_edit_catalan" name="content_catalan" cols="30" rows="10">{{$serveisSoci->content_catalan}}</textarea>
                        </div>
                    </div>
                    <div class="novelties_container">
                        <div>
                            <label for="title_spa">Título</label><br>
                            <input id="title_spa" type="text" name="title_spanish" value="{{$serveisSoci->title_spanish}}">
                        </div>
                        <div>
                            <label for="content_edit_spanish">Contenido</label><br>
                            <textarea name="content_spanish" id="content_edit_spanish" cols="30" rows="10">{{$serveisSoci->content_spanish}}</textarea>
                        </div>
                    </div>
                </div>
                <input class="btn btn-success" type="submit">
            </form>
            <a class="btn btn-primary" href="#" onClick="toggleForm(['editSocis', 'editSocis1'])">Cancelar</a>
        </section>
        @endauth
    </div>
</section>
<script>
    function toggleForm(tags) {
    
    tags.forEach(tag => {
        let formEdit = document.getElementById(tag);
        formEdit.classList.toggle('hidden');
    });
    
}
</script>

@endsection