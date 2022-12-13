<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Tamlite || Project Detail</title>
</head>

<body style="background-color: var(--clr-grey-100);">
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>
      <!-- Project Detail Banner -->
      <div class="section project-detail-banner">
        <div class="banner-entry">
          <div class="banner-entry-bg" style="background-color: var(--clr-white);"></div>
          <img class="banner-entry-shadow" src="https://tamlite-dev.itwcorp-dev.info/wp-content/themes/tamlite/img/bg-overlay-2.png" alt="">

          <div class="banner-entry-content">
            <div class="btn-back-container container">
              <div class="btn-icon btn-back"><i></i><b>Back</b></div>
            </div>

                        <div class="banner-entry-align align-bottom">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xxl-8 col-lg-10 col-md-11 col-12">
                                        <div class="block-title">
                                            <h1 class="h2 title fw-400 dark-blue">Project 3</h1>
                                            <div class="btn-wrapper">
                                                <div class="btn-icon open-popup" data-rel="edit-project">
                                                    <svg width="24" height="24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#a)">
                                                            <path
                                                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25ZM21.41 6.34l-3.75-3.75-2.53 2.54 3.75 3.75 2.53-2.54Z"
                                                                fill="#193768"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="a">
                                                                <path fill="#fff" d="M0 0h24v24H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>

                        <div class="btn-icon">
                          <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#a)">
                              <path d="M6 21h12V7H6v14Zm2.46-9.12 1.41-1.41L12 12.59l2.12-2.12 1.41 1.41L13.41 14l2.12 2.12-1.41 1.41L12 15.41l-2.12 2.12-1.41-1.41L10.59 14l-2.13-2.12ZM15.5 4l-1-1h-5l-1 1H5v2h14V4h-3.5Z" fill="#193768"></path>
                            </g>
                            <defs>
                              <clipPath id="a">
                                <path fill="#193768" d="M0 0h24v24H0z"></path>
                              </clipPath>
                            </defs>
                          </svg>
                        </div>
                      </div>
                    </div>

                    <div class="project-info-wrapper">
                      <div class="project-info">
                        <div class="h6 title fw-700 grey-700">Created</div>
                        <div class="h3 fw-400 dark-blue">Sep 20, 2022</div>
                      </div>
                      <div class="project-info">
                        <div class="h6 title fw-700 grey-700">Location</div>
                        <div class="h3 fw-400 dark-blue">Toronto</div>
                      </div>
                      <div class="project-info">
                        <div class="h6 title fw-700 grey-700">Client</div>
                        <div class="h3 fw-400 dark-blue">David Scherer</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

            <!-- Project Detail Info -->
            <div class="section project-detail">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-8 col-lg-10 col-md-11 col-12">
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-2 btn-fourth">Request Project Quote</a>
                                <a href="#" class="btn btn-2 btn-primary">Download Project Specs</a>
                                <a href="#" class="btn btn-2 btn-primary">Add New Products</a>
                            </div>

                            <div class="project-wrapper">
                                <div class="project-top">
                                    <div>Product</div>
                                    <div>Fixture Type</div>
                                    <div>Quantity</div>
                                    <div></div>
                                </div>

                                <div class="project-content">
                                    <div class="project-item">
                                        <a href="product-detail.php" class="product-info">
                                            <div class="prd__item--img">
                                                <img src="img/prd-img-52.png" alt="" loading="lazy">
                                            </div>
                                            <div class="btn-link btn-link-thirdy">HBM23040K-UN4-ACR-BK</div>
                                        </a>

                                        <div>
                                            <div class="in-wrap">
                                                <div class="in-placeholder">Fixture Type</div>
                                                <div class="in-inner size-1">
                                                    <input type="text" value="Aliqueteget" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="in-wrap">
                                                <div class="in-placeholder">Quantity</div>
                                                <div class="in-inner size-2">
                                                    <button class="in-btn-dec hide"></button>
                                                    <input name="number" type="number" value="1" readonly>
                                                    <button class="in-btn-inc hide"></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="btn-icon-wrapper">
                                                <a href="doc/simple.pdf" class="btn-icon" download>
                                                    <svg width="24" height="24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#a)">
                                                            <path d="M19 9h-4V3H9v6H5l7 7 7-7ZM5 18v2h14v-2H5Z"
                                                                fill="#193768"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="a">
                                                                <path fill="#193768" d="M0 0h24v24H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span class="btn-tooltip">Download Product Specs</span>
                                                </a>
                                                <div class="btn-icon btn-edit">
                                                    <svg width="24" height="24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#a)">
                                                            <path
                                                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25ZM21.41 6.34l-3.75-3.75-2.53 2.54 3.75 3.75 2.53-2.54Z"
                                                                fill="#193768"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="a">
                                                                <path fill="#fff" d="M0 0h24v24H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span class="btn-tooltip">Edit Product Specs</span>
                                                </div>
                                                <div class="btn-icon btn-remove">
                                                    <svg width="24" height="24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#a)">
                                                            <path
                                                                d="M6 21h12V7H6v14Zm2.46-9.12 1.41-1.41L12 12.59l2.12-2.12 1.41 1.41L13.41 14l2.12 2.12-1.41 1.41L12 15.41l-2.12 2.12-1.41-1.41L10.59 14l-2.13-2.12ZM15.5 4l-1-1h-5l-1 1H5v2h14V4h-3.5Z"
                                                                fill="#193768"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="a">
                                                                <path fill="#193768" d="M0 0h24v24H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span class="btn-tooltip">Delete Product</span>
                                                </div>
                                            </div>

                                            <div class="btn-icon-wrapper hide">
                                                <div class="btn-icon btn-save">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#a)">
                                                            <path
                                                                d="M9 16.17 4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17Z"
                                                                fill="#193768" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="a">
                                                                <path fill="#193768" d="M0 0h24v24H0z" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span class="btn-tooltip">Save</span>
                                                </div>

                                                <div class="btn-icon btn-remove">
                                                    <svg width="24" height="24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#a)">
                                                            <path
                                                                d="M6 21h12V7H6v14Zm2.46-9.12 1.41-1.41L12 12.59l2.12-2.12 1.41 1.41L13.41 14l2.12 2.12-1.41 1.41L12 15.41l-2.12 2.12-1.41-1.41L10.59 14l-2.13-2.12ZM15.5 4l-1-1h-5l-1 1H5v2h14V4h-3.5Z"
                                                                fill="#193768"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="a">
                                                                <path fill="#193768" d="M0 0h24v24H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span class="btn-tooltip">Delete Product</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="project-item">
                                        <a href="product-detail.php" class="product-info">
                                            <div class="prd__item--img">
                                                <img src="img/prd-img-52.png" alt="" loading="lazy">
                                            </div>
                                            <div class="btn-link btn-link-thirdy">AR-N7S</div>
                                        </a>

                                        <div>
                                            <div class="in-wrap">
                                                <div class="in-placeholder">Fixture Type</div>
                                                <div class="in-inner size-1">
                                                    <input type="text" value="A1" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="in-wrap">
                                                <div class="in-placeholder">Quantity</div>
                                                <div class="in-inner size-2">
                                                    <button class="in-btn-dec hide"></button>
                                                    <input name="number" type="number" value="1" readonly>
                                                    <button class="in-btn-inc hide"></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="btn-icon-wrapper">
                                                <a href="doc/simple.pdf" class="btn-icon" download>
                                                    <svg width="24" height="24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#a)">
                                                            <path d="M19 9h-4V3H9v6H5l7 7 7-7ZM5 18v2h14v-2H5Z"
                                                                fill="#193768"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="a">
                                                                <path fill="#193768" d="M0 0h24v24H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span class="btn-tooltip">Download Product Specs</span>
                                                </a>
                                                <div class="btn-icon btn-edit">
                                                    <svg width="24" height="24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#a)">
                                                            <path
                                                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25ZM21.41 6.34l-3.75-3.75-2.53 2.54 3.75 3.75 2.53-2.54Z"
                                                                fill="#193768"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="a">
                                                                <path fill="#fff" d="M0 0h24v24H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span class="btn-tooltip">Edit Product Specs</span>
                                                </div>
                                                <div class="btn-icon btn-remove">
                                                    <svg width="24" height="24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#a)">
                                                            <path
                                                                d="M6 21h12V7H6v14Zm2.46-9.12 1.41-1.41L12 12.59l2.12-2.12 1.41 1.41L13.41 14l2.12 2.12-1.41 1.41L12 15.41l-2.12 2.12-1.41-1.41L10.59 14l-2.13-2.12ZM15.5 4l-1-1h-5l-1 1H5v2h14V4h-3.5Z"
                                                                fill="#193768"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="a">
                                                                <path fill="#193768" d="M0 0h24v24H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span class="btn-tooltip">Delete Product</span>
                                                </div>
                                            </div>

                                            <div class="btn-icon-wrapper hide">
                                                <div class="btn-icon btn-save">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#a)">
                                                            <path
                                                                d="M9 16.17 4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17Z"
                                                                fill="#193768" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="a">
                                                                <path fill="#193768" d="M0 0h24v24H0z" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span class="btn-tooltip">Save</span>
                                                </div>

                                                <div class="btn-icon btn-remove">
                                                    <svg width="24" height="24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#a)">
                                                            <path
                                                                d="M6 21h12V7H6v14Zm2.46-9.12 1.41-1.41L12 12.59l2.12-2.12 1.41 1.41L13.41 14l2.12 2.12-1.41 1.41L12 15.41l-2.12 2.12-1.41-1.41L10.59 14l-2.13-2.12ZM15.5 4l-1-1h-5l-1 1H5v2h14V4h-3.5Z"
                                                                fill="#193768"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="a">
                                                                <path fill="#193768" d="M0 0h24v24H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span class="btn-tooltip">Delete Product</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-empty text-center d-none">
                                    <div class="h3 title fw-500 dark-blue">No Product in this Project</div>

                                    <div class="text text-xl dark-blue2">
                                        Please add any product to this project.
                                    </div>
                                    <a href="products.php" class="btn btn-2 btn-fourth">All Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    <?php include 'inc/_footer.php';?>
  </div>



  <div class="popup-wrapper">
    <?php include 'inc/_popups.php';?>
  </div>

  <?php include 'inc/_bottom.php';?>

</body>

</html>