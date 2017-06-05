<html>
<body>
<?php
$name=$_POST['Name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];
$to='harshv1311@gmail.com';
$subject='Project Description';
$message="Name: ".$name."\n"."Phone: ".$phone."\n"."Wrote the following: "."\n\n".$msg;
$headers="From: ".$email;
$sent=mail($to, $subject, $message,$headers)
if($sent){
echo"<h1>Sent successfully! Thank you"." ".$name.", I will contact you soon!<h1>";
}
else
{
echo"something went wrong!";
}
?>
</body>
</html>