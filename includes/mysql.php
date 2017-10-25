<?php 

function sqlquery($query){
	// here instert the db connection details and password
$db=new mysqli('localhost','db','pass','xxx');
	if($db->connect_errno > 0)
	{
    	die('Unable to connect to database [' . $db->connect_error . ']');
	}

	if(!$result = $db->query($query)) {
    	die('There was an error running the query [' . $db->error . ']');
	}
	else {
	return $result;//->fetch_assoc();//
	}
	$db->close();
}
	// use example
	//
	//$data =sqlquery('SELECT * from `locations`');
	//var_dump($data["time"]);

?>