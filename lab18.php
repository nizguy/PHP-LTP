<?php
	$first = $_REQUEST['first'];
	$last = $_REQUEST['last'];
	$email = $_REQUEST['email'];
	//"used for testing php/html pages conncted etc." print("First Name: " . ($first) . "<br/>");
	//"used for testing php/html pages conncted etc."print("Last Name: " . ($last) . "<br/>");
	//"used for testing php/html pages conncted etc."print("Email: " . ($email));

//The folowing code adds the data from the HTML form to the php file then prints confirmation
	$data = array($first, $last, $email);

		$fp = fopen('name.csv', 'a');
		fputcsv($fp, $data);
		print("Data written successfully.");
		fpclose($fp);
 ?>