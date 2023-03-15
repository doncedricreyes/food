$(document).ready(function() {
  const borgir = document.querySelector('.navbar__hamburger');
  const sidebar = document.querySelector('.sidebar');
  const closeBtnSidebar = document.querySelector('.sidebar__close');
  const overlay = document.querySelector('.sidebar-overlay');

  /*
  * Show sidebar and add overlay
  */
  function sidebarShow() {
    sidebar.classList.add('sidebar__show');
    overlay.classList.add('sidebar-overlay--show');
    document.body.style.overflow = 'hidden';
  }

  /*
  * Hide sidebar and remove overlay
  */
  function sidebarClose() {
    sidebar.classList.remove('sidebar__show');
    overlay.classList.remove('sidebar-overlay--show');
    document.body.style.overflow = 'scroll';
  }

  borgir.addEventListener('click', sidebarShow);

  closeBtnSidebar.addEventListener('click', sidebarClose);

  overlay.addEventListener('click', sidebarClose);
});