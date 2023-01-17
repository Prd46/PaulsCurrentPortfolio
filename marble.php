<?php if (!isset($page_name)) {
  $page_name = 'Marble Tracks'; // Gives a value if page name is missing
}
?>
<?php include "php/header.php" ?>
    <!--Once entering posts, images and videos are placed between paragraphs-->
    <h2>Ani's Marble Tracks</h2>
    <div class="main__iframeVideo">
        <iframe  
        width="560px"
        height="315px"
        src="https://www.youtube.com/embed/S_Ygc6o-iUQ" 
        title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
        </iframe>
    </div>
        <p class="freeform paragraph">
         Since 10 years of age, Roblox has been a staple in my creative development for the many 
         different building games I've played over the years, as well as the few I've tried to make 
         on my own. While I always had a knack for physical construction, placing parts together 
         to create models, scripting was always a challenge. I would mostly use free scripts on
         the creator marketplace and edit the values as needed. However, with my new marble game,
         I've decided to take a new approach: use other scripts to help me LEARN how to code in LUA.
        </p>
        <p class="freeform paragraph">
         Now that I've learned basic Javascript from my Drexel courses, I can apply variable definition,
         function, and looping skills to the LUA language. All I have to do is find how each one is
         structured. As such, I've been able to code elements of my game independently, the most
         complicated and impressive element being the help bubbles that appear next to each track. 
         I used four separate loops in two scripts to give it that bobbing and wobbling animation, then
         another script inside plays the click animation and opens the screen GUI. 
        </p>
         <p class="freeform paragraph">
         For the track designs, I've created separate pieces of varying sizes to be used as construction
         components, so all I need to do is design the remaining 7 tracks. If I get any new ideas for
         functional components, such as a pinball themed level that I am working on, I will find out
         how to script what I am picturing, then make the component from scratch. 
        </p>
<?php include "php/footer.php" ?>