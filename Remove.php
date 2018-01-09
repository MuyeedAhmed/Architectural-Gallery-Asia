<?php
	include_once "Includes/header.php";
?>
	<div class="remove">
	<h2>Search structure to Remove</h2>
	<form name = "remove-search" method = "post" action = "Search to Remove.php">
		<p>
			<strong color:"white">Structure Name</strong>
			<input type = "text" name = "tsearch"/>
		</p>
		
		<input type = "submit" name = "bsearch" value = "SEARCH"/>
	</form>
	</div>
<?php
	include_once "Includes/footer.php";
?>
<style type="text/css">

.remove {
    position: fixed;
    top: 200px;
    left: 350px;
    right:350px;
    padding: 5%;   
    margin: 0 auto;
    border: 1px solid #808080;
    min-height: 140px;
    background-color: #AEB0B2;
}
.remove h2{
    position: fixed;
    top: 220px;
    left: 500px;
    color: white;
}
.remove p{
	color: white;
}
.remove input[type="text"], input[type="password"]{
    top: 400px;
    left: 100px;
    width: 250px;
    border-radius: 8px;
    padding: 5px;
    border:1px solid #c6c6c6;
}

.remove input[type="submit"]{
    position: fixed;
    top: 270px;
    left: 800px;
    width: 100px;
    padding: 3px;
    color: white;
    background-color: #00B1EE;
    border-radius: 5px;
}
.remove input[type="submit"]:hover{
    background-color: #F1895F;
}
</style>