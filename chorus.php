<?php if (!isset($page_name)) {
  $page_name = 'Chorus Redesign'; // Gives a value if page name is missing
}
?>
<?php include "php/header.php" ?>
<h2>Chorus Redesign, Fall 2020-2021</h2>
    <div class="main__iframeVideo">
    <iframe 
    width="560" 
    height="315" 
    src="https://www.youtube.com/embed/CGlPbCAa8lA" 
    title="YouTube video player" 
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen>
    </iframe>
    </div>
        <p class="freeform paragraph">A site unfamiliar to most, yet important to me, is the site that I used to 
        download much of the necessary content to play the game Clone Hero, which is 
        essentially a computer version of Guitar Hero that gives you access to all existing 
        songs from the Guitar Hero games and various community made songs. The site as it stood 
        worked decently to find some individual songs, but I felt that the layout could be improved 
        to allow for easier filtration and analysis of the songs before somebody goes to 
        download a song. You can really only find songs that you know specific details about, 
        like the song name and the artist, or details about the chart of the song, such as the 
        difficulty and the playable instruments.</p>

        <img class="main__featuredImage" src="media/chorus-2.jpg" alt="old chorus layout" />
        <img class="main__featuredImage" src="media/choruslt.jpg" alt="New chorus layout">
        <p class="freeform paragraph">To give users a better way of looking for new songs to download, I redesigned the 
        filtration system to be more concise and easier to understand by lining it up with 
        details listed on the song. Once this design is coded and implemented, users will not 
        only be able to search for songs based on chart and song details but through how many 
        likes and downloads are on a specific chart. If the user comes across a song they may 
        wish to download, instead of downloading it into the game to check, they could click on 
        the album cover to the left hand side to play a preview of the song. As it stands, many 
        Clone Hero players will download large packs instead of individual songs so they could 
        listen to the previews in game. Those would also be available on the home page in the 
        new setlist carousel, as they are popular among players, but for those that are not 
        looking to use up large amounts of space on their computer for songs they will not 
        end up playing, this system of song searching will be much more effective for 
        handpicking the songs that players want, rather than just guessing at which packs to 
        download.</p>   

        <img class="main__featuredImage" src="media/sort.png" alt="category sort test results for content organization">
        <p class="freeform paragraph">The design process was interesting to follow through for the first time, as my 
        site choice was rather obscure and the user base was very specific. Quite literally,
            only people that have Clone Hero will have anything to get out of this site, and 
            since I play the game avidly, I had a decent understanding of the user base. Just 
            to be sure though, I was instructed to develop a user persona and do a card sort 
            test to see how users organized the content on their site. Most people organized 
            the content by official Guitar Hero content and community content, but a decent 
            portion split up the large setlist and the individual charts, so I added different 
            tabs for the both of them. The prototype does not include all the pages of what 
            the finished site would have, only the home and chart page, but within this 
            version, the carousel can move back and forth and the dropdown filter on the 
            chart page is functional.</p>
<?php include "php/footer.php" ?>