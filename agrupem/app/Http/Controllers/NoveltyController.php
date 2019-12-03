<?php

namespace App\Http\Controllers;

use App\Novelty;
use Illuminate\Http\Request;

class NoveltyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novelties = Novelty::all();
        return view('novelties.novelty',['novelties'=>$novelties]);
    }
    public function indexES()
    {
        $novelties = Novelty::all();
        return view('novelties.novelty',['novelties'=>$novelties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novelties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Novelty::create($request->all());
        return redirect('novelty');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Novelty  $novelty
     * @return \Illuminate\Http\Response
     */
    public function show(Novelty $novelty)
    {   
        return view('novelties.show', ['novelty'=>$novelty]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Novelty  $novelty
     * @return \Illuminate\Http\Response
     */
    public function edit(Novelty $novelty)
    {
        return view('novelties.edit', ['novelty'=>$novelty]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Novelty  $novelty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novelty $novelty)
    {
        $novelty->update($request->all());
        return redirect('novelty');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Novelty  $novelty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novelty $novelty)
    {
        $novelty->delete();
        return redirect()->back();
    }
}
