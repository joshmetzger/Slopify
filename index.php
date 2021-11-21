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
            <div id="navBarContainer">
                <nav class="navBar">
                    <a class="logo" href="index.php">
                        <img src="assets/images/icons/logo.png" alt="logo">
                    </a>

                    <div class="group">
                        <div class="navItem">
                            <a class="navItemLink" href="search.php">Search
                                <img class="icon" src="assets/images/icons/search.png" alt="search">
                            </a>
                        </div>
                    </div>

                    <div class="group">
                        <div class="navItem">
                            <a class="navItemLink" href="browse.php">Browse</a>
                        </div>
                        <div class="navItem">
                            <a class="navItemLink" href="yourMusic.php">Your Music</a>
                        </div>
                        <div class="navItem">
                            <a class="navItemLink" href="profile.php">Josh</a>
                        </div>
                    </div>

                </nav>
            </div>
        </div>

        <div id="nowPlayingBarContainer">
            <div id="nowPlayingBar">

                <div id="nowPlayingLeft">
                    <div class="content">
                        <span class="albumLink">
                            <img class="albumArtwork" src="assets/images/artwork/clearday.jpg" alt="">
                        </span>

                        <div class="trackInfo">
                            <span class="trackName">
                                <span>Happy Birthday</span>
                            </span>
                            <span class="artistName">
                                <span>Joshy dodoodo</span>
                            </span>
                        </div>
                    </div>
                </div>

                <div id="nowPlayingCenter">
                    
                    <div class="content playerControls">
                        <div class="buttons">

                            <button class="controlButton shuffle">
                                <img src="assets/images/icons/shuffle.png" title="shuffle button" alt="shuffle">
                            </button>
                            <button class="controlButton previous">
                                <img src="assets/images/icons/previous.png" title="previous button" alt="previous">
                            </button>
                            <button class="controlButton play">
                                <img src="assets/images/icons/play.png" title="play button" alt="play">
                            </button>
                            <button class="controlButton pause">
                                <img src="assets/images/icons/pause.png" title="pause button" style="display: none;" alt="pause">
                            </button>
                            <button class="controlButton next">
                                <img src="assets/images/icons/next.png" title="next button" alt="next">
                            </button>
                            <button class="controlButton repeat">
                                <img src="assets/images/icons/repeat.png" title="repeat button" alt="repeat">
                            </button>

                        </div>

                        <div class="playbackBar">

                            <span class="progressTime current">0.00</span>
                            <div class="progressBar">
                                <div class="progressBarBg">
                                    <div class="progress"></div>
                                </div>
                            </div>
                            <span class="progressTime remaining">0.00</span>

                        </div>
                    </div>

                </div>

                <div id="nowPlayingRight">
                    <div class="volumeBar">
                        <button class="controlButton volume" title="volume button">
                            <img src="assets/images/icons/volume.png" alt="volume">
                        </button>

                        <div class="progressBar">
                            <div class="progressBarBg">
                                <div class="progress"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    


</body>
</html>