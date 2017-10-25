<?php 
//import mysql libary
require_once("mysql.php");


if(is_numeric($_GET["num"]))
{
	$num = (int)$_GET["num"];
}
else
{
	$num = $_GET["num"];
}
if(is_int($num))
{
	$query = "DELETE FROM `locations` WHERE id='$num'";
	try
	{
		sqlquery($query);
		$data['msg'] = "succes";
	}
	catch(Exeption $e)
	{
		$data['msg'] = $e;
	}

}
else
{
	$data['msg'] = "error: '$num' is not valid";
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($data)

?>