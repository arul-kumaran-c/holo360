<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h2>Create</h2>

    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <div>
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name">
        </div><br>

        <button type="submit">Submit</button>
        <button type="reset">Clear</button>
    </form>
</body>
</html>