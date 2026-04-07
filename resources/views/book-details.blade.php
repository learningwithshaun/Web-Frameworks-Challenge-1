<!-- Student name: Amanda Msutu
Student number: 2224286000
Web Frameworks: Challenge 1 - Bookstore App -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book['title'] }} - Bookstore App</title>
</head>
<body>
    <h1>{{ $book['title'] }}</h1>

    <div class="book-details">
        <p><strong>Author:</strong> {{ $book['author'] }}</p>
        <p><strong>Year:</strong> {{ $book['year'] }}</p>
        <p><strong>Description:</strong> {{ $book['description'] }}</p>
    </div>

    <a href="{{ route('books.index') }}">Back to Books List</a>
    <br>
    <a href="{{ route('contact') }}">Contact Us</a>
</body>
</html>