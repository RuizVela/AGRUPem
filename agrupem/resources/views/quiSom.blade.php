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
             <a href="#" onClick="toggleForm(['formEdit', 'formEdit1'])">Editar</a>
             @endauth
        </div>
        <div id="formEdit1" class="hidden">
        <form action="/text/{{$quiSom->id}}" method="POST">
            @csrf
            @method('PATCH')
            <input type="text" name="title_catalan" value="{{$quiSom->title_catalan}}">
            <input type="text" name="title_spanish" value="{{$quiSom->title_spanish}}">
            <input type="text" name="content_catalan" value="{{$quiSom->content_catalan}}">
            <input type="text" name="content_spanish" value="{{$quiSom->content_spanish}}">
            <input type="submit" >
        </form>
        </div>
        <div class="container right_content col-sm-12 col-md-12 col-lg-6">
            <div class="d-flex flex-wrap flex-md-nowrap">
                <button class="btn btn-primary btn-lg col-sm-12 col-md-6 col-lg-6 m-1" type="button">Colabora</button>
                <a class="btn btn-primary btn-lg col-sm-12 col-md-6 col-lg-6 m-1" type="button" href= "{{ url('/festeSoci') }}"> Hazte Socio</a>
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

