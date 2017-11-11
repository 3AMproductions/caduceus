<?php
if ( stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml") || $_GET['xml']=="true") {
  header("Content-type: application/xhtml+xml");
	echo '<?xml version="1.0" encoding="utf-8"?>'."\n";
	echo '<?xml-stylesheet href="#stylesheet" type="text/css"?>'."\n";
}
else {
  header("Content-type: text/html");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <title>The Caduceus Corporation - FAQ</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml;charset=utf-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="Description" content="The Caduceus Corporation" />
	<meta name="Keywords" content="Needle Zap" />
	<meta name="Author" content="3AM Productions" />
	<meta name="Copyright" content="2005" />
  <link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="caduceus.css" type="text/css" media="screen" id="stylesheet" />
</head>
<body>
<div id="header"><h1>The Caduceus Corporation</h1></div><!--header-->
<div id="containerleft">
<div id="containerright">
<div id="topmiddle"><div id="topleft"></div><div id="topright"></div></div><!--topmiddle-->
<div id="navholder">
	<div id="navtop"><div id="navtopleft"></div><div id="navtopright"></div></div><!--navtop-->
		<div id="navleft">
		<div id="navright">
			<ul id="nav">
		    <li><a href="index.php" accesskey="h"><em>H</em>ome</a></li>
				<li><a href="zap.php" accesskey="n"><em>N</em>eedle Zap</a>
					<ul>
						<li>F.A.Q.</li>
						<li class="pdf"><a href="docs/flyer.pdf" accesskey="f"><em>F</em>lyer</a></li>
						<li class="pdf"><a href="docs/brochure.pdf" accesskey="b"><em>B</em>rochure</a></li>
					</ul>
				</li>
				<li><a href="products.php" accesskey="p"><em>P</em>roducts</a></li>
				<li><a href="order.php" accesskey="o"><em>O</em>rder</a></li>
				<li><a href="contact.php" accesskey="c"><em>C</em>ontact Us</a></li>
			</ul><!--nav-->
		</div><!--navright-->
	</div><!--navleft-->
  <div id="navbottom"><div id="navbottomleft"></div><div id="navbottomright"></div></div><!--navbottom-->
</div><!--navholder-->

<div id="content">
<!-- BEGIN PAGE CONTENT -->
<h2>NeedleZap F.A.Q.</h2>
<h3>Frequently Asked Questions About the NeedleZap Product</h3>
<dl>
<dt>How does the NeedleZap work?</dt>
<dd>When the metal needle is inserted into the NeedleZap receptacle, the unit uses low voltage electricity to generate temperatures in excess of 2200 degrees to disintegrate the needle, leaving only the syringe intact.</dd> 
<dt>Is the device <acronym title="Food &amp; Drug Administration">FDA</acronym> approved?</dt>
<dd>Yes, the <acronym title="Food &amp; Drug Administration">FDA</acronym> has <a href="http://www.fda.gov/cdrh/mda/docs/p010065.html" title="Approval Information">approved</a> the NeedleZap to be used in place of a sharps container.</dd>
<dt>Does the NeedleZap meet <acronym title="Occupational Safety &amp; Health Administration">OSHA</acronym> standards?</dt>
<dd>Yes, the NeedleZap can help bring you in compliance with the <acronym title="Occupational Safety &amp; Health Administration">OSHA</acronym> Bloodborne Pathogens Standard and the NeedleZap meets the <acronym title="Occupational Safety &amp; Health Administration">OSHA</acronym> one handed procedure standard.</dd>
<dt>The needle is completely destroyed?</dt>
<dd>Yes, the needle is completely disintegrated, with nothing sharp left to dispose of, just the syringe.</dd>
<dt>What size needles can the unit handle?</dt>
<dd>The NeedleZap can accept all standard needle sizes, from 16 to 30 gauge, up to 2.5 inches in length.</dd>
<dt>Is the unit dangerous?</dt>
<dd>No. The unit is only activated when a needle is inserted, and the receptacle is not large enough to insert fingers.</dd>
<dt>Is the unit portable?</dt>
<dd>Yes! The NeedleZap operates off rechargeable batters and an AC or DC charger. For healthcare professionals or law enforcement professionals on the go, you may purchase our Portable NeedleZap Kits.</dd>
<dt>I'm a diabetic, and I have to dispose of needles. Can I use NeedleZap?</dt>
<dd>Absolutely! If you have needles you need to safely and effectively dispose of, the NeedleZap is the unit for you. And it's cost effective for home or professional use.</dd>
<dt>What are some of the other benefits of NeedleZap?</dt>
<dd>Use of the NeedleZap can reduce employer liability and the risks associated with accidental needle sticks. It can also help reduce the costs of biohazard disposal, allowing 30-35% more syringes to fit in typical disposal containers.</dd>
<dt>Why not just use Safety Needles?</dt>
<dd>Safety Needles require special staff training and still don't completely eliminate the risks of accidental needle stick. The NeedleZap requires virtually no training to use effectively and completely eliminates the risk of accidental sticks. All while allowing your staff to use standard syringes, which cost less, cause less fatigue, and less patient discomfort.</dd>
</dl>
<!--END PAGE CONTENT-->
</div><!--content-->
<div id="bottommiddle">
  <div id="bottomleft"></div><a href="http://www.3amproductions.net" title="Come see how different things look @3AM"><img id="bottomright" src="images/bottomright.gif" alt="A 3AM Production" /></a>
  <div class="validation">VALIDATE: <a href="http://validator.w3.org/check?uri=<?php echo htmlspecialchars($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']); ?>" title="Validate this XHTML">XHTML 1.1</a> | 
    <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo htmlspecialchars($_SERVER['HTTP_HOST']); ?>/caduceus.css" title="Validate this CSS">CSS</a>
  </div><!--validation-->
</div><!--bottommiddle-->
</div><!--containerright-->
</div><!--containerleft-->
</body>
</html>
