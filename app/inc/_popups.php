<div class="bg-layer"></div>

<!-- Thank popup  -->
<div class="popup-content" data-rel="1">
    <div class="layer-close"></div>

    <div class="popup-container">
        <div class="popup-align">
            <div class="popup-title h3"><b>Дякуємо</b> за Ваше повідомлення</div>
            <div class="text">Наші менеджери зв’яжуться з Вами найближчим часом</div>
        </div>
        <button class="btn-close close-popup"></button>
    </div>
</div>

<!-- Thank U Popup after Registration  -->
<div class="popup-content" data-rel="reg-popup">
    <div class="layer-close"></div>
    <div class="popup-container size-4 type-2">
        <div class="popup-align type-2 text-center">

            <div class="icon size-1 mb-30">
                <img src="img/icons/mail-1.svg" alt="">
            </div>

            <div class="h3 title fw-400 dark-blue">Thank you for registering!</div>

            <div class="text grey-900-light">
                <p>We have sent you a confirmation email with instructions to verify your account.</p>
                <p>Please check your inbox</p>
            </div>

        </div>
        <button class="btn-close type-3 close-popup"></button>
    </div>
</div>

<!-- Reset Link After Change Password  -->
<div class="popup-content" data-rel="reset-link">
    <div class="layer-close"></div>
    <div class="popup-container size-4 type-2">
        <div class="popup-align type-2 text-center">

            <div class="icon size-1 mb-30">
                <img src="img/icons/mail-1.svg" alt="">
            </div>

            <div class="h3 title fw-400 dark-blue">Reset Link Sent</div>

            <div class="text grey-900-light">
                Please check your inbox and open the link we sent to continue.
            </div>

        </div>
        <button class="btn-close type-3 close-popup"></button>
    </div>
</div>

<!-- Remove Product  -->
<div class="popup-content" data-rel="remove-prod">
    <div class="layer-close"></div>
    <div class="popup-container size-3 type-2">
        <div class="popup-align type-3 text-left">

            <div class="h3 title fw-400 dark-blue">Remove Product</div>

            <div class="text text-xl dark-blue">
                Are you sure you want to remove this product from the basket?
            </div>

            <div class="text-center">
                <div class="btn btn-2 btn-primary">Remove Product</div>
            </div>

        </div>
        <button class="btn-close type-3 close-popup"></button>
    </div>
</div>

<!-- Login to Save  -->
<div class="popup-content" data-rel="login-to-save">
    <div class="layer-close"></div>
    <div class="popup-container size-4 type-2">
        <div class="popup-align type-4 text-center">

            <div class="h2 title fw-400 dark-blue text-upper mb-25">Login</div>

            <form class="form-wrapp">
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
        <button class="btn-close type-3 close-popup"></button>
    </div>
</div>

<!-- Save to a Project  -->
<div class="popup-content" data-rel="save-to-project">
    <div class="layer-close"></div>
    <div class="popup-container size-3 type-2">
        <div class="popup-align type-6 text-left">

            <div class="h3 title fw-500 dark-blue text-cap mb-25">Save to a project</div>

            <div class="project-list-wrapp">
                <div class="caption grey-700">All Projects</div>

                <ul class="project-list">
                    <li>
                        <div class="icon">
                            <img src="img/icons/folder.svg" alt="">
                            <p>AP</p>
                        </div>
                        <span>ABC Project</span>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="img/icons/folder.svg" alt="">
                            <p>X</p>
                        </div>
                        <span>XYZ</span>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="img/icons/folder.svg" alt="">
                            <p>P3</p>
                        </div>
                        <span>Project 3</span>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="img/icons/folder.svg" alt="">
                            <p>SP</p>
                        </div>
                        <span>Sandras Project</span>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="img/icons/folder.svg" alt="">
                            <p>PNGH</p>
                        </div>
                        <span>Project Name Goes Here </span>
                    </li>
                </ul>
            </div>

            <div class="project-list-btn">
                <div class="btn-link btn-link-thirdy with-icon">
                    <div class="icon">
                        <img src="img/icons/create_new_folder.svg" alt="">
                    </div>
                    <span>Create and save in a new project</span>
                </div>
            </div>
        </div>
        <button class="btn-close type-3 close-popup"></button>
    </div>
</div>

