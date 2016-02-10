$( document ).ready(function() {
	$("body").on("click",".js-contact", function() {
		$("body,html").animate({ scrollTop: $("#contact").offset().top - 50 }, 1000);
		$(".js-target").focus();
	});
	
	$("nav").on("click",".js-scroll-top", function() {
		$("body,html").animate({ scrollTop: 0 }, 1000);
	});
	
	$("nav").on("click",".js-scroll", function() {
		var id = $(this).attr("data-scroll-target");
		$("body,html").animate({ scrollTop: $(id).offset().top - 50}, 1000);
	});
	
	$("#presentation").on("click",".js-more-infos", function() {
		$("body,html").animate({ scrollTop: $("#presentation").height() + 60}, 1000);
	});
	
	$("#contact").on("click",".js-send", function() {
		$formWrapper = $(this).parents(".form-wrapper");
		var name = $formWrapper.find(".js-name").val();
		var email =$formWrapper.find(".js-email").val();
		var subject = $formWrapper.find(".js-subject").val();
		var message = $formWrapper.find(".js-message").val();
		
		if(name == "" || email == "" || subject == "" || message == "") {
			$("#contact .error").empty();
			$("#contact .error").append("Tous les champs demandés sont obligatoires");
		} else {
			$.ajax({
				url : "./ajax/insert_contact.php",
				type : "POST",
				data : "name=" + name + "&email=" + email + "&subject=" + subject + "&message=" + message,
				success : function(html, statut){
					$("#contact").html(html)
				}
			});
		}
		
	});
	
	$("#contact").on("click",".js-reset", function() {
		$formWrapper = $(this).parents(".form-wrapper");
		$formWrapper.find(".js-name").val("");
		$formWrapper.find(".js-email").val("");
		$formWrapper.find(".js-subject").val("");
		$formWrapper.find(".js-message").val("");
	});
});
