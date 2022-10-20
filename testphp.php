<?php include "php/header.php" ?>
    <!--Ran out of time to add in proper load logo, but will be adding it in shortly-->
    <div class="page__load">
        <img src="media/UItextLogo.png" class="logoImage" alt="loading logo" />
    </div>
    <!--Header contains hamburger menu-->
    <header>
        <div class="header__fullbox" id="top">
            <div class="header__contentbox">
                <div class="header__nameBox">
                <h1 class="header__name">PAUL DIGEROLAMO</h1>
                </div>
                <div class="header__menuListings">
                        <!--Hamburger menu will open up top, turns into horizontal header on smaller screens-->
                    <a href="index.html" class="header__menuButton">Home</a>
                    <a href="blog.html" class="header__menuButton midButton">Blog</a>
                    <div class="header__nestedName"><h1 class="innerNest">PAUL DIGEROLAMO</h1></div>
                    <a href="portfolio.html" class="header__menuButton midButton">Designs</a>
                    <a href="resume.html" class="header__menuButton">Resume</a>
                </div>
                <button class="header__hamburger"><img class="header__hamburger" src="media/menuButton.png" alt="site menu" /></button>
            </div>
            </div>
    </header>  
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
                    <a href="plasticplanet.html" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/plasticplanet.png" alt="post icon" /></a>
                </div>
                <div class="main__post medIcon icon">
                    <a href="yci.html" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/sleepy.jpg" alt="post icon" /></a>
                </div>
                <div class="main__post largeIcon icon">
                    <a href="sp.html" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/pupypyicopy.png" alt="post icon" /></a>
                </div>
                <div class="main__post medIcon icon">
                    <a href="na.html" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/lampifeat.png" alt="post icon" /></a>
                </div>
                <div class="main__post smallIcon icon">
                    <a href="trt.html" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/aaufeat.png" alt="post icon" /></a>
                </div>  
                <div class="main__post off icon">
                    <a href="wr.html" class="posthref"><img class="main__icon postNull smallIcon" src="media/wrf.jpg" alt="post icon" /></a>
                </div>  
            </div>
            <button class="rightArrow"><img class="arrow" src="media/rightArrow.png" alt="right scroll arrow" /></button>
        </div>
            <div class="main__postCard">
                <h1>Study Pup</h1>
                <p>
                    For the record, this project was done in a group of four, so I cannot... 
                </p>
                <a href="sp.html" class="main__readMore">Read More</a>
            </div>
</main> 
<!--For content and maintenance updates-->
<div class="hr"></div>
<section class="updates">
    <h1 class="updates__header">Site updates</h1>
    <p class="freeform">
        3/18/22, 5:30: Everything except for logo load is done, but that is all I need for now. I will push this version and if I finish the logo load in time, that will be that.
    </p>
</section>
<div class="hr"></div>
<?php include "php/footer.php" ?>