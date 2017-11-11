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
  <title>The Caduceus Corporation - NeedleZap</title>
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
				<li>Needle Zap
					<ul>
						<li><a href="faq.php" accesskey="q">F.A.<em>Q</em>.</a></li>
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
<!--BEGIN PAGE CONTENT-->
<h2>Introducing the Needle Zapper!</h2>
<h3>A revolutionary new way to safely dispose of used needles. FDA Approved!</h3>
<p>It's a frantic day... You're overworked and tired...</p>
<p>Then it happens: a single accidental stick can cause you countless days, weeks, and months of worry. Along with the risk of accidental HIV or hepatitis infection, a single needle stick can rack up more than $3000 in testing costs and lost time.</p>
<p>NeedleZap offers a cost effective solution to creating a safer work environment. Easy to use with no special training, the NeedleZap unit can even be operated with one hand. Simply insert the needle into the receptacle, and NeedleZap unit "zaps" away the needle with temperatures of over 2200&deg;F, leaving the tip safe to the touch.</p>
<p>The NeedleZap unit is <acronym title="Food &amp; Drug Administration">FDA</acronym> Approved (<a href="http://www.fda.gov/cdrh/mda/docs/p010065.html" title="Approval Information">#PO10065</a>) and compliant with the <acronym title="Occupational Safety &amp; Health Administration">OSHA</acronym> Bloodborne Pathogens Standard (EN 60601-1, EN 60601-1-2, EN 1441, EN 61010-1). Best of all the NeedleZap is affordable. Lower your risk of accidental needle sticks.</p>
<p>Low Cost. High Tech. <acronym title="Food &amp; Drug Administration">FDA</acronym> Approved.</p>
<p>Needle Zap is an ideal solution for group practices, solo practices, home care givers and diabetics. Anyone who needs to safely dispose of needles can easily use the NeedleZap to eliminate risks!</p>
<p>Want to know more? Check out the <a href="faq.php">NeedleZap <acronym title="Frequently Asked Questions">FAQ</acronym></a></p>
<p>Download the <a href="docs/flyer.pdf">NeedleZap Flyer</a> <img src="images/pdf.gif" alt="PDF" title="Opens PDF Document" /></p>
<p>Download the <a href="docs/brochure.pdf">NeedleZap Brochure/Order Form</a> <img src="images/pdf.gif" alt="PDF" title="Opens PDF Document" /></p>
<p><a href="order.php"><strong>Order your NeedleZap Today!</strong></a></p>
<img src="images/demo.jpg" alt="[NeedleZap Demonstration]" />
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
