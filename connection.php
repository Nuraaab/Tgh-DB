

<?php

$host= "localhost";
$username = 'root';
$password ='';
$dbname = "tgh_db";
$conn = new mysqli($host,$username,$password,$dbname);

if($conn){
  // echo "success";
}
else{
  //   echo "fail";
}

?>