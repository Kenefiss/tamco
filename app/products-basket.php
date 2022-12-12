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
            <div class="col-lg-6 col-11"></div>
            <div class="col-lg-5 col-11">

              <div class="basket__form"></div>

              <form class="form-wrapp basket__form">
                <div class="h3 title">Request a Quote</div>

                <div class="form-block">
                  <div class="h6 title">Project Info</div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="input-field-wrapp" data-descr="Description Text">
                        <input class="input" type="text" name="first_name" required="">
                        <div class="input-placeholder">First Name</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="last_name" required="">
                        <div class="input-placeholder">Last Name</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-block">
                  <div class="h6 title">Customer Info</div>

                  <div class="input-field-wrapp">
                    <input class="input" type="text" name="company">
                    <div class="input-placeholder">Company Name <span>(Optional)</span></div>
                  </div>

                  <div class="input-field-wrapp">
                    <input class="input" type="email" name="email" required="">
                    <div class="input-placeholder">Email Address</div>
                    <div class="input-error">The email must contain the "@" sign</div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="phone" required="">
                        <div class="input-placeholder">Phone</div>
                        <div class="input-error">
                          The input field must contain a Phone Number
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="input-field-wrapp">
                    <input class="input" type="text" name="city">
                    <div class="input-placeholder">City</div>
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
                          <p class="CaptionCont SelectBox SelectBox" title=" Country"><span> Country</span><label><i></i></label></p>
                          <div class="optWrapper">
                            <ul class="options">
                              <li class="opt selected"><label>Country</label></li>
                              <li class="opt"><label>Country 1</label></li>
                              <li class="opt"><label>Country 2</label></li>
                              <li class="opt"><label>Country 3</label></li>
                              <li class="opt"><label>Country 4</label></li>
                              <li class="opt"><label>Country 5</label></li>
                              <li class="opt"><label>Country 6</label></li>
                            </ul>
                          </div>
                        </div>

                        <div class="input-placeholder in-select">Country</div>
                      </div>
                    </div>
                    <div class="col-sm-6">

                      <div class="input-field-wrapp">
                        <div class="SumoSelect sumo_state" tabindex="0" role="button" aria-expanded="false"><select name="state" class="SelectBox SumoUnder" tabindex="-1">
                            <option value="State">State</option>
                            <option value="1">State 1</option>
                            <option value="2">State 2</option>
                            <option value="2">State 3</option>
                            <option value="2">State 4</option>
                            <option value="2">State 5</option>
                          </select>
                          <p class="CaptionCont SelectBox SelectBox" title=" State"><span> State</span><label><i></i></label></p>
                          <div class="optWrapper">
                            <ul class="options">
                              <li class="opt selected"><label>State</label></li>
                              <li class="opt"><label>State 1</label></li>
                              <li class="opt"><label>State 2</label></li>
                              <li class="opt"><label>State 3</label></li>
                              <li class="opt"><label>State 4</label></li>
                              <li class="opt"><label>State 5</label></li>
                            </ul>
                          </div>
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