<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form name="login" method="post" action="check_login.php">
<img src="images/login.png" alt="icon" class="logo-center"/></div>
< class="cTextBox"><b>Username</b><br/><input type="text" name="uName"/><br/>
<class="cTextBox"><b>Password</b><br/><input type="password" name="pwd"/>
<input type="submit" value="Login" name="Login" /></form>
</body>
</html>

<?php
	include("loginserv.php");
?>

<?php
if(isset($_POST["submit"]))
{
	if(empty($_POST['user']) || empty($_POST['pass']))
	{
		setcookie("user", $_POST["user"], time()+60);
		setcookie("pwd", $_POST["pass"], time()+60);
	}
}

?>