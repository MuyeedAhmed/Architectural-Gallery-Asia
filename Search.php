<?php
	include_once "Includes/header.php";
	include_once "connection.php";
?>
	<?php
	if($_POST["tsearch"] != ""){
		$sql = "SELECT * FROM `agallery`.`structure`
		WHERE LOWER(`STRUCTURE_NAME`) LIKE '%".$_POST["tsearch"]."%'
		limit 5;";
		$structures = mysqli_query($con, $sql);
	?>
	<div class="search-view">
		<form name = "choose structure" method = "post" action = "View.php">
			

			<?php
				foreach ($structures as $structure) {		
					$sql = "SELECT * FROM `agallery`.`structure` S JOIN `agallery`.`image` I
					ON(S.`IMAGE_ID` = I.`IMAGE_ID`)	WHERE S.`STRUCTURE_ID` = '".$structure['STRUCTURE_ID']."';";
					$images = $con->query($sql);
					$image = $images->fetch_assoc();
			?>
				<input type="radio" name="str" value="<?php echo $structure['STRUCTURE_ID'];?>"><img height="300" width="300" src="<?php echo $image['COVER'];?>"><?php echo $structure['STRUCTURE_NAME'];?></br>
			<?php } ?>
			<p>
				<input type="submit" name="go" value = "Go" />
			</p>
		</form>
<?php
	}else{
		echo "</br></br></br>";
		echo "TRY AGAIN";
	}
?>
	</div>
<?php
	include_once "Includes/footer.php";
?>
<style type="text/css">
	
.search-view{
	padding: 50px;
    width: 70%;
    font-size: 20px;
    color: #2E3853;
    font-style: italic bold;
    margin: 0 auto;
    background-color: #D1C7AC;
}
.search-view input[type="submit"]{
    width: 100px;
    padding: 3px;
    color: white;
    background-color: #00B1EE;
    border-radius: 5px;
}
.search-view input[type="submit"]:hover{
    background-color: #F1895F;
}

</style>