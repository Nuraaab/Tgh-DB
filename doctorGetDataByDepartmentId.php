<?php 
include 'connection.php';
$department_id = intval($_POST['department_id']);
$sql = $conn->query("SELECT * from doctor where department_id= $department_id ");
$res =array();
while($row = $sql->fetch_assoc()){
        $res[]=$row;
}
echo json_encode($res);




?> 