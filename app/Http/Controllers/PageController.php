<?php

namespace App\Http\Controllers;

use App\Models\addvoises;
use Illuminate\Http\Request;
use App\Models\music;
use App\Models\macs;

class PageController extends Controller
{
    public function voisePage()
    {

        $voise = music::all();

        return view('welcome', [
            "musics" => $voise
        ]);
    }

    public function AddVoise()
    {
        return view('addvoise');
    }

    public function admin()
    {
        return view('admin');
    }

    public function admin194595(){

        $voise = addvoises::all();

        return view('admin194595', [
            "musics" => $voise
        ]);
    }

    public function covid(){
        return view('covid');
    }
}
