<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
     <link rel="stylesheet" href="{{ asset('css/books.css') }}">
</head>
<body>

    <h1>Library Management System</h1>
    <h2>Add New Book</h2>

    <form>
        <div>
            <label for="title">Book Title:</label>
            <input type="text" id="title" name="title"
                   placeholder="Enter book title">
        </div>

        <br>

        <div>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author"
                   placeholder="Enter author name">
        </div>

        <br>

        <div>
            <label for="category">Category:</label>
            <input type="text" id="category" name="category"
                   placeholder="Enter book category">
        </div>

        <br>

        <div>
            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn"
                   placeholder="Enter ISBN">
        </div>

        <br>

        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity"
                   placeholder="Enter quantity">
        </div>

        <br>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"
                      rows="5" cols="30"
                      placeholder="Enter book description"></textarea>
        </div>

        <br>

        <button type="submit">Add Book</button>
        <a href="{{ route('books.index') }}">Cancel</a>
    </form>

</body>
</html>