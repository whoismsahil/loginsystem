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
                    <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href='profile.php'>Profile</a></li>";
                        echo "<li><a href='includes/logout-inc.php'>Logout</a></li>";
                    }
                    else {
                        echo "<li><a href='register.php'>Register</a></li>";
                        echo "<li><a href='login.php'>Login</a></li>";
                    }
                    ?>
                </ul>
            </nav>
            <h1 class="logo">ReportsInstitute</h1>
        </section>