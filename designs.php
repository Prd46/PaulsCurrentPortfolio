<?php if (!isset($page_name)) {
  $page_name = 'Portfolio'; // Gives a value if page name is missing
}
?>
<?php include "php/header.php" ?>
<main>
    <h1>Case Studies</h1>
    <p>Here’s where you’ll see my journey through learning Interactive Design at Drexel.</p>
<div class="blog__postArea">
<a href="accountSettings.php" class="all designs school fadeIn"><img class="blog__icon portfolioIcon" src="media/main.png" alt="post icon" /></a>
<a href="progrecipes.php" class="all designs school fadeIn"><img class="blog__icon portfolioIcon" src="media/prog1.jpg" alt="post icon" /></a>
<a href="dwd.php" class="all school designs fadeIn"><img class="blog__icon portfolioIcon" src="media/dwdFeat.jpg" alt="post icon" /></a>
    </div>
</main>
<br>
<?php include "php/footer.php" ?>