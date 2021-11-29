<?php

    include("includes/config.php");

    //session_destroy();

    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = $_SESSION['userLoggedIn'];
    } else {
        header("Location: register.php");
    }

?>

<?php include("includes/header.php"); ?>

<h1 class="pageHeadingBig">You Might Also Like</h1>

<div class="gridViewContainer">
    <?php 
        $albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");

        while($row = mysqli_fetch_array($albumQuery)) {
            echo "<div class='gridViewItem'>
                <img src='" . $row['artworkPath'] . "'>
                <div class='gridViewInfo'>"
                 . $row['title'] . 
                "</div>
            </div>";
        }
    ?>
</div>


<?php include("includes/footer.php"); ?>