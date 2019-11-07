<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function getAll(){
        $provider=Provider::all();
        return $provider;
    }

    public function add(Request $request){
        $provider=Provider::craete($request->all());
        return $provider;
    }

    public function get($id){
        $provider=Provider::find($id);
        return $provider;
    } 
}
