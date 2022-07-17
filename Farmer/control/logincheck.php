<?php


$error = "";
$success = "";

 
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];


if (empty($username) || empty($password)) {
$error = "All fields are required";
} 

 else {
    $file = fopen('../view/form-save.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data); 
		
		if($username == trim($user[0]) && $password == trim($user[1]) ) {
			setcookie('status', 'true', time()+3600, '/');		
			header('location: ../view/home.php?username='.$username);
          }
     }

    } 








