<?php
	include_once "Includes/header.php";
	include_once "connection.php";
?>
<?php

	$sql = "SELECT * FROM `agallery`.`structure`
	WHERE `STRUCTURE_ID` = '".$_POST['str']."';";
	$result = $con->query($sql);
	$structure = $result->fetch_assoc();					
	$category = $structure['CATEGORY'];
	$I_ID = $structure['IMAGE_ID'];
	$L_ID = $structure['LOCATION_ID'];


	$sql = "DELETE FROM `agallery`.`structure` WHERE `structure`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
	mysqli_query($con, $sql);
	
	$sql = "DELETE FROM `agallery`.`location` WHERE `location`.`LOCATION_ID` = '".$L_ID."';";
	
	mysqli_query($con, $sql);
		
	$sql = "DELETE FROM `agallery`.`image` WHERE `image`.`IMAGE_ID` = '".$I_ID."';";
	
	mysqli_query($con, $sql);
		
	$sql = "DELETE FROM `agallery`.`establish` WHERE `establish`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
	mysqli_query($con, $sql);

	if($category == "Skyscraper"){
		$sql = "DELETE FROM `agallery`.`skyscraper` WHERE `skyscraper`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
		mysqli_query($con, $sql);		
	}
	if($category == "Airoprt"){
		$sql = "DELETE FROM `agallery`.`airoprt` WHERE `airoprt`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
		mysqli_query($con, $sql);		
	}
	if($category == "Stadium"){
		$sql = "DELETE FROM `agallery`.`stadium` WHERE `stadium`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
		mysqli_query($con, $sql);		
	}
	if($category == "Mall"){
		$sql = "DELETE FROM `agallery`.`mall` WHERE `mall`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
		mysqli_query($con, $sql);		
	}
	if($category == "Castle"){
		$sql = "DELETE FROM `agallery`.`castle` WHERE `castle`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
		mysqli_query($con, $sql);		
	}
	if($category == "Palace"){
		$sql = "DELETE FROM `agallery`.`palace` WHERE `palace`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
		mysqli_query($con, $sql);		
	}
	if($category == "Landmark"){
		$sql = "DELETE FROM `agallery`.`landmark` WHERE `landmark`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
		mysqli_query($con, $sql);		
	}
	if($category == "Islamic"){
		$sql = "DELETE FROM `agallery`.`islamic` WHERE `islamic`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
		mysqli_query($con, $sql);		
	}
	if($category == "Temple"){
		$sql = "DELETE FROM `agallery`.`temple` WHERE `temple`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
		mysqli_query($con, $sql);		
	}
	if($category == "Hotel"){
		$sql = "DELETE FROM `agallery`.`hotel` WHERE `hotel`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
		mysqli_query($con, $sql);		
	}
	if($category == "Museum"){
		$sql = "DELETE FROM `agallery`.`museum` WHERE `museum`.`STRUCTURE_ID` = '".$_POST['str']."';";
	
		mysqli_query($con, $sql);		
	}
?>
		<div style = "position:absolute; top:250px; left:200px;right:200px; height: 200px;padding:5%; background-color:#F1895F;">
			<h1><font color="white">Removed</font></h2>
				<p><font color="white"><a href="Admin Page.php">Click here</a> to go to the Admin Page.</font></p>
		</div>
<?php
	include_once "Includes/footer.php";
?>
