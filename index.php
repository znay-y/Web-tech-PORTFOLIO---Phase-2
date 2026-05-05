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
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vast+Shadow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <title>About Me</title>
</head>

<body>

    <div id="main">
        <nav>
            <ul class="navlist">
                <li id="name">
                    <a href="viewBlog.php">About Me</a>
                </li>
                <li id="home">
                    <a href="index.php">Home</a>
                </li>
                <li id="edu">
                    <a href="education.php">Education</a>
                </li>
                <li id="portfol">
                    <a href="portfol.php">Portfolio</a>
                </li>
                <li id="skill">
                    <a href="skills.php">Skills</a>
                </li>
                <li>
                    <a href="viewBlog.php">Blog Posts</a>
                </li>
                <li id="logout">
                    <a href="logout.php"><?php echo $_SESSION['fullname']; ?></a>
                </li>
            </ul>
        </nav>
        <section>
            <article id="meIntro">
                <aside>
                    <p>
                        My Name is Zaine Irshad, a full-time student and Queen Mary Univeristy Of London, currently pursuing
                        a course in Computer Science. My Passion for computer science stems from my love for technology.
                        This has led me to complete many tasks thoughout my life such as building multiple computers from
                        scatch and self learning multiple programming languages such as Python and JavaScript.
                    </p>


                </aside>

                <figure>
                    <img src="img/me pic.jpg" alt="me fr">
                    <figcaption>Picture of me</figcaption>
                </figure>
            </article>

        </section>

        <footer>

            <nav>
                <ul id="bottomnav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="education.php">Education</a>
                    </li>
                    <li>
                        <a href="portfol.php">Portfolio</a>
                    </li>
                    <li>
                        <a href="skills.php">Skills</a>
                    </li>
                    <li>
                        <a href="viewBlog.php">Blog Posts</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </footer>
    </div>

</body>

</html>