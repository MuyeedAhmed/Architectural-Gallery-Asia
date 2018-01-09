<?php
	include_once "Includes/header.php";
	include_once "connection.php";
?>
<?php
	$country = $_GET['country'];
	$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`location` L
	ON(S.`LOCATION_ID` = L.`LOCATION_ID`)
	WHERE L.`COUNTRY` = '".$country."';";
	$structures = mysqli_query($con, $sql);
?>

	<div class = "country-wise-view">
		<h1>Country : <?php echo $country?></h1>
			
		<?php
			foreach ($structures as $structure) {	
				$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
				ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
				$images = $con->query($sql);
				$image = $images->fetch_assoc(); 
		
				echo '<a href="View.php?str='.$structure['STRUCTURE_ID'].'"><img height="300" width="300" src="'.$image['COVER'].'"><br>'.$structure['STRUCTURE_NAME'].'<br></a>';
			}	
		?>
	</div>

<?php
	include_once "Includes/footer.php";
?>

<style type="text/css">
	
.country-wise-view{
	padding: 50px;
    width: 70%;
    font-size: 20px;
    color: #2E3853;
    font-style: italic bold;
    margin: 0 auto;
    background-color: #D1C7AC;
}
.country-wise-view input[type="submit"]{
    width: 100px;
    padding: 3px;
    color: white;
    background-color: #00B1EE;
    border-radius: 5px;
}
.country-wise-view input[type="submit"]:hover{
    background-color: #F1895F;
}


</style>




