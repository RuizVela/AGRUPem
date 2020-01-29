<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function queFem(Text $queFem)
    {
        $queFem = Text::getQueFem();
        return view('queFem',['queFem'=>$queFem]);
    }
    public function quiSom(Text $quiSom)
    {
        $quiSom = Text::getQuiSom();
        return view('quiSom', ['quiSom'=>$quiSom]);     
    }
    public function colabora()
    {
        return view('colabora');     
    }
    public function update(Request $request, Text $text)
    {
        $text->update($request->all());
        return redirect()->back();
    }
}