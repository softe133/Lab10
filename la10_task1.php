<?php

// Appending the file


$file = fopen("E:/7th-sem/WT/sample.txt",'a+');

$std = fwrite($file,"16-15SW24");

if($std){
	echo file_get_contents("E:/7th-sem/WT/sample.txt");
}

else{
	echo("dont written succesfully");
}

fclose($file);




?>