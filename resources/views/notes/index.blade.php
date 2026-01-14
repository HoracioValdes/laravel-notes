<!DOCTYPE html>
<html>
<head>
    <title>Notes</title>
</head>
<body>
    <h1>Notes</h1>

    <a href="/notes/create">+ New note</a>

    <ul>
        @forelse ($notes as $note)
            <li>{{ $note->title }}</li>
        @empty
            <li>No notes yet</li>
        @endforelse
    </ul>
</body>
</html>
