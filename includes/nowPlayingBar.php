<?php

$songQuery = mysqli_query($con, "SELECT id FROM songs ORDER BY RAND() LIMIT 10");

$resultArray = array();

while($row = mysqli_fetch_array($songQuery)) {
    array_push($resultArray, $row['id']);
}

$josnArray = json_encode($resultArray);

?>

<script>  

    $(document).ready(function() {
        currentPlaylist = <?php echo $josnArray; ?>;
        audioElement = new Audio();
        setTrack(currentPlaylist[0], currentPlaylist, false);
    });

    function setTrack(trackId, newPlaylist, play) {

        audioElement.setTrack("assets/music/ambient_bells.mp3");

        if(play) {
            audioElement.play(); 
        }
       
    }

</script>

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