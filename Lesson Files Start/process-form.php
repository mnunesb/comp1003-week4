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


	// STEP 2a: Output a friendly message with a paragraph (P) to confirm that everything went well, by stringing together (concatenating) the above form data.



	// STEP 2b: Use an unordered list element (UL and LI) to display the other setting values.

	echo('<p>Your communication settings include notifications by the following:</p>
<ul>');
	// STEP 3: The checkboxes for Communications Preferences will be sent as an array (as there could be more than one option checked by the user - so we need to loop through each item with FOREACH).

	echo('</ul>
<p>Hava a great day.</p>');
	// STEP 4: Upload this file to the server, enter data into your form, and hit the submit button to try it.
?>
	<!-- STEP 5: Head back to STEP 13 of index.php and we will do some simple form data validation -->
	</body>
</html>
