
<!DOCTYPE html>
<html>

<?php require_once('header.php'); ?>

<body>
<?php require_once('nav.php'); ?>
<br><br><br><br><br><br>

<div class="container">

	<div class="row">
		<div class="col-xs-3 col-md-3 col-lg-3">
		<img src="assets/img/logo.jpg" title="farie logo">
		</div>

		<div class="col-xs-9 col-md-9 col-lg-9">
		<center>
		<h2> Albums </h2>
		<h5><a href="gallery.php" title="View Full Gallery"> View Full Gallery </a></h5>
		</center>
		</div>
	</div>
</div>

<br><br>

<div class="container">
	<div class="row">
		<div class="col-xs-4 col-md-4 col-lg-4">
		<center>
			<a href="summerpots.php" title="summer pots"><img src="assets/img/smalbum.png" class="album" width="75%"></a>
		</center>
		</div>
		
		<div class="col-xs-4 col-md-4 col-lg-4">
		<center>
			<a href="springpots.php" title="spring pots"><img src="assets/img/spalbum.png" class="album" width="75%"></a>
		</center>
		</div>

		<div class="col-xs-4 col-md-4 col-lg-4">
		<center>
			<a href="winterpots.php" title="winter pots"><img src="assets/img/walbum.png" class="album" width="75%"></a>
		</center>
		</div>
	</div><!-- row -->
</div><!-- container -->




<br><br><br><br><br>
<?php require_once('footer.php'); ?>

</body>
</html>
