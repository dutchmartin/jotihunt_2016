<!DOCTYPE html>
<html>
  <head>
    <title>jotihunt dashboard</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
    <script src="js/functions.js"></script>
  </head>
  <body>
  
  <div id=wrapper>
    <div id="map"></div>
    <div id="floating-panel">
    	<input onclick="refreshMarkers();" type=button value="Refresh Markers">
     	<input onclick="clearMarkers();" type=button value="Hide Markers">
     	<input onclick="showMarkers();" type=button value="Show Markers">
    </div>

    <div id="menu">
    	<img id= "logo" class="icon" src="img/scout_emblem.svg"></img>
    	<a class="button" data-fancybox-type="iframe" href="pages/managegeo.php"><img class="icon" src="img/compass.svg"></img></a>
    	<a class="button" data-fancybox-type="iframe" href="pages/opdrachten.php"><img class="icon" src="img/earth-globe.svg"/></a>
    	<a class="button" data-fancybox-type="iframe" href=""><img class="icon" src="img/placeholder.svg"/></a>
    	<a class="button" data-fancybox-type="iframe" href=""><img class="icon" src="img/settings.svg"/></a>
    	<?php include "includes/vossenteams.php";?>
    </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9OuQxZKTyoK5Irdkksgzbn4Mi0lyd58E&callback=initMap"
    async defer></script>
  </body>
</html>