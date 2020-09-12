<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');        
    }


    public function create()
    {
        return view ('entries.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|min:7|max:255|unique:entries',
            'content' => 'required|min:25|max:300'
        ]);

        $entry =new Entry();
        $entry->title = $validatedData['title'];
        $entry->content = $validatedData['content'];
        $entry->user_id = auth()->id();
        $entry->save(); //INSERT

        $status = 'Your entry has been published successfully.';
        return back()->with(compact('status'));



    }
}
