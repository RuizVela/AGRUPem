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
        $all_events = Event::all();
        $all_posts = Post::all();
        $events = $all_events->take(4);
        $posts = $all_posts->take(-3);

        return view('home',['novelties'=>$novelties, 'events'=>$events, 'posts'=>$posts]);
    
    
    }
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
    public function queFem()
    {
        return view('queFem');
    }
    public function quiSom()
    {
        return view('quiSom');     
    }
}
