<?php
include 'connection.php';
$patientId = $_POST['patient_id'];
$doctorId = $_POST['doctor_id'];
$selectedDay = $_POST['selected_day'];
$selectedTime = $_POST['selected_time'];
$selectedDate = $_POST['selected_date'];
$transactionId = $_POST['trs_id'];
$price = $_POST['amount'];
$sql = $conn->query("INSERT INTO booking (patient_id, doctor_id, selected_day, selected_time, selected_date, trs_id, amount) VALUES('".$patientId."', '".$doctorId."', '".$selectedDay."', '".$selectedTime."', '".$selectedDate."', '".$transactionId."', '".$price."'); ");

if ($sql === false) {
    $response = array('status' => 'fail');
    $bookingId = null; // Set booking_id to null in case of failure
} else {
    $bookingId = $conn->insert_id; // Get the generated booking_id
    $response = array('status' => 'success', 'booking_id' => $bookingId);
}

header('Content-Type: application/json');
echo json_encode($response);
?>