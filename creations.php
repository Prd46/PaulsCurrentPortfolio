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
        <button id = all class="blogButton js-blogButton js-all">All</button>
        <button id = animation class="blogButton js-blogButton js-animation">Animation</button>
        <button id = art class="blogButton js-blogButton js-art">Art</button>
        <button id = designs class="blogButton js-blogButton js-design">Designs</button>
        <button id = editing class="blogButton js-blogButton js-editing">Editing</button>
        <button id = music class="blogButton js-blogButton js-music">Music</button>
        <button id = photos class="blogButton js-blogButton js-photos">Photos</button>
        <button id = school class="blogButton js-blogButton js-schoolwork">School</button>
    </div>
<!--Contains all posts and will be filtered with javascript-->
    <div class="blog__postArea js-postArea">
        <?php include "php/posts.php"; ?>
    </div>
    <script src="scripts/blogapp.js"></script>
<?php include "php/footer.php" ?>