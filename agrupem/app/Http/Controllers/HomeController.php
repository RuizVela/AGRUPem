<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Novelty;
use App\Event;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $novelties = Novelty::all();
        $events = Event::all();
        $posts = Post::all();
        //dd($novelties);
        return view('home',['novelties'=>$novelties, 'events'=>$events, 'posts'=>$posts]);
    
    
    }
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
