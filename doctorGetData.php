<?php 
include 'connection.php';

$sql = $conn->query("SELECT * from doctor");
$res =array();
while($row = $sql->fetch_assoc()){
        $res[]=$row;
}
echo json_encode($res);




?> 