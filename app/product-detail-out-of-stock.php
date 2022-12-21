<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Tamlite || Product Detail out of stock</title>
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>

      <!-- Product Details -->
      <div class="section prd__detail--section">
        <div class="btn-back-container container">
          <a class="btn-icon btn-back" href="products-category.php"><i></i><b>Back</b></a>
        </div>
        <div class="spacer-sm"></div>

        <div class="container">
          <!-- Product informer -->
          <div class="row justify-content-center">
            <div class="col-xl-9 p-xxl-0 col-md-11">
              <div class="prd__informer">
                <div class="prd__informer--inner">
                  <div class="prd__informer--name">
                    <b></b> was added to basket
                  </div>
                  <a class="simple-link" href="products-basket.php">
                    <b>Proceed to Basket</b><i></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-10 col-md-11 p-xl-0">
              <div class="row justify-content-center">

                <!-- left -->
                <div class="col-md-6 col-xl-5">
                  <div class="swiper-thumbs prd__detail--slider">
                    <!-- top slider -->
                    <div class="swiper-entry swiper-thumbs-top">
                      <div class="swiper-container" data-options='{"watchSlidesVisibility": true, "watchSlidesProgress": true, "spaceBetween": 30, "breakpoints":{"768":{"spaceBetween": 0}} }'>
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="prd__detail--img">
                              <img src="img/prd-detail-big-3.png" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-controls">
                        <div class="swiper-button-prev"><i></i></div>
                        <div class="swiper-button-next"><i></i></div>
                      </div>
                    </div>

                    <!-- bottom slider -->
                    <div class="swiper-entry swiper-thumbs-bottom">
                      <div class="swiper-container" data-options='{"slidesPerView": 3, "spaceBetween": 5, "watchSlidesVisibility": true, "watchSlidesProgress": true, "breakpoints":{"768":{"spaceBetween": 10, "slidesPerView": 3}}}'>
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="prd__detail--thumbs">
                              <img src="img/prd-detail-small-1.png" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- right -->
                <div class="col-md-6 col-xl-6 offset-xl-1">

                  <!-- Added class "out-stock" -->
                  <div class="prd__detail out-stock">
                    <h1 class="prd__detail--name h2">
                      AR-N7S
                    </h1>
                    <div class="prd__detail--series h3">
                      Photocontrols Series
                    </div>
                    <div class="prd__detail--series-num h6">
                      SKU AR-N7S
                    </div>
                    <div class="social-wrapper">
                      <a class="social-icon-entry" href="https://www.facebook.com/" target="_blank">
                        <img src="https://tamlite-dev.itwcorp-dev.info/wp-content/themes/tamlite/img/icons/facebook-dark.svg" alt="">
                      </a>
                      <a class="social-icon-entry" href="https://twitter.com/" target="_blank">
                        <img src="https://tamlite-dev.itwcorp-dev.info/wp-content/themes/tamlite/img/icons/twitter-dark.svg" alt="">
                      </a>
                      <a class="social-icon-entry" href="https://www.linkedin.com/" target="_blank">
                        <img src="https://tamlite-dev.itwcorp-dev.info/wp-content/themes/tamlite/img/icons/linkedIn-dark.svg" alt="">
                      </a>
                    </div>
                    <div class="label__wrap">
                      <div class="label__inner">
                        <div class="label__item">
                          <img src="img/spaec-img-3.png" alt="" loading="lazy">
                        </div>
                        <div class="label__item">
                          <img src="img/spaec-img-5.png" alt="" loading="lazy">
                        </div>
                      </div>
                    </div>
                    <div class="prd__detail--controls">
                      <div class="in-wrapper">
                        <div class="in-wrap quantity-input">
                          <div class="in-placeholder">Quantity</div>
                          <div class="in-inner">
                            <button class="in-btn-dec"></button>
                            <input class="in-input" name="number" type="number" value="1">
                            <button class="in-btn-inc"></button>
                          </div>
                        </div>
                        <div class="in-wrap">
                          <div class="in-placeholder">Fixture Type (Optional)</div>
                          <div class="in-inner">
                            <input class="in-input" type="text">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="prd__detail--btn-wrap">
                      <button class="btn btn-2 btn-fourth add-to-basket"><b>Add to Basket</b></button>
                      <div class="tooltip no-info">
                        <i>!</i>
                        <b>Product out of stock</b>
                        <div class="tooltip-info">
                          Product out of stock
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="spacer-sm"></div>
      </div>

      <!--  Product Specifications  *-->
      <div class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xxl-7 col-xl-9 col-md-11">
              <div class="products-accordeon">
                <div class="h2 title text-upper dark-blue">Product Specifications</div>

                <div class="variation_tabs">
                  <div class="products-accordeon-entry">
                    <div class="products-accordeon-title">Performance <i class="plus"></i></div>
                    <div class="products-accordeon-toggle" style="display: none;">
                      <div class="text">
                        <table>
                          <tbody>
                            <tr>
                              <td>Initial Lumen Output</td>
                              <td>33110 lm</td>
                            </tr>
                            <tr>
                              <td>Efficacy</td>
                              <td>143.62 lm/W</td>
                            </tr>
                            <tr>
                              <td>Beam Angle</td>
                              <td>120 deg</td>
                            </tr>
                            <tr>
                              <td>Luminaire Type</td>
                              <td>Direct</td>
                            </tr>
                            <tr>
                              <td>Environmental Rating(s)</td>
                              <td>IP65</td>
                            </tr>
                            <tr>
                              <td>UL Classification</td>
                              <td>Wet Location Listed</td>
                            </tr>
                            <tr>
                              <td>Certification Standards</td>
                              <td>cULus, DLC</td>
                            </tr>
                            <tr>
                              <td>DLC Number</td>
                              <td>PM60BEHE</td>
                            </tr>
                            <tr>
                              <td>CCN Number</td>
                              <td>IFAM7.E359675</td>
                            </tr>
                            <tr>
                              <td>Limited Product Warranty</td>
                              <td>5 year(s)</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="products-accordeon-entry">
                    <div class="products-accordeon-title">Electrical <i class="plus"></i></div>
                    <div class="products-accordeon-toggle">
                      <div class="text">
                        <table>
                          <tbody>
                            <tr>
                              <td>Initial Lumen Output</td>
                              <td>33110 lm</td>
                            </tr>
                            <tr>
                              <td>Efficacy</td>
                              <td>143.62 lm/W</td>
                            </tr>
                            <tr>
                              <td>Beam Angle</td>
                              <td>120 deg</td>
                            </tr>
                            <tr>
                              <td>Luminaire Type</td>
                              <td>Direct</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="products-accordeon-entry">
                    <div class="products-accordeon-title">Physical <i class="plus"></i></div>
                    <div class="products-accordeon-toggle">
                      <div class="text">
                        <table>
                          <tbody>
                            <tr>
                              <td>Initial Lumen Output</td>
                              <td>33110 lm</td>
                            </tr>
                            <tr>
                              <td>Efficacy</td>
                              <td>143.62 lm/W</td>
                            </tr>
                            <tr>
                              <td>Beam Angle</td>
                              <td>120 deg</td>
                            </tr>
                            <tr>
                              <td>Luminaire Type</td>
                              <td>Direct</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="products-accordeon-entry">
                    <div class="products-accordeon-title">Shipping <i class="plus"></i></div>
                    <div class="products-accordeon-toggle">
                      <div class="text">
                        <table>
                          <tbody>
                            <tr>
                              <td>Initial Lumen Output</td>
                              <td>33110 lm</td>
                            </tr>
                            <tr>
                              <td>Efficacy</td>
                              <td>143.62 lm/W</td>
                            </tr>
                            <tr>
                              <td>Beam Angle</td>
                              <td>120 deg</td>
                            </tr>
                            <tr>
                              <td>Luminaire Type</td>
                              <td>Direct</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-md"></div>
      </div>

      <!--  Related Products section * -->
      <div class="section" style="background-color: var(--clr-grey-100);">
        <div class="spacer-sm"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-9">
              <div class="h2 title text-upper text-center dark-blue">Related Products</div>

              <div class="swiper-entry related-slider pgn-2">
                <div class="swiper-container" data-options='{"centerInsufficientSlides": false, "slidesPerView": "2", "spaceBetween": 12, "arrowsOut": true, "pagination": {"el": ".pgn-2 .swiper-pagination", "dynamicBullets": true, "dynamicMainBullets": 2 },"breakpoints": {"576": {"slidesPerView": 3, "spaceBetween": 12, "pagination": {"dynamicBullets": true, "dynamicMainBullets": 2 }},"768": {"slidesPerView": 4, "spaceBetween": 12, "pagination": {"dynamicBullets": true, "dynamicMainBullets": 2 }}, "992": {"slidesPerView": 4, "spaceBetween": 12,"pagination": {"dynamicBullets": true, "dynamicMainBullets": 2 }}, "1600": {"slidesPerView": "5", "spaceBetween": 12,"pagination": { "dynamicBullets": true, "dynamicMainBullets": 2 }} }}'>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <a class="prd__item type2" href="product-detail.php">
                        <div class="prd__item--img">
                          <img src="img/prd-img-75.png" alt="" loading="lazy">
                        </div>
                        <div class="prd__item--name">AR-SC</div>
                        <div class="prd__item--descr">Photocontrols Series</div>
                        <div class="prd__item--view"><b>View</b></div>
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a class="prd__item type2" href="product-detail.php">
                        <div class="prd__item--label">
                          <img src="img/arrow.svg" alt="" loading="lazy">
                          <b>Most Popular</b>
                        </div>
                        <div class="prd__item--img">
                          <img src="img/prd-img-76.png" alt="" loading="lazy">
                        </div>
                        <div class="prd__item--name">WPFLED-PC</div>
                        <div class="prd__item--descr">Photocontrols Series</div>
                        <div class="prd__item--view"><b>View</b></div>
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a class="prd__item type2" href="product-detail.php">
                        <div class="prd__item--label">
                          <img src="img/arrow.svg" alt="" loading="lazy">
                          <b>Most Popular</b>
                        </div>
                        <div class="prd__item--img">
                          <img src="img/prd-img-76.png" alt="" loading="lazy">
                        </div>
                        <div class="prd__item--name">WPFLED-PC</div>
                        <div class="prd__item--descr">Photocontrols Series</div>
                        <div class="prd__item--view"><b>View</b></div>
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a class="prd__item type2" href="product-detail.php">
                        <div class="prd__item--img">
                          <img src="img/prd-img-77.png" alt="" loading="lazy">
                        </div>
                        <div class="prd__item--name">AR-N3PC-UN4</div>
                        <div class="prd__item--descr">Photocontrols Series</div>
                        <div class="prd__item--view"><b>View</b></div>
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a class="prd__item type2" href="product-detail.php">
                        <div class="prd__item--img">
                          <img src="img/prd-img-78.png" alt="" loading="lazy">
                        </div>
                        <div class="prd__item--name">AR-N3PC-UNV</div>
                        <div class="prd__item--descr">Photocontrols Series</div>
                        <div class="prd__item--view"><b>View</b></div>
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a class="prd__item type2" href="product-detail.php">
                        <div class="prd__item--img">
                          <img src="img/prd-img-34.png" alt="" loading="lazy">
                        </div>
                        <div class="prd__item--name">HBM100</div>
                        <div class="prd__item--descr">HBM Series</div>
                        <div class="prd__item--view"><b>View</b></div>
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a class="prd__item type2" href="product-detail.php">
                        <div class="prd__item--label">
                          <img src="img/arrow.svg" alt="" loading="lazy">
                          <b>Most Popular</b>
                        </div>
                        <div class="prd__item--img">
                          <img src="img/prd-img-34.png" alt="" loading="lazy">
                        </div>
                        <div class="prd__item--name">HBM150</div>
                        <div class="prd__item--descr">HBM Series</div>
                        <div class="prd__item--view"><b>View</b></div>
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a class="prd__item type2" href="product-detail.php">
                        <div class="prd__item--img">
                          <img src="img/prd-img-39.png" alt="" loading="lazy">
                        </div>
                        <div class="prd__item--name">HBX100</div>
                        <div class="prd__item--descr">HBX Series</div>
                        <div class="prd__item--view"><b>View</b>
                        </div>
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a class="prd__item type2" href="product-detail.php">
                        <div class="prd__item--img">
                          <img src="img/prd-img-40.png" alt="" loading="lazy">
                        </div>
                        <div class="prd__item--name">HBX150</div>
                        <div class="prd__item--descr">HBX Series</div>
                        <div class="prd__item--view"><b>View</b></div>
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a class="prd__item type2" href="product-detail.php">
                        <div class="prd__item--img">
                          <img src="img/prd-img-38.png" alt="" loading="lazy">
                        </div>
                        <div class="prd__item--name">HBX50</div>
                        <div class="prd__item--descr">HBX Series</div>
                        <div class="prd__item--view"><b>View</b></div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-controls-wrapp">
                  <div class="swiper-controls">
                    <div class="swiper-button-prev"><i></i></div>
                    <div class="swiper-pagination swiper-pagination-relative"></div>
                    <div class="swiper-button-next"><i></i></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-sm"></div>
      </div>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>



  <div class="popup-wrapper">
    <?php include 'inc/_popups.php';?>
  </div>

  <link rel="stylesheet" href="https://tamlite-dev.itwcorp-dev.info/wp-content/themes/tamlite/css/swiper.css?ver=6.1.1" type="text/css" />
  <link rel="stylesheet" id="sumoselect-css" href="https://tamlite-dev.itwcorp-dev.info/wp-content/themes/tamlite/css/sumoselect.css?ver=6.1.1" type="text/css" media="all">
  <link rel="stylesheet" id="tamlite-style-css" href="https://tamlite-dev.itwcorp-dev.info/wp-content/themes/tamlite/css/style.css?ver=1669646644" type="text/css" media="all">
  <link rel="stylesheet" id="tamlite-style-b-css" href="https://tamlite-dev.itwcorp-dev.info/wp-content/themes/tamlite/css/style-b.css?ver=1670250865" type="text/css" media="all">
  <link href="css/product-style.css" rel="stylesheet" type="text/css" />


  <script type="text/javascript" src="https://tamlite-dev.itwcorp-dev.info/wp-content/themes/tamlite/js/jquery-3.4.1.min.js?ver=6.1.1" id="jquery-js"></script>
  <script type="text/javascript" src="https://tamlite-dev.itwcorp-dev.info/wp-content/themes/tamlite/js/swiper.jquery.min.js?ver=6.1.1" id="swiperslider-js"></script>
  <script type="text/javascript" src="https://tamlite-dev.itwcorp-dev.info/wp-content/themes/tamlite/js/jquery.sumoselect.min.js?ver=6.1.1" id="sumoselect-js"></script>
  <script type="text/javascript" src="https://tamlite-dev.itwcorp-dev.info/wp-content/plugins/__woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.7.1.0" id="js-cookie-js"></script>
  <!-- <script type="text/javascript" src="https://tamlite-dev.itwcorp-dev.info/wp-content/themes/tamlite/js/global.js?ver=6.1.0" id="tamlite-global-js"></script> -->


  <script defer src="js/vendors/jquery.inputmask.min.js"></script>
  <script defer src="js/product-global.js"></script>

  <!-- this script only itw demo -->
  <script defer src="js/initS.js"></script>
</body>

</html>