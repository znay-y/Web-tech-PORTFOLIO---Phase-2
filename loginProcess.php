 <?php


    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "ecs417";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $pass = $_POST['password'];



    $sql = "SELECT * FROM USERS WHERE email='$email' AND password='$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        header("Location: addEntry.php");
    } else {
        echo "Invalid email or password.";
    }

    $conn->close();

    ?>