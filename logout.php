<?php
session_start();




$email2="select email from newone where name=$_SESSION['username']";
$phone2="select phone from newone where name=$_SESSION['username']";
$time2="select time from newone where name=$_SESSION['username']";
$result1=mysqli_query($con,$email2);
$result2=mysqli_query($con,$phone2);
$result3=mysqli_query($con,$time2);
$result4=mysqli_fetch_assoc($result1);
$result5=mysqli_fetch_assoc($result2);
$result6=mysqli_fetch_assoc($result3);
$headers='From: host@gmail.com' ."\r\n" . 'Reply-To: '.$email2 . "\r\n" . 'X-mailer: PHP/' . phpversion() . "\r\n" . 'Content-type: text/html; charset=iso-8859-1';
$message = '
<html>
<head>
  <title>Visitor details</title>
</head>
<body>
  <p>Vistor details!!</p>
  <table>
    <tr>
      <th>name</th><th><?php echo $_SESSION['username'];  ?></th>
    </tr>
	<tr>
      <th>email</th><th><?php echo $result4;  ?></th>
    </tr>
	<tr>
      <th>phone number</th><th><?php echo $result5;  ?></th>
    </tr>
	<tr>
      <th>InTime</th><th><?php echo $result6;  ?></th>
    </tr>
	<tr>
      <th>OutTime</th><th><?php echo date("h:i:s a");  ?></th>
    </tr>

  </table>
</body>
</html>
';
mail($email1,'Details',$message,$headers);

session_destroy();
header('location:login.php');













?>