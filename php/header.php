<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_name?></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="icon" href="media/a.webp">
</head>
<body>
    <!--Ran out of time to add in proper load logo, but will be adding it in shortly-->
        <div class="page__load">
        <img src="media/UItextLogo.png" class="logoImage" alt="loading logo" />
    </div>
   <!-- <div class="js-displayBox">
        <img class="zoomer" src="media/1.jpg" alt="image placeholder">
        <p class="displayCaption js-displayCaption">Test caption</p>
    </div> -->
    <!--Header contains hamburger menu-->
    <header>
        <div class="header__fullbox" id="top">
            <div class="header__contentbox">
                <div class="header__nameBox">
                <h1 class="header__name">PAUL DIGEROLAMO</h1>
                </div>
                <div class="header__menuListings">
                        <!--Hamburger menu will open up top, turns into horizontal header on smaller screens-->
                    <a href="index.php" class="header__menuButton">Home</a>
                    <a href="creations.php" class="header__menuButton midButton">Creations</a>
                    <div class="header__nestedName"><h1 class="innerNest">PAUL DIGEROLAMO</h1></div>
                    <a href="portfolio.php" class="header__menuButton midButton">Designs</a>
                    <a href="resume.php" class="header__menuButton">Resume</a>
                </div>
                <button class="header__hamburger"><img class="header__hamburger" src="media/menuButton.png" alt="site menu" /></button>
            </div>
            </div>
    </header>   