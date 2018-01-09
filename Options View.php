<?php
	include_once "Includes/header.php";
	include_once "connection.php";
	$Option = $_GET['option'];
?>
	<div class = "options-view">
		<h1><?php echo $Option?></h1>

		
			<?php
				if($Option == "1st Skyscraper"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`establish` E
					ON(S.`STRUCTURE_ID` = E.`STRUCTURE_ID`)
					WHERE lower(S.`CATEGORY`) = 'skyscraper'
					ORDER BY E.`YEAR` ASC limit 1;";
					$result = $con->query($sql);
					//$structures = mysqli_query($con, $sql);
					//foreach ($structures as $structure) {		
					//$Str_id = $structure['STRUCTURE_ID']
					$structure = $result->fetch_assoc();

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
					ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
					$images = $con->query($sql);
					$image = $images->fetch_assoc();

					echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';
				
					//}
				}	

				if($Option == "Tallest Skyscraper"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`skyscraper` SK
					ON(S.`STRUCTURE_ID` = SK.`STRUCTURE_ID`)
					ORDER BY SK.`HEIGHT` DESC limit 5
					;";
					
					$structures = mysqli_query($con, $sql);
			
					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
			
				if($Option == "Busiest Airport"){
			
					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`airport` A
					ON(S.`STRUCTURE_ID` = A.`STRUCTURE_ID`)
					ORDER BY A.`PASSENGER` DESC limit 5
					;";
					
					$structures = mysqli_query($con, $sql);
						
					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
			
				if($Option == "Biggest Stadium"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`stadium` ST
					ON(S.`STRUCTURE_ID` = ST.`STRUCTURE_ID`)
					ORDER BY ST.`CAPACITY` DESC limit 5;";
					
					$structures = mysqli_query($con, $sql);

					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
				if($Option == "Expensive Stadium"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`stadium` ST
					ON(S.`STRUCTURE_ID` = ST.`STRUCTURE_ID`)
					ORDER BY ST.`COST` DESC limit 5;";
		
					$structures = mysqli_query($con, $sql);
		
					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
				if($Option == "Longest Shopping Mall"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`mall` M
					ON(S.`STRUCTURE_ID` = M.`STRUCTURE_ID`)
					ORDER BY M.`FLOOR_AREA` DESC limit 5;";
					
					$structures = mysqli_query($con, $sql);

					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
				if($Option == "Oldest Castle"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`establish` E
					ON(S.`STRUCTURE_ID` = E.`STRUCTURE_ID`)
					WHERE lower(S.`CATEGORY`) = 'castle'
					ORDER BY E.`YEAR` ASC limit 5;";
					
					$structures = mysqli_query($con, $sql);

					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
			
				if($Option == "Oldest Palace"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`establish` E
					ON(S.`STRUCTURE_ID` = E.`STRUCTURE_ID`)
					WHERE lower(S.`CATEGORY`) = 'palace'
					ORDER BY E.`YEAR` ASC limit 5;";
					$structures = mysqli_query($con, $sql);
				
					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
			
				if($Option == "Largest Landmark"){
					
					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`landmark` L
					ON(S.`STRUCTURE_ID` = L.`STRUCTURE_ID`)
					ORDER BY L.`VISITOR` DESC limit 5;";
					$structures = mysqli_query($con, $sql);

					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
				if($Option == "Largest Mosque"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`islamic` I
					ON(S.`STRUCTURE_ID` = I.`STRUCTURE_ID`)
					ORDER BY I.`CAPACITY` DESC limit 5;";
					$structures = mysqli_query($con, $sql);

					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
				if($Option == "Oldest Mosque"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`establish` E
					ON(S.`STRUCTURE_ID` = E.`STRUCTURE_ID`)
					WHERE lower(S.`CATEGORY`) = 'islamic'
					ORDER BY E.`YEAR` ASC limit 5;";
					$structures = mysqli_query($con, $sql);

					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
				if($Option == "Oldest Temple"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`establish` E
					ON(S.`STRUCTURE_ID` = E.`STRUCTURE_ID`)
					WHERE lower(S.`CATEGORY`) = 'temple'
					ORDER BY E.`YEAR` ASC limit 5;";
					$structures = mysqli_query($con, $sql);

					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
				if($Option == "Largest Hotel"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`hotel` H
					ON(S.`STRUCTURE_ID` = H.`STRUCTURE_ID`)
					ORDER BY H.`FLOOR_AREA` DESC limit 5;";
					$structures = mysqli_query($con, $sql);

					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
				if($Option == "Costliest Hotel"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`hotel` H
					ON(S.`STRUCTURE_ID` = H.`STRUCTURE_ID`)
					ORDER BY H.`COST` DESC limit 5;";
					$structures = mysqli_query($con, $sql);

					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
				if($Option == "Oldest Museum"){

					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`establish` E
					ON(S.`STRUCTURE_ID` = E.`STRUCTURE_ID`)
					WHERE lower(S.`CATEGORY`) = 'museum'
					ORDER BY E.`YEAR` ASC limit 5;";
					$structures = mysqli_query($con, $sql);

					foreach ($structures as $structure) {	
						$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
						ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
						$images = $con->query($sql);
						$image = $images->fetch_assoc();
						echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';		
					}
				}
			?>
		</div>

<?php
	include_once "Includes/footer.php";
?>

<style type="text/css">
	
.options-view{
	padding: 50px;
    width: 70%;
    font-size: 20px;
    color: #2E3853;
    font-style: italic bold;
    margin: 0 auto;
    background-color: #D1C7AC;
}
.options-view input[type="submit"]{
    width: 100px;
    padding: 3px;
    color: white;
    background-color: #00B1EE;
    border-radius: 5px;
}
.options-view input[type="submit"]:hover{
    background-color: #F1895F;
}


</style>