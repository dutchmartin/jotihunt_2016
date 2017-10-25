<?php
	$x=202310;
	$y=455250;
	
	$dx = ($x - 155000) * 10 ^ -5;
	$dy = ($y - 463000) * 10 ^ -5;

	$SomN = (3235.65389 * $dy) + (-32.58297 * $dx ^ 2) + (-0.2475 * $dy ^ 2) + (-0.84978 * $dx ^ 2 * $dy) + (-0.0655 * $dy ^ 3) + (-0.01709 * $dx ^ 2 * $dy ^ 2) + (-0.00738 * $dx) + (0.0053 * $dx ^ 4) + (-0.00039 * $dx ^ 2 * $dy ^ 3) + (0.00033 * $dx ^ 4 * $dy) + (-0.00012 * $dx * $dy);
	$SomE = (5260.52916 * $dx) + (105.94684 * $dx * $dy) + (2.45656 * $dx * $dy ^ 2) + (-0.81885 * $dx ^ 3) + (0.05594 * $dx * $dy ^ 3) + (-0.05607 * $dx ^ 3 * $dy) + (0.01199 * $dy) + (-0.00256 * $dx ^ 3 * $dy ^ 2) + (0.00128 * $dx * $dy ^ 4) + (0.00022 * $dy ^ 2) + (-0.00022 * $dx ^ 2) + (0.00026 * $dx ^ 5);
	
	$Latitude = 52.15517 + ($SomN / 3600);
	$Longitude = 5.387206 + ($SomE / 3600);

	$LatitudeGraden = intval($Latitude);
	$LongitudeGraden = intval($Longitude);

	$LatitudeMinuten = ($Latitude - $LatitudeGraden) * 60.0;
	$LongitudeMinuten = ($Longitude - $LongitudeGraden) * 60.0;
	
	echo $LatitudeGraden." ".$LatitudeMinuten."<br> ".$LongitudeMinuten.$LongitudeGraden;
?>