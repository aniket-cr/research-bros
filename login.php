<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<?php
session_start();
ob_start();
?>
</head>

<body>
<?php
include('config.php');
$email = $_POST['email'];
$pass = $_POST['password'];
$connect = mysqli_connect($servername,$username,$password,$dbname);
$query = "SELECT * FROM user WHERE lower(emailID)=lower('$email') AND password=md5($pass);";
$result = mysqli_query($connect,$query);
if($result == FALSE || mysqli_num_rows($result) == 0)
{
	echo "Sorry wrong user name and password";
}
else
{
	$result = mysqli_fetch_array($result);
	$_SESSION['email'] = $result['email'];
	$_SESSION['name'] = $result['name'];
	$_SESSION['contact'] = $result['contact'];
	header('Location: '.'university.php');
}
mysqli_close($connect);
?>
</body>
</html>