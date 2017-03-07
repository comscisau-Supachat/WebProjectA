<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In Process</title>
</head>
<body>
<?php

$uname = $_POST['uname'];
$upassword = $_POST['upassword'];


$host = "localhost";
$userdb = "root";
$passworddb = "";
$dbname = "comscia_db";

$conn = mysqli_connect($host, $userdb, $passworddb, $dbname);

$strsql = "select * from user_tb where uname='".$uname."' and 
			upassword='".$upassword."'";

			//echo $strsql;

			$result = mysqli_query($conn, $strsql);

			// เอาผลที่ได้จากทำงาน ใช้งาน
			if($result = mysqli_fetch_array($result)){

				echo "ok";

			}else{
				
				echo "User name และ Password ไม่ถูกต้อง";

			}



?>
	
</body>
</html>