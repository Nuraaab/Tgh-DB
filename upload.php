<?php    
 class Uploads {
    private $response;
    public function uploadImage(String $user_image, String $file_name){
     $path = "admin/user_images";
     if (!file_exists($path)) {
         mkdir($path, 0777, true);
     }
  $output_file_path = $path ."/$file_name.jpg";
  $file_handler = fopen($output_file_path, 'wb');
  fwrite($file_handler, base64_decode($user_image));
  fclose($file_handler);
    if(file_exists($output_file_path)){
        $this->response = array(
            "status" => 1,
        );
    }else{
        $this->response = array(
            "status" => 0,
        );
    }
  return json_encode($this->response);
}
 }

?>