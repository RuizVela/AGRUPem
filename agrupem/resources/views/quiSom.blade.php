@extends('layouts.app')

@section('content')

<section  class="container-fluid row section">
    
        <article id="formEdit" class="box-shadow p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-6">
            <header class="text_container text-center shadow-lg">
                <h1 class="">{{$quiSom->getLocalTitle()}}</h1>
            </header>
            <div class="text_container shadow-lg">
                <p>{{$quiSom->getLocalContent()}}</p>
            </div>
            @auth
             <a href="#" onClick="toggleForm(['formEdit', 'formEdit1'])">Editar</a>
             @endauth
        </article>
        <section id="formEdit1" class="hidden">
            <form action="/text/{{$quiSom->id}}" method="POST">
                @csrf
                @method('PATCH')
                <input type="text" name="title_catalan" value="{{$quiSom->title_catalan}}">
                <input type="text" name="title_spanish" value="{{$quiSom->title_spanish}}">
                <input type="text" name="content_catalan" value="{{$quiSom->content_catalan}}">
                <input type="text" name="content_spanish" value="{{$quiSom->content_spanish}}">
                <input type="submit" >
            </form>
        </section>
        <section class="container right_content col-sm-12 col-md-12 col-lg-6">
            @include('_rightContent') 
        </section>
    
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

