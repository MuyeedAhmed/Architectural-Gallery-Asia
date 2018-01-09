<?php
	include_once "Includes/header.php";
	include_once "connection.php";
	$category = $_GET['cat'];
	session_start();
	$_SESSION['Category'] = $category;
?>

	<div class = "category-wise-view">
		<h1>Category : <?php echo $category?></h1>
		<div class = "category-wise-view-top">

			<?php
				if($category == "Skyscraper"){
					echo '<a href="Options View.php?option=1st Skyscraper"><img src=""><br>1st Skyscraper in Asia<br></a>'; 
					echo '<a href="Options View.php?option=Tallest Skyscraper"><img src=""><br>Tallest Skyscrapers in Asia<br></a>'; 
				}
				if($category == "Airport"){
					echo '<a href="Options View.php?option=Busiest Airport"><img src=""><br>Busiest Airport in Asia<br></a>'; 
				}
				if($category == "Stadium"){
					echo '<a href="Options View.php?option=Biggest Stadium"><img src=""><br>Biggest Stadiums in Asia<br></a>';
					echo '<a href="Options View.php?option=Expensive Stadium"><img src=""><br>5 Most Expensive Stadiums in Asia<br></a>';
				}
				if($category == "Mall"){
					echo '<a href="Options View.php?option=Longest Shopping Mall"><img src=""><br>5 Longest Shopping Malls in Asia<br></a>';
				}
				if($category == "Castle"){
					echo '<a href="Options View.php?option=Oldest Castle"><img src=""><br>Oldest Castle in Asia<br></a>';
				}
				if($category == "Palace"){
					echo '<a href="Options View.php?option=Oldest Palace"><img src=""><br>Oldest Palace in Asia<br></a>';
				}
				if($category == "Landmark"){
					echo '<a href="Options View.php?option=Largest Landmark"><img src=""><br>5 Largest Landmarks and Monuments in Asia<br></a>';
				}
				if($category == "Islamic"){
					echo '<a href="Options View.php?option=Largest Mosque"><img src=""><br>5 Largest Mosque in Asia<br></a>';
					echo '<a href="Options View.php?option=Oldest Mosque"><img src=""><br>5 Oldest Mosque in Asia<br></a>';			
				}
				if($category == "Temple"){
					echo '<a href="Options View.php?option=Oldest Temple"><img src=""><br>5 Oldest Temple in Asia<br></a>';
				}
				if($category == "Hotel") {
					echo '<a href="Options View.php?option=Largest Hotel"><img src=""><br>Largest Hotels in Asia<br></a>';
					echo '<a href="Options View.php?option=Costliest Hotel"><img src=""><br>Costliest Hotels in Asia<br></a>';
				}
				if($category == "Museum") {
					echo '<a href="Options View.php?option=Oldest Museum"><img src=""><br>Oldest Museums in Asia<br></a>';
				}
			?>
	</div>
	<div class = "category-wise-view-middle">
			
		<?php		 
			$sql = "SELECT * FROM `agallery`.`structure`
			WHERE `CATEGORY` = '".$_SESSION['Category']."';";
			$structures = mysqli_query($con, $sql);
		

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
	
.category-wise-view{
	padding: 50px;
    width: 70%;
    font-size: 20px;
    color: #2E3853;
    font-style: italic bold;
    margin: 0 auto;
    background-color: #D1C7AC;
}
.category-wise-view input[type="submit"]{
    width: 100px;
    padding: 3px;
    color: white;
    background-color: #00B1EE;
    border-radius: 5px;
}
.category-wise-view input[type="submit"]:hover{
    background-color: #F1895F;
}


</style>




