<?php  

$sname = "sql109.epizy.com";

$uname = "epiz_33440381";
$password = "vcjnqTsUev3tzd";

$db_name = "epiz_33440381_test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}