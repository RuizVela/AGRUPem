@extends('layouts.app')

@section('content')

<section  class="container-fluid row section">
        <div id="formEdit" class="shadow-lg p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-6">
            <div class="text_container text-center shadow-lg">
            <h1 class="">{{$quiSom->getLocalTitle()}}</h1>
            </div>
            <div class="text_container shadow-lg">
            <p>{{$quiSom->getLocalContent()}}</p>
            </div>
            @auth
             <a class="btn btn-primary" href="#" onClick="toggleForm(['formEdit', 'formEdit1'])">Editar</a>
             @endauth
        </div>
        @auth
        <section id="formEdit1" class="hidden">
            <form action="/text/{{$quiSom->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="d-flex flex-wrap">
                    <div class="novelties_container">
                        <div>
                            <label for="title_cat">Títol</label><br>
                            <input id="title_cat" type="text" name="title_catalan" value="{{$quiSom->title_catalan}}">
                        </div>
                        <div>
                            <label for="content_edit_catalan">Contingut</label><br>
                            <textarea id="content_edit_catalan" name="content_catalan" cols="30" rows="10">{{$quiSom->content_catalan}}</textarea>
                        </div>
                    </div>
                    <div class="novelties_container">
                        <div>
                            <label for="title_spa">Título</label><br>
                            <input id="title_spa" type="text" name="title_spanish" value="{{$quiSom->title_spanish}}">
                        </div>
                        <div>
                            <label for="content_edit_spanish">Contenido</label><br>
                            <textarea name="content_spanish" id="content_edit_spanish" cols="30" rows="10">{{$quiSom->content_spanish}}</textarea>
                        </div>
                    </div>
                </div>
                <input class="btn btn-success" type="submit">
            </form>
            <a class="btn btn-primary" href="#" onClick="toggleForm(['formEdit', 'formEdit1'])">Cancelar</a>
        </section>
        @endauth
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

