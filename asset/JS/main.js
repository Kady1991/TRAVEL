var toggle_menu = document.querySelector('.responsive-menu');
var menu = document.querySelector('.menu');
toggle_menu.onclick= function(){
     toggle_menu.classList.toggle('active');
     menu.classList.toggle('responsive')
}