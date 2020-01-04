<?php

namespace App\Http\Controllers;

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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trajets = \App\Trajet::orderBy('created_at', 'desc')->paginate(7);
        return view('home',compact('trajets'));
    }

    public function edit($id)
    {
    $this->authorize('admin');
    $reservation = \App\Resevation::find($id);
    $trajet = \App\Trajet::find($id);
    $Trajets = \App\Trajet::pluck('name','id');
    return view('products.edit', compact('product','categories'));
    }

}
