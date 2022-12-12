//*========================================
//* 01 CATEGORY                           =
//*========================================
//* 02 PRODUCT DETAIL                     =
//*========================================
//* 03 ACCOUNT                            =
//*========================================


// let _functions = {},
//   winW, winH, winScr, isTouchScreen, isAndroid, isIPhone, is_Mac, is_IE, is_Chrome;

jQuery(function($) {
  "use strict";

  //*===============
  //* 01 CATEGORY  =
  //*===============
  $(document).on('click', '.ctg__dropdown--title', function() {
    $(this).closest('.ctg__dropdown').toggleClass('active')
  })


  $(document).on('click', '.ctg__filter--title', function() {
    $(this).closest('.ctg__filter').toggleClass('active')
    $(this).closest('.ctg__filter').find('.ctg__filter--list').slideToggle();
  })


  $(document).on('click', '.load-more.card', function() {
    let th = $(this)
    th.addClass('loading');

    // remove this when you use ajax
    setTimeout(function() {
      th.removeClass('loading')
    }, 4500);
  })

  $(document).on('click', '.ctg__mobile--btn', function() {
    $('html').addClass('ctg-open-filter')
  })

  $(document).on('click', '.ctg__mobile--overlay, .ctg__menu--wrap .btn-close', function() {
    $('html').removeClass('ctg-open-filter')
  })

  // btn submit add error message
  // remove this after programming
  $(document).on('click', '.btn-submit', function(e) {
    let input = $(this).closest('.form-wrapp').find('.input-field-wrapp .input');
    let form = $(this).closest('.form-wrapp');

    input.each(function() {
      if (input.val().length == 0) {
        form.find('.error-message').removeClass('d-none');
        form.find('.btn-submit').addClass('btn-disabled');
      } else {
        form.find('.error-message').addClass('d-none');
        form.find('.btn-submit').removeClass('btn-disabled');
      }
    });
  })


  $(document).on('click', '.ctg__menu--overlay', function() {
    $('html').removeClass('ctg-open-filter')
  })

  _functions.fixedFilter = function() {
    let winScr = $(window).scrollTop();


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


  // Accordion
  $(document).on('click', '.accordion .accordion-title', function() {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active').next().slideUp();
    } else {
      $(this).closest('.accordion-wrapp').find('.accordion-title').not(this).removeClass('active').next().slideUp();
      $(this).addClass('active').next().slideDown();
    }
  });


  // Button "+" & "-"
  $(document).on('click', '.in-btn-dec', function() {
    let number = $(this).closest('.in-inner').find('input[name="number"]');
    number.val(+number.val() + 1);
  })

  $(document).on('click', '.in-btn-inc', function() {
    let number = $(this).closest('.in-inner').find('input[name="number"]');
    if (+number.val() > 0) {
      number.val(+number.val() - 1);
    }
  })


  $(document).on('click', '.add-to-basket', function() {
    let prdSec = $(this).closest('.prd__detail--section');
    let prdName = prdSec.find('.prd__detail--name').text();

    prdSec.find('.prd__informer .prd__informer--name b').text(prdName)
    prdSec.find('.prd__informer').slideDown();
  })


  //*==============
  //* 02 ACCOUNT  =
  //*==============
  $('.tab-toggle > div').on('click', function(e) {
    var tab = $(this).closest('main').find('.tab');
    var i = $(this).index();
    $(this).addClass('active').siblings().removeClass('active');
    tab.eq(i).siblings('.tab:visible').stop().finish().fadeOut(function() {
      tab.eq(i).fadeIn(200);
    });
    e.preventDefault();
    $(this).closest('.tab-nav').removeClass('active').find('.tab-title').text($(this).text());
  });



});