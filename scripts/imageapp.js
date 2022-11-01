//Needs to detect the click on any featured image.
//Determine which image was clicked 
//Determine if it is a wide image or tall image
//Get the file from that image
//Place it in the display case
//Open the display case that shows the image covering the whole screen

console.log('loaded');
const allImages = document.querySelectorAll('.js-img');

console.log(allImages);

allImages.forEach((pic) => {
    pic.addEventListener('click', function(){
    console.log(pic);
        const displayBox = document.querySelector('.js-displayBox');
        displayBox.classList.toggle('displayOpen'); 
    });
});