$(document).ready(function() {
  const nav = document.querySelector('nav.navbar');
  const NavTop = nav.offsetTop;

  /*
  * Fix navbar when the user scrolls
  *
  */
  function fixnavbar(){
    if(window.scrollY >= NavTop){
      nav.classList.add('nav--fixed');
    }else {
      nav.classList.remove('nav--fixed');
    }
  }

  window.addEventListener('scroll', fixnavbar);
});

