<?php 
include 'connection.php';
$doctorName = $_POST['doctor_name'];
$sql = $conn->query("SELECT * from doctor where name_am= '".$doctorName."' ");
$res =array();
while($row = $sql->fetch_assoc()){
        $res[]=$row;
}
echo json_encode($res);




?> 