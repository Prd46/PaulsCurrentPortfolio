<?php if (!isset($page_name)) {
  $page_name = 'Lava Lamp Ani'; // Gives a value if page name is missing
}
?>
<?php include "php/header.php" ?>
<h2>Lava Lamp Ani</h2>
    <picture>
        <source media="(min-width: 450px)" srcset="media/lampi.jpg" />
        <source media="(max-width: 450px)" srcset="media/lampiSmall.jpg" />
        <img class="main__featuredImage js-img" src="media/lampi.jpg" alt="Drawing of Ani with Lava Lamp Eyes">
    </picture>
    <p class="freeform paragraph">
        This is one of my favorite art ideas from recent years. It's my titular character Ani 
        with the whites of his eyes and his mouth being replaced with the insides of a lava lamp.
        For whatever reason, I really like lava lamps and general neon aesthetics, so this idea
        really gave me a chance to test both my skills in drawing fluid shapes and glow effects. 
        I like the idea so much that I've considered marketing the concept to others online, drawing 
        their characters with the same lava lamp effect, so I could bring in some extra commission sales.
        Maybe after I get comfortable with my new course schedule. 
    </p>
<?php include "php/footer.php" ?>