<?php

    include("includes/config.php");

    //session_destroy();

    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = $_SESSION['userLoggedIn'];
    } else {
        header("Location: register.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Welcome to Slopify</title>
</head>
<body>

    <div id="mainConatiner">

        <div id="topContainer">
            <?php include("includes/navBarContainer.php"); ?>
        </div>

        <?php include("includes/nowPlayingBar.php"); ?>
    </div>
    


</body>
</html>