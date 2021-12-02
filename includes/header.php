<?php

    include("includes/config.php");
    include("includes/classes/Artist.php");
    include("includes/classes/Album.php");
    include("includes/classes/Song.php");

    // session_destroy(); LOGOUT

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
    
    <script src="assets/js/script.js"></script>

    <title>Welcome to Slopify</title>
</head>
<body>

    <script>
        var audioElement = new Audio();
        audioElement.setTrack("assets/music/arrays.mp3");
        audioElement.audio.play();
    </script>

    <div id="mainConatiner">

        <div id="topContainer">

            <?php include("includes/navBarContainer.php"); ?>

            <div id="mainViewContainer">
                <div id="mainContent">