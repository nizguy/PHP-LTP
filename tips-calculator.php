<?php
	$amountOfBill = $_REQUEST['amount'];
	print("<h1>Suggested Tip Amount</h1>");
	print("<p>15%: $" . round($amountOfBill * 0.15,2) . "<br/>");
	print("<p>18.5%: $" . round($amountOfBill * 0.185,2) . "<br/>");
	print("<p>20%: $" . round($amountOfBill * 0.2,2) . "</p>");

?>