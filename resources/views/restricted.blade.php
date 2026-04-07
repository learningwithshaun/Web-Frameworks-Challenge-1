<!-- Student name: Amanda Msutu
Student number: 2224286000
Web Frameworks: Challenge 1 - Bookstore App -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restricted Area - Bookstore App</title>
</head>
<body>
    <h1>Restricted Area</h1>
    <p>Welcome to the restricted area! This content is only available for users 18 and older.</p>

    <div class="content">
        <h2>Adult Content</h2>
        <p>This is where your restricted content would go...</p>
    </div>

    <a href="{{ route('contact') }}">Contact Us</a> |
    <a href="/">Back to Home</a>
</body>
</html>