    // Begin For Menu Icon animation
        $(document).ready(function(){
	$('#menu-icon').click(function(){
		$(this).toggleClass('open');
        $('body,html').toggleClass('stop-scrolling');
        
	});
    });
      // End for Menu Icon animation
    // Begin drop menu text fade
    $(document).ready(function(){
    $("#menu-icon").click(function(){
    $(".overlay__content").fadeToggle(300);
    });
});
  
    // End drop menu text fade 

// Form Animations
