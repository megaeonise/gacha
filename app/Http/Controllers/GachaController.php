<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GachaController extends Controller
{
    public function index(){
        return view("gacha");
    }
}
