
<!DOCTYPE html>
<html>

<?php require_once('header.php'); ?>

<body>
<?php require_once('nav.php'); ?>
<br><br><br><br>

<div class="container">
	<div class="row">
    <div class="col-xs-5 col-md-5 col-log-5">
      <center><img src="assets/img/logo.jpg" title="logo" width="200px"></center>
    </div>

		<div class="col-xs-7 col-md-7 col-lg-7">
		<center>
		<right><h2> Gallery</h2>
		<h5><a href="albums.php" title="View Photo Albums"> View Photo Albums </a></h5></right>
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
  <img src="assets/img/indexpot.JPG" style="width:60%">
  </center>
  <div class="text">Featured Pot</div>
  <div class="numbertext"><center>1 / 8</center></div>

</div>

<div class="mySlides">
  <center>
  <img src="assets/img/sppot1.JPG" style="width:45%">
  </center>
  <div class="text">Spring Pot</div>
  <div class="numbertext"><center>2 / 8</center></div>
</div>

<div class="mySlides">
  <center>
  <img src="assets/img/sppot2.JPG" style="width:45%">
  </center>
  <div class="text">Spring Pot</div>
  <div class="numbertext"><center>3 / 8</center></div>
</div>

<div class="mySlides">
  <center>
  <img src="assets/img/spbox.JPG" style="width:65%">
  </center>
  <div class="text">Spring Box</div>
  <div class="numbertext"><center>4 / 8</center></div>
</div>

<div class="mySlides">
  <center>
  <img src="assets/img/smpot1.JPG" style="width:45%">
  </center>
  <div class="text">Summer Pot</div>
    <div class="numbertext"><center>5 / 8</center></div>
</div>

<div class="mySlides">
  <center>
  <img src="assets/img/smpot2.JPG" style="width:45%">
  </center>
  <div class="text">Summer Pot</div>
    <div class="numbertext"><center>6 / 8</center></div>
</div>

<div class="mySlides">
  <center>
  <img src="assets/img/smpot3.JPG" style="width:45%">
  </center>
  <div class="text">Summer Pot</div>
    <div class="numbertext"><center>7 / 8</center></div>
</div>

<div class="mySlides">
  <center>
  <img src="assets/img/smpot4.JPG" style="width:45%">
  </center>
  <div class="text">Summer Pot</div>
  <div class="numbertext"><center>8 / 8</center></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 
  <span class="dot" onclick="currentSlide(8)"></span> 



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
