var body = document.querySelector('.home');
var shopping = document.querySelector('.fa-shopping-cart');
var show_cart = document.querySelector('.cart-items-container');

shopping.addEventListener('click',()=>{
    show_cart.classList.toggle('active');
    show_menu.classList.remove('active');
    show_search.classList.remove('active');
})

let show_search = document.querySelector('.search-form');
let search = document.querySelector('#search-btn');
search.addEventListener('click',()=>{
    show_search.classList.toggle('active');
    show_menu.classList.remove('active');
    show_cart.classList.remove('active');

})


let show_menu = document.querySelector('.menu');
let menu = document.querySelector('#menu-btn');
menu.addEventListener('click',()=>{
    show_menu.classList.toggle('active');
    show_search.classList.remove('active');
    show_cart.classList.remove('active');
})

// window.onscroll = ()=>{
//     show_menu.classList.remove('active');
// show_search.classList.remove('active');
// show_cart.classList.remove('active');
// }

body.addEventListener('click',()=>{
    show_menu.classList.remove('active');
    show_search.classList.remove('active');
    show_cart.classList.remove('active');
})

var num = 0;
    var addtocart = document.querySelectorAll('.button');
    var shop = document.getElementById('shop');
    
    addtocart.addEventListener('click',function(){
        num++;
        shop.innerHTML = num;
        // alert(1)
    })