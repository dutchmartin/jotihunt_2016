<html>
<head>
<style>
html
{
	background-color:#000;
	color:#FFF;
}
.button
{
	width:20px;
}
table, th, td 
{
   border-collapse: collapse;
   border: 1px solid white;
}
</style>
<script>
<?php include "../js/deletecoord.js"?>
</script>
</head>
<div style="margin:auto;width:200px;text-align:center">
<h2>Nieuwe vossenlocatie</h2>
<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">
	Name: <br><input type="text" name="name"><br>
	Longitude: <input type="number" name="lng"><br>
	Latitude: <input type="number" name="lin"><br>
  <input type="submit" value="Verstuur">
</form>
</div>
<table>
<?php
// check for form data
// Required field names
$required = array('name', 'lng', 'lin');

// Loop over field names, make sure each one exists and is not empty
$error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $error = true;
  }
}

if ($error) {
	echo "<p>All fields are required.</p>";
} else {
	require "../includes/changecoord.php";
	changecoord(testinput( $_POST['name']), testinput($_POST['lng']), testinput($_POST['lin']) );
	echo"succesfully added";
}

include '../includes/geo.php';
?>

</table>
</html>
