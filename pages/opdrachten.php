<style>
html
{
	color:#FFF;
}
</style>
<?php
$file = file_get_contents("http://jotihunt.net/api/1.0/opdracht", true);
$data = json_decode($file);
$error = false;

foreach ($data->data as $opdracht)
{
	if($opdracht->eindtijd>microtime(true))
	{
		$file = file_get_contents("http://jotihunt.net/api/1.0/opdracht/".$opdracht->ID, true);
		$text = json_decode($file);
		echo"<br><h1>". $opdracht->titel .'</h1>';
		$filtered = preg_replace("/<img[^>]+\>/i", "(image) ", $text->data[0]->inhoud);
		echo($filtered);
	}
	else
	{
		if($error = false)
		{
		$error = true;
		echo '<br><h1>Er zijn geen opdrachten</h1>';
		}
	}
}
?>