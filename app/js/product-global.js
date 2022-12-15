//*==========================
//* 01 CATEGORY             =
//*==========================
//* 02 PRODUCT DETAIL       =
//*==========================
//* 03 ACCOUNT              =
//*==========================
//* 04 PROJECT DETAIL       =
//*==========================


jQuery(function($) {
  "use strict";

  //*===============
  //* 01 CATEGORY  =
  //*===============


  // Dropdown in filter
  $(document).on('click', '.ctg__dropdown--title', function() {
    $(this).closest('.ctg__dropdown').toggleClass('active')
  })

  $(document).on('click', '.ctg__filter--title', function() {
    $(this).closest('.ctg__filter').toggleClass('active')
    $(this).closest('.ctg__filter').find('.ctg__filter--list').slideToggle();
  })


  // Filter open & close on mobile
  $(document).on('click', '.ctg__mobile--btn', function() {
    $('html').addClass('ctg-open-filter')
  })

  $(document).on('click', '.ctg__menu--overlay, .ctg__menu--wrap .btn-close', function() {
    $('html').removeClass('ctg-open-filter')
  })


  // Sticky filter btn
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


  // Load more products
  $(document).on('click', '.load-more.card', function() {
    let th = $(this)
    th.addClass('loading');

    // remove this when you use ajax
    setTimeout(function() {
      th.removeClass('loading')
    }, 4500);
  })




  //*====================
  //* 02 PRODUCT DETAIL =
  //*====================


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


  // Add product to basket
  $(document).on('click', '.add-to-basket', function() {
    let prdSec = $(this).closest('.prd__detail--section');
    let prdName = prdSec.find('.prd__detail--name').text();

    prdSec.find('.prd__informer .prd__informer--name b').text(prdName)
    prdSec.find('.prd__informer').slideDown();
  })




  //*==============
  //* 03 ACCOUNT  =
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


  // Input mask 
  if ($('.input[type="tel"]').length) {
    $('.input[type="tel"]').inputmask({
      "mask": "+1-999-999-9999",
      showMaskOnHover: false,
      definitions: {
        'x': {
          validator: "[1-9]"
        },
        '9': {
          validator: "[0-9]"
        }
      }
    });
  }


  // Validate email
  _functions.validateEmail = function(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }


  $(document).on('keyup', 'input[name="email"]', function() {
    const email = $(this);

    if (!_functions.validateEmail(email.val())) {
      email.closest('.input-field-wrapp').addClass('invalid-email');
    } else {
      email.closest('.input-field-wrapp').removeClass('invalid-email');
    }

    if (email.val() == '') {
      email.closest('.input-field-wrapp').removeClass('invalid-email');
    }
  });


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


  // btn submit add error message
  // remove this after programming
  $(document).on('blur', '.input-field-wrapp .input[required]', function() {
    let form = $(this).closest('.form-wrapp');

    if ($(this).val().trim()) {
      form.find('.error-message').addClass('d-none');
      form.find('.btn-submit').removeClass('btn-disabled');
    } else {
      form.find('.error-message').removeClass('d-none');
      form.find('.btn-submit').addClass('btn-disabled');
    }
  });




  //*=====================
  //* 04 PROJECT DETAIL  =
  //*=====================
  // btn edit
  $(document).on('click', '.btn-edit', function() {
    var item = $(this).closest('.project-item');

    item.find("input").removeAttr("readonly");
    item.find("input").addClass("input, in-input");
    item.find("button").removeClass("hide");
    $(this).parent('.btn-icon-wrapper').addClass("hide").siblings().removeClass('hide');

    if (winW < 1200) {
      item.addClass("focus");
    }
  });


  // btn save
  $(document).on('click', '.btn-save', function() {
    var item = $(this).closest('.project-item');

    item.find("input").prop("readonly", true);
    item.find("input").removeClass("input, in-input");
    item.find("button").addClass("hide");
    $(this).parent('.btn-icon-wrapper').addClass("hide").siblings().removeClass('hide');

    if (winW < 1200) {
      item.removeClass("focus");
    }
  });


  // //btn remove
  // $(document).on('click', '.btn-remove', function() {
  //   var item = $(this).closest('.project-content').find('.project-item');

  //   if (item.length == 1) {
  //     $(this).closest('.project-wrapper').find('.project-top').remove();
  //     $(this).closest('.project-wrapper').find('.project-empty').removeClass('d-none');
  //     $(this).closest('.project-item').slideUp(0, function() {
  //       $(this).remove();
  //     });
  //   } else {
  //     $(this).closest('.project-item').slideUp(0, function() {
  //       $(this).remove();
  //     });
  //   }
  // });



});