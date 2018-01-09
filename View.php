<?php
	include_once "Includes/header.php";
	include_once "connection.php";
	$struct = $_GET['str'];
?>
<?php

	$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`location` L
	ON(S.`LOCATION_ID` = L.`LOCATION_ID`) JOIN `agallery`.`establish` E
	ON(S.`STRUCTURE_ID` = E.`STRUCTURE_ID`)
	WHERE S.`STRUCTURE_ID` = '".$struct."';";
//	$structures = mysqli_query($con, $sql);
	$result = $con->query($sql);
	$structure = $result->fetch_assoc();					
//	foreach ($structures as $structure) {		
		$Str_id = $structure['STRUCTURE_ID'];

	$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
	ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$struct."';";
	$images = $con->query($sql);
	$image = $images->fetch_assoc();					
	
?>

	<div class = "view-page">
		<h2><?php echo $structure['STRUCTURE_NAME'];?></h2>
<!-- Slide Show-->

	<div id="slideshow-wrap">
        <input type="radio" id="button-1" name="controls" checked="checked"/>
        <label for="button-1"></label>
        <input type="radio" id="button-2" name="controls"/>
        <label for="button-2"></label>
        <input type="radio" id="button-3" name="controls"/>
        <label for="button-3"></label>
        <input type="radio" id="button-4" name="controls"/>
        <label for="button-4"></label>
        <input type="radio" id="button-5" name="controls"/>
        <label for="button-5"></label>
        <label for="button-1" class="arrows" id="arrow-1">></label>
        <label for="button-2" class="arrows" id="arrow-2">></label>
        <label for="button-3" class="arrows" id="arrow-3">></label>
        <label for="button-4" class="arrows" id="arrow-4">></label>
        <label for="button-5" class="arrows" id="arrow-5">></label>
        <div id="slideshow-inner">
            <ul>
                <li id="slide1">
				     <img src="<?php echo $image['I1'];?>"/>
                </li>
                <li id="slide2">
                    <img src="<?php echo $image['I2'];?>"/>
                </li>
                <li id="slide3">
                    <img src="<?php echo $image['I3'];?>"/>
                </li>
                <li id="slide4">
                    <img src="<?php echo $image['I4'];?>"/>
                </li>
                <li id="slide5">
                    <img src="<?php echo $image['I5'];?>"/>
                </li>
            </ul>
        </div>
    </div>

