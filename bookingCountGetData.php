<?php 
include 'connection.php';
$slected_date = $_POST['selected_date'];
$selected_day = $_POST['selected_day'];
$selected_time = $_POST['selected_time'];
$created_at = $_POST['created_at'];
$sql = $conn->query("SELECT COUNT(*) AS total_booking FROM booking where selected_date  =  '".$slected_date."' AND selected_day = '".$selected_day."' AND created_at < '".$created_at."' AND selected_time = '".$selected_time."' ");
$res =array();
while($row = $sql->fetch_assoc()){
        $res[]=$row;
}
echo json_encode($res);




?> 