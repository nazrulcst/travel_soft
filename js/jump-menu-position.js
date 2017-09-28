$(document).ready(function(){
	// get the header height
	var headerHeight = $('.fh5co-hero').outerHeight();
	$("#slide_section").click(function(e){
		var linkHref = $(this).attr('href');
		
		alert(linkHref);
		$('html','body').animate({
			scrollTop:$(linkHref).offset().top - headerHeight
		},1000);
		e.preventDefault();
	});
});