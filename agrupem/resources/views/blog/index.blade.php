@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <main>
            @foreach ($posts as $post)
            <section id="blog_index_container">
                <header class="card">
                    <div id="header_index_blog" class="card-header d-flex flex-nowrap justify-content-between">
                        <h4 id="title">{{$post->getLocalTitle()}}</h4>
                        <h4 id="post_date">{{$post->created_at->format('Y-m-d')}}</h4>
                    </div>
                </header>
                @if ($post->getEncodedImage($post))
                <div id="post_entry" class="d-flex flex-nowrap align-items-center">
                    <div id="image_post_entry">
                        <img src="{{$post->getEncodedImage($post)}}">
                    </div>
                    <div id="content_blog_index">
                        <p>{!! Str::words($post->deleteEncodedImage($post), 40,"...")!!}</p>
                    </div>
                </div>
                @else
                <div id="post_entry" class="d-flex flex-nowrap align-items-center">
                    <div id="content_blog_index_no_image">
                        <p>{!! Str::words($post->getLocalContent(), 40,"...")!!}</p>
                    </div>
                </div>
                @endif

                <form action="/post/{{$post->id}}" method="GET">
                    <div class="right_buttons d-flex align-items-center">
                        <button type="submit" id="button_show" class="btn btn-primary">@lang('blog.show-me-more')</button>
                    </div>
                </form>

                <div class="d-flex flex-row justify-content-between">
                    @auth
                    <form action="/post/{{$post->id}}/edit" method="GET">
                        <input type="submit" id="button_edit" class = "btn btn-outline-primary mt-4" value="Editar">
                    </form>

                    <form action="/post/{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE') 
                    <input id="button_delete" type="submit" value="Eliminar post" class="btn btn-outline-danger mt-4">
                    </form>
                    @endauth
                </div>
            </section>
            @endforeach 
            @auth
                <a id="button_create" href="/post/create" class="btn btn-outline-success mt-4">Crear post</a>
            @endif    
        </main>
        </div>
    </div>
</div>

@endsection