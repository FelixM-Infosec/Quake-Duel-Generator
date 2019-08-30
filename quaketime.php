<html>
<head>
	<?php
		$maplist  = array("Awoken", "Blood Covenant", "Blood Run", "Corrupted Keep", "Ruins Of Sarnath", "Molten Falls", "Vale Of Pnath");
		$map = $maplist[array_rand($maplist)];
		$mapbg = "/assets/pictures/backgrounds/$map.png";
	?>
	<style>
		@font-face   {font-family: RoadRage; src: url('assets/fonts/RoadRage.otf'); }
		h1           {font-size: 60pt; font-family: RoadRage; color: white }
		body         {background-image: url('<?php echo $mapbg ?>');}
		.column      {float: left; width: 33.33%; font-size: 70pt; font-family: RoadRage; color: red;}
		.row:after   {float: center; content: ""; display: table; clear: both;}
		.footer      {position:absolute; bottom:2; align: right; font-size: 12pt; font-family: Calibri, Helvetica, sans-serif; color: white;}
		.link        {font-size: 12pt; font-family: Calibri, Helvetica, sans-serif; color: white;}
	</style>
	<script>
		function copyclip() {var copyText = document.getElementById("copybox"); copyText.select(); document.execCommand("copy");}
	</script>
	<title>Quake Duel Generator</title>
</head>

<body>
	<?php
		$p1champs = array("Nyx", "Scalebearer", "Anarki", "Slash", "Clutch", "Galena", "Ranger", "Visor", "Sorlag", "BJ", "Doom", "Keel", "Strogg", "Death Knight", "Athena", "Eisen");
		$p2champs = array("Nyx", "Scalebearer", "Anarki", "Slash", "Clutch", "Galena", "Ranger", "Visor", "Sorlag", "BJ", "Doom", "Keel", "Strogg", "Death Knight", "Athena", "Eisen");
		
		$p1c1 = $p1champs[array_rand($p1champs)];
		$p1champs = \array_diff($p1champs, [$p1c1]);
	
		$p2c1 = $p2champs[array_rand($p2champs)];
		$p2champs = \array_diff($p2champs, [$p2c1]);
	
		$p1c1pic = "/assets/pictures/champs/$p1c1.png";
		$p2c1pic = "/assets/pictures/champs/$p2c1.png";
	
		$paste = "$map  [$p1c1]  VS  [$p2c1]";
		
		echo"<div style=background-image: url('$mapbg')>
				<a class='link' href='/quake.php'>Standard Version</a> <a class='link' href='/quakesimple.php'>Simple Version</a>
				<center><input type=button value='⟳' onClick='window.location.reload()'><input type='text' value='$paste' id='copybox' size='70' align='center'><button onclick='copyclip()'>COPY</button></center><br>
				<div><br></div><br><h1><center>", $map, "</center></h1><br>
			</div>";
		
		echo"<div class='row'> 
				<div class='column'>
					<img src='$p1c1pic' alt='' align='right' style='width:150px;height:150px;'>
				</div>
					<div class='column'>
						<center>VS</center>
					</div>
				<div class='column'>
					<img src='$p2c1pic' alt='' align='left' style='width:150px;height:150px;'>
				</div>
			</div>";
	?>
<footer class='footer'>Made By   <a class='link' href='https://www.twitch.tv/bobbincat'>twitch.tv/bobbincat</a></footer>
</body>
</html>	
