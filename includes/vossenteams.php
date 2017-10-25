<?php 
$json = file_get_contents("http://jotihunt.net/api/1.0/vossen");
$fox = json_decode($json);
//var_dump($fox->data);
$letter= str_split("ABCDEFGHIJK");

$numberof=count($fox->data);
for ($i = 1; $i <= $numberof; $i++) {
	$char = $letter[$i-1];
    echo '<h1 id="vos'.$char.'" class="vosletter" >'.$char.'</h1>';
}

?>