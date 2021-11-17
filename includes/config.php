<?php

    ob_start();
    session_start();

    $timezone = date_default_timezone_set("America/Chicago");

    $con = mysqli_connect("localhost:8889", "root", "root", "slopify");

    if(mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_errno();
    }


?>