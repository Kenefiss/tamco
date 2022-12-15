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
        <div class="banner-entry small">
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
            <!-- left side -->
            <div class="col-xl-6 col-lg-8 col-md-10 col-11">
              <div class="basket__prd--wrap">
                <div class="h3 basket__title">Products</div>

                <div class="basket__prd--inner">
                  <div class="basket__prd">
                    <a class="basket__prd--img" href="product-detail.php">
                      <img src="img/basket-img-1.png" alt="" loading="lazy">
                    </a>
                    <div class="basket__prd--info">
                      <a class="basket__prd--name h3" href="product-detail.php">
                        HBM23040K-UN4-ACR-BK
                      </a>
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
                            <div class="in-placeholder">Fixture Type</div>
                            <div class="in-inner">
                              <input class="in-input" type="text" value="Aliqueteget">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-close type-2 open-popup" data-rel="remove-prod"></div>
                  </div>
                  <div class="basket__prd">
                    <a class="basket__prd--img" href="product-detail.php">
                      <img src="img/basket-img-2.png" alt="" loading="lazy">
                    </a>
                    <div class="basket__prd--info">
                      <a class="basket__prd--name h3" href="product-detail.php">
                        AR-N7S
                      </a>
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
                            <div class="in-placeholder">Fixture Type</div>
                            <div class="in-inner">
                              <input class="in-input" type="text" value="Aliqueteget">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-close type-2 open-popup" data-rel="remove-prod"></div>
                  </div>
                </div>

                <button class="btn btn-2 btn-primary">
                  <b>Clear Basket</b>
                </button>
              </div>
            </div>

            <!-- right side -->
            <div class="col-xxl-4 col-xl-5 col-lg-8 col-md-10 col-11">

              <div class="prj__save-wrap">
                <img src="img/icons/folder-add.svg" alt="" loading="lazy">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui vitae.</p>
                <div class="btn btn-2 btn-fourth open-popup" data-rel="login-to-save">
                  <b>Save to a Project</b>
                </div>
              </div>

              <form class="form-wrapp basket__form">
                <div class="h3 title basket__title">Request a Quote</div>

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
                        <input class="input" type="tel" name="phone" required="">
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
                      <div class="input-field-wrapp">
                        <select name="country" class="SelectBox">
                          <option value="Country">Country*</option>
                          <option value="1">Canada</option>
                          <option value="2">USA</option>
                        </select>
                        <div class="input-placeholder in-select">Country*</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <select name="province" class="SelectBox">
                          <option value="Province">Province*</option>
                          <option>Ontario</option>
                          <option>Quebec</option>
                          <option>Nova Scotia</option>
                          <option>New Brunswick</option>
                          <option>Manitoba</option>
                          <option>British Columbia</option>
                          <option>Prince Edward Island</option>
                          <option>Saskatchewan</option>
                          <option>Alberta</option>
                          <option>Newfoundland and Labrador</option>
                        </select>
                        <div class="input-placeholder in-select">Province*</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="city">
                        <div class="input-placeholder">City</div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="postal">
                        <div class="input-placeholder">Postal Code</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="checkbox-entry-wrap">
                        <label class="checkbox-entry">
                          <input type="checkbox" name="checkbox1" value="">
                          <span>Send copy to yourself</span>
                        </label>
                        <label class="checkbox-entry">
                          <input type="checkbox" name="checkbox2" value="" checked>
                          <span>Send Copy to a Colleague</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-6 align-self-end">
                      <div class="input-field-wrapp">
                        <input class="input" type="email" name="colleague’s Email" required="">
                        <div class="input-placeholder">Colleague’s Email</div>
                        <div class="input-error">The email must contain the "@" sign</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-field-wrapp textarea-wrapp">
                        <textarea class="input" name="message"></textarea>
                        <div class="input-placeholder">Your Comments</div>
                      </div>

                      <div class="caption">
                        Your personal data will be used to process your order, support
                        your experience throughout this website, and for other purposes described in our
                        privacy policy.
                      </div>
                    </div>
                  </div>
                </div>


                <a class="btn btn-2 btn-fourth" href="products-basket-received.php">
                  <b>Request Quote</b>
                </a>
              </form>
            </div>
          </div>
        </div>
        <div class="spacer-md"></div>
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