<?php if (!isset($page_name)) {
  $page_name = 'Scripting Project'; // Gives a value if page name is missing
}
?>
<?php include "php/header.php" ?>
            <h2>Progrecipes</h2>
    <br />
    <p>Copyright &#169; Discord, used for educational purposes only.</p>
            <p>Click the image below to view the final build.</p>
    <img class = "main__featuredImage" src="media/prog1.jpg" alt="hero Image">

    <h2 class="sectionTitle">Overview</h2>
    <p class="freeform paragraph">For the term long IDM232 project, we were tasked with creating a dynamic recipe website that could
        load content on demand from a database, as up until this point we had only been exposed to static creation with HTML, CSS, 
        and Javascript. To accomplish this, we learned the programming language of PHP to format and import our content, and SQL to 
        manage database entries. Given PHP’s dated integrations and the complex framework of files we had to develop, it took a lot of 
        tweaking, checking, and debugging, but in the end, the final website proved to be incredibly effective in terms of managing 
        mass amounts of content, and this baseline knowledge and experience has prepared our class for maintenance of databases in our 
        future careers. </p>

            <h2 class="sectionTitle">Context and Challenge</h2>
    <p class="freeform paragraph">The framework of this assignment pushed us to create a website for displaying and managing a minimum 
        of 40 recipes, as a means of emphasizing that static websites would not be suitable for this type of content. Not only did we 
        need to have a user-facing interface to interact with, but an internal interface for any administrators who would want to add, 
        edit, or delete recipes from the database. Both sides needed to incorporate search functionality to navigate through the large 
        number of items, and we all needed to make our own individual site for it. Previous experience with HTML and CSS would obviously 
        need to be incorporated as well, and up to this point, the static design process had given us a pretty good basis for constructing 
        the site. The problem was that we needed to successfully incorporate it into the dynamic elements of PHP that would loop through 
        and apply to every recipe. This is where it gets complicated. Those 10 weeks were necessary in order to create a polished and 
        functional final product, and while the main goal was to make it functional and easy to use, visual polish was the key deciding 
        factor to determine whether or not this project was a success.  </p>

    <h2 class="sectionTitle">Process and Insight</h2>
            <p class="freeform paragraph"> The first steps we took to ensuring proper trajectory in this course were laying out our planned design. 
                Because the recipes were provided for us, we did not need to worry as much about who the target audience was, but understanding what 
                features users would need while searching through our recipe site fostered some design intuition. Forefront images give a user the 
                ability to quickly judge and make decisions based on appearances. Suggestions for recipes to click or for search terms to apply help 
                a user will cover the first half of the decision-making process so they do not need to think about what they need to look for, just 
                which one to pick. Both components are critical in the final design. While the final design varied slightly from initial prototypes, 
                the fonts and general colors stayed the same. Initially, the blue was orange, as that seemed to feel better for a recipe website, 
                but there were issues with color contrast.  </p>
                <img class="main__featuredImage" src="media/prog2.jpg" alt="Demo image">
                <img class="main__featuredImage" src="media/prog3.jpg" alt="Demo image">
            <p class="freeform paragraph"> The coding process mostly consisted of following our instructor’s examples and learning about the 
                functionality, so we could make informed decisions about what to change and how to apply existing PHP functions elsewhere. 
                Even though this was rather straightforward, there were plenty of bugs and testing that were ironed out by the end of the project. 
                It’s rather harrowing to see over 100 errors in the HTML checker, but that just shows the importance of checking your code when it 
                is replicated hundreds or thousands of times over each element that gets looped through for each database entry. 

</p>

 <h2 class="sectionTitle">Solution</h2>
            <p class="freeform paragraph"> The final site is fully functional as a standalone, from an Admin perspective. When you first enter the 
                website, you are met with six random recipe entries to choose from, and an invitation to explore further into the full list. 
                The recipe search page displays all 40 recipes, a search bar, and preset filters to cut down the whole list of content. Each 
                recipe image has a hover state that displays the title, prep time, and rating. Clicking into a recipe will also display the ingredients 
                required and the steps to cooking the recipe. The admin panels also display all 40 recipes in a list that displays the same information, 
                along with an add, edit, and delete button. The pages for the add and edit recipe functions follow the same format as the recipe details 
                pages on the user side, but have inputs instead of text.</p>
                <img class="main__featuredImage" src="media/prog4.jpg" alt="Demo image">
                <img class="main__featuredImage" src="media/prog5.jpg" alt="Demo image">
                <img class="main__featuredImage" src="media/prog6.jpg" alt="Demo image">
                <img class="main__featuredImage" src="media/prog7.jpg" alt="Demo image">
        <h2 class="sectionTitle">Results</h2>
            <p class="freeform paragraph">In conclusion, the project is a success. Quantitatively, all 40 recipes display without issue, and one can 
                complete all required actions in using and running this website, as if it were live, excluding user logins. Qualitatively, 
                all 40 items are neatly organized and pleasantly displayed for all to see, which suggests a well-built design framework kneaded into 
                the PHP code. While I would have liked to create a login system for this website, the other class projects took the available time 
                for such an endeavor away. Perhaps that will be a project for the future, or to apply to my own portfolio site, as a means of 
                expediting my post publishing process. If I am successful there, I may apply it to the Progrecipes site as well. </p>
<?php include "php/footer.php" ?>