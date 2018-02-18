<?php
	include_once "Includes/header.php";
	include_once "connection.php";
	$op = $_GET['compna'];
?>
	<div class = "home-option-view">
		<h1><?php echo $op?></h1>

		<?php
			if($op == "OBA"){

				$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`establish` E
				ON(S.`STRUCTURE_ID` = E.`STRUCTURE_ID`)
				ORDER BY E.`YEAR` ASC limit 5;";
				$structures = mysqli_query($con, $sql);
		
				foreach ($structures as $structure) {	
					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
					ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
					$images = $con->query($sql);
					$image = $images->fetch_assoc();
					echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'">
						<img height="300" width="300" src="'.$image['COVER'].'">
						'.$structure['STRUCTURE_NAME'].'<br></a>';
				}
			}	

			if($op == "TBA"){

				$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`skyscraper` SK
				ON(S.`STRUCTURE_ID` = SK.`STRUCTURE_ID`)
				ORDER BY SK.`HEIGHT` DESC limit 5;";
				
				$structures = mysqli_query($con, $sql);
		
				foreach ($structures as $structure) {	
					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
					ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
					$images = $con->query($sql);
					$image = $images->fetch_assoc();
					echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'">
						<img height="300" width="300" src="'.$image['COVER'].'">
						<br>'.$structure['STRUCTURE_NAME'].'<br></a>';
				}
			}
		
			if($op == "WHSA"){
				
				$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`whsa` W
				ON(S.`STRUCTURE_ID` = W.`STRUCTURE_ID`)
				limit 10;";
				
				$structures = mysqli_query($con, $sql);
					
				foreach ($structures as $structure) {		
					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
					ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
					$images = $con->query($sql);
					$image = $images->fetch_assoc();
					echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'">
						<img height="300" width="300" src="'.$image['COVER'].'">
						<br>'.$structure['STRUCTURE_NAME'].'<br></a>';
				}
			}
		?>
	</div>
</div>
<?php
	include_once "Includes/footer.php";
?>
<style type="text/css">
	
.home-option-view{
	padding: 50px;
    width: 70%;
    font-size: 20px;
    color: #2E3853;
    font-style: italic bold;
    margin: 0 auto;
    background-color: #D1C7AC;
}
.home-option-view input[type="submit"]{
    width: 100px;
    padding: 3px;
    color: white;
    background-color: #00B1EE;
    border-radius: 5px;
}
.home-option-view input[type="submit"]:hover{
    background-color: #F1895F;
}


</style>