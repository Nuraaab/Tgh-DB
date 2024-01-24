<?php
include 'connection.php';
$email = $_POST['email'];
$password = $_POST['password'];
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$middleName = $_POST['mname'];
$motherName = $_POST['mother_name'];
$phone = $_POST['mobile'];
$name = $firstName . ' ' . $middleName . ' ' .$lastName;
$nationalId = $_POST['national_id'];
$sex = $_POST['sex'];
$currentYear = $_POST['current'];
$birthYear = $_POST['birth_year'];
$age = intval($currentYear)-intval($birthYear);
$birthDay = $_POST['birth_day'];
$altMobile = $_POST['alt_mobile'];
$rigion = $_POST['rigion'];
$subCity = $_POST['sub_city'];
$houseNumber = $_POST['house_no'];
$officeTel = $_POST['office_tel'];
$organization = $_POST['organization'];
$city =$_POST['city'];
$woreda = $_POST['woreda'];
// Check if email already exists in users table
$sql = $conn->query("SELECT * FROM users WHERE email = '".$email."' OR phone = '".$phone."' ");
$res = array();
while($row = $sql->fetch_assoc()) {
    $res[] = $row;
}
$count = sizeof($res);

if ($count >= 1) {
    // Email already exists, return error message
    $response = array('status' => 'registerfail');
    echo json_encode($response);
} else {

    $sql = $conn->query("INSERT INTO patient (email, fname, mname, lname, mother_name, mobile, age, national_id, sex, birthdate, mobile1, region, subcity, house_no, office_tel, organization, city, wereda) VALUES('".$email."', '".$firstName."', '".$middleName."', '".$lastName."', '".$motherName."', '".$phone."', '".$age."', '".$nationalId."', '".$sex."', '".$birthDay."', '".$altMobile."', '".$rigion."', '".$subCity."', '".$houseNumber."', '".$officeTel."', '".$organization."', '".$city."', '".$woreda ."') ");
    // Email does not exist, insert new row into users table
    $sqlu = $conn->query("INSERT INTO users ( name, email, password, phone) VALUES('".$name."', '".$email."', '".$password."', '".$phone."') ");
    
   
    // Return success message
    $response = array('status' => 'success');
    echo json_encode($response);
}

?>