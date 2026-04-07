<!-- Student name: Amanda Msutu
Student number: 2224286000
Web Frameworks: Challenge 1 - Bookstore App -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books - Bookstore App</title>
</head>
<body>
    <h1>Our Book Collection</h1>
    <p>Welcome to our bookstore! Browse our collection of books.</p>

    <!-- Link to Contact Us page using route() function -->
    <a href="{{ route('contact') }}">Contact Us</a>

    <div class="books-list">
        @foreach($books as $book)
            <div class="book-item">
                <h3><a href="{{ route('books.show', $book['id']) }}">{{ $book['title'] }}</a></h3>
                <p><strong>Author:</strong> {{ $book['author'] }}</p>
                <p><strong>Year:</strong> {{ $book['year'] }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>