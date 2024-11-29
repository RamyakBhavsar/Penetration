<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Search for User</h1>
    <form action="search.php" method="POST">
    <script>alert('XSS Attack!');</script>
        <input type="text" name="username" placeholder="Enter username">
        <button type="submit">Search</button>
    </form>
</body>
</html>
