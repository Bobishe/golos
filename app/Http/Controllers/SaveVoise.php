<?php

namespace App\Http\Controllers;

use App\Models\macs;
use Illuminate\Http\Request;
use App\Models\music;
use App\Models\addvoises;

class SaveVoise extends Controller
{
    public function Save(Request $request){

        $voise[] = 0;

        for ($i = 1; $i <= 50; $i++) {
            if ($request->{$i} == "on") {
                $voise[] = ($i);
            }
        }

        if (sizeof($voise) === 1) {
            return view('/error');
        }

        unset($voise[0]);


        $macs = macs::all();

        foreach ($macs as $mac) {
            if ($mac['IpAddress'] == $request->_token) {
                \Session::flash('flash message', 'sdgf');
                return redirect()->back();
            }
        }

        for ($i = 1; $i <= sizeof($voise); $i++){
            $music = music::find($voise[$i]);
            $music->voise = $music->voise+1;
            $music->save();
        }


        macs::create([
            "IpAddress" => $request->_token
        ]);

        return redirect()->back();
    }


    /*сохранение песен в предложке*/
    public function savemusic(Request $request) {

        $data = $request->only(['name', 'author']);

        addvoises::create([
            "nameSong" => $data['name'],
            "author" => $data['author'],
        ]);

        return redirect()->back();

    }




    public function add(Request $request){

        $data = addvoises::find($request->id);

        if (!$data) {
            return abort(404);
        }

        music::create([
            "nameSong" => $data['nameSong'],
            "author" => $data['author']
        ]);

        $data->delete();

        return redirect()->back();

    }

    public function delete(Request $request){

        $data = addvoises::find($request->id);

        if (!$data) {
            return abort(404);
        }

        $data->delete();

        return redirect()->back();
    }

    public function DestroyAll(){

        music::truncate();
        macs::truncate();

        return redirect()->back();

    }

    public  function AddAdminSong(Request $request){

        $data = $request->only('name', 'author', 'url');


        music::create([
            "nameSong" => $data['name'],
            "author" => $data['author'],
            "url" => $data['url']
        ]);

        return redirect()->back();
    }
}


