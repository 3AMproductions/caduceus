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
  <title>The Caduceus Corporation - Products</title>
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
				<li>Products</li>
				<li><a href="order.php" accesskey="o"><em>O</em>rder</a></li>
				<li><a href="contact.php" accesskey="c"><em>C</em>ontact Us</a></li>
    	</ul><!--nav-->
		</div><!--navright-->
	</div><!--navleft-->
<div id="navbottom"><div id="navbottomleft"></div><div id="navbottomright"></div></div><!--navbottom-->
</div><!--navholder-->

<div id="content">
<!-- BEGIN PAGE CONTENT -->
<h2>Product Listings</h2>
<h3>Featuring a Full Range of Medical and Home Convalescence Care Products!</h3>
          
<div class="productHolder">
  <h4>Now Offering...</h4>
	<p><strong>Now offering lab coats and barrier jackets!</strong></p>
  <p>Email request with style and size.</p>
  <p><strong><a href="http://www.needle-zapper.com/contact.php">Call today to place your order!</a></strong></p>
</div><!--productHolder-->

<div class="productHolder">
	<h4>NeedleZap Standard Unit</h4>
	<div class="imageHolder"><img src="images/units.jpg" alt="[Standard NeedleZap Unit]" /></div><!--imageHolder-->
	<p>The NeedleZap Standard Unit comes in either white or black finishes, with either an AC or DC charger.</p>
	<p><strong>NeedleZap Standard Unit $199.00</strong></p>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	  <fieldset>
      Color <input type="hidden" name="on0" value="Color" /><select name="os0"><option value="White">White</option><option value="Black">Black</option></select>
      Adapter Type <input type="hidden" name="on1" value="Adapter" /><select name="os1"><option value="AC Adapter">AC Adapter</option><option value="DC (Car) Adapter">DC (Car) Adapter</option></select>
      <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
			<input type="hidden" name="add" value="1" />
      <input type="hidden" name="cmd" value="_cart" />
      <input type="hidden" name="business" value="sales@1ezclaim.com" />
			<input type="hidden" name="item_name" value="NeedleZap Standard Unit" />
      <input type="hidden" name="item_number" value="NZ-STANDARD" />
			<input type="hidden" name="amount" value="199.00" />
			<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
      <input type="hidden" name="cn" value="How did you hear about us?" />
			<input type="hidden" name="currency_code" value="USD" />
			<input type="hidden" name="lc" value="US" />
		</fieldset>
  </form>
</div><!--productHolder-->

<div class="productHolder">
  <h4>NeedleZap Mobile Health Kit</h4>
	<div class="imageHolder"><img src="images/mobile_kit.jpg" alt="[Mobile NeedleZap Unit]" /></div><!--imageHolder-->
	<p>For mobile needs, the NeedleZap Mobile Health Kit contains a White NeedleZap unit, gloves and disinfectant wipes with either an AC or DC charger, in a white portable case.</p>
	<p><strong>NeedleZap Mobile Health Kit $229.00</strong></p>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<fieldset>
      <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
			<input type="hidden" name="add" value="1" />
      <input type="hidden" name="cmd" value="_cart" />
      <input type="hidden" name="business" value="sales@1ezclaim.com" />
			<input type="hidden" name="item_name" value="NeedleZap Mobile Health Kit" />
      <input type="hidden" name="item_number" value="NZ-TRAVEL" />
			<input type="hidden" name="amount" value="229.00" />
			<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
      <input type="hidden" name="cn" value="How did you hear about us?" />
			<input type="hidden" name="currency_code" value="USD" />
			<input type="hidden" name="lc" value="US" />
		</fieldset>
  </form>
</div><!--productHolder-->

