<!DOCTYPE html>
<html>
<head>
    <title>Create Note</title>
</head>
<body>
    <h1>Create Note</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/notes">
        @csrf

        <div>
            <label>Title</label><br>
            <input type="text" name="title">
        </div>

        <div>
            <label>Content</label><br>
            <textarea name="content"></textarea>
        </div>

        <button type="submit">Save</button>
    </form>

    <a href="/notes">← Back</a>
</body>
</html>
