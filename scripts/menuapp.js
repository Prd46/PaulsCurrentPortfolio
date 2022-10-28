
const menuButton = document.querySelector('.header__hamburger');
const filterButton = document.querySelector('.postFilter');
const categoryField = document.querySelector('.dropDown');


menuButton.addEventListener('click', function(){
const menu = document.querySelector('.header__menuListings'); 
menu.classList.toggle('open'); 
})