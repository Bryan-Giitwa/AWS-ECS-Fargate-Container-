<?php

$servername = "Input_your_servername";
$dBUsername = "Input_your_username";
$dbPassword = "";
$dBName = "ems";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if (!$conn) {
	echo "Databese Connection Failed";
}
