<?php

$data = file_get_contents("demo.pdf");


$txt = file_put_contents('text.txt', $data);

if($txt){
	echo("file converted successfully from pdf to text ");
}
else{
	echo("Failed");
}

?>