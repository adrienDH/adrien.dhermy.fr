$( document ).ready(function() {
	$("body").on("click",".js-contact", function() {
		$("body").animate({ scrollTop: $("body").height()}, 1000);
		$(".js-target").focus();
	});
	
	$("nav").on("click",".js-scroll-top", function() {
		$("body").animate({ scrollTop: 0 }, 1000);
	});
	
	$("nav").on("click",".js-scroll", function() {
		var id = $(this).attr("data-scroll-target");
		$("body").animate({ scrollTop: $(id).offset().top - 50}, 1000);
	});
	
	$("#presentation").on("click",".js-more-infos", function() {
		$("body").animate({ scrollTop: $("#presentation").height() + 60}, 1000);
	});
});

