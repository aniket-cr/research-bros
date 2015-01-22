<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>University</title>
<?php
session_start();
ob_start();
?>
</head>

<body>
<?php
echo "Hello ".$_SESSION['name']." with email-id ".$_SESSION['email']." and contact number ".$_SESSION['contact']."<br/>";
?>
</body>
</html>