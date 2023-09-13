<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
  
    public function note(){
        return view('note.note');
    } 
}
