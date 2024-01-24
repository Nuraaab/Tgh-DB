<?php
include 'connection.php';

$sql = "SELECT s.*, d.name_en, d.name_am
FROM schedule s
JOIN doctor d ON s.doctor_id = d.id ";
$result = $conn->query($sql);
$res = array();
if ($result && $result->num_rows > 0) {
    // Fetch the rows from the result set as an associative array
    while ($row = $result->fetch_assoc()) {
        $res[] = $row;
    }
}
echo json_encode($res);
?>