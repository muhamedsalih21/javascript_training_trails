<?php
if(isset($_FILES['file1'])){

$target_dir = "/home/trendsep/public_html/sih2018/public/video/";

$target_file = $target_dir.str_replace(" ",'_',basename( $_FILES["file1"]["name"]));

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
    $check = $_FILES['file1']['size'];
    if($check !== false) 
        $uploadOk = 1;
    else 
        $uploadOk = 0;
}


$path_parts = pathinfo($_FILES["file1"]["name"]);
$imageFileType = $path_parts['extension'];
if($imageFileType != "mp4" && $imageFileType != "MP4"  ) 
    $uploadOk = 0;

    

if ($uploadOk == 0) {
  
} else {
  
    if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
         //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } 
}
?>
