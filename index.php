<?php if (!isset($page_name)) {
  $page_name = 'Home'; // Gives a value if page name is missing
}
?>
<?php include "php/header.php" ?>
    <main class="main" id="main">
    <div class="main__heading">
        <h2>Featured Posts</h2>
    </div>
    <div class="main__reelBlocker"></div><!--This will become active on small screens to prevent users crom clicking on posts behind the main one, as they may accidentally tap between the arrows and the main post leading them to the wrong spot-->
    <!--Main post area contains 6 images, 5 of which are displayed in the carousel array, one is hidden. Javascript allows the arrows to change which image and Href is loaded
    I OPTED NOT TO MAKE THESE IMAGES RESPONSIVE BECAUSE THE CAROUSEL IS COMPLICATED AND I WASN'T SURE IF I COULD FIT THE FUNCTIONALITY IN WITH THE CHANGING IMAGE FORMATS-->
        <div class="main__postArea">
            <button class="leftArrow"><img class="arrow" src="media/leftArrow.png" alt="left scroll arrow" /></button>
            <div class="main__postReel">
                <div class="main__post smallIcon icon">
                    <a href="plasticplanet.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/plasticplanet.png" alt="post icon" /></a>
                </div>
                <div class="main__post medIcon icon">
                    <a href="yci.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/sleepy.jpg" alt="post icon" /></a>
                </div>
                <div class="main__post largeIcon icon">
                    <a href="sp.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/pupypyicopy.png" alt="post icon" /></a>
                </div>
                <div class="main__post medIcon icon">
                    <a href="na.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/lampifeat.png" alt="post icon" /></a>
                </div>
                <div class="main__post smallIcon icon">
                    <a href="trt.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/aaufeat.png" alt="post icon" /></a>
                </div>  
                <div class="main__post off icon">
                    <a href="wr.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/wrf.jpg" alt="post icon" /></a>
                </div>  
            </div>
            <button class="rightArrow"><img class="arrow" src="media/rightArrow.png" alt="right scroll arrow" /></button>
        </div>
            <div class="main__postCard">
                <h1>Study Pup</h1>
                <p>
                    For the record, this project was done in a group of four, so I cannot... 
                </p>
                <a href="sp.php" class="main__readMore">Read More</a>
            </div>
</main> 
<script src="scripts/reelapp.js"></script>
<?php include "php/footer.php" ?>