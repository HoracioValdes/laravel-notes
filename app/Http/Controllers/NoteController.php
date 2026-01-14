<?php

namespace App\Http\Controllers;

use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return view('notes.index', compact('notes'));
    }

    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }
}