<!-- Slide Show-->
	

				<p><strong>Name : </strong><?php echo $structure['STRUCTURE_NAME'];?></p>
				<p><strong>Location : </strong><?php echo $structure['ADDRESS']. ", ". $structure['CITY']. ", ". $structure['COUNTRY'];?></p>
				<p><strong>Established 	: </strong><?php echo $structure['MONTH']. " ". $structure['YEAR'];?></p>
				<p><strong>Type 		: </strong><?php echo $structure['TYPE'];?></p>
				<p><strong>Architect 	: </strong><?php echo $structure['ARCHITECT'];?></p>
				
				<?php
				
					if($structure['CATEGORY'] == "Skyscraper"){
						$sql = "SELECT * FROM `agallery`.`skyscraper` WHERE `STRUCTURE_ID` = '".$struct."';";
						$skyscrapers = mysqli_query($con, $sql);
						foreach ($skyscrapers as $skyscraper) {
				?>
				<p><strong>Architectural Style 	: </strong><?php echo $skyscraper['STYLE'];?></p>
				<p><strong>Construction Started 	: </strong><?php echo $skyscraper['CONSTRUCTION_START'];?></p>
				<p><strong>Owner	: </strong><?php echo $skyscraper['OWNER'];?></p>
				<p><strong>Cost 	: </strong><?php echo $skyscraper['COST'];?></p>
				<p><strong>Height 	: </strong><?php echo $skyscraper['HEIGHT'];?></p>
				<p><strong>Floor Area 	: </strong><?php echo $skyscraper['FLOOR_AREA'];?></p>
				<p><strong>Lift/Eleator 	: </strong><?php echo $skyscraper['LIFT'];?></p>
				<p><strong>Architect 	: </strong><?php ;?></p>
				<p><strong>Structure Engineer 	: </strong><?php echo $skyscraper['ENGINEER'];?></p>
				<p><strong>Website 	: </strong><?php echo $skyscraper['WEBSITE'];?></p>
				<?php
						}
					}
				?>

				<?php
					if($structure['CATEGORY'] == "Airport"){
						$sql = "SELECT * FROM `agallery`.`airport` WHERE `STRUCTURE_ID` = '".$struct."';";
						$airports = mysqli_query($con, $sql);
						foreach ($airports as $airport) {
				?>
				<p><strong>Operator 	: </strong><?php echo $airport['OPERATOR'];?></p>
				<p><strong>Elevation AMSL(Sea Level) 	: </strong><?php echo $airport['SEA_LEVEL'];?></p>
				<p><strong>Economic Impact 	: </strong><?php echo $airport['ECONOMIC_IMPACT'];?></p>
				<p><strong>Total Passenger in 2014 	: </strong><?php echo $airport['PASSENGER'];?></p>
				<p><strong>Website 	: </strong><?php echo $airport['WEBSITE'];?></p>
				<?php
						}
					}
				?>
				<?php
					if($structure['CATEGORY'] == "Stadium"){
						$sql = "SELECT * FROM `agallery`.`stadium` WHERE `STRUCTURE_ID` = '".$struct."';";
						$stadiums = mysqli_query($con, $sql);
						foreach ($stadiums as $stadium) {
				?>
				<p><strong>Capacity 	: </strong><?php echo $stadium['CAPACITY'];?></p>
				<p><strong>Operator 	: </strong><?php echo $stadium['OPERATOR'];?></p>
				<p><strong>Owner 		: </strong><?php echo $stadium['OWNER'];?></p>	
				<p><strong>Cost 		: </strong><?php echo $stadium['COST'];?></p>
				<p><strong>Field Size 	: </strong><?php echo $stadium['FIELD_SIZE'];?></p>
				<p><strong>Surface		: </strong><?php echo $stadium['SURFACE'];?></p>	
				<p><strong>Architect 	: </strong><?php ?></p>				
				
				<?php
						}
					}
				?>
		
				<?php
					if($structure['CATEGORY'] == "Mall"){
						$sql = "SELECT * FROM `agallery`.`mall` WHERE `STRUCTURE_ID` = '".$struct."';";
						$malls = mysqli_query($con, $sql);
						foreach ($malls as $mall) {
				?>
				<p><strong>Owner 		: </strong><?php echo $mall['OWNER'];?></p>
				<p><strong>Developer 	: </strong><?php echo $mall['DEVELOPER'];?></p>
				<p><strong>Number of Stores 	: </strong><?php echo $mall['STORE-NUMBER'];?></p>
				<p><strong>Floor Area 	: </strong><?php echo $mall['FLOOR_AREA'];?></p>
				<p><strong>Floors 		: </strong><?php echo $mall['FLOOR'];?></p>
				<p><strong>Architect 	: </strong></p>
				<p><strong>Website 		: </strong><?php echo $mall['WEBSITE'];?></p>
				<?php
						}
					}
				?>
				<?php
					if($structure['CATEGORY'] == "Castle"){
						$sql = "SELECT * FROM `agallery`.`castle` WHERE `STRUCTURE_ID` = '".$struct."';";
						$castles = mysqli_query($con, $sql);
						foreach ($castles as $castle) {
				?>
				<p><strong>Build By 	: </strong><?php echo $castle['BUILD_BY'];?></p>	
				<p><strong>Materials 	: </strong><?php echo $castle['MATERIAL'];?></p>
				<p><strong>Owner 		: </strong><?php echo $castle['OWNER'];?></p>
				<?php
						}
					}
				?>
				<?php
					if($structure['CATEGORY'] == "Palace"){
						$sql = "SELECT * FROM `agallery`.`palace` WHERE `STRUCTURE_ID` = '".$struct."';";
						$palaces = mysqli_query($con, $sql);
						foreach ($palaces as $palace) {
				?>
				<p><strong>Architectural Style 	: </strong><?php echo $palace['STYLE'];?></p>
				<p><strong>Architect 	: </strong><?php ?></p>
				<p><strong>Owner 		: </strong><?php echo $palace['OWNER'];?></p>
				<?php
						}
					}
				?>
				<?php
					if($structure['CATEGORY'] == "Landmark"){
						$sql = "SELECT * FROM `agallery`.`landmark` WHERE `STRUCTURE_ID` = '".$struct."';";
						$landmarks = mysqli_query($con, $sql);
						foreach ($landmarks as $landmark) {
				?>
				<p><strong>Height	: </strong><?php echo $landmark['HEIGHT'];?></p>					
				<p><strong>Size	: </strong><?php echo $landmark['SIZE'];?></p>					
				<p><strong>Visitors in 2014	: </strong><?php echo $landmark['VISITOR'];?></p>
					
				<?php 
						}
					}
				?>

				<?php
					if($structure['CATEGORY'] == "Islamic"){
						$sql = "SELECT * FROM `agallery`.`islamic` WHERE `STRUCTURE_ID` = '".$struct."';";
						$islamics = mysqli_query($con, $sql);
						foreach ($islamics as $islamic) {
				?>
				<p><strong>Architectural Style 	: </strong><?php echo $islamic['STYLE'];?></p>
				<p><strong>Height	: </strong><?php echo $islamic['HEIGHT'];?></p>	
				<p><strong>Floor Area	: </strong><?php echo $islamic['FLOOR_AREA'];?></p>
				<p><strong>Capacity	: </strong><?php echo $islamic['CAPACITY'];?></p>
				<p><strong>Leadership(Imam)	: </strong><?php echo $islamic['LEADERSHIP'];?></p>
				<p><strong>Architect 	: </strong></p>
			
				<?php
				 		}
					}
				?>

				<?php
					if($structure['CATEGORY'] == "Temple"){
						$sql = "SELECT * FROM `agallery`.`temple` WHERE `STRUCTURE_ID` = '".$struct."';";
						$temples = mysqli_query($con, $sql);
						foreach ($temples as $temple) {
				?>
				<p><strong>Architectural Style 	: </strong><?php echo $temple['STYLE'];?></p>
				<p><strong>Height	: </strong><?php echo $temple['HEIGHT'];?></p>	
				<p><strong>Affiliation	: </strong><?php echo $temple['AFFILIATION'];?></p>
				<p><strong>Architect 	: </strong></p>
			
				<?php
						}
					}
				?>
				<?php
					if($structure['CATEGORY'] == "Hotel"){
						$sql = "SELECT * FROM `agallery`.`hotel` WHERE `STRUCTURE_ID` = '".$struct."';";
						$hotels = mysqli_query($con, $sql);
						foreach ($hotels as $hotel) {
				?>
				<p><strong>Architectural Style 	: </strong><?php echo $hotel['STYLE'];?></p>
				<p><strong>Owner	: </strong><?php echo $hotel['OWNER'];?></p>
				<p><strong>Management	: </strong><?php echo $hotel['MANAGEMENT'];?></p>
				<p><strong>Floors	: </strong><?php echo $hotel['FLOOR'];?></p>
				<p><strong>Floor Area	: </strong><?php echo $hotel['FLOOR_AREA'];?></p>
				<p><strong>Number of Rooms	: </strong><?php echo $hotel['ROOM_NUMBER'];?></p>
				<p><strong>Number of Suits	: </strong><?php echo $hotel['SUIT_NUMBER'];?></p>
				<p><strong>Number of Restaurants	: </strong><?php echo $hotel['RESTAURANT_NUMBER'];?></p>
				<p><strong>Cost Per Night	: </strong><?php echo $hotel['COST_PER_NIGHT'];?></p>
				<p><strong>Website	: </strong><?php echo $hotel['WEBSITE'];?></p>
				<?php
						}
					}
				?>

				<?php
					if($structure['CATEGORY'] == "Museum"){
						$sql = "SELECT * FROM `agallery`.`museum` WHERE `STRUCTURE_ID` = '".$struct."';";
						$museums = mysqli_query($con, $sql);
						foreach ($museums as $museum) {
				?>
				<p><strong>Architectural Style 	: </strong><?php echo $museum['STYLE'];?></p>
				<p><strong>Owner	: </strong><?php echo $museum['OWNER'];?></p>
				<p><strong>Director	: </strong><?php echo $museum['DIRECTOR'];?></p>
				<p><strong>Visitors	: </strong><?php echo $museum['VISITOR'];?></p>
				<p><strong>Website	: </strong><?php echo $museum['WEBSITE'];?></p>
				<?php
						}
					}
				?>

				<p><strong>About 	: </strong><?php echo $structure['ABOUT'];?></p>
		<?php //} ?>
		
		</div>

<?php
	include_once "Includes/footer.php";
?>

<style type="text/css">
	
.view-page{
	padding: 50px;
    width: 70%;
    font-size: 20px;
    color: #2E3853;
    font-style: italic bold;
    margin: 0 auto;
    background-color: #D1C7AC;
}
.view-page p{
	color: #2E3853;
}
.view-page h2{
	color: #2E3853;
}




</style>
