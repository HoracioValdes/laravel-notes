<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

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

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $note = Note::create([
            'title'   => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect('/notes/' . $note->id);
    }
}

