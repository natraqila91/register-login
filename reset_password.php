<?php
include ("DB.php");

if(isset ($_POST["txtNewPass"]) && isset ($_POST["txtRetype"])){
	$newPass = $_POST["txtNewPass"];
	$confirmPass = $_POST["txtRetype"];
	
	if($newPass == $confirmPass){
		$sql = mysql_query("UPDATE tbl_user SET password = '$newPass'");
		echo "Password is updated!";
	}else{
		echo "Password does not match!";
	}
}
?>

<html>
<head>
</head>
<body>
<h1>Reset Password</h1>
<form action="" method="_POST">
New Password: <input name="txtNewPass"><br><br>
Re-type Password: <input name="txtRetype"><br><br>
<button type="submit">Reset</button>
</form>
</body>
</html>