<?php
$target_dir = "C:/xampp/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
if(isset($_POST["submit"])) {
    $tempname = $_FILES["fileToUpload"]["tmp_name"];
    //for reading a uploaded file
    $fp = fopen($_FILES['fileToUpload']['tmp_name'], 'rb');
    while ( ($line = fgets($fp)) !== false) {
      echo "$line<br>";
    }
    //for writing a uploaded file
    $fp = fopen($_FILES['fileToUpload']['name'], 'w');
    fwrite($fp, 'This is start writing now by 16SW152');
    fclose($fp);
    $fp=fopen($_FILES['fileToUpload']['name'], 'rb');
    while ( ($line = fgets($fp)) !== false) {
      echo "$line<br>";
    }
     //copying a file
     $filePath = realpath($_FILES["fileToUpload"]["name"]);   
	 $newfn = 'test2.txt'; 
	 
	 if(copy($filePath,$newfn)){
	 echo 'The file was copied successfully <br>';}
	 else{
	 echo 'An error occurred during copying the file <br>';}

     //rename a file
	 $newfnren = 'test3.txt';
	 
	if(rename($newfn,$newfnren)){
	 echo sprintf("%s was renamed to %s <br>",$newfn,$newfnren);
	}else{
	 echo 'An error occurred during renaming the file <br>';}
    
    //delete  a file
    if(unlink($newfnren)){
	 echo sprintf("The file %s deleted successfully <br>",$newfnren);
	}else{
	 echo sprintf("An error occurred deleting the file %s <br>",$newfnren);
	}
     $check= move_uploaded_file($tempname, $target_file);
    if($check == true){
    	echo "file uploaded successfully";
    }
    else{
    	echo "file not uploaded";
    }

}
    ?>