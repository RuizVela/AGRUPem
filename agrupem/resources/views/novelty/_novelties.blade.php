<section id="novelties_container">
    <div id="formEdit">
    <div id="home_novelties_title" class="title">
    <h3>{{$novelty->getLocalTitle()}}</h3>
    </div>
    <div class="home_novelties_content">
        <p class="content">
            {{$novelty->getLocalContent()}}
        </p>
    </div>
    </div>
    @auth
    <a href="#" onClick="toggleForm(['formEdit', 'formEdit1'])">Editar</a>
    @endauth
    <div id="formEdit1" class="hidden">
    <form action="/text/{{$novelty->id}}" method="POST">
        @csrf
        @method('PATCH')
        catitle<input type="text" name="title_catalan" value="{{$novelty->title_catalan}}">
        tituñol<input type="text" name="title_spanish" value="{{$novelty->title_spanish}}">
        catanido<input type="text" name="content_catalan" value="{{$novelty->content_catalan}}">
        contespañol<input type="text" name="content_spanish" value="{{$novelty->content_spanish}}">
        <input type="submit" >
    </form>
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