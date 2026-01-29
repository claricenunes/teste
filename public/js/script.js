/* Arquivo script.js - placeholder para scripts globais */
document.addEventListener('DOMContentLoaded', function () {
    // Exemplo: alternar menu em telas pequenas
    var btn = document.querySelector('.menu-toggle');
    if (btn) {
        btn.addEventListener('click', function () {
            document.querySelector('body').classList.toggle('menu-open');
        });
    }
    // Scroll behavior for order and login buttons on the home page
    function scrollToMenu(event) {
        event.preventDefault();
        var menu = document.getElementById('menu');
        if (menu) {
            menu.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // Attach to all order buttons
    document.querySelectorAll('.btn-order').forEach(function(el){
        el.addEventListener('click', scrollToMenu);
    });

    // Attach to login buttons only on the homepage (prevent navigation and scroll)
    document.querySelectorAll('.btn-login').forEach(function(el){
        el.addEventListener('click', function(e){
            if (window.location.pathname === '/' || window.location.pathname === '/welcome') {
                scrollToMenu(e);
            }
            // otherwise allow default (navigate to login page)
        });
    });
    console.log('script.js carregado');
});
