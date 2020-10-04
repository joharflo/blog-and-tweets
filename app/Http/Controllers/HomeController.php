<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myEntries()
    {
        //return view('home');
        //$entries = Entry::with('user')->orderByDesc('created_at')->orderByDesc('id')->paginate(10); 
        $entries = Entry::where('user_id',auth()->id())->get();
        return view('home', compact('entries'));
    }

    public function index()
    {
        
        $entries = Entry::with('user')->orderByDesc('created_at')->orderByDesc('id')->paginate(10); 
        //$entries = Entry::all();        
        return view('welcome', compact('entries'));
    }
}
