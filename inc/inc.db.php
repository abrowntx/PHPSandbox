<?php
    /*$host = "fdb23.runhosting.com";
    $username = "2847522_sandbox";
    $dbpass = "21pascar3345";
    $dbname = "2847522_sandbox";*/
    $host = "localhost";
    $username = "root";
    $dbpass = "";
    $dbname = "Sandbox";

$conn = mysqli_connect($host, $username, $dbpass, $dbname);

if (!$conn) {
    die("<br>Connection Failed: ".mysqli_connect_error());
}

mysqli_close($conn);