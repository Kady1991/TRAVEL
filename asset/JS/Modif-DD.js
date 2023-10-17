let  toggle_menu = document.querySelector('.responsive-menu');
let  menu = document.querySelector('.menu');
toggle_menu.onclick= function(){
     toggle_menu.classList.toggle('active');
     menu.classList.toggle('responsive')
}

const card1= document.getElementById('card1');
const card2= document.getElementById('card2');
const card3= document.getElementById('card3');

const acct1= document.getElementById('acct1');
const acct2= document.getElementById('acct2');
let acct3= document.getElementById('acct3');
let img1=document.getElementById('img1');
let img2=document.getElementById('img2');
let img3=document.getElementById('img3');
let imgBac =document.getElementById('home')

//MANIPILATION DE LA FUNCTION //

card1.onclick=function()
{
     
     imgBac.className = "homme1";
       acct1.style.display = "block";
       acct2.style.display = "none";
       acct3.style.display = "none";
       
}
card2.onclick=function()
{
     imgBac.className = "homme2";
   
     acct1.style.display = "none";
     acct2.style.display = "block";
     acct3.style.display = "none";
 }
card3.onclick=function()
{
     imgBac.className = "homme3";
     acct1.style.display = "none";
     acct3.style.display = "block";
     acct2.style.display = "none";
}
          