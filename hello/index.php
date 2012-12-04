<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>

<body>
<form action="index.php" method="GET">
	<input type="text" name="name">
	<input type="submit" value="GO">
</form>
<?php
// Clif Budden
 
if (! empty($_GET['name'])){
	//Create variable
   $name = $_GET['name'];
   
   //Output variable with selected text
   echo 'you entered name: ' . $name . '<br>';
   
   $con = mysql_connect("localhost", "WRXuser", "abc!123");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
   
   //Sanitize Variable for Database Input
   $cleanname    =   $name;
   $cleanname    =   stripslashes($cleanname);
   $cleanname    =   htmlentities($cleanname);
   $cleanname    =   strip_tags($cleanname);
   $cleanname    =   filter_var($cleanname, FILTER_SANITIZE_STRING);
   
   mysql_select_db("progtest", $con);

	$sql="INSERT INTO hello_demo (Name)
	VALUES
	('$cleanname')";

	if (!mysql_query($sql,$con))
  	{
  	die('Error: ' . mysql_error());
  	}
	echo "1 record added";
   
   mysql_close($con);
}
?>
</body>
</html>