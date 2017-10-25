<?php
$table = "<tr>
	<th> X </th>
    <th> naam </th>
    <th> latitude </th>
    <th> longitude </th>
 </tr>";
require_once("mysql.php");
// load the sql data
$result = sqlquery('SELECT id, name, lat, lng FROM `locations` order by time');
//var_dump($data->fetch_assoc());
if ($result->num_rows > 0) {
	echo $table;
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$image = "<img class='button' src='../img/cancel.svg' onclick = deletecoord(".$row['id'].") />";
	        echo "<tr> <td>".$image."</td> <td>" . $row["name"]. "</td><td>" . $row["lat"]. "</td><td>" . $row["lng"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
?>