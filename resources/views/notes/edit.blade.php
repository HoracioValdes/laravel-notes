<!DOCTYPE html>
<html>
<head>
    <title>Edit Note</title>
</head>
<body>
    <h1>Edit Note</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/notes/{{ $note->id }}">
        @csrf
        @method('PUT')

        <div>
            <label>Title</label><br>
            <input type="text" name="title" value="{{ old('title', $note->title) }}">
        </div>

        <div>
            <label>Content</label><br>
            <textarea name="content">{{ old('content', $note->content) }}</textarea>
        </div>

        <button type="submit">Update</button>

        <div>
            <label>
                <input type="checkbox" name="is_published" value="1"
                    {{ old('is_published', $note->is_published) ? 'checked' : '' }}>
                Published
            </label>
        </div>
    </form>

    <a href="/notes/{{ $note->id }}">← Back</a>
</body>
</html>
