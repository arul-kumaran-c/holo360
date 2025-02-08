<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<h2>Edit</h2>

<a href="{{ route('categories.index') }}">Back</a><br>
<form action="{{ route('categories.update', ['id' => $category->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
    <label for="name">Name</label><br>
    <input type="text" name="name" id="name" value="{{ $category->name }}">
    </div><br>

    <button type="submit">Submit</button>
    <button type="reset">Clear</button>
</form>
</body>
</html>