<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
</html>

<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "Not Connected";
}
if(!mysqli_select_db($con,'register_spices'))
{
	echo "Database not selected";
}
$a=$_POST['name'];
if(empty($_POST["name"]))
{
	
  $message = "Please Enter Name";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:2;url=contact_us.php");
  return false;
}
else
{
	$name = $_POST["name"];
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{	

		$message = "Only Letters are allowed";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("refresh:2;url=contact_us.php");
		return false;
	}
	else
	{
		echo $name."<br>";
	}
}

$b=$_POST['email'];
if(empty($_POST["email"]))
{
  $message = "Email Not Found";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:2;url=contact_us.php");
  return false;
}
else{
	$email=$_POST["email"];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
	  $message = "Invalid Email";
	  echo "<script type='text/javascript'>alert('$message');</script>";
	  header("refresh:2;url=contact_us.php");
	  return false;
	}
}


$c=$_POST['subject'];
if(empty($_POST["subject"]))
{
  $message = "Subject Not Found";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:2;url=contact_us.php");
  return false;
}
else{
	echo $c."<br>";
}



$d=$_POST['message'];
if(empty($_POST["message"]))
{
  $message = "Message Not Found";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:2;url=contact_us.php");
  return false;
}

else{
	echo $d."<br>";
}

$sql="INSERT INTO contact_form (Name,Email,Subject,Message) VALUES ('$a','$b','$c','$d')";


if(!mysqli_query($con,$sql))
{
	echo "NOT INSERTED";
}
else
{
	echo "INSERTED";
}

?>