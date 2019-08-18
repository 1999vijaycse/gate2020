<!-- Section Notice Start -->
<section class="bg-secondary text-center p-5 responsive" id="notice" >
    <div class="container-fluid text-white">
        <h1 class="text-capitalize"> Important Notice</h1>
        <hr class="w-50 mx-auto">
        <?php
        include 'notice_show.php';
        ?>
    </div>
    <?php
    if ($_SESSION['role'] === "Gate2020 Coordinator") {
        ?>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#notice_upload_Modal">
            <i class="fa fa-file"></i>Upload New Notice !
        </button>

        <?php
        include 'notice_upload_page.php';
    }
    ?>

</section>
<!-- Section Notice End -->

<!-- Section About Us  Start -->
<section class="bg-info text-white p-5 responsive" id="about" >
    <div class="container-fluid">
        <h1 class="text-center text-capitalize"> About Us</h1>
        <hr class="w-50 mx-auto">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-12 ">
                <img src="image/vijay.jpg" class="img-fluid rounded-circle" width="250" height="300">
            </div>
            <div class=" col-lg-6 col-md-6 col-12 pt-5 pb-5">
                <h1>"Welcome To GATE 2020!"</h1>
            </div>
        </div>
    </div>
</section>
<!-- Section About Us End -->
<?php
if (!isset($_SESSION['name'])) {
    ?>
    <!-- Section Join Us Start -->
    <section class="bg-dark text-center p-5 responsive" id="join">
        <div class="container-fluid  text-white">
            <h1 class="text-capitalize">Join Us</h1>
            <hr class="w-50 mx-auto">
            <div class="row">
                <div class="col">
                    <h2 class="text-capitalize pt-2">Hello everyone!</h2>
                    <p>Please Join us and get notification about upcoming events or notice on your registered E-mail Id.</p>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#joinModal">
                        Join Now !
                    </button>
                </div>
            </div>
        </div>
        <?php
        include 'student_registration_page.php';
        ?>
    </section>

    <!-- Section Join Us End -->

    <!-- Section contact Us Start -->
    <section class="bg-info text-center p-5 responsive" id="contact">
        <div class="container-fluid  text-white">
            <h1 class="text-capitalize">Contact Us</h1>
            <hr class="w-50 mx-auto">
            <div class="row">
                <div class="col">
                    <h2 class="text-capitalize pt-2"></h2>
                    <p>Have you any problem occurred during registration or login process?</p>
                    <p>Please Contact us.</p>
                    <!-- Button to Open the Modal -->
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#contactModal">
                        Contact Now !
                    </button>
                </div>
            </div>
        </div>
        <?php
        include 'contact_page.php';
        ?>
    </section>
    <!-- Section contact Us End -->

    <!-- Section Feedback Us Start -->
    <?php
} else {
    ?>
    <section class="bg-dark text-center p-5 responsive" id="feedback">
        <div class="container-fluid  text-white">
            <h1 class="text-capitalize">Feedback Us</h1>
            <hr class="w-50 mx-auto">
            <div class="row">
                <div class="col">
                    <h2 class="text-capitalize pt-2">Hello <?php echo $_SESSION['name']; ?></h2>
                    <p>Have you any query, problem or suggestion related to this website?</p>
                    <p>Please feedback us.</p>
                    <!-- Button to Open the Modal -->
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#feedbackModal">
                        Feedback Now !
                    </button>
                </div>
            </div>
        </div>
        <?php
        include 'feedback_page.php';
        ?>
    </section>
        <?php
    }
    ?>
    <!-- Section Feedback Us End -->

