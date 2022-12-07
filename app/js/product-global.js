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


});