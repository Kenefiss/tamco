//*========================================
//* 01 FILTERS                            =
//*========================================


// let _functions = {},
//   winW, winH, winScr, isTouchScreen, isAndroid, isIPhone, is_Mac, is_IE, is_Chrome;

jQuery(function($) {
  "use strict";

  //*==============
  //* 01 FILTERS  =
  //*==============
  $(document).on('click', '.ctg__dropdown--title', function() {
    $(this).closest('.ctg__dropdown').toggleClass('active')
  })


  $(document).on('click', '.ctg__filter--title', function() {
    $(this).closest('.ctg__filter').toggleClass('active')
    $(this).closest('.ctg__filter').find('.ctg__filter--list').slideToggle();
  })


  $(document).on('click', '.load-more.card', function() {
    let th = $(this)
    th.addClass('loading')

    // remove this when you use ajax
    setTimeout(function() {
      th.removeClass('loading')
    }, 4500);
  })

  $(document).on('click', '.ctg__mobile--btn', function() {
    $('html').addClass('ctg-open-filter')
  })

  $(document).on('click', '.ctg__menu--overlay', function() {
    $('html').removeClass('ctg-open-filter')
  })

  _functions.fixedFilter = function() {
    let winScr = $(window).scrollTop();

    console.Console

    if ($('.ctg__mobile--section').length > 0) {
      let block = $('.ctg__mobile--block');

      if (winScr + $('header').height() >= $('.ctg__mobile--section').offset().top) {
        block.addClass('fixed');
      } else {
        block.removeClass('fixed');
      }
    }
  };

  $(window).on('scroll', function() {
    _functions.fixedFilter();
  });

});