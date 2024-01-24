<?php 
include 'connection.php';

$sql = $conn->query("SELECT COUNT(*) AS total_dept FROM department where approval =1 ");
$res =array();
while($row = $sql->fetch_assoc()){
        $res[]=$row;
}
echo json_encode($res);




?> 