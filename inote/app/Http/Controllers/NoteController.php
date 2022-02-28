<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    //
    public function showAll()
    {
        $notes = DB::table("notes")->get();
        return view('note.list', compact('notes'));
    }

    public function show($id)
    {
        $note = DB::table("notes")->where("id", $id)->first();
        return view('note.detail');
    }

    public function create()
    {
        return view('note.create');
    }

}
