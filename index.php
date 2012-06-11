<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>:: Mebl Comerc ::</title>
<link rel="shortcut icon" href="favicon.ico" >
<meta name="keywords" content="lumber, furnishing, furniture, wood, battens, parquet, oak, cent, drvo, lajsne, parket, obrada drveta, lipa, hrast, opremanje, furnir" />
<meta name="description" content="Mebl Comerc d.o.o. je firma koja se bavi preradom drveta. Središte firme je u Novom Sadu, a pogon u Bačkom Jarku. U sastavu preduzeća nalazi se pogon primarne prerade (pilana) i pogon finalne prerade, gde se vrši izrada raznog komadnog nameštaja kao i opremanje enterijera. Takođe, posedujemo i vakum sušare za sušenje rezane građe." />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12892171-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="main-page" align="center">
<table align="center">
<tr>
	<td><a href="srb/"><img border="0" src="images/srb.png" /></a></td>
	<td><a href="eng/"><img border="0" src="images/eng.png" /></a></td>
</tr>
<tr align="center" style="font-size: 25px; color: blue;">
	<td><b><a href="srb/">Srpski</a></b></td>
	<td><b><a href="eng/">English</a></b></td>
</tr>
<tr>
	<td colspan="2" align="center">
	<br/>
	<div>
	<?php
		$filename= "counter.txt" ;
		$fd = fopen ($filename , "r") or die ("Can't open $filename") ;
		$fstring = fread ($fd , filesize ($filename)) ;
		//echo "$fstring" ;
		fclose($fd) ;

		$fd = fopen ($filename , "w") or die ("Can't open $filename") ;
		$fcounted = $fstring + 1 ;
		$fout= fwrite ($fd , $fcounted ) ;
		fclose($fd) ;
	?>
	</div>
	</td>
</tr>
</table>
</div>
</body>
</html>
