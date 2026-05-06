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
    <link rel="stylesheet" href="css/viewBlog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vast+Shadow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">

    <title>Blog Posts</title>
</head>

<body>
    <div id="main">
        <nav>
            <ul class="navlist">
                <li id="name">
                    <a href="viewBlog.php">Blog Posts</a>
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
            <aside>
                <?php
                $servername = "127.0.0.1";
                $username = "root";
                $password = "";
                $dbname = "ecs417";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM posts";
                $result = $conn->query($sql);

                if (isset($_POST['month'])) {
                    $monthFilter = $_POST['month'];
                } else {
                    $monthFilter = '';
                }

                $posts = [];


                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $posts[] = $row;
                    }
                } else {
                    echo "<h5>No posts found.</h5>";
                }

                for ($i = 0; $i < count($posts); $i++) {
                    for ($j = 0; $j < count($posts) - 1; $j++) {
                        if ($posts[$j]['id'] < $posts[$j + 1]['id']) {
                            $temp = $posts[$j];
                            $posts[$j] = $posts[$j + 1];
                            $posts[$j + 1] = $temp;
                        }
                    }
                }
                echo "<div class='filter'>";
                echo "<h4>Filter Posts by month: </h4>";
                echo "<form method='POST'>";
                echo "<input type='month' name='month'>";
                echo "<input type='submit' value='Filter'>";
                echo "</form>";
                echo "</div>";

                foreach ($posts as $post) {

                    $postMonth = substr($post['created_at'], 0, 7);

                    if ($monthFilter && $postMonth !== $monthFilter) {
                        continue;
                    }

                    echo "<div class='blog'>";
                    echo "<h6>" . date("jS F Y, H:i \\U\\T\\C", strtotime($post['created_at'])) . "</h6>";
                    echo "<h2>" . $post['title'] . "</h2>";
                    echo "<hr>";
                    echo "<p>" . $post['body'] . "</p>";
                    echo "<hr>";
                    echo "</div>";
                }

                $conn->close();

                ?>
                <a href="addEntry.php"><button>Add a new blog post</button></a>
            </aside>

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