$(document).ready(function() {
  const healthyMenu = document.querySelector('.food-tab__menu-tab--healthy');
  const lunchMenu = document.querySelector('.food-tab__menu-tab--lunch');
  const vegeMenu = document.querySelector('.food-tab__menu-tab--vege');
  const shakeMenu = document.querySelector('.food-tab__menu-tab--shake');

  const healthySlider = document.querySelector('.food-tab__slider--healthy');
  const lunchSlider = document.querySelector('.food-tab__slider--lunch');
  const vegeSlider = document.querySelector('.food-tab__slider--vege');
  const shakeSlider = document.querySelector('.food-tab__slider--shake');

  const HIDE_SLIDER = 'food-tab__slider--hide';
  const ACTIVE_MENU_TAB = 'food-tab__menu-tab--active';

  /*
  * Add interactive tab
  */
  healthyMenu.addEventListener('click', function(){
    healthyMenu.classList.add(ACTIVE_MENU_TAB);
    lunchMenu.classList.remove(ACTIVE_MENU_TAB);
    vegeMenu.classList.remove(ACTIVE_MENU_TAB);
    shakeMenu.classList.remove(ACTIVE_MENU_TAB);
    healthySlider.classList.remove(HIDE_SLIDER);
    lunchSlider.classList.add(HIDE_SLIDER);
    vegeSlider.classList.add(HIDE_SLIDER);
    shakeSlider.classList.add(HIDE_SLIDER);
  });

  lunchMenu.addEventListener('click', function(){
    healthyMenu.classList.remove(ACTIVE_MENU_TAB);
    lunchMenu.classList.add(ACTIVE_MENU_TAB);
    vegeMenu.classList.remove(ACTIVE_MENU_TAB);
    shakeMenu.classList.remove(ACTIVE_MENU_TAB);

    lunchSlider.classList.remove(HIDE_SLIDER);
    healthySlider.classList.add(HIDE_SLIDER);
    vegeSlider.classList.add(HIDE_SLIDER);
    shakeSlider.classList.add(HIDE_SLIDER);
  });

  vegeMenu.addEventListener('click', function(){
    healthyMenu.classList.remove(ACTIVE_MENU_TAB);
    lunchMenu.classList.remove(ACTIVE_MENU_TAB);
    vegeMenu.classList.add(ACTIVE_MENU_TAB);
    shakeMenu.classList.remove(ACTIVE_MENU_TAB);

    vegeSlider.classList.remove(HIDE_SLIDER);
    lunchSlider.classList.add(HIDE_SLIDER);
    healthySlider.classList.add(HIDE_SLIDER);
    shakeSlider.classList.add(HIDE_SLIDER);
  });

  shakeMenu.addEventListener('click', function(){
    healthyMenu.classList.remove(ACTIVE_MENU_TAB);
    lunchMenu.classList.remove(ACTIVE_MENU_TAB);
    vegeMenu.classList.remove(ACTIVE_MENU_TAB);
    shakeMenu.classList.add(ACTIVE_MENU_TAB);
    
    shakeSlider.classList.remove(HIDE_SLIDER);
    vegeSlider.classList.add(HIDE_SLIDER);
    lunchSlider.classList.add(HIDE_SLIDER);
    healthySlider.classList.add(HIDE_SLIDER);
  });
  
  /*
  * Integrate slick slider 
  * upon initial loading of the site
  */
  $('.food-tab__slider').slick({
    prevArrow:"<div class='slick-prev'><i class='fa fa-angle-left' aria-hidden='true'></i></div>",
    nextArrow:"<div class='slick-next'><i class='fa fa-angle-right' aria-hidden='true'></i></div>",
    variableWidth: true,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 2000,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          centerMode: true,
        }
      },
      {
        breakpoint: 599,
        settings: {
          slidesToShow: 1,
          centerMode: true,
        }
      }
    ]
  });

  $('.testimonial__slider').slick({
    variableWidth: true,
    slidesToShow: 1,
    centerMode: true,
    arrows: false,
    autoplay: false,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          variableWidth: false,
        }
      },
      {
        breakpoint: 599,
        settings: {
          centerMode: false,
          variableWidth: false,
        }
      }
    ]
  });
});

