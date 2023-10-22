<?php

namespace App\Http\Controllers;

use App\Models\addvoises;
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
    public function index()
    {
        $voise = addvoises::all();

        return view('admin194595', [
            "musics" => $voise
        ]);
    }
}
