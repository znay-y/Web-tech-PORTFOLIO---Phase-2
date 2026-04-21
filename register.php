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
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>
    <div id="main">
        <nav>
            <header>
                <h1>Register Page</h1>
            </header>
        </nav>
        <section>
            <form method="POST" action="registerProcess.php" id="registrationForm">
                <fieldset>
                    <p>
                        <label>First Name</label> <br>
                        <input type="text" name="firstName" class="textin" placeholder="First Name" required>
                    </p>
                    <p>
                        <label>Last Name</label> <br>
                        <input type="text" name="lastName" class="textin" placeholder="Last Name" required>
                    </p>
                    <p>
                        <label>E-mail:</label> <br>
                        <input type="email" name="email" class="textin" placeholder="E-mail" required>
                    </p>
                    <p>
                        <label>Password:</label> <br>
                        <input type="password" name="password" class="textin" placeholder="Password" id="passwordIn" required>
                    </p>
                    <p>
                        <label>Confirm Password:</label> <br>
                        <input type="password" name="confirmPassword" class="textin" placeholder="Confirm Password" id="confirm_passwordIn"  required>
                    </p>
                    <p>
                        <input type="submit" id="button" value="Register">
                    </p>
                    <p>
                        <a href="login.php">Already have an account? Login here.</a>
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
    <script src="js/registerCheck.js"></script>

</body>

</html>