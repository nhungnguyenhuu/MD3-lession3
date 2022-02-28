<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteTypeController extends Controller
{
    //
    public function index()
    {
        $typeNotes = DB::table("noteType")->get();
        return view('noteType.list', compact('typeNotes'));
    }

}
