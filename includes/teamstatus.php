<?php
$json = file_get_contents("http://jotihunt.net/api/1.0/vossen", true);
$fox = json_decode($json);
$num=0;
$data= array();
foreach ($fox->data as $x) {
	switch ($x->status){
		case "rood":
			$status = 'red';
			break;
		case 'oranje':
			$status = 'OrangeRed';
		case 'groen':
			$status = 'green';
			break;
		default:
			$status = 'sienna';
	}
	$data[ "#vos".substr($x->team,0,1)] = $status;
	$num++;
}
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($data)
?>