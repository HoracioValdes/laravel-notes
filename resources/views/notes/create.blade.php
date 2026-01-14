<!DOCTYPE html>
<html>
<head>
    <title>Create Note</title>
</head>
<body>
    <h1>Create Note</h1>

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
