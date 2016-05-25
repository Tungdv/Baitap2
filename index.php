<?php
	include("functions.smart.php");
	default_url("index.html")
?>
<?php ob_start(); ?>
<link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
<div id="header">
	<h1 class="title">HOCTUDAU.COM</h1>
	<div class="menu">
		<ul>
			<li><a href="?view=index.html">HOME</a></li>
			<li><a href="?view=about.html">ABOUT</a></li>
			<li><a href="?view=testimonial.html">TESTIMONIAL</a></li>
			<li><a href="?view=contact.html">CONTACT</a></li>
		</ul>
	</div>
</div>
<div id="main">
	<?php include($_GET["view"]); ?>
	<?php nav_smart(ob_get_clean(), 'class="active"'); ?>
</div>
<footer>
	<p>Hoctudau.com Copy right @ 2016</p>
</footer>