
<?php

include 'connection.php';

$email = $_POST['email'];
$profile =$_POST['avator'];

$sql = $conn->query("UPDATE users
SET avatar= '".$profile."' WHERE email = '".$email."' ");

if($sql === false){
$response = array('status' => 'fail');
}else{
$response = array('status' => 'success');
    echo json_encode($response);
}

?>