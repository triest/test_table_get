<?php
header('Content-Type: application/json');
$mysqli = new mysqli("127.0.0.1", "root", "",
        "phptest");
if ($mysqli->connect_errno) {

    return false;
}
$output_array = array();
$sql = "SELECT * FROM test";

$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $output_array[] = array('id' => $row['id'], 'name' => $row['name']);
}

$mysqli->close();

echo json_encode($output_array);