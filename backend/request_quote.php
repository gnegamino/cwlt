<?php
if (
	!isset($_POST['input-name'])
	|| !isset($_POST['input-company'])
	|| !isset($_POST['input-pickup-date'])
	|| !isset($_POST['input-pickup-location'])
	|| !isset($_POST['input-truck-type'])
	|| !isset($_POST['input-email'])
	|| !isset($_POST['input-phone'])
	|| !isset($_POST['input-pickup-time'])
	|| !isset($_POST['input-drop-location'])
	|| !isset($_POST['input-type-of-cargo'])
	|| !isset($_POST['input-other-details'])
) {
	renderReponse(400, "Bad Request");
	return;
}

$name           = trim($_POST['input-name']);
$company        = trim($_POST['input-company']);
$pickupDate     = trim($_POST['input-pickup-date']);
$pickupLocation = trim($_POST['input-pickup-location']);
$truckType      = trim($_POST['input-truck-type']);
$email          = trim($_POST['input-email']);
$phone          = trim($_POST['input-phone']);
$pickupTime     = trim($_POST['input-pickup-time']);
$dropLocation   = trim($_POST['input-drop-location']);
$typeOfCargo    = trim($_POST['input-type-of-cargo']);
$otherDetails   = trim($_POST['input-other-details']);

if (strlen($name) < 1) {
	renderReponse(400, "Please input name");
	return;
}
if (strlen($company) < 1) {
	renderReponse(400, "Please input company");
	return;
}
if (strlen($pickupDate) < 1) {
	renderReponse(400, "Please input pickup date");
	return;
}
if (strlen($pickupLocation) < 1) {
	renderReponse(400, "Please input pickup location");
	return;
}
if ($truckType == "0") {
	renderReponse(400, "Please select truck type or model");
	return;
}
if (strlen($email) < 1) {
	renderReponse(400, "Please input email");
	return;
}
if (strlen($phone) < 1) {
	renderReponse(400, "Please input phone contact");
	return;
}
if (strlen($pickupTime) < 1) {
	renderReponse(400, "Please indicate pickup time");
	return;
}
if (strlen($dropLocation) < 1) {
	renderReponse(400, "Please input location");
	return;
}
if (strlen($typeOfCargo) < 1) {
	renderReponse(400, "Please indicate type of cargo");
	return;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	renderReponse(400, "Please input valid Email");
	return;
}

if (!isValidDate($pickupDate)) {
	renderReponse(400, "Please input valid Pick up Date");
	return;
}

if (sendMail(
	$name,
	$company,
	$pickupDate,
	$pickupLocation,
	$truckType,
	$email,
	$phone,
	$pickupTime,
	$dropLocation,
	$typeOfCargo,
	$otherDetails
)) {
	renderReponse(200, "");
} else {
	renderReponse(500, "Unable to send Quote. Please try again.");
}

function renderReponse($code, $message) {
	$response = array();
	$response["status"] = $code;
	$response["message"] = $message;
	echo json_encode($response);
}

function isValidDate($date)
{
	$dates = explode("-", $date);
	if (count($dates) != 3) {
		return false;
	}

	$year = trim($dates[0]);
	$month = trim(strtolower($dates[1]));
	$day = trim($dates[2]);

	$months = [
		"january" => 1,
		"february" => 2,
		"march" => 3,
		"april" => 4,
		"may" => 5,
		"june" => 6,
		"july" => 7,
		"august" => 8,
		"september" => 9,
		"october" => 10,
		"november" => 11,
		"december" => 12
	];

	if (!isset($months[$month])) {
		return false;
	}

	$month = $months[$month];
	return checkdate($month, $day, $year);
}

function sendMail(
	$name,
	$company,
	$pickupDate,
	$pickupLocation,
	$truckType,
	$email,
	$phone,
	$pickupTime,
	$dropLocation,
	$typeOfCargo,
	$otherDetails
) {
	$from    = "quote@truckingcwlt.com";
	$to      = "cwlttruckingservices@gmail.com";
	$subject = "Quote";
	$headers = "From:".$from;

	$message = "Name:".$name."\r\n";
	$message .= "Company:".$company."\r\n";
	$message .= "Email:".$email."\r\n";
	$message .= "Phone:".$phone."\r\n";
	$message .= "\r\n\r\n";
	$message .= "Pickup Date:".$pickupDate."\r\n";
	$message .= "Pickup Time:".$pickupTime."\r\n";
	$message .= "Pickup Location:".$pickupLocation."\r\n";
	$message .= "Drop Location:".$dropLocation."\r\n";
	$message .= "\r\n\r\n";
	$message .= "Truk Type/Model:".$truckType."\r\n";
	$message .= "Type Of Cargo:".$typeOfCargo."\r\n";
	$message .= "\r\n\r\n";
	$message .= "Details:".$otherDetails."\r\n";

    return mail($to, $subject, $message, $headers);
}