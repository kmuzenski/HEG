
<!DOCTYPE html>
<html>

<?php require_once('header.php'); ?>

<body>
<?php require_once('nav.php'); ?>
<br><br><br><br><br><br>

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

<div class="slideshow-container">

	<div class="mySlides">
		<div class="numbertext"> 1 / 3 </div>
			<img src="assets/img/indexpot.JPG" title="summer pot" width="100%">
			<div class="text">Summer Pot </div>
	</div>

	<div class="mySlides">
		<div class="numbertext"> 2 / 3 </div>
			<img src="assets/img/indexpot.JPG" title="summer pot" width="100%">
			<div class="text"> Image two </div>

	</div>

	<div class="mySlides">
		<div class="numbertext"> 3 / 3 </div>
			<img src="assets/img/indexpot.JPG" title="summer pot" width="100%">
			<div class="text"> Image three </div>

	</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div> <!-- container -- > 

<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
 
<br><br>


<?php require_once('footer.php'); ?>
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

</body>
</html>
