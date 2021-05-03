require('bootstrap');
require('slick-carousel');
require('./navigation');

jQuery($ => {
  $('.menu-item > a').on('click', e => {
    if ($(this).attr('href') == '#') {
      e.preventDefault();
    }
  });

  $('.search-toggler').on('click', e => {
    e.preventDefault()

    $('.searchform-wrapper').toggle()
  });
});