<div class="productHolder">
	<h4>NeedleZap Law Enforcement Kit</h4>
	<div class="imageHolder"><img src="images/law_kit.jpg" alt="[Law Enforcement NeedleZap Unit]" /></div><!--imageHolder-->
	<p>The NeedleZap unit is perfect for law enforcement applications, allowing safe needle disposal, while preserving the syringe if necessary for evidence. The Law Enforcement Kit inclues a Black NeedleZap unit, gloves, disinfectant wipes, evidence tubes and either an AC or DC charger, all in a portable black case.</p>
	<p><strong>NeedleZap Law Enforcement Kit $249.00</strong></p>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	  <fieldset>
      <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
			<input type="hidden" name="add" value="1" />
      <input type="hidden" name="cmd" value="_cart" />
      <input type="hidden" name="business" value="sales@1ezclaim.com" />
			<input type="hidden" name="item_name" value="NeedleZap Law Enforcement Kit" />
      <input type="hidden" name="item_number" value="NZ-LAW" />
			<input type="hidden" name="amount" value="249.00" />
			<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
      <input type="hidden" name="cn" value="How did you hear about us?" />
			<input type="hidden" name="currency_code" value="USD" />
			<input type="hidden" name="lc" value="US" />
		</fieldset>
  </form>
</div><!--productHolder-->

<div class="productHolder">
  <h4>Gloves</h4>
	<div class="imageHolder"><img src="images/gloves.jpg" alt="[Latex Gloves]" /></div><!--imageHolder-->
	<div class="tablewrapper">
	<table>
		<thead>
			<tr>
				<th>Latex Gloves</th>
				<th>Vinyl Gloves</th>
				<th class="last">Nitrile Gloves</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
          <strong>Standard</strong><br/> $39.00 Per Case
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					  <fieldset>
              <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
							<input type="hidden" name="add" value="1" />
            	<input type="hidden" name="cmd" value="_cart" />
            	<input type="hidden" name="business" value="sales@1ezclaim.com" />
							<input type="hidden" name="item_name" value="All Purpose Latex Gloves" />
            	<input type="hidden" name="item_number" value="LATEX" />
							<input type="hidden" name="amount" value="39.00" />
							<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            	<input type="hidden" name="cn" value="How did you hear about us?" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="lc" value="US" />
					 	</fieldset>
          </form>
          <strong>Powder Free</strong><br/> $59.00 Per Case
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					  <fieldset>
              <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
							<input type="hidden" name="add" value="1" />
            	<input type="hidden" name="cmd" value="_cart" />
            	<input type="hidden" name="business" value="sales@1ezclaim.com" />
							<input type="hidden" name="item_name" value="Latex Gloves (Powder Free)" />
            	<input type="hidden" name="item_number" value="MG8001" />
							<input type="hidden" name="amount" value="59.00" />
							<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            	<input type="hidden" name="cn" value="How did you hear about us?" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="lc" value="US" />
					 	</fieldset>
          </form>
          <strong>Texture with Aloe</strong><br/> $69.00 Per Case
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					  <fieldset>
              <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
							<input type="hidden" name="add" value="1" />
							<input type="hidden" name="cmd" value="_cart" />
            	<input type="hidden" name="business" value="sales@1ezclaim.com" />
							<input type="hidden" name="item_name" value="Latex Gloves (Texture with Aloe)" />
							<input type="hidden" name="item_number" value="MD195013" />
            	<input type="hidden" name="amount" value="69.00" />
            	<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            	<input type="hidden" name="cn" value="How did you hear about us?" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="lc" value="US" />
					 	</fieldset>
          </form>
					</td>
					<td>
					<strong>Standard</strong><br/> $48.00 Per Case
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					  <fieldset>
              <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
							<input type="hidden" name="add" value="1" />
            	<input type="hidden" name="cmd" value="_cart" />
            	<input type="hidden" name="business" value="sales@1ezclaim.com" />
							<input type="hidden" name="item_name" value="Vinyl Gloves" />
							<input type="hidden" name="item_number" value="VINYL" />
            	<input type="hidden" name="amount" value="48.00" />
            	<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            	<input type="hidden" name="cn" value="How did you hear about us?" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="lc" value="US" />
					 	</fieldset>
          </form>
					<strong>Powder Free</strong><br/> $56.00 Per Case
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					  <fieldset>
              <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
							<input type="hidden" name="add" value="1" />
            	<input type="hidden" name="cmd" value="_cart" />
            	<input type="hidden" name="business" value="sales@1ezclaim.com" />
							<input type="hidden" name="item_name" value="Vinyl Gloves (Powder Free)" />
            	<input type="hidden" name="item_number" value="MDS192073" />
							<input type="hidden" name="amount" value="56.00" />
							<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            	<input type="hidden" name="cn" value="How did you hear about us?" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="lc" value="US" />
					 	</fieldset>
          </form>
          <strong>Powder Free with Aloe</strong><br/> $69.00 Per Case
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					  <fieldset>
              <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
							<input type="hidden" name="add" value="1" />
            	<input type="hidden" name="cmd" value="_cart" />
            	<input type="hidden" name="business" value="sales@1ezclaim.com" />
							<input type="hidden" name="item_name" value="Vinyl Gloves (Powder Free with Aloe)" />
            	<input type="hidden" name="item_number" value="MDS195073" />
							<input type="hidden" name="amount" value="69.00" />
							<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
							<input type="hidden" name="cn" value="How did you hear about us?" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="lc" value="US" />
					 	</fieldset>
          </form>
					</td>
					<td class="last">
					<strong>Standard</strong><br/> $79.00 Per Case
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					  <fieldset>
              <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
							<input type="hidden" name="add" value="1" />
            	<input type="hidden" name="cmd" value="_cart" />
            	<input type="hidden" name="business" value="sales@1ezclaim.com" />
							<input type="hidden" name="item_name" value="Nitrile Gloves" />
							<input type="hidden" name="item_number" value="NITRILE" />
            	<input type="hidden" name="amount" value="79.00" />
            	<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            	<input type="hidden" name="cn" value="How did you hear about us?" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="lc" value="US" />
					 	</fieldset>
          </form>
					<strong>Powder Free, Chemo</strong><br/> $87.00 Per Case
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					  <fieldset>
              <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
							<input type="hidden" name="add" value="1" />
            	<input type="hidden" name="cmd" value="_cart" />
            	<input type="hidden" name="business" value="sales@1ezclaim.com" />
							<input type="hidden" name="item_name" value="Nitrile Gloves (Powder Free, Chemo)" />
							<input type="hidden" name="item_number" value="MDS192084" />
            	<input type="hidden" name="amount" value="87.00" />
            	<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            	<input type="hidden" name="cn" value="How did you hear about us?" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="lc" value="US" />
					 	</fieldset>
          </form>
					<strong>Aloe-Chem Specialty</strong><br/> $89.00 Per Case
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					  <fieldset>
            	<input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
							<input type="hidden" name="add" value="1" />
            	<input type="hidden" name="cmd" value="_cart" />
            	<input type="hidden" name="business" value="sales@1ezclaim.com" />
							<input type="hidden" name="item_name" value="Nitrile Gloves (12aloChemspecialty)" />
							<input type="hidden" name="item_number" value="MDS195184" />
            	<input type="hidden" name="amount" value="89.00" />
            	<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            	<input type="hidden" name="cn" value="How did you hear about us?" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="lc" value="US" />
					 	</fieldset>
          </form>
					</td>
				</tr>				
			</tbody>
		</table>
	</div><!--tablewrapper-->
