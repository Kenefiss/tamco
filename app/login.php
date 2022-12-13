<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Tamlite || Account Login</title>
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>
      <!-- Account Login -->
      <div class="section account-sec" style="background-image: url(./img/login-bg.jpg);">
        <div class="container">
          <div class="account-inner">
            <div class="account-wrapper size-1 pb-1">
              <div class="block-title">
                <h1 class="h1 title fw-400 dark-blue text-upper text-center">Login</h1>
              </div>

              <form class="form-wrapp size-1">
                <div class="error-message d-none">Incorrect access credentials</div>

                <div class="form-block">
                  <div class="input-field-wrapp">
                    <input class="input" type="email" name="email" required>
                    <div class="input-placeholder">Email</div>
                  </div>

                  <div class="input-field-wrapp">
                    <input class="input" type="password" name="password" required>
                    <div class="input-placeholder">Password</div>
                  </div>

                  <div class="d-flex justify-content-end align-items-center text-right">
                    <a class="btn-link btn-link-thirdy" href="forgot-password.php">
                      Forgot Password?
                    </a>
                  </div>
                </div>

                <div class="form-block text-center">
                  <button class="btn btn-2 btn-fourth btn-submit">
                    <b>Log In</b>
                  </button>
                </div>

                <div class="separator bg-grey-500"></div>
              </form>

              <div class="text dark-blue text-center">
                Don’t have an account?
                <a href="register.php">Create an Account</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <div class="popup-wrapper"></div>

  <?php include 'inc/_bottom.php';?>
</body>

</html>