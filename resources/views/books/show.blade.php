<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
     <link rel="stylesheet" href="{{ asset('css/books.css') }}">
</head>
<body>

    <h1>Library Management System</h1>
    <h2>Book Details</h2>

    <div>
        <p><strong>Book ID:</strong> 1</p>
        <p><strong>Title:</strong> Introduction to Programming</p>
        <p><strong>Author:</strong> John Smith</p>
        <p><strong>Category:</strong> Computer Science</p>
        <p><strong>ISBN:</strong> 9781234567890</p>
        <p><strong>Quantity:</strong> 10</p>
        <p><strong>Description:</strong> An introductory book about programming concepts.</p>
    </div>

    <p>
        <a href="{{ route('books.index') }}">Back to All Books</a>
        |
        <a href="{{ route('books.edit', 1) }}">Edit Book</a>
    </p>

</body>
</html>