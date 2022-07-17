<?php 
	if(isset($_COOKIE['status']))
	
?>

<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <header>
        <hr>
<h1>Welcome Dear Farmer <?php echo $_GET['username']; ?></h1>
</hr>
</header>

<div id= "panel">
<section>
<fieldset>
    <nav>

<h1> Farmer's Activity </h1>
</nav>
<br>
<fieldset align="middle">


<h3>Select  below: </h3>
<hr>
<hr>
<h4> <a href="farmerlist.php">Farmer List </a></h4>
<hr>
<hr>
<h4> <a href="cropsale.php">Crop Sale</a></h4>
<hr>
<hr>
<h4> <a href="cropharvest.php">Crop Harvest</a></h4>
<hr>
<hr>
<h4> <a href="transaction.php"> Transaction Summary </a></h4>
<hr>
<hr>
<div>
<h4> <a href="cropmedicine.php">Crop Medicine </a></h4> </div>
<hr>
<hr>

<h4> <a href="profile.php"> EDIT PROFILE </a></h4>
<hr>
<hr>


</fieldset>
</section>
</div>

 <h3>Do you want to exit? Click here : <a href="../view/logout.php"><br>
 logout</a></h3>
 

</body>
</html>

