<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregister');
$name=$_POST['user'];
$email=$_POST['email'];
$phonenumber=$_POST['phone'];
$_SESSION['username']=$name;
$name1=$_POST['user1'];
$email1=$_POST['email1'];
$phonenumber1=$_POST['phone1'];
$time=date("h:i:s a");
#mysql insertion 
$reg="insert into newone(name,email,phonenumber,time) values('$name','$email','$phonenumber','$time')";
mysqli_query($con,$reg);
#mail sending
$headers='From: '.$email ."\r\n" . 'Reply-To: '.$email1 . "\r\n" . 'X-mailer: PHP/' . phpversion() . "\r\n" . 'Content-type: text/html; charset=iso-8859-1';
$message = '
<html>
<head>
  <title>Visitor details</title>
</head>
<body>
  <p>Vistor details!!</p>
  <table>
    <tr>
      <th>name</th><th><?php echo $name;  ?></th>
    </tr>
	<tr>
      <th>email</th><th><?php echo $email;  ?></th>
    </tr>
	<tr>
      <th>phone number</th><th><?php echo $phonenumber;  ?></th>
    </tr>

  </table>
</body>
</html>
';
mail($email1,'Visitor Details',$message,$headers);
header('location:home.php');
