<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/addEntry.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vast+Shadow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">

    <title>Add Entry</title>
</head>

<body>
    <div id="main">

        <nav>
            <ul class="navlist">
                <li id="name">
                    <a href="addEntry.php">New Entry</a>
                </li>
                <li id="home">
                    <a href="index.php">Home</a>
                </li>
                <li id="edu">
                    <a href="education.html">Education</a>
                </li>
                <li id="portfol">
                    <a href="portfol.html">Portfolio</a>
                </li>
                <li id="skill">
                    <a href="skills.html">Skills</a>
                </li>
                <li id="logout">
                    <a href="login.php">Logout</a>
                </li>
            </ul>
        </nav>

        <section>
            <form method="post" action="addPost.php">
                <h1>New Blog Post</h1>
                <input type="text" placeholder="Title" name="Title" class="textin" id="toptext" required>


                <textarea placeholder="Enter text here" name="body" class="textin" id="bottomtext" required></textarea>

                <section>
                    <input type="submit" class="button" value="Post" id="submitButton">
                    <input type="reset" class="button" value="Clear" id="clearButton">
                </section>
            </form>
        </section>

        <footer>

            <nav>
                <ul id="bottomnav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="education.html">Education</a>
                    </li>
                    <li>
                        <a href="portfol.html">Portfolio</a>
                    </li>
                    <li>
                        <a href="skills.html">Skills</a>
                    </li>
                    <li>
                        <a href="login.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </footer>
    </div>
    <script src="js/addEntry.js"></script>
</body>

</html>