<html>
<head>
	<style>
		@font-face   {font-family: Calibri;}
		h1           {font-size: 60pt; font-family: Calibri; color: white }
		body         {background-image: url('assets/pictures/blackDots.png');}
		.column      {float: left; width: 33.33%; font-size: 40pt; font-family: Calibri; color: white;}
		.row:after   {float: center; content: ""; display: table; clear: both; font-size: 12pt; font-family: Calibri, Helvetica, sans-serif; color: white;}
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
		$maplist  = array("Awoken", "Blood Covenant", "Blood Run", "Corrupted Keep", "Ruins Of Sarnath", "Molten Falls", "Vale Of Pnath");
		
		$map = $maplist[array_rand($maplist)];
	
		$p1c1 = $p1champs[array_rand($p1champs)];
		$p1champs = \array_diff($p1champs, [$p1c1]);
		$p1c2 = $p1champs[array_rand($p1champs)];
		$p1champs = \array_diff($p1champs, [$p1c2]);
		$p1c3 = $p1champs[array_rand($p1champs)];
		$p1champs = \array_diff($p1champs, [$p1c3]);
	
		$p2c1 = $p2champs[array_rand($p2champs)];
		$p2champs = \array_diff($p2champs, [$p2c1]);
		$p2c2 = $p2champs[array_rand($p2champs)];
		$p2champs = \array_diff($p2champs, [$p2c2]);
		$p2c3 = $p2champs[array_rand($p2champs)];
		$p2champs = \array_diff($p2champs, [$p2c3]);
	
		$paste = "$map  [$p1c1,$p1c2,$p1c3]  VS  [$p2c1,$p2c2,$p2c3]";
		
		echo"<div>
				<a class='link' href='/quake.php'>Standard Version</a>
				<center><input type=button value='RE-ROLL' onClick='window.location.reload()'><input type='text' value='$paste' id='copybox' size='70' align='center'><button onclick='copyclip()'>COPY</button></center>
				<div></div><h1><center>", $map, "</center></h1>
			</div>";
		echo"<div class='row'> 
				<div class='column' align='right'>
					$p1c1<br>
					$p1c2<br>
					$p1c3<br>
				</div>
					<div class='column'>
						<center><br>VS</center>
					</div>
				<div class='column' align='left'>
					$p2c1<br>
					$p2c2<br>
					$p2c3<br>
				</div>
			</div>";
	?>
<footer class='footer'></footer>
</body>
</html>	
