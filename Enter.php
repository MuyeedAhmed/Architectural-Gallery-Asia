<?php
	//include_once "Includes/header.php";
	include_once "connection.php";
	
?>
	<div class = "enter-page">
	<form name = "enter data" method = "post" action = "Enter.php" enctype="multiple/form-data">

	<h1>Category : <input type = "text" name = "Category" value = <?php echo $_POST["Category"];?> readonly /></h1>
	<div class = "enter-left">
		<h3><strong>Basic Informations</strong></h3></br>
		<p>
			<strong>Name of the structure</strong></br>
			<input type = "text" name = "name"/>
		</p>
		<p><strong>Location:</strong></p>
		<p>
			<strong style="padding-left:2em">Country</strong>
			<select name = "country">
				<option value = "Afghanistan">Afghanistan</option>
				<option value = "Armenia">Armenia</option>
				<option value = "Azerbaijan">Azerbaijan</option>
				<option value = "Bahrain">Bahrain</option>
				<option value = "Bangladesh">Bangladesh</option>
				<option value = "Bhutan">Bhutan</option>
				<option value = "Brunei">Brunei</option>
				<option value = "Burma">Burma</option>
				<option value = "Cambodia">Cambodia</option>
				<option value = "China">China</option>
				<option value = "Cyprus">Cyprus</option>
				<option value = "East Timor">East Timor</option>
				<option value = "Egypt">Egypt</option>
				<option value = "Georgia">Georgia</option>
				<option value = "India">India</option>
				<option value = "Indonesia">Indonesia</option>
				<option value = "Iran">Iran</option>
				<option value = "Iraq">Iraq</option>
				<option value = "Israel">Israel</option>
				<option value = "Japan">Japan</option>
				<option value = "Jordan">Jordan</option>
				<option value = "Kazakhstan">Kazakhstan</option>
				<option value = "Kuwait">Kuwait</option>
				<option value = "Kyrgyzstan">Kyrgyzstan</option>
				<option value = "Laos">Laos</option>
				<option value = "Lebanon">Lebanon</option>
				<option value = "Malaysia">Malaysia</option>
				<option value = "Maldives">Maldives</option>
				<option value = "Mongolia">Mongolia</option>
				<option value = "Nepal">Nepal</option>
				<option value = "North Korea">North Korea</option>
				<option value = "Northern Cyprus">Northern Cyprus</option>
				<option value = "Oman">Oman</option>
				<option value = "Pakistan">Pakistan</option>
				<option value = "State of Palestine">State of Palestine</option>
				<option value = "Philippines">Philippines</option>
				<option value = "Qatar">Qatar</option>
				<option value = "Russia">Russia</option>
				<option value = "Saudi Arabia">Saudi Arabia</option>
				<option value = "Sri Lanka">Sri Lanka</option>
				<option value = "South Korea">South Korea</option>
				<option value = "South Ossetia">South Ossetia</option>
				<option value = "Syria">Syria</option>
				<option value = "Taiwan">Taiwan</option>
				<option value = "Tajikistan">Tajikistan</option>
				<option value = "Thailand">Thailand</option>
				<option value = "Turkey">Turkey</option>
				<option value = "Turkmenistan">Turkmenistan</option>
				<option value = "United Arab Emirates">United Arab Emirates</option>
				<option value = "Uzbekistan">Uzbekistan</option>
				<option value = "Vietnam">Vietnam</option>
				<option value = "Yemen">Yemen</option>
			</select>
		</p>	
		<p style="padding-left:2em">
			<strong>Address</strong></br>
			<input type = "text" name = "address"/>
		</p>
		<p style="padding-left:2em">
			<strong>City</strong></br>
			<input type = "text" name = "city"/>
		</p>
		<p>
			<strong>Type</strong></br>
			<input type = "text" name = "type"/>
		</p>
		<p><strong>Established</strong></p>
		<p style="padding-left:2em">
			<strong>Month</strong></br>
			<input type = "text" name = "month"/>
		</p>
		<p style="padding-left:2em">
			<strong>Year</strong></br>
			<input type="number" name="year" min="" max=""/>
		</p>

			<?php
				if($_POST["Category"] == "Skyscraper" || $_POST["Category"] == "Palace" || 
					$_POST["Category"] == "Islamic" || $_POST["Category"] == "Temple" || 
					$_POST["Category"] == "Hotel" || $_POST["Category"] == "Museum"){
			?>
				<p>
					<strong>Architectural Style</strong></br>
					<input type = "text" name = "style"/>
				</p>
			<?php } ?>
			<p>
				<strong>Architect</strong></br>
				<input type = "text" name = "architect"/>
			</p>	
			
		</div>
		<div class = "enter-right">
			<h3><strong>Other Informations</strong></h3></br>
			<?php
				if($_POST["Category"] == "Skyscraper" || $_POST["Category"] == "Stadium" 
					|| $_POST["Category"] == "Mall" || $_POST["Category"] == "Castle" || $_POST["Category"] == "Palace" || 
					$_POST["Category"] == "Hotel" || $_POST["Category"] == "Museum"){
			?>
				<p>
					<strong>Owner</strong></br>
					<input type = "text" name = "owner"/>
				</p>
			<?php
				}
			?>
			
			<?php
				if($_POST["Category"] == "Skyscraper"){
			?>
				<p>
					<strong>Construction Started</strong></br>
					<input type = "date" name = "constraction-start"/>
				</p>
				<p>
					<strong>Cost</strong></br>
					<input type = "text" name = "cost"/>
				</p>
				<p>
					<strong>Height</strong></br>
					<input type = "text" name = "height"/>
				</p>
				<p>
					<strong>Floor Area</strong></br>
					<input type = "text" name = "floor-area"/>
				</p>
				<p>
					<strong>Lift/Eleator</strong></br>
					<input type = "text" name = "lift"/>
				</p>
				<p>
					<strong>Structure Engineer</strong></br>
					<input type = "text" name = "engineer"/>
				</p>
			<?php
				}
			?>

			<?php
				if($_POST["Category"] == "Airport"){
			?>
				<p>
					<strong>Operator</strong></br>
					<input type = "text" name = "operator"/>
				</p>
				<p>
					<strong>Elevation AMSL(Sea Level)</strong></br>
					<input type = "text" name = "sea-level"/>
				</p>
				<p>
					<strong>Economic Impact</strong></br>
					<input type = "text" name = "eco-impact"/>
				</p>
				<p>
					<strong>Total Passenger in 2014</strong></br>
					<input type = "text" name = "passenger"/>
				</p>
			<?php
				}
			?>

			<?php
				if($_POST["Category"] == "Stadium"){
			?>
				<p>
					<strong>Capacity</strong></br>
					<input type = "text" name = "capacity"/>
				</p>
				<p>
					<strong>Operator</strong></br>
					<input type = "text" name = "operator"/>
				</p>
				<p>
					<strong>Cost</strong></br>
					<input type = "text" name = "cost"/>
				</p>
				<p>
					<strong>Field Size</strong></br>
					<input type = "text" name = "field-size"/>
				</p>
				<p>
					<strong>Surface</strong></br>
					<input type = "text" name = "surface"/>
				</p>
			<?php
				}
			?>
		
			<?php
				if($_POST["Category"] == "Mall"){
			?>
				<p>
					<strong>Developer</strong></br>
					<input type = "text" name = "developer"/>
				</p>
				<p>
					<strong>Number of Stores</strong></br>
					<input type = "text" name = "number-stores"/>
				</p>
				<p>
					<strong>Floor Area</strong></br>
					<input type = "text" name = "floor-area"/>
				</p>
				<p>
					<strong>Floors</strong></br>
					<input type = "text" name = "floor"/>
				</p>
			<?php
				}
			?>
			<?php
				if($_POST["Category"] == "Castle"){
			?>
				<p>
					<strong>Build By</strong></br>
					<input type = "text" name = "build-by"/>
				</p>
				<p>
					<strong>Materials</strong></br>
					<input type = "text" name = "material"/>
				</p>
			<?php
				}
			?>

			<?php
				if($_POST["Category"] == "Landmark"){
			?>
				<p>
					<strong>Height</strong></br>
					<input type = "text" name = "height"/>
				</p>
				<p>
					<strong>Size</strong></br>
					<input type = "text" name = "size"/>
				</p>
				<p>
					<strong>Visitors in 2014</strong></br>
					<input type = "text" name = "visitor"/>
				</p>
			<?php
				}
			?>

			<?php
				if($_POST["Category"] == "Islamic"){
			?>
				<p>
					<strong>Height</strong></br>
					<input type = "text" name = "height"/>
				</p>
				<p>
					<strong>Floor Area</strong></br>
					<input type = "text" name = "floor-area"/>
				</p>
				<p>
					<strong>Capacity</strong></br>
					<input type = "text" name = "capacity"/>
				</p>
				<p>
					<strong>Leadership(Imam)</strong></br>
					<input type = "text" name = "leadership"/>
				</p>
			<?php
				}
			?>

			<?php
				if($_POST["Category"] == "Temple"){
			?>
				<p>
					<strong>Height</strong></br>
					<input type = "text" name = "height"/>
				</p>
				<p>
					<strong>Affiliation</strong></br>
					<input type = "text" name = "affiliation"/>
				</p>
			<?php
				}
			?>

			<?php
				if($_POST["Category"] == "Hotel"){
			?>
				<p>
					<strong>Management</strong></br>
					<input type = "text" name = "management"/>
				</p>
				<p>
					<strong>Floors</strong></br>
					<input type = "text" name = "floor"/>
				</p>
				<p>
					<strong>Floor Area</strong></br>
					<input type = "text" name = "floor-area"/>
				</p>
				<p>
					<strong>Number of Rooms</strong></br>
					<input type = "text" name = "number-room"/>
				</p>
				<p>
					<strong>Number of Suits</strong></br>
					<input type = "text" name = "number-suit"/>
				</p>
				<p>
					<strong>Number of Restaurants</strong></br>
					<input type = "text" name = "number-restaurant"/>
				</p>
				<p>
					<strong>Cost Per Night</strong></br>
					<input type = "text" name = "cost-per-night"/>
				</p>
			<?php
				}
			?>

			<?php
				if($_POST["Category"] == "Museum"){
			?>
				<p>
					<strong>Visitors</strong></br>
					<input type = "text" name = "visitor"/>
				</p>
				<p>
					<strong>Director</strong></br>
					<input type = "text" name = "director"/>
				</p>
			<?php
				}
			?>

			<?php
				if($_POST["Category"] == "Skyscraper" || $_POST["Category"] == "Airport" || $_POST["Category"] == "Mall" || 
					$_POST["Category"] == "Hotel" || $_POST["Category"] == "Museum"){
			?>
				<p>
					<strong>Website</strong></br>
					<input type = "text" name = "website"/>
				</p>
			<?php
				}
			?>
			<p>
				<input type="checkbox" name="whsa" value="WHSA">World Heritage Site<br>
			</p>

			<p>
				<strong>About</strong></br>
				<textarea name = "about" cols = 30 row = 5></textarea>
			</p>
			
			<strong>Image URL :</strong></br>
			<strong>Cover</strong></br>
			<input type="file" name="cover" /></br>
			<strong>Other Images</strong></br>
            <input type="file" name="i1" /></br>
            <input type="file" name="i2" /></br>
            <input type="file" name="i3" /></br>
            <input type="file" name="i4" /></br>
            <input type="file" name="i5" /></br>
			</div>
			<p>
				<input type="submit" name="save" value = "Save" />
			</p>
		</form>
	</div>
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
<?php
	if(isset($_POST['save'])){

	include_once "connection.php";

	$cover = addslashes($_FILES["cover"]["tmp_name"]);
	$cover = file_get_contents($cover);
	$cover = base64_encode($cover);
	$Image1 = mysql_real_escape_string(file_get_contents($_FILES["i1"]["tmp_name"]));
	$Image2 = mysql_real_escape_string(file_get_contents($_FILES["i2"]["tmp_name"]));
	$Image3 = mysql_real_escape_string(file_get_contents($_FILES["i3"]["tmp_name"]));
	$Image4 = mysql_real_escape_string(file_get_contents($_FILES["i4"]["tmp_name"]));
	$Image5 = mysql_real_escape_string(file_get_contents($_FILES["i5"]["tmp_name"]));




	$sql = "INSERT INTO `agallery`.`images` (`IMAGE_ID`, `COVER`, `I1`, `I2`, `I3`, `I4`, `I5`) VALUES (NULL, '".$Cover."', '".$Image1."', '".$Image2."', '".$Image3."', '".$Image4."', '".$Image5."');";
	mysqli_query($con, $sql);	
	
	$I_ID = mysqli_insert_id($con);

/*
	$sql = "INSERT INTO `agallery`.`location` (`LOCATION_ID`, `ADDRESS`, `CITY`, `COUNTRY`) VALUES (NULL, '".$_POST['address']."', '".$_POST['city']."', '".$_POST['country']."');";
	mysqli_query($con, $sql);

	$L_ID = mysqli_insert_id($con);

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
	*/
?>
<!--
	<div style = "position:absolute; top:250px; left:200px;right:200px; height: 200px;padding:5%; background-color:#F1895F;">
		<h1><font color="white">Adding Successful</font></h2>
		<p><font color="white"><a href="Choose Category Enter.php">Click here</a> to add more.</font></p>
	</div>
<?php } ?>

/************************************************************************************/
/************************************************************************************/
/************************************************************************************/
-->


<?php
	include_once "Includes/footer.php";
?>