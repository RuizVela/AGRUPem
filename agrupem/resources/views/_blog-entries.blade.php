<section id="blog_home_container" class="card">
    <div class="title card-header">
        <h3>Ultimas entradas del blog</h3>
    </div>
    <div class="d-flex justify-content-around">
    @php
        $count = 0;
    @endphp
    @foreach ($posts as $post)
        @break($count == 4)

        <div class="card">
            <p id="content">{!! Str::words($post->getLocalContent(), 2,"...")!!}</p>
            <h2 id="title">{{$post->getLocalTitle()}}</h2>
            <!-- TODO posicionamiento de la imagen -->
        </div>
    @php
        $count++;
    @endphp
    @endforeach 
    </div>
</section>