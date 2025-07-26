document.addEventListener('DOMContentLoaded', function(){

    evenListeners();
    darkMode();
});

function darkMode(){
/* Codigo de preferencias de dark mode */
    const preferencia = window.matchMedia('(prefers-color-scheme: dark)');
    // console.log(preferencia.matches);

    if(preferencia.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    preferencia.addEventListener('change', function(){
        if(preferencia.matches){
        document.body.classList.add('dark-mode');
        }else{
        document.body.classList.remove('dark-mode');
        }
    });
    /* Termina preferencia de dark-mode */

    const botonDarkMode = document.querySelector('.dark-mode-button');

    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    })

}

function evenListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navRespons);
}

function navRespons(){
   const navegacion = document.querySelector('.navigation');
   navegacion.classList.toggle('show')

}