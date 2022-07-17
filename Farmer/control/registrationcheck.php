<?php
$usernameValidation="";
$passwordValidation="";
$emailValidation="";
$phoneValidation="";

if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone=$_POST['phone'];
if (empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['email']) || empty($_POST['phone']))
{
	echo "All fields required";
}
if(strlen($_POST['username'])<5)
{
	$usernameValidation="Plz fill up the username correctly";
	
}
if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
	$emailValidation="You must enter a valid email";
}
if(strlen($_POST['password'])<8)
{
	$passwordValidation ="Your password must be more than 8 characters";
}
if(strlen($_POST['phone'])<11)
{
	$phoneValidation ="Plz enter a valid number";
}

else
{  
	extract($_REQUEST);
	
	$user = $username."|".$password."|".$email."|".$phone."\r\n";
	$file = fopen('form-save.txt', 'a');
	fwrite($file, $user);
	// fwrite($file,"name :");
	// fwrite($file,$username ."\n");
	// fwrite($file,"Email :");
	// fwrite($file,$email ."\n");
	// fwrite($file,"Password :");
	// fwrite($file,$password ."\n");
    // fwrite($file,"Phone :");
	// fwrite($file,$phone ."\n");
	header("location: ../view/login.php");

    
}
}

?>