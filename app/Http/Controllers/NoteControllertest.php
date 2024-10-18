<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteControllertest extends Controller
{
    public function index(){
        return view("note");
    }
}
