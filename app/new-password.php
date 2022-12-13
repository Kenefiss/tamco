<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Tamlite || Account Create New Password</title>
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>
      <!-- Account Create New Password -->
      <div class="section account-sec" style="background-image: url(./img/login-bg.jpg);">
        <div class="container">
          <div class="account-inner">
            <div class="account-wrapper size-3 pb-3">
              <div class="block-title">
                <h1 class="h1 title fw-400 dark-blue text-upper text-center">New Password</h1>
              </div>

              <form class="form-wrapp size-1">
                <div class="error-message d-none">Incorrect access credentials</div>

                <div class="form-block">
                  <div class="input-field-wrapp">
                    <input class="input" type="password" name="new-password" required>
                    <div class="input-placeholder">Create Password</div>
                  </div>

                  <div class="input-field-wrapp">
                    <input class="input" type="password" name="confirm-password" required>
                    <div class="input-placeholder">Confirm Password</div>
                  </div>
                </div>

                <div class="form-block text-center">
                  <button class="btn btn-2 btn-fourth btn-submit" type="submit">
                    <b>Save Password</b>
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


  <div class="popup-wrapper"></div>

  <?php include 'inc/_bottom.php';?>
</body>

</html>