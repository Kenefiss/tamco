jQuery(function($) {
  "use strict";


  //*============
  //* 03 SWIPER =
  //*============
  // Options set Swiper
  _functions.getSwOptions = function(swiper) {
    let options = swiper.data('options');
    options = (!options || typeof options !== 'object') ? {} : options;
    const $p = swiper.closest('.swiper-entry'),
      slidesLength = swiper.closest('.section').find('.swiper-wrapper>.swiper-slide').length;

    if (!options.pagination) options.pagination = {
      ...options.pagination,
      el: $p.find('.swiper-pagination')[0],
      clickable: true
    };
    if (!options.navigation) options.navigation = {
      nextEl: $p.find('.swiper-button-next')[0],
      prevEl: $p.find('.swiper-button-prev')[0]
    };
    if (options.arrowsOut) options.navigation = {
      nextEl: $p.closest('.section').find('.swiper-button-next')[0],
      prevEl: $p.closest('.section').find('.swiper-button-prev')[0]
    };
    options.preloadImages = false;
    if (options.lazy == true) {
      $p.find('.swiper-slide').find('img').addClass('swiper-lazy').after('<div class="swiper-lazy-preloader"></div>');
    }
    options.lazy = {
      loadPrevNext: true
    };

    options.observer = true;
    options.observeParents = true;
    options.watchOverflow = true;
    if (!options.speed) options.speed = 1000;
    options.roundLengths = true;
    if (slidesLength <= 1) {
      options.loop = false;
    }
    return options;
  };


  // Init each Swiper
  _functions.initSwiper = function(el) {
    const swiper = new Swiper(el[0], _functions.getSwOptions(el));
  };

  $('.swiper-entry .swiper-container').each(function() {
    _functions.initSwiper($(this));

    let $thisSwiper = $(this)[0].swiper;

    if ($thisSwiper.isLocked) {
      $thisSwiper.$wrapperEl.closest('.section').addClass('swiper-controls-hide')
    } else {
      $thisSwiper.$wrapperEl.closest('.section').removeClass('swiper-controls-hide');
    }

    $thisSwiper.on('resize', function() {
      if ($thisSwiper.isLocked) {
        $thisSwiper.$wrapperEl.closest('.section').addClass('swiper-controls-hide')
      } else {
        $thisSwiper.$wrapperEl.closest('.section').removeClass('swiper-controls-hide');
      }
    });
  });


  $('.swiper-thumbs').each(function() {
    let t = $(this);
    let top = t.find('.swiper-thumbs-top>.swiper-container')[0].swiper,
      bottom = t.find('.swiper-thumbs-bottom>.swiper-container')[0].swiper;
    top.thumbs.swiper = bottom;
    top.thumbs.init();
    top.thumbs.update();

    if (top.slides.length < 2) {
      t.find('.swiper-thumbs-bottom').addClass('d-none')
    }

  });
})