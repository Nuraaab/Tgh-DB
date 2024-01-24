<?php
include 'connection.php';

$current_date = $_POST['current_date'];
$doctor_id = $_POST['doctor_id'];
$sql = $conn->query("SELECT * FROM cardprice WHERE doctor_id = $doctor_id AND starting_date <= '$current_date' ORDER BY starting_date LIMIT 1;");
$res = array();
while ($row = $sql->fetch_assoc()) {
    $res[] = $row;
}
header('Content-Type: application/json');
echo json_encode($res);
?>