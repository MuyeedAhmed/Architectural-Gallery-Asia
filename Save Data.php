<?php
	include_once "Includes/header.php";
?>

<?php
	include_once "connection.php";
	
	$sql = "INSERT INTO `agallery`.`location` (`LOCATION_ID`, `ADDRESS`, `CITY`, `COUNTRY`) VALUES (NULL, '".$_POST['address']."', '".$_POST['city']."', '".$_POST['country']."');";
	mysqli_query($con, $sql);


	$L_ID = mysqli_insert_id($con);

	$sql = "INSERT INTO `agallery`.`image` (`IMAGE_ID`, `COVER`, `I1`, `I2`, `I3`, `I4`, `I5`) VALUES (NULL, '".$_POST['cover']."', '".$_POST['i1']."', '".$_POST['i2']."', '".$_POST['i3']."', '".$_POST['i4']."', '".$_POST['i5']."');";
	mysqli_query($con, $sql);	
	
	$I_ID = mysqli_insert_id($con);

	$sql = "INSERT INTO `agallery`.`structure` (`STRUCTURE_ID`, `STRUCTURE_NAME`, `CATEGORY`, `TYPE`, `LOCATION_ID`, `ARCHITECT`, `IMAGE_ID`, `ABOUT`) VALUES (NULL, '".$_POST['name']."', '".$_POST['Category']."', '".$_POST['type']."', '".$L_ID."', '".$_POST['architect']."', '".$I_ID."', '".$_POST['about']."');";
	mysqli_query($con, $sql);
	
	$S_ID = mysqli_insert_id($con);

	$sql = "INSERT INTO `agallery`.`establish` (`STRUCTURE_ID`, `YEAR`, `MONTH`) VALUES ('".$S_ID."', '".$_POST['year']."', '".$_POST['month']."');";
	mysqli_query($con, $sql);

	if (isset($_POST['whsa'])) {
		$sql = "INSERT INTO `agallery`.`whsa` (`STRUCTURE_ID`) VALUES ('".$S_ID."');";
		mysqli_query($con, $sql);
    }

	if($_POST["Category"] == "Skyscraper"){
		$sql = "INSERT INTO `agallery`.`skyscraper` (`STRUCTURE_ID`, `STYLE`, `CONSTRUCTION_START`, `OWNER`, `HEIGHT`, `COST`, `FLOOR_AREA`, `LIFT`, `ENGINEER`, `WEBSITE` ) VALUES ('".$S_ID."', '".$_POST['style']."', '".$_POST['constraction-start']."', '".$_POST['owner']."', '".$_POST['height']."', '".$_POST['cost']."', '".$_POST['floor-area']."', '".$_POST['lift']."', '".$_POST['engineer']."', '".$_POST['website']."');";
		mysqli_query($con, $sql);
	}

	if($_POST["Category"] == "Airport"){
		$sql = "INSERT INTO `agallery`.`airport` (`STRUCTURE_ID`, `OPERATOR`, `SEA_LEVEL`, `ECONOMIC_IMPACT`, `PASSENGER`, `WEBSITE` ) VALUES ('".$S_ID."', '".$_POST['operator']."', '".$_POST['sea-level']."', '".$_POST['eco-impact']."', '".$_POST['passenger']."', '".$_POST['website']."');";
		mysqli_query($con, $sql);
	}

	if($_POST["Category"] == "Stadium"){
		$sql = "INSERT INTO `agallery`.`stadium` (`STRUCTURE_ID`, `CAPACITY`, `OWNER`, `OPERATOR`, `COST`, `FIELD_SIZE`, `SURFACE`) VALUES ('".$S_ID."', '".$_POST['capacity']."', '".$_POST['owner']."', '".$_POST['operator']."', '".$_POST['cost']."', '".$_POST['field-size']."', '".$_POST['surface']."');";
		mysqli_query($con, $sql);
	}

	if($_POST["Category"] == "Shopping Mall"){
		$sql = "INSERT INTO `agallery`.`mall` (`STRUCTURE_ID`, `DEVELOPER`, `OWNER`, `STORE_NUMBER`, `FLOOR_AREA`, `FLOOR`, `WEBSITE` ) VALUES ('".$S_ID."', '".$_POST['developer']."', '".$_POST['owner']."', '".$_POST['number-stores']."', '".$_POST['floor-area']."', '".$_POST['floor']."', '".$_POST['website']."');";
		mysqli_query($con, $sql);
	}

	if($_POST["Category"] == "Castle"){
		$sql = "INSERT INTO `agallery`.`castle` (`STRUCTURE_ID`, `OWNER`, `BUILD_BY`, `MATERIAL`) VALUES ('".$S_ID."', '".$_POST['owner']."', '".$_POST['build-by']."', '".$_POST['material']."');";
		mysqli_query($con, $sql);
	}

	if($_POST["Category"] == "Palace"){
		$sql = "INSERT INTO `agallery`.`palace` (`STRUCTURE_ID`, `STYLE`, `OWNER`) VALUES ('".$S_ID."', '".$_POST['style']."', '".$_POST['owner']."');";
		mysqli_query($con, $sql);
	}

	if($_POST["Category"] == "Landmark"){
		$sql = "INSERT INTO `agallery`.`landmark` (`STRUCTURE_ID`, `HEIGHT`, `SIZE`, `VISITOR`) VALUES ('".$S_ID."', '".$_POST['hieght']."', '".$_POST['size']."', '".$_POST['visitor']."');";
		mysqli_query($con, $sql);
	}

	if($_POST["Category"] == "Islamic"){
		$sql = "INSERT INTO `agallery`.`islamic` (`STRUCTURE_ID`, `STYLE`, `HEIGHT`, `FLOOR_AREA`, `CAPACITY`, `LEADERSHIP`) VALUES ('".$S_ID."', '".$_POST['style']."', '".$_POST['height']."', '".$_POST['floor-area']."', '".$_POST['capacity']."', '".$_POST['leadership']."');";
		mysqli_query($con, $sql);
	}

	if($_POST["Category"] == "Temple"){
		$sql = "INSERT INTO `agallery`.`temple` (`STRUCTURE_ID`, `STYLE`, `HEIGHT`, `AFFILIATION`) VALUES ('".$S_ID."', '".$_POST['style']."', '".$_POST['height']."', '".$_POST['affiliation']."');";
		mysqli_query($con, $sql);
	}

	if($_POST["Category"] == "Hotel"){
		$sql = "INSERT INTO `agallery`.`hotel` (`STRUCTURE_ID`, `STYLE`, `MANAGEMENT`, `OWNER`, `FLOOR`, `FLOOR_AREA`, `ROOM_NUMBER`, `SUIT_NUMBER`, `RESTAURANT_NUMBER`, `COST_PER_NIGHT`, `WEBSITE`) VALUES ('".$S_ID."', '".$_POST['style']."', '".$_POST['management']."', '".$_POST['owner']."', '".$_POST['floor']."', '".$_POST['floor-area']."', '".$_POST['number-room']."', '".$_POST['number-suit']."', '".$_POST['number-restaurant']."', '".$_POST['cost-per-night']."', '".$_POST['website']."');";
		mysqli_query($con, $sql);
	}

	if($_POST["Category"] == "Museum"){
		$sql = "INSERT INTO `agallery`.`museum` (`STRUCTURE_ID`, `STYLE`, `VISITOR`, `OWNER`, `DIRECTOR`, `WEBSITE`) VALUES ('".$S_ID."', '".$_POST['style']."', '".$_POST['visitor']."', '".$_POST['owner']."', '".$_POST['director']."', '".$_POST['website']."');";
		mysqli_query($con, $sql);
	}
?>

	<div style = "position:absolute; top:250px; left:200px;right:200px; height: 200px;padding:5%; background-color:#F1895F;">
		<h1><font color="white">Adding Successful</font></h2>
		<p><font color="white"><a href="Choose Category Enter.php">Click here</a> to add more.</font></p>
	</div>
<?php
	include_once "Includes/footer.php";
?>