
    //The blog functionality had to be split into two scripts because of an unknown error that nullifies the other carousel code if this one is present
//Will fix in future versions but currently am not sure how to do so
//I also will be figuring out a better way to optimize this, but am constrained by time
/*const all = document.querySelector('.js-all');
const art = document.querySelector('.js-art');
const animation = document.querySelector('.js-animation');
const design = document.querySelector('.js-design');
const editing = document.querySelector('.js-editing');
const music = document.querySelector('.js-music');
const photos = document.querySelector('.js-photos');
const schoolwork = document.querySelector('.js-schoolwork');*/

const allButtons = document.querySelectorAll('.js-blogButton')
//console.log(allTypes);

//each button adds the lit class to highlight itself while the inner HTML of the post area changes for each filter manually.
const postArea = document.querySelector('.js-postArea');
const allPosts = document.querySelectorAll('.all');
//const animTime = 200;

allButtons.forEach((button) => {
    //first part turns on the button lights.
    button.addEventListener('click', function(){
        allButtons.forEach((button) => {
            button.classList.remove('lit');
        });
        button.classList.add('lit');
        const buttonType = button.id
        //console.log(buttonType);
        allPosts.forEach((post) => {
            /*post.classList.add('fadeOut');
            setTimeout(function(){*/
            const postTypes = post.classList;
            //console.log(postTypes);
            if (postTypes.contains(buttonType)){
                post.classList.remove('off');
                //console.log('contains');
            }else{
                post.classList.add('off');
            }/*}, animTime)*/;
        });
    });
});




//old code

            /* if (buttonType == 'all'){
                if (post.classList.contains('all')){
                    post.classList.remove('off');
                }else{post.classList.add('off');
                }
            }else if(buttonType == 'animation'){
                if (post.classList.contains('animation')){
                    post.classList.remove('off');
                }else{post.classList.add('off');
                }
            }else if(buttonType == 'art'){
                if (post.classList.contains('art')){
                    post.classList.remove('off');
                }else{post.classList.add('off');
                }
            }else if(buttonType == 'designs'){
                if (post.classList.contains('designs')){
                    post.classList.remove('off');
                }else{post.classList.add('off');
                }
            }else if(buttonType == 'editing'){
                if (post.classList.contains('editing')){
                    post.classList.remove('off');
                }else{post.classList.add('off');
                }
            }else if(buttonType == 'music'){
                if (post.classList.contains('music')){
                    post.classList.remove('off');
                }else{post.classList.add('off');
                }
            }else if(buttonType == 'photos'){
                if (post.classList.contains('photography')){
                    post.classList.remove('off');
                }else{post.classList.add('off');
                }
            }else if(buttonType == 'school'){
                if (post.classList.contains('schoolWork')){
                    post.classList.remove('off');
                }else{post.classList.add('off');
                } 
            } */
            //console.log(post);
            //const postType = post.querySelector(buttonLabel);
            //console.log(postType);
/* 
all.addEventListener('click', function(){
    postArea.innerHTML = '<?php include "php/all.php"; ?>'
})
art.addEventListener('click', function(){
    postArea.innerHTML = "<?php include 'php/art.php'; ?>"
})
animation.addEventListener('click', function(){
    postArea.innerHTML = '<a href="plasticplanet.php" class="all music art animation editing fadeIn"><img class="blog__icon" src="media/plasticplanet.png" alt="post icon" /></a><a href="yci.php" class="all animation fadeIn"><img class="blog__icon" src="media/sleepy.jpg" alt="post icon" /></a>'
})
design.addEventListener('click', function(){
    postArea.innerHTML = '<a href="sp.php" class="all schoolWork designs fadeIn"><img class="blog__icon" src="media/pupypyicopy.png" alt="post icon" /></a>'
})
editing.addEventListener('click', function(){
    postArea.innerHTML = '<a href="plasticplanet.php" class="all music art animation editing fadeIn"><img class="blog__icon" src="media/plasticplanet.png" alt="post icon" /></a><a href="trt.php" class="all editing music schoolWork fadeIn"><img class="blog__icon" src="media/aaufeat.png" alt="post icon" /></a>'
})
music.addEventListener('click', function(){
    postArea.innerHTML = '<a href="plasticplanet.php" class="all music art animation editing fadeIn"><img class="blog__icon" src="media/plasticplanet.png" alt="post icon" /></a><a href="yci.php" class="all art animation music fadeIn"><img class="blog__icon" src="media/sleepy.jpg" alt="post icon" /></a><a href="trt.php" class="all editing music schoolWork"><img class="blog__icon" src="media/aaufeat.png" alt="post icon" /></a>'
})
photos.addEventListener('click', function(){
    postArea.innerHTML = '<a href="wr.php" class="all photography fadeIn"><img class="blog__icon" src="media/wrf.jpg" alt="post icon" /></a>'
})
schoolwork.addEventListener('click', function(){
    postArea.innerHTML = '<a href="sp.php" class="all schoolWork designs fadeIn"><img class="blog__icon" src="media/pupypyicopy.png" alt="post icon" /></a><a href="trt.php" class="all editing music schoolWork fadeIn"><img class="blog__icon" src="media/aaufeat.png" alt="post icon" /></a>'
})
*/