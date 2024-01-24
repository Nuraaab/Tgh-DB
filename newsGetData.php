<?php 
include 'connection.php';


$sql = $conn->query("SELECT * from news where category= 'Health Tip' ");
$res =array();
while($row = $sql->fetch_assoc()){
        $res[]=$row;
}
echo json_encode($res);




?> 