</div><!--productHolder-->

<div class="productHolder">
	<h4>Scrubs</h4>
	<div class="imageHolder"><img src="images/scrubs.jpg" alt="[Scrub Sets]" /></div><!--imageHolder-->
	<div class="tablewrapper">
	  <table>
		  <thead>
				<tr>
					<th>Standard Scrub Sets</th>
					<th class="last">Specialty Scrub Separates</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
					  <strong>Reversible Drawstring</strong><br/> $22.00 Per Set
          	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						  <fieldset>
							  <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
								<input type="hidden" name="add" value="1" />
            		<input type="hidden" name="cmd" value="_cart" />
            		<input type="hidden" name="business" value="sales@1ezclaim.com" />
								<input type="hidden" name="item_name" value="Standard Reversible Drawstring Scrub Sets" />
            		<input type="hidden" name="item_number" value="standardscrubs" />
								<input type="hidden" name="amount" value="22.00" />
								<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            		<input type="hidden" name="cn" value="How did you hear about us?" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="lc" value="US" />
					 		</fieldset>
          	</form>
          	<strong>Elastic Waist</strong><br/> $27.00 Per Set
          	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					 	  <fieldset>
            	  <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
								<input type="hidden" name="add" value="1" />
            		<input type="hidden" name="cmd" value="_cart" />
            		<input type="hidden" name="business" value="sales@1ezclaim.com" />
								<input type="hidden" name="item_name" value="Elastic Waist Scrub Sets" />
            		<input type="hidden" name="item_number" value="elasticscrubs" />
								<input type="hidden" name="amount" value="27.00" />
								<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            		<input type="hidden" name="cn" value="How did you hear about us?" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="lc" value="US" />
					 		</fieldset>
          	</form>
          	<strong>Cargo Pant, Elastic Waist</strong><br /> $29.00 Per Set
          	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						  <fieldset>
            	  <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
								<input type="hidden" name="add" value="1" />
            		<input type="hidden" name="cmd" value="_cart" />
            		<input type="hidden" name="business" value="sales@1ezclaim.com" />
								<input type="hidden" name="item_name" value="Cargo Pant, Elastic Waist Scrub Sets" />
            		<input type="hidden" name="item_number" value="cargoelasticscrubs" />
								<input type="hidden" name="amount" value="29.00" />
								<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            		<input type="hidden" name="cn" value="How did you hear about us?" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="lc" value="US" />
					 		</fieldset>
          	</form>
					</td>
					<td class="last">
            <strong>Printed Tops</strong><br /> $14.00
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						  <fieldset>
            	  <input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
								<input type="hidden" name="add" value="1" />
            		<input type="hidden" name="cmd" value="_cart" />
            		<input type="hidden" name="business" value="sales@1ezclaim.com" />
								<input type="hidden" name="item_name" value="Printed Scrub Tops" />
            		<input type="hidden" name="item_number" value="printedscrubtops" />
								<input type="hidden" name="amount" value="14.00" />
								<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            		<input type="hidden" name="cn" value="How did you hear about us?" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="lc" value="US" />
					 		</fieldset>
          	</form>
          	<strong>Generic High Blend</strong> $14.00
          	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						  <fieldset>
            	  <input type="hidden" name="on0" value="Piece" /><select name="os0"><option value="Multi-Pocket Tops">Multi-Pocket Tops</option><option value="Elastic Waist Pants">Elastic Waist Pants</option></select>
            		<input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
								<input type="hidden" name="add" value="1" />
            		<input type="hidden" name="cmd" value="_cart" />
            		<input type="hidden" name="business" value="sales@1ezclaim.com" />
								<input type="hidden" name="item_name" value="Generic High Blend" />
            		<input type="hidden" name="item_number" value="generichighblend" />
								<input type="hidden" name="amount" value="14.00" />
								<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
								<input type="hidden" name="cn" value="How did you hear about us?" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="lc" value="US" />
					 		</fieldset>
          	</form>
          	<strong>Specialty High Blend</strong> $19.00
          	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						  <fieldset>
            	  <input type="hidden" name="on0" value="Piece" /><select name="os0"><option value="Multi-Pocket Tops">Multi-Pocket Tops</option><option value="Elastic Waist Pants">Elastic Waist Pants</option></select>
            		<input type="image" src="images/addcart.gif" name="submit" alt="Add to Cart" />
								<input type="hidden" name="add" value="1" />
            		<input type="hidden" name="cmd" value="_cart" />
            		<input type="hidden" name="business" value="sales@1ezclaim.com" />
								<input type="hidden" name="item_name" value="Specialty High Blend" />
            		<input type="hidden" name="item_number" value="specialtyhighblend" />
								<input type="hidden" name="amount" value="19.00" />
								<input type="hidden" name="return" value="http://www.needle-zapper.com/order_form.php" />
            		<input type="hidden" name="cn" value="How did you hear about us?" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="lc" value="US" />
					 		</fieldset>
          	</form>
					</td>
				</tr>
			</tbody>
		</table>
	</div><!--tablewrapper-->
</div><!--productHolder-->
					
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <fieldset class="viewcart">
	  <input type="hidden" name="cmd" value="_cart" />
    <input type="hidden" name="business" value="sales@1ezclaim.com" />
		<!--<input type="image" src="https://www.paypal.com/en_US/i/btn/view_cart.gif" name="submit" alt="View Cart" />-->
		<input type="image" src="images/viewcart.gif" name="submit" alt="View Cart" />
		<input type="hidden" name="display" value="1" />
	</fieldset>
</form>
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
