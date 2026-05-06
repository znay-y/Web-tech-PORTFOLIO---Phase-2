<?php
session_start();

$_SESSION['new_post_title'] = $_POST['Title'];
$_SESSION['new_post_body'] = $_POST['body'];

if (isset($_POST['preview'])) {
    echo "Preview";
    header("Location: viewPreview.php");
    exit;
} else if (isset($_POST['posting'])) {
    echo "Posting";
    header("Location: addPost.php");
    exit;
}
