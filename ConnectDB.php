<?php
    session_start();
    $username = "";
    $email = "";
    //connecting to DB
    $host = "localhost";
    $user = "DieAmine";
    $password = "Clinique";
    $db = "DA_Clinique";
    $conn = mysqli_connect($host, $user, $password, $db);
    if (mysqli_connect_errno()) {
        echo "Failed to connecte to MySQL: " . mysqli_connect_error();
        exit();
    }
    ?>
    