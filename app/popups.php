<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/_top.php';?>
    <title>Tamlite || Popups</title>
</head>

<body>
    <div id="loader-wrapper"></div>
    <div id="content-block">
        <?php include 'inc/_header.php';?>

        <main>
            <!-- Popups -->
            <div class="section" style="padding: 100px 15px;">
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <div class="btn btn-2 btn-primary open-popup" data-rel="reg-popup">Thank you for registering</div>
                            <div class="btn btn-2 btn-primary open-popup" data-rel="reset-link">Send Reset Link</div>
                            <div class="btn btn-2 btn-primary open-popup" data-rel="remove-prod">Remove Product</div>
                            <div class="btn btn-2 btn-primary open-popup" data-rel="login-to-save">Login to Save</div>
                            <div class="btn btn-2 btn-primary open-popup" data-rel="save-to-project">Save to Project</div>
                            <div class="btn btn-2 btn-primary open-popup" data-rel="create-project">Create Project</div>
                            <div class="btn btn-2 btn-primary open-popup" data-rel="create-project-success">Create Project Success</div>
                            <div class="btn btn-2 btn-primary open-popup" data-rel="edit-project">Edit Project</div>
                            <div class="btn btn-2 btn-primary open-popup" data-rel="delete-project">Delete Project</div>
                            <div class="btn btn-2 btn-primary open-popup" data-rel="project-specs">Project Specs Link Sent</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include 'inc/_footer.php';?>
    </div>


    <div class="popup-wrapper" id="popups">
        <?php include 'inc/_popups.php';?>
    </div>

    <?php include 'inc/_bottom.php';?>

</body>

</html>