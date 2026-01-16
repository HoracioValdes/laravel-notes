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
        $notes = Note::published()->latest()->get();

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
        $data = $request->validated();
        $data['is_published'] = $request->boolean('is_published');

        $note = Note::create($data);

        return redirect('/notes/' . $note->id);
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(UpdateNoteRequest $request, Note $note)
    {
        $data = $request->validated();
        $data['is_published'] = $request->boolean('is_published');

        $note->update($data);

        return redirect('/notes/' . $note->id);
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect('/notes');
    }
}

