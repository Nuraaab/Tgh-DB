<?php
include 'connection.php';

$patient_id = intval($_POST['patient_id']);
$sql = "SELECT b.*, d.name_en, d.name_am
FROM booking b
JOIN doctor d ON b.doctor_id = d.id
WHERE b.patient_id = $patient_id";
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