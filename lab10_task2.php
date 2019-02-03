<?php

$file = fopen("E:/7th-sem/WT/sample.txt",'r+');

$data = file_get_contents("E:/7th-sem/WT/sample.txt");

echo(str_word_count($data));

echo("<br>");

$arr_str = explode(" ",$data);

echo(sizeof($arr_str)."<br>");

$lines = COUNT(FILE("E:/7th-sem/WT/sample.txt"));
echo("There are ".$lines." lines in the file");


?>