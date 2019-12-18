<?php

namespace App\Http\Controllers; 

use App\Novelty;
use App\Image;
use Illuminate\Http\Request;

class NoveltyController extends Controller
{
    public function index()
    {
        $novelties = Novelty::all();
        
        
        return view('novelty.index',['novelties'=>$novelties]);
       
    }
    public function create()
    {
        return view('novelty.create');
    }
    public function store(Request $request)
    {
        $novelty=Novelty::create($request->all());
       
        $novelty->uploadImage($request,$novelty);
        

        return redirect('/novelty');
    }
    public function edit(Novelty $novelty)
    {
        return view('novelty.edit', ['novelty'=>$novelty]);
    }
    public function update(Request $request, Novelty $novelty)
    {
        $novelty->update($request->all());
        
        $novelty->uploadImage($request,$novelty);
        
        return redirect('novelty');
    }
    public function destroy(Novelty $novelty)
    {
        $novelty->delete();
        return redirect('novelty');
    }

   
}
