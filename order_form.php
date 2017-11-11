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
  <title>The Caduceus Corporation - Thank You</title>
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
				<li><a href="contact.php" accesskey="c"><em>C</em>ontact Us</a></li>
      </ul><!--nav-->
		</div><!--navright-->
	</div><!--navleft-->
<div id="navbottom"><div id="navbottomleft"></div><div id="navbottomright"></div></div><!--navbottom-->
</div><!--navholder-->

<div id="content">
<!--BEGIN PAGE CONTENT-->
<h2>Thank You For Your Order!</h2>
<h3>Your order is on the way to us for processing...</h3>
<p>Thank you for your order! You should be getting an e-mail message shortly confirming your order. Please allow 1-2 weeks for delivery.</p>
<p>If you have any questions about your order status, please <a href="contact.php">Contact Us</a>.</p>
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
