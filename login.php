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
                <h2>Login</h2>
                <form action="includes/login-inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username/Email...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button class="btn" type="submit" name="submit">Submit</button>
                </form>
            </section>

            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    }
                    else if ($_GET["error"] == "wronglogin") {
                        echo "<p>Incorrect login details</p>";
                    }
                }
            ?>
<?php
    include_once 'footer.php'
?>