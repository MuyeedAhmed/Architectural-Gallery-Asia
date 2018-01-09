<?php
	include_once "Includes/header.php";
	include_once "connection.php";
?>
<?php
	$sql = "SELECT * FROM `agallery`.`admin`;";
	$result = mysqli_query($con, $sql);
	$admin = $result->fetch_assoc();


	if($_POST['username'] == $admin['USERNAME'] and $_POST['password'] == $admin['PASSWORD'] ){
?>
		<div style = "position:absolute; top:250px; left:200px;right:200px; height: 200px;padding:5%; background-color:#F1895F;">
			<h1><font color="white">Login Successful</font></h2>
				<p><font color="white"><a href="Admin Page.php">Click here</a> to continue.</font></p>
		</div>

<?php 
	} 
	else { 
	?>
		<div style = "position:absolute; top:250px; left:200px;right:200px; height: 200px;padding:5%; background-color:#00B1EE;">
			<h1><font color="white">Incorrect Username/Password</font></h2>
				<p><font color="white"><a href="Admin Login.php">Click here</a> to go back.</font></p>
			</div>
<?php
	}
	include_once "Includes/footer.php";
?>	