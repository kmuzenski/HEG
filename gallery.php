
<!DOCTYPE html>
<html>

<?php require_once('header.php'); ?>

<body>
<?php require_once('nav.php'); ?>
<br><br><br><br>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
		<center>
		<h2> Gallery</h2>
		<h5><a href="albums.php" title="View Photo Albums"> View Photo Albums </a></h5>
		</center>
		</div>
	</div>
</div>

<br><br>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">


<div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">1 / 5</div>
  <center>
  <img src="assets/img/indexpot.JPG" style="width:60%">
  </center>
  <div class="text">Featured Pot</div>
</div>

<div class="mySlides">
  <div class="numbertext">2 / 6</div>
  <center>
  <img src="assets/img/sppot1.JPG" style="width:50%">
  </center>
  <div class="text">Spring Pot</div>
</div>

<div class="mySlides">
  <div class="numbertext">3 / 7</div>
  <center>
  <img src="assets/img/spbox.JPG" style="width:60%">
  </center>
  <div class="text">Spring Box</div>
</div>

<div class="mySlides">
  <div class="numbertext">4 / 7</div>
  <center>
  <img src="assets/img/smpot1.JPG" style="width:50%">
  </center>
  <div class="text">Summer Pot</div>
</div>

<div class="mySlides">
  <div class="numbertext">5 / 7</div>
  <center>
  <img src="assets/img/smpot2.JPG" style="width:50%">
  </center>
  <div class="text">Summer Pot</div>
</div>

<div class="mySlides">
  <div class="numbertext">6 / 7</div>
  <center>
  <img src="assets/img/smpot3.JPG" style="width:50%">
  </center>
  <div class="text">Summer Pot</div>
</div>

<div class="mySlides">
  <div class="numbertext">7 / 7</div>
  <center>
  <img src="assets/img/smpot4.JPG" style="width:50%">
  </center>
  <div class="text">Summer Pot</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 


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
