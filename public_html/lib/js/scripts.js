// Smooth scroll down
$(document).ready(function(){
	// Add smooth scrolling to all links
	$("a[href*=\\#]:not([href=\\#])").on('click', function(event) {

	  // Make sure this.hash has a value before overriding default behavior
	  if (this.hash !== "") {
		// Prevent default anchor click behavior
		event.preventDefault();
  
		// Store hash
		var hash = this.hash;
  
		// Using jQuery's animate() method to add smooth page scroll
		// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		$('html, body').animate({
		  scrollTop: $(hash).offset().top - 140
		}, 800, function(){
	 
		});
	  } // End if
	});
	
  });

  //When click on hamburger icon
  (function () {
	$('.navbar-toggler').on('click', function() {
		$('.hamburger-menu').toggleClass('animate');
	})
})();