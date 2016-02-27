$( document ).ready(function() {
		
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
	
	$("#myModal").on('click','.js-submit-newsletter',function(){
		var email = $("#myModal").find(".email").val();
		
		$.ajax({
			url : "./ajax/add_email_newsletter.php",
			type : "POST",
			data: "email=" + email
		});
	});
	
});
