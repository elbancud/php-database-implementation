<?php
include_once 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <form action="" method="GET">
            <input type="text" name="name" placeholder="Name" autocomplete="off">
            <input type="text" name="lastname" placeholder="Lastname" autocomplete="off">
            <input type="text" name="username" placeholder="Username" autocomplete="off">
            <input type="text" name="password" placeholder="Passwrod" autocomplete="off">
            <br />
            <button type="submit" name="register">Register</button>
        </form>
    </div>

    <?php
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['register'])) {
        if ($_GET['username'] == '' || $_GET['password'] == '') {
            print("Please enter");
        } else {
            print("Good to go tanga");

            $username = $_GET['username'];
            $password = $_GET['password'];


            $sql = "INSERT INTO adminprofile (username, password)
                    VALUES ('$username', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    ?>
</body>

</html>