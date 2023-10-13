<?php

include '../connect.php';

$connect = createConn();
$valid = array('success' => false, 'message' => "");

$sql = "SELECT serv_nm, sDscrptn FROM serv_mstr WHERE id = $tId ";

$result = $connect->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_array();
    $valid['success'] = true;
    $valid['message'] = "Successfully fetched featured service details";
} // if num_rows
else {
    $valid['success'] = false;
    $valid['message'] = "Failed to fetch featured service details";
}

$connect->close();

echo json_encode($row);

?>