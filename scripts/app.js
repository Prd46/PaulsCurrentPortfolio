
const menuButton = document.querySelector('.header__hamburger');
const filterButton = document.querySelector('.postFilter');
const categoryField = document.querySelector('.dropDown');


menuButton.addEventListener('click', function(){
const menu = document.querySelector('.header__menuListings'); 
menu.classList.toggle('open'); 
})

//Homepage carousel
const rightArrow = document.querySelector('.rightArrow');
const leftArrow = document.querySelector('.leftArrow');
const posts = document.querySelector('.main__postReel');
const card = document.querySelector('.main__postCard');
let reelPosition = 3; 
console.log(reelPosition);
//reel position changes as arrows are clicked, inner HTML changes based on number
leftArrow.addEventListener('click', function(){
    if (reelPosition <= 1){
        reelPosition = 7;
    }
    reelPosition--;
    //console.log(reelPosition);
    if (reelPosition == 6){
        posts.innerHTML = '<div class="main__post smallIcon icon"><a href="na.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/lampifeat.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="trt.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/aaufeat.png" alt="post icon" /></a></div><div class="main__post largeIcon icon"><a href="wr.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/wrf.jpg" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="plasticplanet.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/plasticplanet.png" alt="post icon" /></a></div><div class="main__post smallIcon icon"><a href="yci.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/sleepy.jpg" alt="post icon" /></a></div><div class="main__post off icon"<a href="sp.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/pupypyicopy.png" alt="post icon" /></a></div>';
        card.innerHTML = '<h1>Wandering Regrets</h1><p>The only photography class I have taken was taught in black and white... </p><a href="wr.php" class="main__readMore">Read More</a>';
        }else if (reelPosition == 5){
        posts.innerHTML = '<div class="main__post smallIcon icon"><a href="sp.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/pupypyicopy.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="na.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/lampifeat.png" alt="post icon" /></a></div><div class="main__post largeIcon icon"><a href="trt.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/aaufeat.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="wr.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/wrf.jpg" alt="post icon" /></a></div><div class="main__post smallIcon icon"><a href="plasticplanet.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/plasticplanet.png" alt="post icon" /></a></div><div class="main__post off icon"<a href="yci.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/sleepy.jpg" alt="post icon" /></a></div>';
        card.innerHTML = '<h1>The Road Trailer</h1><p>This was my favorite class to take so far, as it had uncovered my hidden skills in audio... </p><a href="trt.php" class="main__readMore">Read More</a>';
        }else if (reelPosition == 4){
        posts.innerHTML = '<div class="main__post smallIcon icon"><a href="yci.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/sleepy.jpg" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="sp.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/pupypyicopy.png" alt="post icon" /></a></div><div class="main__post largeIcon icon"><a href="na.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/lampifeat.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="trt.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/aaufeat.png" alt="post icon" /></a></div><div class="main__post smallIcon icon"><a href="wr.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/wrf.jpg" alt="post icon" /></a></div><div class="main__post off icon"<a href="plasticplanet.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/plasticplanet.png" alt="post icon" /></a></div>';
        card.innerHTML = '<h1>Lava Lamp Ani</h1><p>This is one of my favorite art ideas from recent years. It is my titular character Ani... </p><a href="na.php" class="main__readMore">Read More</a>';
        }else if (reelPosition == 3){
        posts.innerHTML = '<div class="main__post smallIcon icon"><a href="plasticplanet.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/plasticplanet.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="yci.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/sleepy.jpg" alt="post icon" /></a></div><div class="main__post largeIcon icon"><a href="sp.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/pupypyicopy.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="na.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/lampifeat.png" alt="post icon" /></a></div><div class="main__post smallIcon icon"><a href="trt.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/aaufeat.png" alt="post icon" /></a></div><div class="main__post off icon"<a href="wr.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/wrf.jpg" alt="post icon" /></a></div>';
        card.innerHTML = '<h1>Study Pup</h1><p>For the record, this project was done in a group of four, so I cannot...</p><a href="sp.php" class="main__readMore">Read More</a>';
        }else if (reelPosition == 2){
        posts.innerHTML = '<div class="main__post smallIcon icon"><a href="wr.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/wrf.jpg" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="plasticplanet.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/plasticplanet.png" alt="post icon" /></a></div><div class="main__post largeIcon icon"><a href="yci.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/sleepy.jpg" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="sp.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/pupypyicopy.png" alt="post icon" /></a></div><div class="main__post smallIcon icon"><a href="na.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/lampifeat.png" alt="post icon" /></a></div><div class="main__post off icon"<a href="trt.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/aaufeat.png" alt="post icon" /></a></div>';
        card.innerHTML = '<h1>Youtube Intro</h1><p>A simple animated idea I had a while back that ended up turning out very well... </p><a href="yci.php" class="main__readMore">Read More</a>';
        }else if (reelPosition == 1){
        posts.innerHTML = '<div class="main__post smallIcon icon"><a href="trt.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/aaufeat.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="wr.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/wrf.jpg" alt="post icon" /></a></div><div class="main__post largeIcon icon"><a href="plasticplanet.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/plasticplanet.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="yci.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/sleepy.jpg" alt="post icon" /></a></div><div class="main__post smallIcon icon"><a href="sp.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/pupypyicopy.png" alt="post icon" /></a></div><div class="main__post off icon"<a href="na.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/lampifeat.png" alt="post icon" /></a></div>';
        card.innerHTML = '<h1>Plastic Planet</h1><p>In addition to creating one of my favorite art pieces ever, this song of mine... </p><a href="plasticplanet.php" class="main__readMore">Read More</a>'
        }
    })
    
