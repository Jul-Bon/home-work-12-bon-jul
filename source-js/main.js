jQuery(document).ready(function () {
  jQuery('#open-popup').on('click', function (event) {
    jQuery('.popup').addClass('show')
    event.preventDefault()
  })
  jQuery('#close-popup').on('click', function (event) {
    jQuery('.popup').removeClass('show')
    event.preventDefault()
  })
})

jQuery(window).load(function (a) {
  $('.main-slider').flexslider({
    animation: 'slide',
    directionNav: false,
    controlNav: false,
    slideshowSpeed: 7000,
  })

  jQuery('.flexslider').flexslider({
    animation: 'slide',
    itemWidth: 370,
    itemMargin: 25,
    move: 1,
    controlNav: false,
    controlsContainer: jQuery('.our-members .custom-controls-container'),
    customDirectionNav: jQuery('.our-members .custom-navigation a'),
  })

  jQuery('#videoslider').flexslider({
    animation: 'slide',
    animationLoop: true,
    controlNav: false,
    controlsContainer: jQuery('.videos .custom-controls-container'),
    customDirectionNav: jQuery('.videos .custom-navigation a'),
  })

})




