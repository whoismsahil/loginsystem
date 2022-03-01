<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


    <title>ReportsInstitute</title>
</head>


<body>
    <div class="wrapper">
        <section class="home">
            <nav>
                <h1 class="sliding-text">Aiding the Education System</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
            <section class="registration-form">
                <h2>Register</h2>
                <form action="includes/register-inc.php" method="post">
                    <input type="text" name="name" placeholder="Full name...">
                    <input type="text" name="email" placeholder="Email...">
                    <input type="text" name="uid" placeholder="Username...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <input type="password" name="pwdrepeat" placeholder="Confirm password...">
                    <button class="btn" type="submit" name="submit">Submit</button>
                </form>
                
            </section>

            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    }
                    else if ($_GET["error"] == "invaliduid") {
                        echo "<p>Choose a proper username!</p>";
                    }
                    else if ($_GET["error"] == "invalidemail") {
                        echo "<p>Choose a proper email!</p>";
                    }
                    else if ($_GET["error"] == "passwordsdontmatch") {
                        echo "<p>Passwords don't match!</p>";
                    }
                    else if ($_GET["error"] == "stmtfailed") {
                        echo "<p>Something went wrong, try again!</p>";
                    }
                    else if ($_GET["error"] == "usernametaken") {
                        echo "<p>Username already taken!</p>";
                    }
                    else if ($_GET["error"] == "none") {
                        echo "<p>You have registered!</p>";
                    }
                    
                }
            ?>

            <?php
    include_once 'footer.php'
?>