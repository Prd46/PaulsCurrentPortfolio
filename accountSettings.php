<?php if (!isset($page_name)) {
  $page_name = 'Microinteractions Project'; // Gives a value if page name is missing
}
?>
<?php include "php/header.php" ?>
            <h2>Microinteraction Design: Discord Account Settings</h2>
    <br />
    <p>Copyright &#169; Discord, used for educational purposes only.</p>
            <p>Click the image below to view the final build.</p>
    <a href="https://pauldigerolamo.com/IDM241/final/build/"><img class = "main__featuredImage" src="media/main.png" alt="hero Image"></a>

    <h2 class="sectionTitle">Overview</h2>
    <p class="freeform paragraph">Discord is a widely used messaging app amongst teens and young adults, particularly connecting people in 
            the gaming sphere and other group communities. The official Discord website has a support page with 
            various help pages linked, each navigational button having a simplistic, yet stylized image to go with 
            it. Despite the art style being very lively and fun, the micro-interactions for the buttons are not. </p>

    <p class="freeform paragraph">Through the course of this project, I wanted to single out one of these buttons and enhance the 
            interactivity of it, to inject a bit more fun into the process of searching for information on Discord’s 
            website. Using HTML, CSS, and Javascript, I was able to improve the aesthetics and interactivity of the 
            Account Settings button on this support page, continually refining over an alpha, beta, and final 
            release. In the new micro-interaction prototype that I’ve constructed, the spinning cogs and well-paced 
            fading, sliding, and size changing elements create a fun visual experience for the user, without taking 
            too much time away from their help-searching process, which is a massive improvement compared to the 
            existing micro-interaction on the Discord support page. </p>

            <h2 class="sectionTitle">Context and Challenge</h2>
    <p class="freeform paragraph">This enhancement project was scheduled for completion over the course of our ten-week term, for which we 
            were to choose a micro-interaction within a website that needed some improvement. This was an individual 
            assignment that allowed for considerable creative freedom. When deciding where to look for 
            micro-interactions to workshop, I wanted to pick a service that I was familiar with, as a user myself, 
            and so I chose Discord. Looking around on the website, I discovered the support page, which contained a 
            number of linked help pages based on the various elements of Discord that harbor their own sets of FAQs. 
            Each page link was contained in a square button, with a flat, stylistic image, page title, and caption. 
            I did not want to focus on EVERY help button in the support page, as it would be out of the scope of the 
            project. I instead added several interactive elements into one singular button for the Account Settings 
            FAQs, which contained a picture of two cogs. Upon seeing them for the first time, I immediately wanted 
            to see them spin. To my disappointment, they did nothing when you hovered over the box. The whole box 
            just rises and falls a few pixels instantly. It was rather boring, and I wanted to fix that. </p>


    <p class="freeform paragraph"> My preceding expectations for this button were the inspiration for the main goal of this project: 
            get those cogs to spin in an interesting and sinuous way with the opening of the Account Settings 
            page. Qualitatively, I wanted to make every element within the button and in the opening of the 
            contained link to be smoothly animated and visually pleasing to watch. Quantitatively, I wanted to 
            ensure that the animations involved in this new process would not detract from the main purpose for 
            the user visiting this page, which is to find answers to their questions related to Discord’s account 
            settings. It could not take more than a second and a half for the page to load, but it could not be too 
            short that the animations would go unnoticed. Additionally, I wanted to ensure every course of action was 
            accounted for, such that a user could not interact with the button in a way that would cause nothing to 
            happen. This means I needed to cover when the user clicks down, clicks up, hovers on, and hovers off. </p>
    <h2 class="sectionTitle">Process and Insight</h2>
            <p class="freeform paragraph"> In designing a new micro-interaction for this button, I needed to consider the specific design elements 
            from both the user and the business perspective. The animations, fonts, and colors should be consistent 
            with what Discord has already established for their brand. While I could deviate for the sake of 
            creativity, Discord’s existing style guide is relatively well fleshed out as it is. I cropped out the 
            existing cog images from the support page, tried to find a font that matched the existing one as closely 
            as possible, and used an eyedropper to grab Discord’s signature blue-purple color. Because I used their 
            assets and colors, I put a copyright disclaimer underneath the final build of the micro-interaction. 
            From the user’s perspective, these colors and styles are somewhat familiar to them from their usage of 
            the app, but not super familiar, since they are likely relatively new to the app. The user journey that 
            likely leads people to this point goes as follows: the user joins Discord, has a question about how to 
            customize their settings, looks into their account settings, cannot find what they are looking for, and 
            consults the Discord support pages for help. Long time users may also consult these pages if they are 
            looking for a more niche or specific answer, but regardless of how seasoned the user is, Discord users 
            will likely want to find their answer as quick as possible, fitting in with the fast-paced lifestyle of 
            Discord’s young adult user base. That means I would need to make my animations quick and snappy, 
            but also more interesting and long enough to be noticeable. </p>

            <p class="freeform paragraph"> The construction process of the new micro-interaction was separated into an alpha, beta, and final 
            build, each one adding more and more triggers and animations than the last, which allowed me to focus 
            on making each element work before advancing onto the next. The alpha variant was the most basic: you 
            could only hover on and hover off the Account Settings button. Hovering on would cause the cogs to spin 
            180 degrees and create a purple border, then hovering off would do the inverse. In this state, I only 
            needed to use HTML and CSS. However, after moving into the beta, I realized that I would not be able 
            to build all that I was imagining without Javascript. Moving into the Beta, I added in a click function 
            that would open the Account Settings page content as a modal, along with a close button to cancel out 
            of the modal. At this state, there were too many interactions to be handled with just CSS and HTML, so 
            I had to bring in Javascript to apply other classes at different times, which would allow the cogs to 
            spin in reverse and THEN have the modal open, after a delay. At this point, I did still have most of 
            my interactive elements built into HTML. However, as I was moving to the final rendition, where I 
            wanted to add a DIFFERENT animation, after you click on the button as well as on hold, the animations 
            would conflict with each other. After some testing, I realized that this is because I have some 
            animations triggered with CSS and some animations triggered with Javascript. I needed to bring 
            the existing transitions into Javascript and use mouseover and mouseout event listeners instead of 
            CSS hover-states.  </p>

 <h2 class="sectionTitle">Solution</h2>
            <p class="freeform paragraph"> In the final build, the Account Settings button is highly animated with 6 different triggers. When you 
            hover on the button, the cogs spin 180 degrees and a purple 5-pixel border appears. On hover off, the 
            animation reverses. If you click and hold, the yellow cog continually spins clockwise while the purple 
            cog spins counter-clockwise, and the size of the button slightly shrinks. As soon as you stop holding 
            the click, the button goes back to its normal size and the cogs and text fade downward, as the cogs 
            keep spinning. Once the animation is complete, the Account Settings modal rises to cover the screen, 
            and each link has a hover-state to show it would be clickable in a real setting. The X button to close 
            the modal has a border that appears on hover, then the whole X disappears on click to close the modal.</p>
     <img class="main__featuredImage" src="media/gif1.GIF" alt="Demo gif 1">
        <img class="main__featuredImage" src="media/gif2.GIF" alt="Demo gif 2">
        <h2 class="sectionTitle">Results</h2>
            <p class="freeform paragraph"> Compared to the singular pixel jump transition of the original Account Settings button, the new 
            animations add a lot more flare and fun to the Discord Support page. Searching for help through 
            support pages doesn’t need to be as boring and tedious as one would think it to be. All these little 
            animations will add a bit of fun into a situation where users are feeling troubled by uncertainty, all 
            while not taking too much time. All these animations take less than a second to complete, which keeps 
            it within the fast-paced threshold required by the young user base. If I had more time to work on this 
            project, I would want to add a secondary pop-up modal for each link, so users get a small preview of 
            each link as they hover over it, so they do not need to move to the next page before knowing if it 
            contains the correct information. I’d also want to clean up my CSS classes, so they are easier for 
            others to pick through.</p>
<?php include "php/footer.php" ?>