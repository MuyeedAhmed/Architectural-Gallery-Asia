<?php
	include_once "Includes/header.php";
?>


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

                    <img src="Images/Home/Slideshow/01.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-1"/>
                        <label for="show-description-1" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Burj Khalifa</h2>
                            <p>Burj Khalifa, known as Burj Dubai before its inauguration, is a skyscraper in Dubai, United Arab Emirates. It is the tallest artificial structure in the world, standing 829.8 m (2,722 ft).</p>
                        </div>
                    </div>
                </li>
                <li id="slide2">
                    <img src="Images/Home/Slideshow/02.jpg"/>
                    <div class="description">
                        <input type="checkbox" id="show-description-2"/>
                        <label for="show-description-2" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Masjid al-Haram</h2>
                            <p>The Masjid al-Ḥarām, also called the Sacred Mosque, and the Grand Mosque or Great Mosque of Mecca, is the largest mosque in the world and surrounds Islam's holiest place, the Kaaba, in the city of Mecca, Saudi Arabia.</p>
                        </div>
                    </div>
                </li>
                <li id="slide3">
                    <img src="Images/Home/Slideshow/03.jpg"/>
                    <div class="description">
                        <input type="checkbox" id="show-description-3"/>
                        <label for="show-description-3" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Beijing National Stadium</h2>
                            <p>Beijing National Stadium, officially the National Stadium, also known as the Bird's Nest, is a stadium in Beijing, China. The stadium was designed for use throughout the 2008 Summer Olympics and Paralympics.</p>
                        </div>
                    </div>
                </li>
                <li id="slide4">
                    <img src="Images/Home/Slideshow/04.jpg"/>
                    <div class="description">
                        <input type="checkbox" id="show-description-4"/>
                        <label for="show-description-4" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Great Wall of China</h2>
                            <p>The Great Wall of China is a series of fortifications made of stone, brick, tamped earth, wood, and other materials, generally built along an east-to-west line across the historical northern borders of China to protect the Chinese states and empires against the raids and invasions of the various nomadic groups of the Eurasian Steppe.</p>
                        </div>
                    </div>
                </li>
                <li id="slide5">
                    <img src="Images/Home/Slideshow/05.jpg"/>
                    <div class="description">
                        <input type="checkbox" id="show-description-5"/>
                        <label for="show-description-5" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Beijing Capital International Airport</h2>
                            <p>Beijing Capital International Airport is the main international airport serving Beijing.The airport's IATA Airport code, PEK, is based on the city's former romanized name, Peking.</p>
                        </div>
                    </div>
                </li>
               
            </ul>
        </div>
    </div>

<!--Slide show-->
	<div id="Home-4-list">
		
			<div id = "Home-left">
				<?php echo '<a href="Home_Option.php?compna=WHSA" target = blank><img src="Images/Home/WHSA.jpg"></a>'; ?>
					<p>World Heritage Sites in Asia</p>
					<a href="History.php" target = blank><img src="Images/Home/AAH.jpg"></a>
					<p>Asian Architectural History</p>
				
			</div>
			<div id = "Home-right">		
                <?php echo '<a href="Home_Option.php?compna=TBA" target = blank><img src="Images/Home/TBA.jpg"></a>'; ?>				
					<p>Tallest Buildings in Asia</p>
                <?php echo '<a href="Home_Option.php?compna=OBA" target = blank><img src="Images/Home/OBA.jpg"></a>'; ?>
					<p>Oldest Buildings in Asia</p>
			</div>
		
	</ul>
	</div>

<?php
	include_once "Includes/footer.php";
?>