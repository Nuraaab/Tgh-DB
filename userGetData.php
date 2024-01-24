<?php 
include 'connection.php';
$email = $_POST['email'];
$sql = $conn->query("SELECT * from users where email = '".$email."'");
$res =array();
while($row = $sql->fetch_assoc()){
        $res[]=$row;
}
echo json_encode($res);

?> 
