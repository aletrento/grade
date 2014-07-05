<html>
 <head>
  <title>output</title>
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

<body bgcolor="#EBEBFF">
<img src="img/clips.rotated.gif" alt="clips" width="30" height="460" align="right" hspace="20" />
<center>
<h2><p align="center">Here are the exercises you've been searching for!</p></h2>
</center>
<a href="select.php"><img src="img/arrow_back.png" align="left" width="100" height="50" title="go back" /></a>

 <table border="1" cellpadding="6" cellspacing="6" style="border-collapse: collapse" bordercolor="#EBEBFF" width="600" align="center">
   <tbody>
    <tr>
	<td width="600" bgcolor="#EBEBFF">
	<form method="POST" action="export.php" align="center">
		<textarea name="displayfile" cols="80" rows="25" oncopy="return false" onpaste="return false" oncut="return false">

<?
$objConnect = mysql_connect("","","") or die("No DB to select.");
mysql_set_charset('latin-1',$objConnect);
$objDB = mysql_select_db("your_DB");
?>
<?
if(isset($_POST['topic'], $_POST['tense'], $_POST['type']))
{
  $risultato = '';
    foreach ($_POST['topic'] as $key_argomento => $value_argomento)
    {
        foreach ($_POST['tense'] as $key_tempo => $value_tempo)
        {
            foreach ($_POST['type'] as $key_tipo => $value_tipo)
            {
                    $q_tip_arg_tem = "SELECT * 
                                          FROM items 
                                          WHERE topic = '".$value_argomento."' AND 
                                                tense = '".$value_tempo."' AND 
                                                type = '".$value_tipo."'";
                    $qu_tip_arg_tem = mysql_query($q_tip_arg_tem);
                     while ($righe = mysql_fetch_array($qu_tip_arg_tem))
                     	     {
                     	     	     $risultato = $righe['file'];
                     	     	     readfile("files/$risultato");
				     echo "----------------------------------------"."\n"."\n";
                     	     }
                }
            }
        }
}
else
{
    echo "You forgot to check something."."\n"."Please select at least one type, topic and tense value."."\n"."\n";
}
if(!$risultato)
{
echo "Sorry. There are no exercises in the database which match your search."."\n"."Please try selecting different values.";
}
else
{
}
?>

<?
mysql_close($objConnect);
?>

	</textarea><br><br><br>
	If you wish, you can export the exercises above to a text file, which can be saved, sent or printed easily:<br>
	<p align="center">
	<input type="submit" value="do it">
	</p>
	</form>
     </td>
   </tr>
  </tbody>
 </table> 
</body>
</html>
