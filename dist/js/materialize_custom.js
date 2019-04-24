// Or with jQuery
$('.dropdown-trigger').dropdown({
	alignment: "right",
	hover: true,
	coverTrigger: false,
});


// navbar
$(document).ready(function (){
	$('.sidenav').sidenav();
});


// Floating button "back to top"
$(document).ready(function(){
	$('.fixed-action-btn').floatingActionButton({
		hoverEnabled: false
	});
});

// SLIDER
$(document).ready(function(){
	$('.slider').slider();
});

/*$(document).ready(function(){

	$(window).scroll(function(){
		if($(this).scrollTop() > 1000) {
			$('.fixed-action-btn').fadeIn();
		} else {
			$('.fixed-action-btn').fadeOut();
		}
	});

	$('.fixed-action-btn').click(function() {
		$('html, body').animate({
			scrollTop: 0
		}, 800);
	});
}); */



    
    
