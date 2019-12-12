<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Novelty;

class HomeController extends Controller
{
    public function index()
    {
        $novelties = Novelty::all();
        //dd($novelties);
        return view('home',['novelties'=>$novelties]);
    
    
    }
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
