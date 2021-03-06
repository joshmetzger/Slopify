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
        updateVolumeProgressBar(audioElement.audio);

        $(".playbackBar .progressBar").mousedown(function() {
            mouseDown = true;
        });

        $(".playbackBar .progressBar").mousemove(function(e) {
            if(mouseDown) {
                //set time of song depending on position of mouse
                timeFromOffset(e, this);
            }
        });

        $(".playbackBar .progressBar").mouseup(function(e) {
            timeFromOffset(e, this);
        });

        $(".volumeBar .progressBar").mousedown(function() {
            mouseDown = true;
        });

        $(".volumeBar .progressBar").mousemove(function(e) {
            if(mouseDown) {
                var percentage = e.offsetX / $(this).width();

                if(percentage >= 0 && percentage <= 1) {
                    audioElement.audio.volume = percentage;
                }
            }
        });

        $(".volumeBar .progressBar").mouseup(function(e) {
            var percentage = e.offsetX / $(this).width();

                if(percentage >= 0 && percentage <= 1) {
                    audioElement.audio.volume = percentage;
                }
        });

        $(document).mouseup(function() {
            mouseDown = false;
        });

    });

    function timeFromOffset(mouse, progressBar) {
        var percentage = mouse.offsetX / $(progressBar).width() * 100;
        var seconds = audioElement.audio.duration * (percentage / 100);
        audioElement.setTime(seconds);
    }

    function setTrack(trackId, newPlaylist, play) {

        $.post("includes/handlers/ajax/getSongJson.php", { songId: trackId}, function(data) {
            
            var track = JSON.parse(data);

            $(".trackName span").text(track.title);

            $.post("includes/handlers/ajax/getArtistJson.php", { artistId: track.artist }, function(data) {

                var artist = JSON.parse(data);

                $(".artistName span").text(artist.name);
            }); 

            $.post("includes/handlers/ajax/getAlbumJson.php", { albumId: track.album }, function(data) {

                var album = JSON.parse(data);

                $(".albumLink img").attr("src", album.artworkPath);
            });
            
            audioElement.setTrack(track);
            playSong();
        });

        if(play) {
            audioElement.play(); 
        }
       
    }

    function playSong() {

        if(audioElement.audio.currentTime == 0){
           $.post("includes/handlers/ajax/updatePlays.php", { songId: audioElement.currentlyPlaying.id });
        }

        $(".controlButton.play").hide();
        $(".controlButton.pause").show();
        audioElement.play();
    }

    function pauseSong() {
        $(".controlButton.play").show();
        $(".controlButton.pause").hide();
        audioElement.pause();
    }

</script>

<div id="nowPlayingBarContainer">
    <div id="nowPlayingBar">

        <div id="nowPlayingLeft">
            <div class="content">
                <span class="albumLink">
                    <img class="albumArtwork" src="" alt="">
                </span>

                <div class="trackInfo">
                    <span class="trackName">
                        <span></span>
                    </span>
                    <span class="artistName">
                        <span></span>
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
                        <img src="assets/images/icons/play.png" title="play button" onclick="playSong()" alt="play">
                    </button>
                    <button class="controlButton pause" style="display: none;">
                        <img src="assets/images/icons/pause.png" title="pause button" onclick="pauseSong()"alt="pause">
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
                <button class="controlButton volume" title="Volume button">
                    <img src="assets/images/icons/volume.png" alt="Volume">
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