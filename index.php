<!doctype html>
<html lang="en">
<head>
	<style>
		h1 {text-align: center;}
		button{
			width:100%;
		}
		input{
			text-align: center;
			width:20%;
		}
		table,td,th{
			font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
			
			border-collapse: collapse;
		}
		img
		{
			border: 1px solid;
		}
		.news{
			vertical-align: top;
			display: inline-block;
			margin-right: 50px;
		}
		.menu{
			vertical-align: top;
			display: inline-block;
			margin-top : 50px;
			margin-left: 30px;
		}
	</style>

	<meta charset="UTF-8">
	<meta name="description" content="Pixel avatar generator! Especially for game developers!">
	<meta name="keywords" content="avatar,generator,pixel,art,random,game,development,gamedev">
	<meta name="author" content="Jon Ander Besga">	

	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="image_src" href="/imagesrc.png">
	<meta property="og:image" content="http://pixelyoutool.com/images/imagesrc.png"/>

	<title>PixelYou Tool</title>

	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "089667a7-ab6f-4428-9ffb-410fbcd76ac2", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>	
</head>
<body>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- PixelYouAd -->
<div style="text-align:center;">
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8932449370541921"
     data-ad-slot="4775644899"></ins>
</div>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	<?php
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$start = $time;
	?>

	<h1><img src="/images/logo.png"  style="border-style: none;" alt="Logo" width="100%" height="100%"></h1>

	<div align="center">
		<p id="totalPieces"></p>
		<hr>
		<span style="align:left;">Coding by <a href="http://www.twitter.com/jabesga" target="_blank"><b>@jabesga</b></a> ||</span>
		<span style="text-align:right;">Spriting by <a href="http://www.twitter.com/nagoreina" target="_blank"><b>@nagoreina</b></a> ||</span>
		<span class='st_fblike_hcount' displayText='Facebook Like'></span>
		<span class='st_facebook_hcount' displayText='Facebook'></span>
		<span class='st_twitter_hcount' displayText='Tweet'></span>
		<span class='st_twitterfollow_hcount' displayText='Twitter Follow' st_username='jabesga'></span>
		<span class='st_plusone_hcount' displayText='Google +1'></span>
		<hr>
	</div>
	<?php
	$head_files = count(glob($_SERVER['DOCUMENT_ROOT'].'/images/head/*'));
	$hair_files = count(glob($_SERVER['DOCUMENT_ROOT'].'/images/hair/*'));
	$beard_files = count(glob($_SERVER['DOCUMENT_ROOT'].'/images/beard/*'));
	$head_accessories = count(glob($_SERVER['DOCUMENT_ROOT'].'/images/headac/*'));
	$arms_files = count(glob($_SERVER['DOCUMENT_ROOT'].'/images/arms/*'));
	$torso_files = count(glob($_SERVER['DOCUMENT_ROOT'].'/images/torso/*'));
	$legs_files = count(glob($_SERVER['DOCUMENT_ROOT'].'/images/legs/*'));
	?>
	<canvas id="canvas" width="500" height="500" style="display:none;"></canvas>
	<div style="text-align:center;">
	<div class="menu">
