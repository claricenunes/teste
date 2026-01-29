/* Arquivo script.js - placeholder para scripts globais */
document.addEventListener('DOMContentLoaded', function () {
    // Exemplo: alternar menu em telas pequenas
    var btn = document.querySelector('.menu-toggle');
    if (btn) {
        btn.addEventListener('click', function () {
            document.querySelector('body').classList.toggle('menu-open');
        });
    }
    console.log('script.js carregado');
});
