<?php
    include_once 'header.php'
?>
<section class="first-page">
    <div class="intro">
        <?php
            if (isset($_SESSION["useruid"])) {
            echo "<p>Welcome, " . $_SESSION["useruid"] . "</p>";
            }
         ?>
        <h2>Reports <br>Institute</h2>
        <p>ReportsInstitute is a web application created to simplify student attendance records.</p>
    </div>
    <img src="img/reports.jpg" alt="pic">
</section>
<?php
    include_once 'footer.php'
?>