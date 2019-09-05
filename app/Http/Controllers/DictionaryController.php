<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public $array = ['hello' => 'xin chao', 'home' => 'nha'];

    public function index()
    {
        return view('dictionary.index');
    }

    public function translate(Request $request)
    {
        $result = null;
        $english = $request->english;
        foreach ($this->array as $eng => $vietnam){
            if ($english == $eng){
                $result = $vietnam;
            }
        }
        return view('dictionary.result',compact('result'));
    }

}
