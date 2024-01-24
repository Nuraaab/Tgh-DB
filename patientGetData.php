<?php
include 'connection.php';
$email = $_POST['email'];
$sql = $conn->query("SELECT * FROM patient WHERE email = '$email'");
$res = array();
while ($row = $sql->fetch_assoc()) {
    $res[] = $row;
}
header('Content-Type: application/json');
echo json_encode($res);
?>