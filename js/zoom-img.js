function zoom(zoomImg, zoomDiv, imgTarget) {
				
	$( imgTarget ).mouseover(function ( event ) {
		$( zoomImg ).attr("src", $( imgTarget ).attr("src"));
		if ($( window ).width() > 1023) $( zoomDiv ).css("display", "block");
	});
			
	$( imgTarget).mouseout(function ( event ) {
		$( zoomImg ).attr("src", "");
		$( zoomDiv ).css("display", "none");
	});
			
	$( imgTarget ).mousemove(function ( event ) {
		var left = event.pageX - $(imgTarget).offset().left;
		var top = event.pageY - $(imgTarget).offset().top;
		var factor = parseInt($(zoomImg).css("width")) / parseInt($(imgTarget).css("width"));
		left *= factor;
		top *= factor;
		var marginLeft = left -  (parseInt($(zoomDiv).css("width")) / 2) ;
		var marginTop = top - (parseInt($(zoomDiv).css("height")) / 2) ;
		marginLeft *= -1;
		marginTop *= -1;
		$(zoomImg).css("margin-left", marginLeft);
		$(zoomImg).css("margin-top", marginTop);
	});
	
}
	zoom("#zoom-img", "#zoom-div", "#zoom-img-target-1");
	zoom("#zoom-img", "#zoom-div", "#zoom-img-target-2");
	zoom("#zoom-img", "#zoom-div", "#zoom-img-target-3");
	