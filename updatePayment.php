<?php
include 'connection.php';
$bookId = $_POST['booking_id'];
$price = $_POST['amount'];
$transactionId = $_POST['trs_id'];
$sql = $conn->query("UPDATE booking
SET amount = $price, trs_id = $transactionId
WHERE id = $bookId;");
if ($sql === false) {
    $response = array('status' => 'fail');
} else {
    $response = array('status' => 'success');
}

header('Content-Type: application/json');
echo json_encode($response);
?>