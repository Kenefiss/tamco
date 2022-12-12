<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Tamlite || Products Basket</title>
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>
      <!-- Basket Banner small -->
      <div class="section">
        <div class="banner-entry small prd__banner">
          <div class="banner-entry-bg" style="background-image: linear-gradient(180.08deg, #193768 13.09%, #03132D 219.65%);"></div>
          <div class="banner-entry-content">
            <div class="banner-entry-align align-bottom text-center">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-sm-11">
                    <h1 class="h1 title white text-upper">Product Basket</h1>
                    <div class="h3 white fw-300">
                      Enim urna, orci facilisi libero, dictum rutrum cum. Tincidunt amet, vel sit scelerisque ac molestie in arcu.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="spacer-sm"></div>
      </div>

      <!-- Basket -->
      <div class="section basket-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-11">
              <div class="basket__prd--wrap">
                <div class="h3 basket__title">Products</div>

                <div class="basket__prd--inner">
                  <div class="basket__prd">
                    <div class="basket__prd--img">
                      <img src="img/basket-img-1.png" alt="" loading="lazy">
                    </div>
                    <div class="basket__prd--info">
                      <div class="basket__prd--name h3">
                        HBM23040K-UN4-ACR-BK
                      </div>
                      <ul class="basket__prd--opt">
                        <li>HBM Series</li>
                        <li>SKU: HBM23040K-UN4-ACR-BK</li>
                        <li>CCT: 4000K</li>
                        <li>Mounting: Suspended</li>
                        <li>Voltage: 347-480 Vac</li>
                        <li>Finish: Black</li>
                        <li>Option: Acrylic Refractor</li>
                      </ul>
                      <div class="basket__prd--btn-wrap">
                        <div class="in-wrapper">
                          <div class="in-wrap">
                            <div class="in-placeholder">Quantity</div>
                            <div class="in-inner">
                              <button class="in-btn-dec"></button>
                              <input class="in-input" name="number" type="number" value="0">
                              <button class="in-btn-inc"></button>
                            </div>
                          </div>
                          <div class="in-wrap">
                            <div class="in-placeholder">Fixture Type (Optional)</div>
                            <div class="in-inner">
                              <input class="in-input" type="text" value="Aliqueteget">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-close type-2"></div>
                  </div>
                  <div class="basket__prd">
                    <div class="basket__prd--img">
                      <img src="img/basket-img-2.png" alt="" loading="lazy">
                    </div>
                    <div class="basket__prd--info">
                      <div class="basket__prd--name h3">
                        AR-N7S
                      </div>
                      <ul class="basket__prd--opt">
                        <li>Photocontrols Series</li>
                        <li>SKU AR-N7S</li>
                      </ul>
                      <div class="basket__prd--btn-wrap">
                        <div class="in-wrapper">
                          <div class="in-wrap">
                            <div class="in-placeholder">Quantity</div>
                            <div class="in-inner">
                              <button class="in-btn-dec"></button>
                              <input class="in-input" name="number" type="number" value="0">
                              <button class="in-btn-inc"></button>
                            </div>
                          </div>
                          <div class="in-wrap">
                            <div class="in-placeholder">Fixture Type (Optional)</div>
                            <div class="in-inner">
                              <input class="in-input" type="text" value="Aliqueteget">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-close type-2"></div>
                  </div>
                </div>

                <button class="btn btn-2 btn-primary">
                  <b>Clear Basket</b>
                </button>
              </div>
            </div>
            <div class="col-xxl-4 col-lg-5 col-11">

              <div class="prj__save-wrap"></div>

              <form class="form-wrapp basket__form">
                <div class="h3 title">Request a Quote</div>

                <div class="form-block">
                  <div class="h6 title">Project Info</div>

                  <div class="input-field-wrapp">
                    <input class="input" type="text" name="client name">
                    <div class="input-placeholder">Client Name</div>
                  </div>

                  <div class="input-field-wrapp">
                    <input class="input" type="text" name="project name">
                    <div class="input-placeholder">Project Name</div>
                  </div>
                </div>

                <div class="form-block">
                  <div class="h6 title">Customer Info</div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="first name" required>
                        <div class="input-placeholder">First Name*</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="last name" required>
                        <div class="input-placeholder">Last Name*</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-field-wrapp">
                        <input class="input" type="email" name="email" required="">
                        <div class="input-placeholder">Email Address</div>
                        <div class="input-error">The email must contain the "@" sign</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="phone" required="">
                        <div class="input-placeholder">Phone</div>
                        <div class="input-error">
                          The input field must contain a Phone Number
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="company">
                        <div class="input-placeholder">Company</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="Street">
                        <div class="input-placeholder">Street</div>
                      </div>
                    </div>
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="city">
                        <div class="input-placeholder">City</div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">

                    </div>
                  </div>




                  <div class="row">
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <div class="SumoSelect sumo_country" tabindex="0" role="button" aria-expanded="false"><select name="country" class="SelectBox SumoUnder" tabindex="-1">
                            <option value="Country">Country</option>
                            <option value="1">Country 1</option>
                            <option value="2">Country 2</option>
                            <option value="3">Country 3</option>
                            <option value="4">Country 4</option>
                            <option value="5">Country 5</option>
                            <option value="6">Country 6</option>
                          </select>
                        </div>

                        <div class="input-placeholder in-select">Country</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <div class="SumoSelect sumo_state" tabindex="0" role="button" aria-expanded="false">
                          <select name="state" class="SelectBox SumoUnder" tabindex="-1">
                            <option value="State">State</option>
                            <option value="1">State 1</option>
                            <option value="2">State 2</option>
                            <option value="2">State 3</option>
                            <option value="2">State 4</option>
                            <option value="2">State 5</option>
                          </select>
                        </div>

                        <div class="input-placeholder in-select">State</div>
                      </div>
                    </div>
                  </div>

                  <div class="input-field-wrapp textarea-wrapp">
                    <textarea class="input" name="message"></textarea>
                    <div class="input-placeholder">Message <span>(Optional)</span></div>
                  </div>

                  <div class="input-field-wrapp textarea-wrapp">
                    <textarea class="input" name="message"></textarea>
                    <div class="input-placeholder">Your Comments</div>
                  </div>

                  <div class="caption">Your personal data will be used to process your order, support
                    your experience throughout this website, and for other purposes described in our
                    privacy policy.</div>

                  <div class="checkbox-entry-wrap">
                    <label class="checkbox-entry">
                      <input type="radio" name="radio" value="Yes" checked="">
                      <span>Yes</span>
                    </label>
                    <label class="checkbox-entry">
                      <input type="radio" name="radio" value="No">
                      <span>No</span>
                    </label>
                  </div>

                  <div class="checkbox-entry-wrap">
                    <label class="checkbox-entry">
                      <input type="checkbox" name="checkbox1" value="Ph1" checked="">
                      <span>Phone1</span>
                    </label>
                    <label class="checkbox-entry">
                      <input type="checkbox" name="checkbox2" value="Ph2">
                      <span>Phone2</span>
                    </label>
                  </div>
                </div>

                <div class="upload-wrapper">
                  <div>
                    <div id="file-input-button-x" class="btn-upload file-input-button" data-id="x">
                      File Upload

                      <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#a)">
                          <path d="M19 9h-4V3H9v6H5l7 7 7-7ZM5 18v2h14v-2H5Z" fill="#193768"></path>
                        </g>
                        <defs>
                          <clipPath id="a">
                            <path fill="#193768" d="M0 0h24v24H0z"></path>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>

                    <input id="file-input-x" class="file-input" type="file" name="file-input-x" data-id="x">
                  </div>
                  <div class="upload-info">Formats: PDF, DOC</div>

                  <p id="file-list-x"></p>
                </div>

                <div class="text-left">
                  <button class="btn btn-fourth form-btn">
                    Request Quote
                    <div class="spinner"></div>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <div class="popup-wrapper" id="popups"></div>

  <?php include 'inc/_bottom.php';?>
</body>

</html>