<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Edit Payment Information - PayPal™</title>
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<h1>PayDude™</h1>
		<h2>Payment Information Updated</h2>
<?php
	/* STEP 1: Capture all the user-inputted form data from each of the FORM elements sent by index.php with appropriate variable names - use the value of the name attribute inside the $_GET array (we set the form method to "get") */
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$phone = $_GET['phone'];
	$email = $_GET['email'];
	$ccType = $_GET['ccType'];
	$ccYear = $_GET['ccYear'];
	$ccMonth = $_GET['ccMonth'];
	$commPrefs = $_GET['comm'];

	// STEP 2a: Output a friendly message with a paragraph (P) to confirm that everything went well, by stringing together (concatenating) the above form data.
	echo('<p>Thank you, '.$fname.' '.$lname.',your form was submited.</p>');


	// STEP 2b: Use an unordered list element (UL and LI) to display the other setting values.

 	echo('<p>Your communication settings include notifications by the following:</p>');
	echo("<ul>
			<li>Phone: $phone</li>
			<li>Email: $email</li>
			<li>Credit Card: $ccType</li>
			<li>Expires (year/month): $ccYear/$ccMonth'</li>
		</ul>
		<p>Have a great day.</p>");
	// STEP 4: Upload this file to the server, enter data into your form, and hit the submit button to try it.
?>
	<!-- STEP 5: Head back to STEP 13 of index.php and we will do some simple form data validation -->
	</body>
</html>
