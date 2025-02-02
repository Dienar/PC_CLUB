
function myFunction() {
    var x = document.getElementById("myTopnav");
    var r = document.getElementById("delete");
    if (x.className === "main") {
        x.className += " responsive";
        
    } else {
        x.className = "main";
    }
}

$(".flex div").click(function () {
  $(".click").removeClass("vid");
  $(this).addClass("vid");
});

$(".button").click(function(e){
  e.preventDefault();
  let target = $(this).attr('href');
  $(target).addClass('show')
           .siblings().removeClass('show');
});



$(function(){
    $('#menu1').on('click', function(){
        $(this).toggleClass('transform');
    });
});
$(document).ready(function(){
        $("header #menu").on("click","a", function (event) {
   
            event.preventDefault();

            var id  = $(this).attr('href'),
                top = $(id).offset().top;
    
            $('body,html').animate({scrollTop: top}, 1500);
    
        });
    
    });


    

const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

const btnPopup = document.querySelector('.btnLogin-popup');
const icon = document.querySelector('.icon-close');





btnPopup.addEventListener('click',()=>{
    wrapper.classList.add('active-popup');
}) 
icon.addEventListener('click',()=>{
    wrapper.classList.remove('active-popup');
})












      