<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends BaseController
{
    public function index(Request $request){

        $per_page = ($request->has('per_page'))?$request->per_page:10;

        $words = $this->user()->words()->paginate($per_page);

        return view('words.index')
            ->with('words',$words)
            ->with('per_page',$per_page);
    }

    public function create(){

        return view('words.create');

    }

    public function save(Request $request){

        $this->validate($request,[
            'word' => 'required',
            'pronounce' => 'required',
            'translation' => 'required',
            'explain' => 'nullable',
            'example' => 'nullable',
        ]);

        $word = [
           'word' => $request->word,
           'pronounce' => $request->pronounce,
           'translation' => $request->translation,
           'explain' => $request->explain,
           'example' => $request->example
        ];

        try{

            $this->user()->words()->create($word);

            return redirect(route('word'));

        }catch (Exception $e){

            abort(404);

        }



    }

}
