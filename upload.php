<?php
$target_dir = "C:/xampp/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
//$fileType = $_FILES["fileToUpload"]["type"]; //check file is a pdf file or not
if(isset($_POST["submit"])) {
    // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $check = $_FILES["fileToUpload"]["tmp_name"];
    $check1 = move_uploaded_file($check, $target_file);
 if( ($_FILES["fileToUpload"]["type"] == "image/png") || ($_FILES["fileToUpload"]["type"] == "image/jpg") || ($_FILES["fileToUpload"]["type"] == "application/pdf")  ) {
    echo "Yahoo!!<br>";
    $uploadOk = 1;
}
if ($_FILES["fileToUpload"]["size"] <= 2000000) {
    echo "your file is under range.<br>";
    $uploadOk = 1;
}
if($check1 !== false) {
         echo "your file is uploaded successfully";
        $uploadOk = 1;
    } 

  else{
	echo "your file is not uploaded successfully, its size is too large";
   }
    // if($check !== false) {
    //     echo "File is an image - " . $check["mime"] . ".";
    //     $uploadOk = 1;
    // } else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    // }
}
?>