<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/_top.php';?>
    <title>Tamlite || Account Forgot Password</title>
</head>

<body>
    <div id="loader-wrapper"></div>
    <div id="content-block">
        <?php include 'inc/_header.php';?>

        <main>
            <!-- Account Forgot Password -->
            <div class="section account-sec" style="background-image: url(./img/login-bg.jpg);">
                <div class="container">
                    <div class="account-inner">
                        <div class="account-wrapper size-2 pb-2">
                            <div class="block-title">
                                <h1 class="h1 title fw-400 dark-blue text-upper text-center">Forgot Password</h1>
                                <div class="text text-xl dark-blue text-center">If you have an email on file with us, we'll send you a link to reset your password.</div>
                            </div>

                            <form class="form-wrapp size-2">
                                <!-- <div class="error-message d-none">Incorrect access credentials</div> -->

                                <div class="form-block">
                                    <div class="input-field-wrapp">
                                        <input class="input" type="email" name="email" required>
                                        <div class="input-placeholder">Email</div>
                                    </div>
                                </div>

                                <div class="form-block text-center">
                                    <button class="btn btn-2 btn-fourth btn-submit open-popup" data-rel="reset-link">
                                        <b>Send Reset Link</b>
                                    </button>
                                </div>

                                <div class="separator bg-grey-500"></div>
                            </form>

                            <div class="text dark-blue text-center">
                                Don’t have an account?
                                <a href="register.php">Create an Account</a>
                                or
                                <a href="login.php">Log In</a>
                                if you already have an account.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include 'inc/_footer.php';?>
    </div>


    <div class="popup-wrapper" >
        <?php include 'inc/_popups.php';?>
    </div>

    <?php include 'inc/_bottom.php';?>
</body>

</html>