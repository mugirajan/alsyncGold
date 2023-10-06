<?php

$servername = "localhost";
// $database = "u849610572_uot_ppr_submsn";
// $username = "u849610572_uot_db_usr";
// $password = "UoT_DB_pwd000";
$database = "alsync_db";
$username = "root";
$password = "";


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
