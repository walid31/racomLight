$(document).scroll(function() {
		var dHeight = $(this).height()-$(window).height();
		if (dHeight >= $(this).scrollTop()) {
		$('nav').css('background', 'rgba(53,145,204,' + $(this).scrollTop() / dHeight + ')');
		}
});
function ShowServices() {
  document.getElementById("servicesListe").classList.toggle("showService");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("Service-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('showService')) {
        openDropdown.classList.remove('showService');
      }
    }
  }
}

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 2000); 
}