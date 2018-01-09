<?php
	include_once "Includes/header.php";
?>
	<div id = "admin-login" class = "clearfix">
		<h2><strong>Admin Login</strong></h2>

		<form name = "admin_login" method = "post" action = "Check password.php">
			<p>
				<strong> <font color = "white" size = 4px>Username</font></strong><br/>
				<input type = "text" name = "username"/>
			</p>
			<p>
				<strong><font color = "white" size = 4px>Password</font><strong><br/>
				<input type = "password" name = "password"/>
			</p>
			<p>
				<input type="submit" name="login" value = "Login" />
			</p>
		</form>
	</div>

	</body>
</html>