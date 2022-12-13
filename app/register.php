<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Tamlite || Account Register</title>
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>
      <!-- Account Register -->
      <div class="section account-sec" style="background-image: url(./img/login-bg.jpg);">
        <div class="container">
          <div class="account-inner">
            <div class="account-wrapper size-4 pb-4">
              <div class="block-title type-2">
                <h1 class="h1 title fw-400 dark-blue text-upper text-center">Create Account</h1>
                <div class="text text-xl dark-blue text-center">Sign up for free to gather products and other
                  resources to help plan your lighting projects</div>
              </div>

              <form class="form-wrapp size-3">
                <div class="error-message d-none">Incorrect access credentials</div>

                <div class="form-block">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="first_name" required>
                        <div class="input-placeholder">First Name</div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="last_name" required>
                        <div class="input-placeholder">Last Name</div>
                      </div>
                    </div>
                  </div>

                  <div class="input-field-wrapp">
                    <input class="input" type="email" name="email" required>
                    <div class="input-placeholder">Email Address</div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="phone" required>
                        <div class="input-placeholder">Phone</div>
                      </div>
                    </div>
                  </div>

                  <div class="input-field-wrapp">
                    <input class="input" type="text" name="company">
                    <div class="input-placeholder">Company Name <span>(Optional)</span></div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="new-password" required>
                        <div class="input-placeholder">Create Password</div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-field-wrapp">
                        <input class="input" type="text" name="confirm-password" required>
                        <div class="input-placeholder">Confirm Password</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-block text-center">
                  <button class="btn btn-2 btn-fourth btn-submit open-popup" data-rel="reg-popup" type="submit">
                    <b>Create Account</b>
                  </button>
                </div>
                <div class="separator bg-grey-500"></div>
              </form>

              <div class="text dark-blue text-center">
                Already have an account?
                <a href="login.php">Log In</a>
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