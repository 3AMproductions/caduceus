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
  <title>The Caduceus Corporation - Contact</title>
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
				<li><a href="zap.php" accesskey="n"><em>N</em>eedle Zap</a></li>
				<li><a href="products.php" accesskey="p"><em>P</em>roducts</a></li>
				<li><a href="order.php" accesskey="o"><em>O</em>rder</a></li>
				<li>Contact Us</li>
			</ul><!--nav-->
		</div><!--navright-->
		</div><!--navleft-->
		<div id="navbottom"><div id="navbottomleft"></div><div id="navbottomright"></div></div><!--navbottom-->
</div><!--navholder-->

<div id="content">
<!-- BEGIN PAGE CONTENT -->
<h2>Contact Us</h2>
<h3>For purchasing, sales questions, or technical support...</h3>
<p>Orders or written correspondence may be sent to:</p><address>Caduceus Corporation<br/>5333 Triple Crown Court<br/>Columbus, Ohio 43221</address>
<p>To speak with a sales representative, or to send a fax:</p><address>614.527.4581 v.<br/>614.573.6676 f.</address>
<p>And of course, you can always send us e-mail:</p><address><a href="mailto:sales@needle-zapper.com">sales@needle-zapper.com</a></address>
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
