$(function() {
	$("#input-pickup-date").datepicker();
	$("#input-pickup-date").datepicker("option", "dateFormat", "yy-MM-dd");
	$("#input-pickup-time").timepicker();

	$("#button-submit-quote").on("click", function() {
		$("#alert-quote-sent").hide();
		$("#alert-quote-failed").hide();

		var inputName           = $("#input-name").val();
		var inputCompany        = $("#input-company").val();
		var inputPickupDate     = $("#input-pickup-date").val();
		var inputPickupLocation = $("#input-pickup-location").val();
		var inputTruckType      = $("#input-truck-type").val();
		var inputEmail          = $("#input-email").val();
		var inputPhone          = $("#input-phone").val();
		var inputPickupTime     = $("#input-pickup-time").val();
		var inputDropLocation   = $("#input-drop-location").val();
		var inputTypeOfCargo    = $("#input-type-of-cargo").val();
		var inputOtherDetails   = $("#input-other-details").val();

		if ($.trim(inputName) == "") {
			$("#alert-quote-failed").html("Please input Name");
			$("#alert-quote-failed").show();
			return;
		}

		if ($.trim(inputCompany) == "") {
			$("#alert-quote-failed").html("Please input Company");
			$("#alert-quote-failed").show();
			return;
		}

		if ($.trim(inputTruckType) == "" || inputTruckType == "0" || inputTruckType == 0) {
			$("#alert-quote-failed").html("Please select Truck Type / Model");
			$("#alert-quote-failed").show();
			return;
		}

		if ($.trim(inputEmail) == "") {
			$("#alert-quote-failed").html("Please input Email");
			$("#alert-quote-failed").show();
			return;
		}

		if ($.trim(inputPhone) == "") {
			$("#alert-quote-failed").html("Please input Phone Contact");
			$("#alert-quote-failed").show();
			return;
		}

		if ($.trim(inputTypeOfCargo) == "") {
			$("#alert-quote-failed").html("Please input type of Cargo");
			$("#alert-quote-failed").show();
			return;
		}

		$("#alert-quote-sending").show();
		$("#button-submit-quote").prop("disabled", true);
		$.ajax(
		{
			url: "backend/request_quote.php",
			type: "POST",
			data: {
				"input-name" : inputName,
				"input-company" : inputCompany,
				"input-pickup-date" : inputPickupDate,
				"input-pickup-location" :inputPickupLocation,
				"input-truck-type" :inputTruckType,
				"input-email" : inputEmail,
				"input-phone" : inputPhone,
				"input-pickup-time" : inputPickupTime,
				"input-drop-location" : inputDropLocation,
				"input-type-of-cargo" : inputTypeOfCargo,
				"input-other-details" : inputOtherDetails
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
