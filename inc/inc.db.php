<?php
    /*$host = "tx12.fcomet.com";
    $username = "rigorous";
    $dbpass = "wSgoF5r961";
    $dbname = "rigorous_Sandbox";*/
    $host = "localhost";
    $username = "root";
    $dbpass = "";
    $dbname = "Sandbox";

$conn = mysqli_connect($host, $username, $dbpass, $dbname);

if (!$conn) {
    die("<br>Connection Failed: ".mysqli_connect_error());
}

mysqli_close($conn);