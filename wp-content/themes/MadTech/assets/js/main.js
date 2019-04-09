// Fixed Navbar
/*$(window).scroll(function(){
  if($(window).scrollTop() > 50) {
    $('.main-navigation').addClass("fixed-nav");
  } else {
    $('.main-navigation').removeClass("fixed-nav");
  }
  if($(window).scrollTop() > 50) {
    $('.posts').addClass("padding-post");
  } else {
    $('.posts').removeClass("padding-post");
  }
});*/


// Load more content or posts



// Timer div
function checkTimer(i) {
   if(i < 10 ) {
     i = "0" + i;
   }
   return i;
 }

 const monthNames = ["January", "February", "March", "April", "May", "June",
 "July", "August", "September", "October", "November", "December"
];

 function startTime() {
   var today = new Date();
   var day = today.getDate(); month = today.getMonth(); year = today.getFullYear();

   // add 0 to hour if < 10 
   day = checkTimer(day);
   document.querySelector('.timer').innerHTML = day + ' ' + monthNames[month] + ', ' + year;
   t = setTimeout(function(){

   }, 500);
 }
 startTime();

 window.onload = function () {
  //initialize swiper when document ready
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 2000,
    },
    cubeEffect: {
      slideShadows: false,
    },
  })
};


var j = jQuery.noConflict();

j(document).ready(function(){
  j('.last-6-posts').slice(0, 4).show();
  j('#loadmore').on('click', function(e){
    e.preventDefault();
    j(".last-6-posts:hidden").slice(0, 4).slideDown();
    if(j(".last-6-posts:hidden").length == 0) {
      j("#loadmore").fadeOut('slow');
    }
  });
});

// Menu fade in and out  
function openNav() {
  document.querySelector('.overlay-nav').style.width = "100%";
}

function closeNav() {
  document.querySelector('.overlay-nav').style.width = "0";
}

j(document).ready(function(){
  j('.owl-carousel').owlCarousel({
    items:4,
    merge:true,
    loop:true,
    margin:10,
    video:true,
    lazyLoad:true,
    center:true,
    responsive:{
        480:{
            items:2
        },
        600:{
            items:4
        }
    }
})
});

window.onscroll = function() {stickyNavbar()};

var navbar = document.querySelector('.background-navbar');
var sticky = navbar.offsetTop;

function stickyNavbar() {
  if(window.pageYOffset >= sticky) {
    navbar.classList.add("fixed")
  } else {
    navbar.classList.remove("fixed")
  }
}