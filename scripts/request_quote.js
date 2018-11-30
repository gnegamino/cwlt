$(function() {
	$("#input-pickup-date").datepicker();
	$("#input-pickup-date").datepicker("option", "dateFormat", "yy-MM-dd");
	$("#input-pickup-time").timepicker();

	$("#button-submit-quote").on("click", function() {
		$("#alert-quote-sent").hide();
		$("#alert-quote-failed").hide();
		$("#alert-quote-sending").show();
		$("#button-submit-quote").prop("disabled", true);
		$.ajax(
		{
			url: "backend/request_quote.php",
			type: "POST",
			data: {
				"input-name" : $("#input-name").val(),
				"input-company" : $("#input-company").val(),
				"input-pickup-date" : $("#input-pickup-date").val(),
				"input-pickup-location" : $("#input-pickup-location").val(),
				"input-truck-type" : $("#input-truck-type").val(),
				"input-email" : $("#input-email").val(),
				"input-phone" : $("#input-phone").val(),
				"input-pickup-time" : $("#input-pickup-time").val(),
				"input-drop-location" : $("#input-drop-location").val(),
				"input-type-of-cargo" : $("#input-type-of-cargo").val(),
				"input-other-details" : $("#input-other-details").val()
			},
			dataType: "json",
			success: function(data)
			{
				$("#alert-quote-sending").hide();
				if (data.status == 200) {
					$("#alert-quote-sent").show();
					$("#input-name").val("");
					$("#input-company").val("");
					$("#input-pickup-date").val("");
					$("#input-pickup-location").val("");
					$("#input-truck-type").val(0);
					$("#input-email").val("");
					$("#input-phone").val("");
					$("#input-pickup-time").val("");
					$("#input-drop-location").val("");
					$("#input-type-of-cargo").val("");
					$("#input-other-details").val("");
				} else {
					$("#alert-quote-failed").html(data.message);
					$("#alert-quote-failed").show();
				}
				$("#button-submit-quote").prop("disabled", false);
			}
		});
	});
})
