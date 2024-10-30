<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GachaController extends Controller
{
    public function index(){
        return view("gacha.roll");
    }

    public function create(){
        if(request()->user()->id == 1){
            return view("gacha.create");
        }
        abort(code:403);
    }
}
