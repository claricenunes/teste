$(document).ready(function(){
    $('#mobile_btn').on ('click', function() {
        $('#mobile_menu').toggleClass('active')
        $('#mobile_btn').find('i').toggleClass('fa-x')
    });
});

const hamburguer = document.querySelector(".hamburguer");
const mobileMenu = document.getElementById("mobile_menu");

hamburguer.addEventListener("click", () => {
  mobileMenu.classList.toggle("active");
});

