<?php 
include 'connection.php';

$sql = $conn->query("SELECT working_time, working_day from schedule");
$res =array();
while($row = $sql->fetch_assoc()){
        $res[]=$row;
}
echo json_encode($res);


?> 