
<!DOCTYPE html>
<html>

<?php require_once('header.php'); ?>

<body>
<?php require_once('mynav.php'); ?>
<br><br><br><br>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
		<center>
		<h2> Spring Pots</h2>
		<h5><a href="albums.php" title="View Photo Albums"> View Photo Albums </a></h5>
		</center>
		</div>
	</div>
</div>

<br>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">


<div class="slideshow-container">


<div class="mySlides">
  <center>
  <img src="assets/img/sppot1.JPG" style="width:45%">
  </center>
  <div class="text">Spring Pot</div>
  <div class="numbertext"><center>1 / 3</center></div>
</div>

<div class="mySlides">
  <center>
  <img src="assets/img/sppot2.JPG" style="width:45%">
  </center>
  <div class="text">Spring Pot</div>
  <div class="numbertext"><center>1 / 3</center></div>
</div>

<div class="mySlides">
  <center>
  <img src="assets/img/spbox.JPG" style="width:65%">
  </center>
  <div class="text">Spring Box</div>
  <div class="numbertext"><center>1 / 3</center></div>
</div>



<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

		</div><!-- col row container -->
	</div>
</div>

<br><br><br><br>
<br><br><br><br>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<?php require_once('footer.php'); ?>


</body>
</html>
