<?php

// to be changes for production env.
$servername = "localhost";
// $database = "alsync_db";
// $username = "root";
// $password = "";
$database = "u140987190_alsync";
$username = "u140987190_alsync_db_user";
$password = "3+g7txRyg][K";


// Create connection
function createConn() {
    global $servername, $database, $username, $password;
    $conn = mysqli_connect($servername, $username, $password, $database);
    if( $conn -> connect_error ) {
        return null;
    }
    else {
        return $conn;
    } 
}

// close connection
function closeConn($conn) {
    if($conn) {
        mysqli_close($conn);
    }
}

?>
