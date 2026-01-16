<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNoteRequest;

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

    public function store(StoreNoteRequest $request)
    {
        $note = Note::create($request->validated());

        return redirect('/notes/' . $note->id);
    }
}

