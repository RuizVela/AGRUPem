@extends('layouts.app')
@section('content')

<section  class="container-fluid row section">
    
        <div id="formEdit" class="box-shadow p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-6">
            <div class="text_container text-center shadow-lg">
            <h1 class="">{{$queFem->getLocalTitle()}}</h1>
            </div>            
            <div class="text_container shadow-lg">
            <p>{{$queFem->getLocalContent()}}</p>
            </div>
            @auth
            <a href="#" onClick="toggleForm(['formEdit', 'formEdit1'])">Editar</a>
            @endauth
        </div>
        <div id="formEdit1" class="hidden">
        <form action="/text/{{$queFem->id}}" method="POST">
            @csrf
            @method('PATCH')
            <input type="text" name="title_catalan" value="{{$queFem->title_catalan}}">
            <input type="text" name="title_spanish" value="{{$queFem->title_spanish}}">
            <input type="text" name="content_catalan" value="{{$queFem->content_catalan}}">
            <input type="text" name="content_spanish" value="{{$queFem->content_spanish}}">
            <input type="submit" >
        </form>
        <div class="container right_content col-sm-12 col-md-12 col-lg-6">
            @include('_rightContent') 
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