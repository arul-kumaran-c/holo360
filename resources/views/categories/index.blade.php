<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Index</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Sl.No</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->$name }}</td>
                <td>{{ $category->$created_at }}</td>
                <td>{{ $category->$updated_at }}</td>
                <td>
                   
            </tr>
            
            @endforeach
        </tbody>
    </table>
</body>
</html>