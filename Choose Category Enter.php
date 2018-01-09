<?php
	include_once "Includes/header.php";
?>
	<div class = "category">
		<h2><strong>Choose Category<strong></h2>
		<form name = "Category" method = "post" action = "Enter.php">	
			<p>
				<div class = "category-left">
					<input type="radio" name="Category" value="Skyscraper">Skyscraper</br><img src="Images/Category/Skyscraper.jpg"></br>
					<input type="radio" name="Category" value="Castle">Castle</br><img src="Images/Category/Castle.jpg"></br>
					<input type="radio" name="Category" value="Palace">Palace</br><img src="Images/Category/Palace.jpg"></br>
					<input type="radio" name="Category" value="Hotel">Hotel</br><img src="Images/Category/Hotel.jpg"></br>
				</div>
				<div class = "category-middle">
					<input type="radio" name="Category" value="Airport">Airport</br><img src="Images/Category/Airport.jpg"></br>
					<input type="radio" name="Category" value="Landmark">Landmark and Monument</br><img src="Images/Category/Landmark.jpg"></br>
					<input type="radio" name="Category" value="Temple">Temple and Monastery</br><img src="Images/Category/Temple.jpg"></br>
				</div>
				<div class = "category-right">
					<input type="radio" name="Category" value="Stadium">Stadium</br><img src="Images/Category/Stadium.jpg"></br>
					<input type="radio" name="Category" value="Islamic">Islamic Architecture</br><img src="Images/Category/Islamic.jpg"></br>
					<input type="radio" name="Category" value="Museum">Museum</br><img src="Images/Category/Museum.jpg"></br>
					<input type="radio" name="Category" value="Mall">Shopping Mall</br><img src="Images/Category/Shopping mall.jpg"></br>
				</div>		
			</p>
			<p>
				<input type="submit" name="submit" value = "Go"/>
			</p>
		</form>
	</div>

<?php
	include_once "Includes/footer.php";
?>
