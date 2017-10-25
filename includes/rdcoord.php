<?php
// debug code for the rd2wgs function 
//var_dump(rd2wgs(20231,45525));


function rd2wgs ($x, $y) {

// filter bad input
$num = strlen((string)$x);
if($num  == '5')
{
	$num = $x * 10;
	$x = $num;
}
elseif($num  == '4')
{
	$num = $x * 100;
	$x = $num;
}else
{
	return array(
'latitude' => $x ,
'longitude' => $y);	
}

$num = strlen((string)$y);
if($num  == '5')
{
	$num = $y * 10;
	$y = $num;
}
elseif($num  == '4')
{
	$num = $y * 100;
	$y = $num;
}else
{
	return array(
'latitude' => $x ,
'longitude' => $y);	
}


$dX = ($x - 155000) * pow(10, - 5);
$dY = ($y - 463000) * pow(10, - 5);
$SomN = (3235.65389 * $dY) + (- 32.58297 * pow($dX, 2)) + (- 0.2475 *
pow($dY, 2)) + (- 0.84978 * pow($dX, 2) *
$dY) + (- 0.0655 * pow($dY, 3)) + (- 0.01709 *
pow($dX, 2) * pow($dY, 2)) + (- 0.00738 *
$dX) + (0.0053 * pow($dX, 4)) + (- 0.00039 *
pow($dX, 2) * pow($dY, 3)) + (0.00033 * pow(
$dX, 4) * $dY) + (- 0.00012 *
$dX * $dY);
$SomE = (5260.52916 * $dX) + (105.94684 * $dX * $dY) + (2.45656 *
$dX * pow($dY, 2)) + (- 0.81885 * pow(
$dX, 3)) + (0.05594 *
$dX * pow($dY, 3)) + (- 0.05607 * pow(
$dX, 3) * $dY) + (0.01199 *
$dY) + (- 0.00256 * pow($dX, 3) * pow(
$dY, 2)) + (0.00128 *
$dX * pow($dY, 4)) + (0.00022 * pow($dY,
2)) + (- 0.00022 * pow(
$dX, 2)) + (0.00026 *
pow($dX, 5)); 
$Latitude = 52.15517 + ($SomN / 3600);
$Longitude = 5.387206 + ($SomE / 3600);

return array(
'latitude' => $Latitude ,
'longitude' => $Longitude);	
}
?>