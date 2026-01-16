<!DOCTYPE html>
<html>
<head>
    <title>{{ $note->title }}</title>
</head>
<body>
    <h1>{{ $note->title }}</h1>

    <p>{{ $note->content }}</p>

    <br><a href="/notes/{{ $note->id }}/edit">Edit</a><br>

    <form method="POST" action="/notes/{{ $note->id }}" style="display:inline;">
        @csrf
        @method('DELETE')

        <button type="submit" onclick="return confirm('Are you sure?')">
            Delete
        </button>
    </form><br>

    <a href="/notes">← Back to notes</a>
</body>
</html>
