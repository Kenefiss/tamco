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
                <div class="empty-block" style="display:none;">
                  <div class="h2 title dark-blue text-cap">No project saved yet</div>
                  <div class="h3 title grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida vel in.</div>
                  <a class="btn btn-2 btn-fourth" href="products.php"><b>Search Products</b></a>
                </div>
                <!-- empty block end -->

                <div class="project-block">
                  <div class="h2 title dark-blue text-cap">All Projects</div>

                  <!-- Filter mobile Btn -->
                  <div class="section ctg__mobile--section">
                    <div class="ctg__mobile--block">
                      <div class="container">
                        <div class="ctg__mobile--btn">
                          <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 12L1.5 12" stroke="#193768" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M23.5 12L17.5 12" stroke="#193768" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.5 20.3076L1.5 20.3076" stroke="#193768" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M23.5 20.3076L7.5 20.3076" stroke="#193768" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.5 23.0765L7.5 17.5381" stroke="#193768" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.5 3.69189L1.5 3.69189" stroke="#193768" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M23.5 3.69189L11.5 3.69189" stroke="#193768" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.5 0.922852L11.5 6.46131" stroke="#193768" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5 14.7689L17.5 9.23047" stroke="#193768" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <b>Show Filter</b>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="filter-block category-section">
                    <div class="ctg__menu--overlay d-xl-none"></div>
                    <div class="ctg__menu--wrap">
                      <div class="btn-close type-2 d-xl-none"><b>Close</b></div>
                      <div class="calendar-wrapp">
                        <div class="calendar-item">
                          <div class="input-caption">From</div>
                          <div class="input-field-wrapp">
                            <input class="input calendar" type="text" placeholder="Any Date" name="from">
                            <img src="img/icons/calendar-icon.svg" alt="">
                          </div>
                        </div>
                        <div class="calendar-item">
                          <div class="input-caption">To</div>
                          <div class="input-field-wrapp">
                            <input class="input calendar" type="text" placeholder="Any Date" name="to">
                            <img src="img/icons/calendar-icon.svg" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="sort">
                        <div class="input-caption">Sort by</div>
                        <select name="sort" class="SelectBox">
                          <option>Date</option>
                          <option value="1">Created</option>
                          <option value="2">Location</option>
                          <option value="3">Client</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row project-card-row">
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                      <a class="project-card" href="project-detail.php">
                        <div class="project-folder">
                          <img src="img/icons/project-folder.svg" alt="">
                          <div class="short-name">AP</div>
                        </div>
                        <div class="project-name">ABC Project</div>
                        <div class="project-info">
                          <p>Created:<span>Oct 17, 2022</span></p>
                          <p>Location:<span>Toronto</span></p>
                          <p>Client:<span>David Scherer</span></p>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                      <a class="project-card" href="project-detail.php">
                        <div class="project-folder">
                          <img src="img/icons/project-folder.svg" alt="">
                          <div class="short-name">X</div>
                        </div>
                        <div class="project-name">XYZ</div>
                        <div class="project-info">
                          <p>Created:<span>Oct 15, 2022</span></p>
                          <p>Location:<span>Toronto</span></p>
                          <p>Client:<span>David Scherer</span></p>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                      <a class="project-card" href="project-detail.php">
                        <div class="project-folder">
                          <img src="img/icons/project-folder.svg" alt="">
                          <div class="short-name">P3</div>
                        </div>
                        <div class="project-name">Project 3</div>
                        <div class="project-info">
                          <p>Created:<span>Oct 8, 2022</span></p>
                          <p>Location:<span>Toronto</span></p>
                          <p>Client:<span>Nelson Jimenez</span></p>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                      <a class="project-card" href="project-detail.php">
                        <div class="project-folder">
                          <img src="img/icons/project-folder.svg" alt="">
                          <div class="short-name">SP</div>
                        </div>
                        <div class="project-name">Sandras Project</div>
                        <div class="project-info">
                          <p>Created:<span>Sep 20, 2022</span></p>
                          <p>Location:<span>Toronto</span></p>
                          <p>Client:<span>David Scherer</span></p>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                      <a class="project-card" href="project-detail.php">
                        <div class="project-folder">
                          <img src="img/icons/project-folder.svg" alt="">
                          <div class="short-name">PH</div>
                        </div>
                        <div class="project-name">Project Name Goes Here </div>
                        <div class="project-info">
                          <p>Created:<span>Oct 17, 2022</span></p>
                          <p>Location:<span>Toronto</span></p>
                          <p>Client:<span>David Scherer</span></p>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                      <a class="project-card" href="project-detail.php">
                        <div class="project-folder">
                          <img src="img/icons/project-folder.svg" alt="">
                          <div class="short-name">AP</div>
                        </div>
                        <div class="project-name">Area Lighting Project</div>
                        <div class="project-info">
                          <p>Created:<span>Sep 12, 2022</span></p>
                          <p>Location:<span>Toronto</span></p>
                          <p>Client:<span>David Scherer</span></p>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                      <a class="project-card" href="project-detail.php">
                        <div class="project-folder">
                          <img src="img/icons/project-folder.svg" alt="">
                          <div class="short-name">P2</div>
                        </div>
                        <div class="project-name">Project 2</div>
                        <div class="project-info">
                          <p>Created:<span>Sep 10, 2022</span></p>
                          <p>Location:<span>Toronto</span></p>
                          <p>Client:<span>David Scherer</span></p>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                      <a class="project-card" href="project-detail.php">
                        <div class="project-folder">
                          <img src="img/icons/project-folder.svg" alt="">
                          <div class="short-name">P1</div>
                        </div>
                        <div class="project-name">Project 1</div>
                        <div class="project-info">
                          <p>Created:<span>Sep 4, 2022</span></p>
                          <p>Location:<span>Toronto</span></p>
                          <p>Client:<span>David Scherer</span></p>
                        </div>
                      </a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-10 col-xl-6 col-xxl-4">
                <div class="account-block">
                  <div class="h2 title dark-blue">Hello Robert C.</div>
                  <form class="account-form form-block loading-process">
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
                            <option value="1">Canada 1</option>
                            <option value="2">Canada 2</option>
                            <option value="3">Canada 3</option>
                            <option value="4">Canada 4</option>
                            <option value="5">Canada 5</option>
                            <option value="6">Canada 6</option>
                          </select>
                          <div class="input-placeholder in-select">Country</div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-field-wrapp">
                          <select name="province" class="SelectBox">
                            <option>Province</option>
                            <option value="1">Province 1</option>
                            <option value="2">Province 2</option>
                            <option value="2">Province 3</option>
                            <option value="2">Province 4</option>
                            <option value="2">Province 5</option>
                          </select>
                          <div class="input-placeholder in-select">Province</div>
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