<!-- Create a Project  -->
<div class="popup-content" data-rel="create-project">
    <div class="layer-close"></div>
    <div class="popup-container size-4 type-2">
        <div class="popup-align type-3 text-left">

            <div class="h3 title fw-400 dark-blue mb-35">Create a Project</div>

            <form class="form-wrapp">
                <div class="form-block">
                    <div class="input-field-wrapp">
                        <input class="input" type="text" name="client-name" required>
                        <div class="input-placeholder">Client Name</div>
                    </div>

                    <div class="input-field-wrapp">
                        <input class="input" type="text" name="project-name" required>
                        <div class="input-placeholder">Project Name</div>
                    </div>

                    <div class="input-field-wrapp">
                        <input class="input" type="text" name="location" required>
                        <div class="input-placeholder">Location</div>
                    </div>
                </div>

                <div class="form-block text-center">
                    <button class="btn btn-2 btn-fourth btn-submit">
                        <b>Create Project</b>
                    </button>
                </div>
            </form>
        </div>
        <button class="btn-close type-3 close-popup"></button>
    </div>
</div>

<!-- Project Added Successfully  -->
<div class="popup-content" data-rel="create-project-success">
    <div class="layer-close"></div>
    <div class="popup-container size-5 type-2">
        <div class="popup-align type-5 text-center">

            <div class="icon size-2 mb-15">
                <img src="img/icons/check-in-folder.svg" alt="">
            </div>

            <div class="h3 title fw-400 dark-blue mb-40">Product(s) saved to your project successfully</div>

            <form class="form-wrapp">
                <div class="form-block">
                    <div class="checkbox-entry-wrap">
                        <label class="checkbox-entry">
                            <input type="checkbox" name="ch1" checked>
                            <span>Empty My Project Basket</span>
                        </label>
                    </div>
                </div>

                <div class="form-block text-center">
                    <button class="btn btn-2 btn-fourth">
                        <b>View Project</b>
                    </button>
                </div>
            </form>
        </div>
        <button class="btn-close type-3 close-popup"></button>
    </div>
</div>

<!-- Edit a Project  -->
<div class="popup-content" data-rel="edit-project">
    <div class="layer-close"></div>
    <div class="popup-container size-4 type-2">
        <div class="popup-align type-3 text-left">

            <div class="h3 title fw-400 dark-blue mb-35">Edit Project</div>

            <form class="form-wrapp">
                <div class="form-block">
                    <div class="input-field-wrapp">
                        <input class="input" type="text" name="client-name" required>
                        <div class="input-placeholder">Client Name</div>
                    </div>

                    <div class="input-field-wrapp">
                        <input class="input" type="text" name="project-name" required>
                        <div class="input-placeholder">Project Name</div>
                    </div>

                    <div class="input-field-wrapp">
                        <input class="input" type="text" name="location" required>
                        <div class="input-placeholder">Location</div>
                    </div>
                </div>

                <div class="form-block text-center">
                    <button class="btn btn-2 btn-fourth btn-submit">
                        <b>Save Information</b>
                    </button>
                </div>
            </form>
        </div>
        <button class="btn-close type-3 close-popup"></button>
    </div>
</div>

<!-- Delete Project  -->
<div class="popup-content" data-rel="delete-project">
    <div class="layer-close"></div>
    <div class="popup-container size-3 type-2">
        <div class="popup-align type-3 text-left">

            <div class="h3 title fw-400 dark-blue">Delete Project</div>

            <div class="text text-xl dark-blue">
                Are you sure you want to delete this project? All saved products will be lost.
            </div>

            <div class="text-center">
                <div class="btn btn-2 btn-primary">Delete Project</div>
            </div>

        </div>
        <button class="btn-close type-3 close-popup"></button>
    </div>
</div>

<!-- Generate ZIP Project Specs  -->
<div class="popup-content" data-rel="project-specs">
    <div class="layer-close"></div>
    <div class="popup-container size-4 type-2">
        <div class="popup-align type-2 text-center">

            <div class="icon size-1 mb-30">
                <img src="img/icons/mail-1.svg" alt="">
            </div>

            <div class="h3 title fw-400 dark-blue">Project Specs Link Sent</div>

            <div class="text grey-900-light">
                Please check your inbox and open the link we sent to download ZIP export of your project specs.
            </div>

        </div>
        <button class="btn-close type-3 close-popup"></button>
    </div>
</div>