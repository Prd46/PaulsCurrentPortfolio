<?php if (!isset($page_name)) {
  $page_name = 'Creations'; // Gives a value if page name is missing
}
?>
<?php include "php/header.php" ?>
<main class="main" id="main">
    <div class="main__heading">
        <h2>Post Archive</h2>
</div>
</main> 
<!--Filter buttons-->
    <div class="blog__buttons">
        <button class="blogButton js-all">All</button>
        <button class="blogButton js-art">Art</button>
        <button class="blogButton js-animation">Animation</button>
        <button class="blogButton js-design">Designs</button>
        <button class="blogButton js-editing">Editing</button>
        <button class="blogButton js-music">Music</button>
        <button class="blogButton js-photos">Photos</button>
        <button class="blogButton js-schoolwork">School</button>
    </div>
<!--Contains all posts and will be filtered with javascript-->
    <div class="blog__postArea js-postArea">
        <a href="plasticplanet.php" class="all music art animation editing fadeIn"><img class="blog__icon" src="media/plasticplanet.png" alt="post icon" /></a>
        <a href="yci.php" class="all art animation music fadeIn"><img class="blog__icon" src="media/sleepy.jpg" alt="post icon" /></a>
        <a href="sp.php" class="all schoolWork designs fadeIn"><img class="blog__icon" src="media/pupypyicopy.png" alt="post icon" /></a>
        <a href="na.php" class="all art fadeIn"><img class="blog__icon" src="media/lampifeat.png" alt="post icon" /></a>
        <a href="trt.php" class="all editing music schoolWork fadeIn"><img class="blog__icon" src="media/aaufeat.png" alt="post icon" /></a>
        <a href="wr.php" class="all photography fadeIn"><img class="blog__icon" src="media/wrf.jpg" alt="post icon" /></a>
    </div>
    <script src="scripts/blogapp.js"></script>
<?php include "php/footer.php" ?>