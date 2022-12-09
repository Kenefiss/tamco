//*========================================
//* 01 FILTERS                            =
//*========================================


// let _functions = {},
//   winW, winH, winScr, isTouchScreen, isAndroid, isIPhone, is_Mac, is_IE, is_Chrome;

jQuery(function ($) {
  "use strict";

  //*==============
  //* 01 FILTERS  =
  //*==============
  $(document).on('click', '.ctg__dropdown--title', function () {
    $(this).closest('.ctg__dropdown').toggleClass('active')
  })


  $(document).on('click', '.ctg__filter--title', function () {
    $(this).closest('.ctg__filter').toggleClass('active')
    $(this).closest('.ctg__filter').find('.ctg__filter--list').slideToggle();
  })


  $(document).on('click', '.load-more.card', function () {
    let th = $(this)
    th.addClass('loading')

    // remove this when you use ajax
    setTimeout(function () {
      th.removeClass('loading')
    }, 4500);
  })

  $(document).on('click', '.ctg__mobile--btn', function () {
    $('html').addClass('ctg-open-filter')
  })

  $(document).on('click', '.ctg__mobile--overlay', function () {
    $('html').removeClass('ctg-open-filter')
  })

  // btn submit add error message
  // remove this after programming
  $(document).on('click', '.btn-submit', function (e) {
    let input = $(this).closest('.form-wrapp').find('.input-field-wrapp .input');
    let form = $(this).closest('.form-wrapp');

    input.each(function(){
      if (input.val().length == 0) {
        form.find('.error-message').removeClass('d-none');
        form.find('.btn-submit').addClass('btn-disabled');
      } else {
        form.find('.error-message').addClass('d-none');
        form.find('.btn-submit').removeClass('btn-disabled');
      }
    });
  })
});