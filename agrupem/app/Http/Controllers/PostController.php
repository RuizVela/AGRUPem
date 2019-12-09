<?php

namespace App\Http\Controllers;

use App\Post;
use App\Image;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $cqurrentImage = Post::getPostImage();
        
        return view('blog.blog',['posts'=>$posts,'post_Image' => $currentImage]);
    }
    public function create()
    {
        return view('blog.create');
        return view('blog.createPost'); 
    }
    public function store(Request $request)
    {
       
        $post=Post::create($request->all());
        $post_id=$post->id;
        $path=Post::updateImagePost($request,$post->id);
        Image::create(['post_id'=>$post_id , 'url'=>$path]);
        
        return redirect('post');
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
   
    public function edit(Post $post)
    {
        return view('blog.edit',['post'=>$post]);
    }

    public function show(Post $post)
    {   
        return view('blog.post', ['post'=>$post]);
    }

    public function update(Request $request, Post $post)
    {   
        $post = Post::find($post->id);
        $post->update($request->all());

        return redirect('/post');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('post');
    }
}
