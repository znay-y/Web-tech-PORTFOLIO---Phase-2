<?php
$servername = "127.0.0.1";
$username = "root";
$password = ""; // "" for XAMPP, "root" for MAMP
$dbname = "ecs417";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$title = $_POST['Title'];
$body = $_POST['body'];


$sql = "INSERT INTO posts (title, body)
VALUES ('$title', '$body')";

if ($conn->query($sql) === TRUE) {
    echo "Post added successfully";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();

header("Location: viewBlog.php");
?>

