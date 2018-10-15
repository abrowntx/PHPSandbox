<?php
    $host = "fdb23.runhosting.com";
    $username = "2847522_sandbox";
    $dbpass = "21pascar3345";
    $dbname = "2847522_sandbox";

$conn = mysqli_connect($host, $username, $dbpass, $dbname);

if (!$conn) {
    echo "Error: Unable to connect to MySQL.<br>" . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/*
echo "Success: A proper connection to MySQL was made! The <b>$dbname</b> database is great.<br>" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
*/

mysqli_close($conn);