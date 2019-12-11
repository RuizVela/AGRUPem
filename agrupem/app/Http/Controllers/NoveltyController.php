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
        $novelty_id=$novelty->id;
        $path=Image::updateImageNovelty($request, $novelty->id);
        Image::create(['novelty_id'=>$novelty_id , 'url'=>"storage/".$path]);

        return redirect('/novelty');
    }
    public function edit(Novelty $novelty)
    {
        return view('novelty.edit', ['novelty'=>$novelty]);
    }
    public function update(Request $request, Novelty $novelty)
    {
        $novelty->update($request->all());
        $novelty_id = $novelty->id;
        $path=Image::updateImageNovelty($request,$novelty->id);
        Image::create(['novelty_id'=>$novelty_id , 'url'=>"storage/".$path]);
        return redirect('novelty');
    }
    public function destroy(Novelty $novelty)
    {
        $novelty->delete();
        return redirect('novelty');
    }

   
}
