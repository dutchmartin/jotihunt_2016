<?php
//import mysql libary
require_once("mysql.php");
$limit = 10;

$query ="SELECT * FROM `locations` order by time LIMIT " . $limit;

$result = sqlquery($query);

$data = null;

if ($result->num_rows > 0) 
{
	echo $table;
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
    	$data[$row['id']] = array(
    	'name' => $row['name'],
    	'time' => $row['time'],
    	'lat' => round((float)$row['lat'],6),
    	'lng' => round((float)$row['lng'],6)
    	);

    }
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($data)
?>