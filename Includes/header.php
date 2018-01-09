<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Architectural Galary in Asia</title>
		<link rel="shortcut icon" href="Images/icon.png" />
		<link rel = "stylesheet" href = "Style.css"/>
	</head>
	<body>
		
		<header>
			<a href="Home.php"><img src="Images/Logo/Logo02.jpg"></a>
			<nav class="menu">
				<ul>
					<li><a href="Home.php">Home</a></li>
					<li>
    					<a>View</a>
               				<ul class="sub-menu">
                    			<li><a href="Country.php">Country</a></li>
              	      			<li><a href="Choose Category View.php">Category</a></li>
								<li><?php echo '<a href="Home_Option.php?compna=TBA">Tallest Buildings</a>'; ?></li>			
              	      			<li><?php echo '<a href="Home_Option.php?compna=OBA">Oldest Architectural Structures</a>'; ?></li>
          	    		      	<li><a href="History.php">Architectural History of Asia</a></li>
            		   		</ul>
					</li>
					<li><a href="About.php">About</a></li>
				</ul>
				<div id = "search-home">
					<form name = "edit-search" method = "post" action = "Search.php">
						<input type = "text" name = "tsearch"/>
						<input type = "submit" name = "bsearch" value = "O"/>
					</form>
				</div>
			</nav>
		</header>
	
