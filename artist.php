<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style.css" />

<!--						FONT SCRIPTS 								-->
<script src="http://use.edgefonts.net/sanvito-pro-display.js"></script>

<!--						IMPORT SCRIPTS								-->
<!--<link type="text/css" rel="stylesheet" href="skin/jPlayer.Blue.Monday.2.2.0/blue.monday/jplayer.blue.monday.css" />-->
<link type="text/css" rel="stylesheet" href="plugin/jscrollpane/jquery.jscrollpane.css" />
<link type="text/css" rel="stylesheet" href="skin/jplayer_hot_ice/jplayer_hot_ice_skin.css" />
<!-- <link type="text/css" rel="stylesheet" href="skin/jplayer_hot_ice/jplayer_hot_ice_skin_revised.css" /> -->

<!--						IMPORT LIBS									-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<!--						PLUGINS										-->
<script type="text/javascript" src="plugin/jQuery.jPlayer.2.2.0/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="plugin/jQuery.jPlayer.2.2.0/add-on/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="plugin/jQuery.jPlayer.2.2.0/add-on/jquery.jplayer.inspector.js"></script>
<script type="text/javascript" src="js/to-title-case.js"></script>
<script type="text/javascript" src="plugin/jscrollpane/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="plugin/jscrollpane/jquery.mousewheel.js"></script>
<!-- <script type="text/javascript" src="plugin/jscrollpane/jScrollPane.js"></script>-->

<!--						SCRIPTS USING APIS							-->
<script type="text/javascript" src="js/clickSearch.js"></script>
<script type="text/javascript" src="js/searchSongs.js"></script>

<!--						SCRIPTS										-->
<script type="text/javascript" src="js/instance_jplayer.js"></script>
<script type="text/javascript" src="plugin/jscrollpane/jquery.jplayerskin.js"></script>
<script>
function setSearchPlaceholder(selected){
	var selectedTxt = selected.options[selected.selectedIndex].text;
	$(".searchField").attr("placeholder", selectedTxt + "...");
}
</script>

<title>Catch That Beat: Artist</title>
</head>

<body>
	<div id="pageWrap">
		<div id="heading">
			<?php include("include/header.html"); ?>
		</div>
		<div id="artist_info">
			<div id="artist_name">artist name</div>
			<div id="related_names">alias</div>
			<div id="info">artist info</div>
		</div>
		<div id="slideshow">insert images</div>
		<div id="jplayer_container"></div>
		<div id="song_list">
			<table cellspacing="1" id="song_table">
				<thead>
					<th class="add"></th>
					<th class="track_name">Track Name</th>
					<th class="artist">Artist</th>
					<th class="album">Album</th>
					<th class="time">Time</th>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</body>
</html>