rightArrow.addEventListener('click', function(event){
    if (reelPosition >= 6){
        reelPosition = 0;
    }
    reelPosition++;
    //console.log(reelPosition);
    if (reelPosition == 6){
        posts.innerHTML = '<div class="main__post smallIcon icon"><a href="na.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/lampifeat.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="trt.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/aaufeat.png" alt="post icon" /></a></div><div class="main__post largeIcon icon"><a href="wr.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/wrf.jpg" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="plasticplanet.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/plasticplanet.png" alt="post icon" /></a></div><div class="main__post smallIcon icon"><a href="yci.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/sleepy.jpg" alt="post icon" /></a></div><div class="main__post off icon"<a href="sp.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/pupypyicopy.png" alt="post icon" /></a></div>';
        card.innerHTML = '<h1>Wandering Regrets</h1><p>The only photography class I have taken was taught in black and white... </p><a href="wr.php" class="main__readMore">Read More</a>';
        }else if (reelPosition == 5){
        posts.innerHTML = '<div class="main__post smallIcon icon"><a href="sp.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/pupypyicopy.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="na.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/lampifeat.png" alt="post icon" /></a></div><div class="main__post largeIcon icon"><a href="trt.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/aaufeat.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="wr.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/wrf.jpg" alt="post icon" /></a></div><div class="main__post smallIcon icon"><a href="plasticplanet.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/plasticplanet.png" alt="post icon" /></a></div><div class="main__post off icon"<a href="yci.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/sleepy.jpg" alt="post icon" /></a></div>';
        card.innerHTML = '<h1>The Road Trailer</h1><p>This was my favorite class to take so far, as it had uncovered my hidden skills in audio... </p><a href="trt.php" class="main__readMore">Read More</a>';
        }else if (reelPosition == 4){
        posts.innerHTML = '<div class="main__post smallIcon icon"><a href="yci.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/sleepy.jpg" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="sp.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/pupypyicopy.png" alt="post icon" /></a></div><div class="main__post largeIcon icon"><a href="na.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/lampifeat.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="trt.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/aaufeat.png" alt="post icon" /></a></div><div class="main__post smallIcon icon"><a href="wr.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/wrf.jpg" alt="post icon" /></a></div><div class="main__post off icon"<a href="plasticplanet.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/plasticplanet.png" alt="post icon" /></a></div>';
        card.innerHTML = '<h1>Lava Lamp Ani</h1><p>This is one of my favorite art ideas from recent years. It is my titular character Ani... </p><a href="na.php" class="main__readMore">Read More</a>';
        }else if (reelPosition == 3){
        posts.innerHTML = '<div class="main__post smallIcon icon"><a href="plasticplanet.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/plasticplanet.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="yci.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/sleepy.jpg" alt="post icon" /></a></div><div class="main__post largeIcon icon"><a href="sp.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/pupypyicopy.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="na.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/lampifeat.png" alt="post icon" /></a></div><div class="main__post smallIcon icon"><a href="trt.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/aaufeat.png" alt="post icon" /></a></div><div class="main__post off icon"<a href="wr.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/wrf.jpg" alt="post icon" /></a></div>';
        card.innerHTML = '<h1>Study Pup</h1><p>For the record, this project was done in a group of four, so I cannot...</p><a href="sp.php" class="main__readMore">Read More</a>';
        }else if (reelPosition == 2){
        posts.innerHTML = '<div class="main__post smallIcon icon"><a href="wr.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/wrf.jpg" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="plasticplanet.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/plasticplanet.png" alt="post icon" /></a></div><div class="main__post largeIcon icon"><a href="yci.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/sleepy.jpg" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="sp.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/pupypyicopy.png" alt="post icon" /></a></div><div class="main__post smallIcon icon"><a href="na.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/lampifeat.png" alt="post icon" /></a></div><div class="main__post off icon"<a href="trt.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/aaufeat.png" alt="post icon" /></a></div>';
        card.innerHTML = '<h1>Youtube Intro</h1><p>A simple animated idea I had a while back that ended up turning out very well... </p><a href="yci.php" class="main__readMore">Read More</a>';
        }else if (reelPosition == 1){
        posts.innerHTML = '<div class="main__post smallIcon icon"><a href="trt.php" class="posthref"><img class="main__icon post1 smallIcon fadeInSmall" src="media/aaufeat.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="wr.php" class="posthref"><img class="main__icon post2 medIcon fadeInMed" src="media/wrf.jpg" alt="post icon" /></a></div><div class="main__post largeIcon icon"><a href="plasticplanet.php" class="posthref"><img class="main__icon post3 largeIcon fadeIn" src="media/plasticplanet.png" alt="post icon" /></a></div><div class="main__post medIcon icon"><a href="yci.php" class="posthref"><img class="main__icon post4 medIcon fadeInMed" src="media/sleepy.jpg" alt="post icon" /></a></div><div class="main__post smallIcon icon"><a href="sp.php" class="posthref"><img class="main__icon post5 smallIcon fadeInSmall" src="media/pupypyicopy.png" alt="post icon" /></a></div><div class="main__post off icon"<a href="na.php" class="posthref"><img class="main__icon postNull smallIcon" src="media/lampifeat.png" alt="post icon" /></a></div>';
        card.innerHTML = '<h1>Plastic Planet</h1><p>In addition to creating one of my favorite art pieces ever, this song of mine... </p><a href="plasticplanet.php" class="main__readMore">Read More</a>'
        }
    })