<?php 
	if(isset($_COOKIE['status']))
	
?>


<html>
    <head>
        <title>Edit Profile</title>
    </head>
    <body>
        <form action="profile.php" method="post" enctype="">
            <fieldset align="middle">
                <legend>Welcome to your Profile</legend>
                <body>You can edit your Profile here <body><br>
                New Name: <input type= "text" name = "new" value = "" placeholder="Enter New Name"><br>
                <input type = "submit" name = "submit" value = "Submit">
                <a href= "home.php">Home</a><br>

                
				<a href="changepassword.php">Change Password</a><br>
				<a href="logout.php"> Logout </a>
            </fieldset>

        </form>

    </body>
</html>