<table width="395px" style="border-style: none;">
				<tr>
					<th>	
					</th>
					<th width="35%">
						Code	
					</th>
					<th>	
					</th>
				</tr>
				<!--
				<tr>
					<td>
						<button class="menubutton" onclick="previousHead()">Previous Head</button>
					</td>
					<td>
						<input id="head" type="text" value="">
					</td>
					<td>
						<button class="menubutton" onclick="nextHead()">Next Head</button>
					</td>
				</tr>
			-->
				<tr>
					<td>
						<button onclick="previousHair()">Previous Hair</button>			
					</td>
					<td>
						<input id="hair" type="text" value="">
					</td>
					<td>
						<button onclick="nextHair()">Next Hair</button><br>
					</td>
				</tr>
				<tr>
					<td>
						<button onclick="previousBeard()">Previous Beard</button>			
					</td>
					<td>
						<input id="beard" type="text" value="">
					</td>
					<td>
						<button onclick="nextBeard()">Next Beard</button><br>
					</td>
				</tr>
				<tr>
					<td>
						<button onclick="previousHeadAc()">Previous Head Accessories</button>			
					</td>
					<td>
						<input id="headac" type="text" value="">
					</td>
					<td>
						<button onclick="nextHeadAc()">Next Head Accessories</button><br>
					</td>
				</tr>
				<tr>
					<td>
						<button onclick="previousArms()">Previous Arms</button>			
					</td>
					<td>
						<input id="arms" type="text" value="">
					</td>
					<td>
						<button onclick="nextArms()">Next Arms</button><br>
					</td>
				</tr>
				<tr>
					<td>
						<button onclick="previousTorso()">Previous Torso</button>			
					</td>
					<td>
						<input id="torso" type="text" value="">
					</td>
					<td>
						<button onclick="nextTorso()">Next Torso</button><br>
					</td>
				</tr>				
				<tr>
					<td>
						<button onclick="previousLegs()">Previous Legs</button>			
					</td>
					<td>
						<input id="legs" type="text" value="">
					</td>
					<td>
						<button onclick="nextLegs()">Next Legs</button><br>
					</td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<button onclick="makeRandom()">Random</button><br>
					</td>
					<td>
					</td>
				</tr>		
				<tr>
					<td>
					</td>
					<td>
						<button onclick="applyConfig()">Apply Code</button><br>
					</td>
					<td>
					</td>
				</tr>													
				<tr>
					<td>
						Background Color
						
					</td>
					<td>
						<input onchange="changeBackgroundColor()" id="backColor" type="color" name="favcolor" value="#FFFFFF">
					</td>
				</tr>
				
				
				<tr>
					<td></td>
					<td>
						<a id="downloadButton" href="#" onclick=onDownload() download="avatar.png"><button type="button">Download image</button></a>									
					</td>
					<td></td>
				</tr>			
			</table>
	</div>
		<img align="center" id="canvasImg" alt="Loading image" style="border-style:none;">
	<div class="news" align="text-align:right">
<table width="400px" style="text-align:justify;">
			<tr>
				<th>
					<h2 style="text-align:center;"><ins>WHAT IS PIXELYOU?</ins></h2>
				</th>
			</tr>				
				<tr>
					<td>
						<span>PixelYou Tool is a pixel avatar  generator inspired by the art
							of the artist Andrio and the twitter pictures of game developers like Notch. This generator will be improved for the next weeks. With more accesories like hats, pets, backgrounds
							and anything that comes us to mind.<br>Also if you're an artist and want to contribute contact @jabesga.</span>
					</article>
					</td>
				</tr>
			<tr>
				<th>
					<h2 style="text-align:center;"><ins>LAST UPDATES</ins></h2>
				</th>
			</tr>				
				<tr>
					<td>
					<article>
						<span style="text-align:left;"><b>31/03/2014: </b></span>
						<span>
							<br>* Version 1.0 PixelYouTool Generator!
							<br>* Added beard section
							<br>* Added Head Accessories Section
							<br>* Random Avatar option
							<br>* Download name is the code needed for make the character</span>
					</article>
					</td>
				</tr>				
			</tr>
		</table>		
					
	</div>
	</div>
	<div align="center" style="margin-top: 20px;">
	</div>
	<div align="text-align:left">
		<!--
		<p>
			<b>Game Developers Skins: </b>
			<span><button style="width:7%;" onclick="onClickApplyConfig(0,2,0,0,0)">@someone</button></span>
			<span><button style="width:7%;" onclick="onClickApplyConfig(0,2,0,0,0)">@someone</button></span>
			<span><button style="width:7%;" onclick="onClickApplyConfig(0,2,0,0,0)">@someone</button></span>
			<span><button style="width:7%;" onclick="onClickApplyConfig(0,2,0,0,0)">@someone</button></span>
			<span><button style="width:7%;" onclick="onClickApplyConfig(0,2,0,0,0)">@someone</button></span>
		</p>
	-->
	</div>
	<footer style="text-align:center">
		<span style="align:left;">Inspired by the art of <a href="http://www.twitter.com/_andrio" target="_blank"><b>Andrio</b></a> ||</span>
		<?php
		$time = microtime();
		$time = explode(' ', $time);
		$time = $time[1] + $time[0];
		$finish = $time;
		$total_time = round(($finish - $start), 4);
		echo 'Page generated in '.$total_time.' seconds.';
		?>
	</footer>
	<script>var numHair = "<?= $hair_files; ?>";</script>
	<script>var numHead = "<?= $head_files; ?>";</script>
	<script>var numBeard = "<?= $beard_files; ?>";</script>
	<script>var numHeadAc = "<?= $head_accessories; ?>";</script>
	<script>var numArms = "<?= $arms_files; ?>";</script>
	<script>var numTorso = "<?= $torso_files; ?>";</script>
	<script>var numLegs = "<?= $legs_files; ?>";</script>
	<script src="/scripts/generator.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-49582106-1', 'pixelyoutool.com');
	  ga('send', 'pageview');

	</script>	
</body>
</html>