<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vast+Shadow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>
    <div id="main">
        <nav>
            <header>
                <h1>Login Page</h1>
            </header>
        </nav>
        <section>
            <form method="POST" action="loginProcess.php">
                <fieldset>
                    <p>
                        <label>E-mail:</label> <br>
                        <input type="email" name="email" class="textin" placeholder="E-mail" required>
                    </p>
                    <p>
                        <label>Password:</label> <br>
                        <input type="password" name="password" class="textin" placeholder="Password" required>
                    </p>
                    <p>
                        <input type="submit" id="button">
                    </p>

                </fieldset>
            </form>
        </section>
        <footer>
            <nav>
                <ul id="bottomnav">
                    <li>
                        <p>Copyright &copy; 2024 Zaine Irshad</p>
                    </li>
                </ul>
            </nav>
        </footer>
    </div>
</body>

</html>