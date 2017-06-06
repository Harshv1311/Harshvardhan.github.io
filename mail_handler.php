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
$header="From: ".$email;
$header="content-type: text/html\r\n";
$sent=mail($to, $subject, $message,$header);
if($sent){
echo "<h1>Sent successfully! Thank you"." ".$name.", I will contact you soon!</h1>";
}
else
{
echo "something went wrong!";
}
?>
</body>
</html>