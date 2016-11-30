$(document).ready(function() {
	var navPosition =  $('#menu').offset().top;
    $(window).scroll(function() {
        if($(this).scrollTop() >  (navPosition)) {
            $('#menu').addClass('stickytop-menu');
        }
        else {
			$('#menu').removeClass('stickytop-menu');
        }
    });
	
	$('#burger-button').click(
		function(event) {
			event.preventDefault();
			if ($('#menu').hasClass("stickytop-menu")) {
				if ($('#menu-ul').css("display") == "none") {
					$('#menu-ul').css({display: "block"});
					$('#menu').css({height: "auto"});
				} else {
					$('#menu-ul').css({display: "none"});
					$('#menu').css({height: "72px"});	
				}
			} else {
				if ($('#menu-ul').css("display") == "none") {
					$('#menu-ul').css({display: "block"});
					$('#menu').css({height: "auto"});
					$('#menu-wrapper').css({height: "auto"});
				} else {
					$('#menu-ul').css({display: "none"});
					$('#menu').css({height: "72px"});	
				}
			}

		}
	);
});