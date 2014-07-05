<html>
 <head>
  <title>e-mail data</title>
  <META http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" href="img/uk.ico">
  <style type="text/css">
  body
{
    font-size:13px;
    font-family: 'Trebuchet MS', Helvetica, sans-serif;
}
  select
{
    font-family: 'Trebuchet MS', Helvetica, sans-serif;
    font-size:13px;
}
  input
{
    font-family: 'Trebuchet MS', Helvetica, sans-serif;
    font-size:13px;
}
   a
{
    text-decoration: none;
    font-weight: bold;
    color: #000000;
}
   a:hover
{
    color: #9370DB;
}
img
{
    opacity: 0.6;
}
img:hover
{
    opacity: 1.0;
}
   table
{
    font-family: 'Trebuchet MS', Helvetica, sans-serif;
    font-size:13px;
}
   tr:nth-child(even)
{
    background: #EFF5FB;
}
   tr:nth-child(odd)
{
    background: #FBF5EF;
}

  </style>
 </head>
 <body>
<center>
<h2><p align="center">Confirmation</p></h2>
</center>
<p align="right">
<a href="select.php"><img src="img/test.png" width="120" height="120" title="home"></a>
</p>

<br><br>

<?php
if (!empty($_POST['to']) && !empty($_POST['subject']))
{
$to=$_POST['to'];
$subject=$_POST['subject'];
if (filter_var($to, FILTER_VALIDATE_EMAIL))
{
require_once("phpmailer/class.phpmailer.php");
$email = new PHPMailer();
$email->From      = 'alessandro.vallin@gmail.com';
$email->FromName  = 'grade - testbuilder';
$email->Subject   = $subject;
$email->Body      = 'Please, find your exercises in the attached file.';
$email->AddAddress($to);
$email->AddAttachment('./grade_exercises.txt');
if(!$email->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo '<img src="img/box.png" width="70" height="70">'.'Your file has been sent successfully! Thanks for using GRA.D.E.';
}
}
else
{
echo "The e-mail address you typed in does not seem to be valid."."<br>"."Please check it.";
}
}
else
{
echo "I think you forgot to type in an e-mail address and/or a subject."."<br>"."They are both required.";
}
?>
</body>
</html>
