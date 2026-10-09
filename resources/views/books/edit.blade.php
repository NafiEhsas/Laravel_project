<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
     <link rel="stylesheet" href="{{ asset('css/books.css') }}">
</head>
<body>

    <h1>Library Management System</h1>
    <h2>Update Book</h2>

    <form>
        <div>
            <label for="title">Book Title:</label>
            <input type="text" id="title" name="title"
                   value="Introduction to Programming">
        </div>

        <br>

        <div>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author"
                   value="John Smith">
        </div>

        <br>

        <div>
            <label for="category">Category:</label>
            <input type="text" id="category" name="category"
                   value="Computer Science">
        </div>

        <br>

        <div>
            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn"
                   value="9781234567890">
        </div>

        <br>

        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity"
                   value="10">
        </div>

        <br>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"
                      rows="5" cols="30">An introductory book about programming concepts.</textarea>
        </div>

        <br>

        <button type="submit">Update Book</button>
        <a href="{{ route('books.index') }}">Cancel</a>
    </form>

</body>
</html>