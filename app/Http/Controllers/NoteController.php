<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;

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

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(UpdateNoteRequest $request, Note $note)
    {
        $note->update($request->validated());

        return redirect('/notes/' . $note->id);
    }
}

