<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Signed up</title>
</head>

<body>
<?php
include('config.php');
$email = $_POST['email'];
$pass = $_POST['password'];
$contact = $_POST['contact'];
$name = $_POST['name'];
$connect = mysqli_connect($servername,$username,$password,$dbname);
$query = "INSERT INTO user VALUES('$email',md5('$pass'),'$name','$contact');";
$result = mysqli_query($connect,$query);
if($result == TRUE)
{
	echo "Signed up";
}
else
{
	echo "Error";
}
mysqli_close($connect);
?>
</body>
</html>
