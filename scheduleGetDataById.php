<?php 
include 'connection.php';

$WorkingDay=intval($_POST['working_day']);
$doctor_id =intval($_POST['doctor_id']);
$sql = $conn->query("SELECT working_time, working_day from schedule WHERE doctor_id=$doctor_id AND working_day= $WorkingDay ");
$res =array();
while($row = $sql->fetch_assoc()){
        $res[]=$row;
}
echo json_encode($res);


?> 