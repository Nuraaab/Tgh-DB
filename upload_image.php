<?php 
include_once 'upload.php';
$data = json_decode(file_get_contents('php://input'), true);
$user_image = $data['user_image'];
$file_name = $data['file_name'];
if($user_image != null && $file_name !=null){
    $uploades = new Uploads();
    echo $uploades->uploadImage($user_image, $file_name);
}
?>