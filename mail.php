<?php 
include('includes/header.php');
include('createevents.php');



$mail=$_POST['mail'];
echo "hello";

$to=$mail;
$subject="Register";
$message="you have regsiterd for event ";
$headers="piyushjha65@gmail.com";

if (mail($to,$subject,$message,$headers)) {
	# code...
	echo"success111111111";

}
 else
 {
 	echo"Failure";
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="includes/handlers/logout.php">Logout</a>
</body>
</html>