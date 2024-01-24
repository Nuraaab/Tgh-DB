<?php
include 'connection.php';

//$patient_id = intval($_POST['patient_id']);
$sql = "SELECT * FROM booking ";
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