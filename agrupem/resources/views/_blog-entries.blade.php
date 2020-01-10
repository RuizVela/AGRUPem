<section id="blog_home_container">
    <div id="home_blog_entries_title" class="title">
        <h3>@lang('home.blog')</h3>
    </div>
    <div id="home_blog_entries" class="d-flex justify-content-around">
    @foreach ($posts as $post)
        <div class="card">
            <a id="blog_entries_button" class="btn btn-primary" href="/post/{{$post->id}}">
                <h2 id="title">{{$post->getLocalTitle()}}</h2>
                <p id="content">{!! Str::words($post->getLocalContent(), 25,"...")!!}</p>
            </a>
        </div>
    @endforeach
    </div>
</section>