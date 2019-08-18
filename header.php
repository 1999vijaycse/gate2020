<!--Navigation Bar-->
<header>
    <nav class = "navbar  navbar-expand-lg navbar-expand-xs navbar-dark bg-dark responsive">

        <img class="img-fluid rounded-circle bg-light" src="image/bce_logo.gif" alt="logo" width="48" height="48">
        <p style="font-size: 3vh" class="text-white ml-1">BCE Bhagalpur</p>
        <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">
            <span class = "navbar-toggler-icon" style="font-size: 10px"></span>
        </button>

        <div class = "collapse navbar-collapse responsive" id = "navbarSupportedContent">
            <ul class = "navbar-nav ml-auto">
                <li class = "nav-item active">
                    <a class = "nav-link" href = "#"><h5>Home</h5> <span class = "sr-only">(current)</span></a>
                </li>
                <li class = "nav-item">
                    <a class = "nav-link" href = "#notice"><h5>Notice</h5></a>
                </li>
                <li class = "nav-item">
                    <a class = "nav-link" href = "#about"><h5>About Us</h5></a>
                </li>
                <!--<li class = "nav-item dropdown">
                    <a class = "nav-link dropdown-toggle" href = "#" id = "navbarDropdown" role = "button" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                        Classes
                    </a>
                    <div class = "dropdown-menu" aria-labelledby = "navbarDropdown">
                        <a class = "dropdown-item" href = "#">CSE</a>
                        <a class = "dropdown-item" href = "#">ECE</a>
                        <a class = "dropdown-item" href = "#">EE</a>
                        <a class = "dropdown-item" href = "#">CE</a>
                        <a class = "dropdown-item" href = "#">ME</a>
                    </div>
                </li>-->
                <?php
                if (!isset($_SESSION['roll_no'])) {
                    ?>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "#join"><h5>Join Us</h5></a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "#contact"><h5>Contact Us</h5></a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "#" data-toggle="modal" data-target="#loginModal"><h5>Log In</h5></a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li>
                        <a class = "nav-link" href = "#feedback"><h5>Feedback Us</h5></a>
                    </li>
                    <li>
                        <a class = "nav-link" href = "#" data-toggle="modal" data-target="#profileModal"><h5><i class="fa fa-user"></i></h5></a>
                    </li>
                    <?php
                }
                ?>
            </ul>

        </div>
    </nav>
    <?php
    include 'login_page.php';
    include 'profile.php';
    ?>
    <!-- Navigation Bar End-->

    <!-- Sliding image starts -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/bce.jpg" alt="bcebhagalpur" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Welcome To</h3>
                    <p>"Bhagalpur College of Engineering"</p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="image/gate.jpg" alt="gate" width="1100" height="500">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="image/gate2020.jpg" alt="gate2020" width="1100" height="500">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="image/gate_academy.jpg" alt="gateacademy" width="1100" height="500">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>   
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- sliding image End -->
</header>