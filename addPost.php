<?php
session_start();


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ecs417";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_SESSION['new_post_title'];
$body = $_SESSION['new_post_body'];

$sql = "INSERT INTO posts (title, body)
VALUES ('$title', '$body')";

if ($conn->query($sql) === TRUE) {
    echo "Post added successfully";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();

unset($_SESSION['new_post_title']);
unset($_SESSION['new_post_body']);

header("Location: viewBlog.php");
