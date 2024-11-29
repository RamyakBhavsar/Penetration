<?php
$conn = new mysqli('localhost', 'root', '', 'login');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Results:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row['username'] . "<br>";
        echo "Password: " . $row['password'] . "<br>";
    }
} else {
    echo "No user found.";
}

$conn->close();
?>
