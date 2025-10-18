//scroll top
var timeOut;
	function scrollToTop() {
		if(document.body.scrollTop!==0 || document.documentElement.scrollTop!==0) {
			window.scrollBy(0,-50);
			timeOut = setTimeout('scrollToTop()',10);
		} else
		clearTimeout(timeOut);
	}

var slideIndex = 1;
showSlides(slideIndex);
// showSlidesAuto(slideIndex);
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

function showSlidesAuto() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
document.querySelector("#main > div > div._193wCc > div > div.OQtnd7 > div > div.row.shopee-search-item-result__items > div:nth-child(2)")