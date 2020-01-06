<section id="blog_home_container">
    <div class="title">
        <h3>Ultimas entradas del blog</h3>
    </div>
    <div class="d-flex justify-content-around">
        
    @foreach ($posts as $post)
        <div class="card">
            <a class="btn btn-primary" href="/post/{{$post->id}}">
                <h2 id="title">{{$post->getLocalTitle()}}</h2>
                <p id="content">{!! Str::words($post->getLocalContent(), 5,"...")!!}</p>
            </a>
        </div>
    @endforeach 
    </div>
</section>