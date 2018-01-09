<?php
	include_once "Includes/header.php";
?>
	<div class = "Admin-page">
		<h2><strong>Admin<strong></h2>
		
		<a href="Choose Category Enter.php"><img src="Images/Admin Page/Buttons/Enter.jpg"></a>
		<a href="Remove.php"><img src="Images/Admin Page/Buttons/Remove.jpg"></a>
		<a href="Admin Login.php"><img src="Images/Admin Page/Buttons/Logout.jpg"></a>
	</div>

<?php
	include_once "Includes/footer.php";
?>
<style type="text/css">
.Admin-page{
	padding: 50px;
    width: 70%;
    font-size: 20px;
    color: #2E3853;
    font-style: italic bold;
    margin: 0 auto;
    background-color: #D1C7AC;
}

.Admin-page img:hover {
    -webkit-box-shadow: 0px 0px 20px rgba(255,255,255,0.9);
    box-shadow: 0px 0px 20px rgba(255,255,255,0.9);
}
</style>