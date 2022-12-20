<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Tamlite || Account</title>
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>

      <!-- Account Banner small -->
      <div class="section">
        <div class="banner-entry small gradient-bg">
          <div class="banner-entry-content">
            <div class="banner-entry-align text-center">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-sm-11 col-xl-8 col-xxl-7">
                    <h1 class="h1 title white text-upper">My Account</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-xl-10 relative">
                <div class="tab-nav">
                  <div class="tab-toggle">
                    <div class="active"><span class="tab-caption">My Projects</span></div>
                    <div><span class="tab-caption">Account Information</span></div>
                  </div>
                </div>
                <a class="log-out" href="products.php"><img src="img/icons/logout.svg" alt="">Log Out</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Account section -->
      <div class="section acc-sec" style="background-color: var(--clr-white);" data-scroll-block="exterior">
        <div class="tab active">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-xl-10">

                <!-- if no project, empty block set visible -->
                <div class="empty-block">
                  <div class="h2 title dark-blue text-cap">No project saved yet</div>
                  <div class="h3 title grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida vel in.</div>
                  <a class="btn btn-2 btn-fourth" href="products.php"><b>Search Products</b></a>
                </div>
                <!-- empty block end -->

              </div>
            </div>
          </div>
        </div>
        <div class="tab">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-10 col-xl-6 col-xxl-4">
                <form class="account-form form-block">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="tel" name="phone" required="">
                        <div class="input-placeholder">Phone</div>
                        <div class="input-error">The input field must contain a Phone Number</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="company">
                        <div class="input-placeholder">Company Name <span>(Optional)</span></div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <select name="country" class="SelectBox">
                          <option>Country</option>
                          <option value="1">Canada</option>
                          <option value="2">USA</option>
                        </select>
                        <div class="input-placeholder in-select">Country</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <select name="province" class="SelectBox">
                          <option>Province/State</option>
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
                        <div class="input-placeholder in-select">Province/State</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="city">
                        <div class="input-placeholder">City</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="address1">
                        <div class="input-placeholder">Street Address</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="address2">
                        <div class="input-placeholder">Street Address <span>(Optional)</span></div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="postal">
                        <div class="input-placeholder">Postal / Zip Code</div>
                      </div>
                    </div>
                  </div>
                  <div class="btn btn-2 btn-fourth">
                    <b>Save</b>
                    <input type="submit" value="Send" class="has-spinner" />
                  </div>
                </form>
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
  <?php include 'inc/_account.php';?>
</body>

</html>