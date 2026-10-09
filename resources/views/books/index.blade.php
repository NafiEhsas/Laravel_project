<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Books</title>
     <link rel="stylesheet" href="{{ asset('css/books.css') }}">
</head>
<body>

    <h1>Library Management System</h1>
    <h2>All Books</h2>

    <p>
        <a href="{{ route('books.create') }}">Add New Book</a>
    </p>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Introduction to Programming</td>
                <td>John Smith</td>
                <td>Computer Science</td>
                <td>
                    <a href="{{ route('books.show', 1) }}">View</a> |
                    <a href="{{ route('books.edit', 1) }}">Edit</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Database Management</td>
                <td>David Brown</td>
                <td>Information Technology</td>
                <td>
                    <a href="{{ route('books.show', 2) }}">View</a> |
                    <a href="{{ route('books.edit', 2) }}">Edit</a>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>Web Development</td>
                <td>Michael Johnson</td>
                <td>Computer Science</td>
                <td>
                    <a href="{{ route('books.show', 3) }}">View</a> |
                    <a href="{{ route('books.edit', 3) }}">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>