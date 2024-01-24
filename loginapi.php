<?php 
include 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = $conn->query("SELECT * from users where email = '".$email."' ");
$res =array();
while($row = $sql->fetch_assoc()){
        $res[]=$row;
}
$count=sizeof($res);

if($count ==1){
       echo json_encode($res);
}
else{

        echo json_encode('loginfail');
}




// echo json_encode($res);




?> 