<html>
 <head>
  <title>txt file</title>
  <meta http-equiv="Content-type" content="text/html"; charset="latin-1" />
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

<?php
$textarea = $_POST['displayfile'];
$write_file = fopen("grade_exercises.txt","w") or die("Something's wrong...can't open file.");
fwrite($write_file,$textarea);
fclose($write_file);
?>
<br><br>

<p align="left">
OK. The exercises you have retrieved have been exported to a .txt file (<font color="#83A73C">right click on the icon to download it</font>): <a href="grade_exercises.txt"><img src="img/printer.png" alt="print" width="30" height="30" title="txt" align="middle"></a>
</p>

<br><br>

<font color="#88694B">
If you want, you can e-mail the file.
<form action="sending.php" method="POST">
<p>
subject of the e-mail: <input type="text" name="subject" size="30" /><br>
recipient's e-mail address (only one): <input type="text" name="to" size="35" />
<input type="submit" name="send" value="send" />
</p>
</form>
</font>

<br><br><br><br><br><br>

Would you like to keep up the good work? Make a donation and support Gra.D.E! <br><br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="NTHC3MMDQTGLS">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - safe and easy">
<img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
</form>

</body>
</html>
