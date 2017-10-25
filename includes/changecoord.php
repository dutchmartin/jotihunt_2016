<?php 
//load depenencies
require_once("rdcoord.php");
require_once("mysql.php");

//debug value, set true to not use checkcoord
$checkcoord=true;

//check if the rd coordinate system is used
function checkcoord($Latitude, $Longitude)
{
	if(is_float($Latitude) and is_float($Latitude))
	{
		return false;
	}else
	{
		return true;
	}
}


//Add the new data record to to datasbase
function changecoord($name, $Latitude, $Longitude)
{
	//Test if lat or lng is a number
	$isnumber = is_numeric ($Latitude) and is_numeric ($Longitude);
	if(checkcoord($Latitude, $Longitude) and $isnumber)
	{
		//Get the proccesed values out of the functions array
		$coordinates = rd2wgs($Latitude, $Longitude);
		$Latitude = $coordinates['latitude'];
		$Longitude = $coordinates['longitude'];
	}
	$values = " VALUES('$name','$Latitude','$Longitude')";
	$query = "INSERT INTO `locations` ( name, lat, lng)" . $values;
	sqlquery($query);
}
// debug code
// changecoord(testing,51.445453,5.22784);

function testinput($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>