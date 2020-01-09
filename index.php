<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo"hola mundo"; ?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <header class="header">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.html"><img src="assets/images/logo/logo-light.png" alt="Site Logo"></a>
                    </div>
                </div><!-- Header Logo End -->

                <!-- Offcanvas Toggle Start -->
                <div class="col-auto d-lg-none d-flex align-items-center">
                    <button class="offcanvas-toggle">
                        <span></span>
                    </button>
                </div>
                <!-- Offcanvas Toggle End -->

                <!-- Header Links Start -->
                <div class="header-links col-auto order-lg-3">
                    <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#login">Login</a>
                    <span>or</span>
                    <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#signup">Sign up</a>
                </div><!-- Header Links End -->

                <!-- Header Menu Start -->
                <nav id="main-menu" class="main-menu col-lg-auto order-lg-2">
                    <ul>
                        <li class="has-children"><a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="job-list.html">Jobs</a>
                            <ul class="sub-menu">
                                <li><a href="job-list.html">Job List</a></li>
                                <li><a href="job-single.html">Job Single</a></li>
                            </ul>
                        </li>
                        <li><a href="company-list.html">Company</a>
                            <ul class="sub-menu">
                                <li><a href="company-list.html">Company List</a></li>
                                <li><a href="company-single.html">Company Single</a></li>
                                <li><a href="create-job.html">Create Job</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="faq.html">FAQ'S</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </nav>
                <!-- Header Menu End -->

            </div>

        </div>
    </header>


    <!--Offcanvas Section Start-->
    <div id="offcanvas" class="offcanvas-section">
        <button class="offcanvas-close" data-target="#offcanvas">&times;</button>
        <div class="offcanvas-wrap">
            <div class="inner">

                <!-- Offcanvas user Start -->
                <div class="offcanvas-user">
                    <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#login">Login</a>
                    <span>or</span>
                    <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#signup">Sign up</a>
                </div>
                <!-- Offcanvas user End -->

                <!-- Offcanvas Menu Start -->
                <div class="offcanvas-menu">
                    <nav>
                        <ul>
                            <li class="has-children"><a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="job-list.html">Jobs</a>
                                <ul class="sub-menu">
                                    <li><a href="job-list.html">Job List</a></li>
                                    <li><a href="job-single.html">Job Single</a></li>
                                </ul>
                            </li>
                            <li><a href="company-list.html">Company</a>
                                <ul class="sub-menu">
                                    <li><a href="company-list.html">Company List</a></li>
                                    <li><a href="company-single.html">Company Single</a></li>
                                    <li><a href="create-job.html">Create Job</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="faq.html">FAQ'S</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Offcanvas Menu End -->

            </div>
        </div>
    </div>
    <!--Offcanvas Section End-->
    <!--OffCanvas Overlay-->
    <div class="offcanvas-overlay"></div>


    <div class="loginSignupModal modal fade" id="loginSignupModal" tabindex="-1" role="dialog" aria-labelledby="loginSignupModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <ul class="loginSignupNav nav">
                        <li><a class="nav-link active" data-toggle="tab" href="#login">Login</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#signup">Sign up</a></li>
                    </ul>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login">
                            <form>
                                <div class="row mb-n3">
                                    <div class="col-12 mb-3"><input type="email" placeholder="Email"></div>
                                    <div class="col-12 mb-3"><input type="password" placeholder="Password"></div>
                                    <div class="col-12 mb-3">
                                        <div class="row justify-content-between mb-n2">
                                            <div class="col-auto mb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="remember-me" id="remember-me" value="checkedValue" class="custom-control-input">
                                                    <label class="custom-control-label" for="remember-me">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2"><a href="#">Forgot Password?</a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Login"></div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col text-center">
                                        <p class="text-muted">Or Login With</p>
                                        <div class="login-reg-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="signup">
                            <form>
                                <div class="row mb-n3">
                                    <div class="col-12 mb-3"><input type="text" placeholder="Your Name"></div>
                                    <div class="col-12 mb-3"><input type="email" placeholder="Your Email Address"></div>
                                    <div class="col-12 mb-3"><input type="password" placeholder="Choose a Password"></div>
                                    <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Sign Up"></div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col text-center">
                                        <p class="text-muted">Or Register With</p>
                                        <div class="login-reg-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Section Start -->
    <div class="slider-section section">
        <div class="slide-item-2 bg-parallax" data-bg-image="assets/images/slider/slider-2.jpg" data-overlay="50">
            <div class="container">
                <div class="slider-content-2 text-left">
                    <h2 class="title">Find Your Next Job</h2>
                    <p>More then <span>1,524</span> job listed here.</p>
                </div>

                <!-- Job Search Form Start -->
                <div class="job-search-form-2">
                    <form action="#">
                        <div class="row no-gutters mb-n2 mb-sm-n0">

                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-2 mb-sm-0">
                                <input type="text" placeholder="e.g. web design">
                            </div>

                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-2 mb-sm-0">
                                <input type="text" placeholder="Location">
                            </div>

                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-2 mb-sm-0">
                                <select>
                                    <option value="1">Any category</option>
                                    <option value="2">Web Designer</option>
                                    <option value="3">Web Developer</option>
                                    <option value="4">Graphic Designer</option>
                                    <option value="5">App Developer</option>
                                    <option value="6">UI &amp; UX Expert</option>
                                </select>
                            </div>

                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-2 mb-sm-0">
                                <button class="btn btn-primary">Search</button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- Job Search Form End -->

            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Popular Categories Section Start -->
    <div class="section section-padding pb-0">
        <div class="container">
            <div class="section-title">
                <h3 class="title">Popular Categories</h3>
                <p>Here's the categories getting most view on the website.</p>
            </div>

            <!-- Category Slider Start -->
            <div class="job-category-slider row">

                <div class="col">
                    <a href="#" class="job-category badge-primary">
                        <div class="inner">
                            <i class="flaticon-development"></i>
                            <h6 class="title">Development</h6>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="job-category badge-secondary">
                        <div class="inner">
                            <i class="flaticon-design"></i>
                            <h6 class="title">Design</h6>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="job-category badge-success">
                        <div class="inner">
                            <i class="flaticon-multimedia"></i>
                            <h6 class="title">Multimedia</h6>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="job-category badge-danger">
                        <div class="inner">
                            <i class="flaticon-finance"></i>
                            <h6 class="title">Finance</h6>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="job-category badge-warning">
                        <div class="inner">
                            <i class="flaticon-networking"></i>
                            <h6 class="title">Networking</h6>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="job-category badge-info">
                        <div class="inner">
                            <i class="flaticon-photography"></i>
                            <h6 class="title">Photography</h6>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="job-category badge-primary">
                        <div class="inner">
                            <i class="flaticon-education"></i>
                            <h6 class="title">Education</h6>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="job-category badge-secondary">
                        <div class="inner">
                            <i class="flaticon-research"></i>
                            <h6 class="title">Research</h6>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="job-category badge-success">
                        <div class="inner">
                            <i class="flaticon-medical"></i>
                            <h6 class="title">Medical</h6>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="job-category badge-danger">
                        <div class="inner">
                            <i class="flaticon-government"></i>
                            <h6 class="title">Government</h6>
                        </div>
                    </a>
                </div>

            </div>
            <!-- Category Slider End -->

        </div>
    </div>
    <!-- Popular Categories Section End -->

    <!-- Recent Jobs Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Latest Jobs</h2>
                <p>Here's the most recent job listed on the website.</p>
            </div>

            <!-- Job List Wrap Start -->
            <div class="job-list-wrap">

                <!-- Job List Start -->
                <a href="job-single.html" class="job-list">
                    <div class="company-logo col-auto">
                        <img src="assets/images/companies/company-1.png" alt="Company Logo">
                    </div>
                    <div class="salary-type col-auto order-sm-3">
                        <span class="salary-range">$5000 - $8000</span>
                        <span class="badge badge-success">Full Time</span>
                    </div>
                    <div class="content col">
                        <h6 class="title">Full Stack Backend Developer</h6>
                        <ul class="meta">
                            <li><strong class="text-primary">Envato</strong></li>
                            <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                        </ul>
                    </div>
                </a>
                <!-- Job List Start -->

                <!-- Job List Start -->
                <a href="job-single.html" class="job-list">
                    <div class="company-logo col-auto">
                        <img src="assets/images/companies/company-2.png" alt="Company Logo">
                    </div>
                    <div class="salary-type col-auto order-sm-3">
                        <span class="salary-range">$7000 - $13000</span>
                        <span class="badge badge-warning">Part Time</span>
                    </div>
                    <div class="content col">
                        <h6 class="title">Product UI & UX Expert</h6>
                        <ul class="meta">
                            <li><strong class="text-primary">Astha</strong></li>
                            <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                        </ul>
                    </div>
                </a>
                <!-- Job List Start -->

                <!-- Job List Start -->
                <a href="job-single.html" class="job-list">
                    <div class="company-logo col-auto">
                        <img src="assets/images/companies/company-3.png" alt="Company Logo">
                    </div>
                    <div class="salary-type col-auto order-sm-3">
                        <span class="salary-range">$5000 - $8000</span>
                        <span class="badge badge-danger">Freelance</span>
                    </div>
                    <div class="content col">
                        <h6 class="title">Full Stack Backend Developer</h6>
                        <ul class="meta">
                            <li><strong class="text-primary">Github</strong></li>
                            <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                        </ul>
                    </div>
                </a>
                <!-- Job List Start -->

                <!-- Job List Start -->
                <a href="job-single.html" class="job-list">
                    <div class="company-logo col-auto">
                        <img src="assets/images/companies/company-4.png" alt="Company Logo">
                    </div>
                    <div class="salary-type col-auto order-sm-3">
                        <span class="salary-range">$7000 - $13000</span>
                        <span class="badge badge-success">Full Time</span>
                    </div>
                    <div class="content col">
                        <h6 class="title">Product UI & UX Expert</h6>
                        <ul class="meta">
                            <li><strong class="text-primary">Medicore</strong></li>
                            <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                        </ul>
                    </div>
                </a>
                <!-- Job List Start -->

                <!-- Job List Start -->
                <a href="job-single.html" class="job-list">
                    <div class="company-logo col-auto">
                        <img src="assets/images/companies/company-5.png" alt="Company Logo">
                    </div>
                    <div class="salary-type col-auto order-sm-3">
                        <span class="salary-range">$5000 - $8000</span>
                        <span class="badge badge-success">Full Time</span>
                    </div>
                    <div class="content col">
                        <h6 class="title">Full Stack Backend Developer</h6>
                        <ul class="meta">
                            <li><strong class="text-primary">GreenSoul</strong></li>
                            <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                        </ul>
                    </div>
                </a>
                <!-- Job List Start -->

            </div>
            <!-- Job List Wrap Start -->

            <div class="text-center mt-4 mt-lg-5">
                <a href="job-list.html" class="btn btn-primary">View All Jobs</a>
            </div>

        </div>
    </div>
    <!-- Recent Jobs End -->

    <!-- Funfact Section Start -->
    <div class="section section-padding bg-parallax" data-bg-image="assets/images/bg/bg-1.jpg" data-overlay="50">
        <div class="container">
            <div class="funfact-wrap row">

                <!-- Funfact Start -->
                <div class="funfact col-md-3 col-sm-6 col-12">
                    <span class="counter">1354</span>
                    <span class="title">Job Post</span>
                </div>
                <!-- Funfact Start -->

                <!-- Funfact Start -->
                <div class="funfact col-md-3 col-sm-6 col-12">
                    <span class="counter">1741</span>
                    <span class="title">Members</span>
                </div>
                <!-- Funfact Start -->

                <!-- Funfact Start -->
                <div class="funfact col-md-3 col-sm-6 col-12">
                    <span class="counter">1204</span>
                    <span class="title">Resume</span>
                </div>
                <!-- Funfact Start -->

                <!-- Funfact Start -->
                <div class="funfact col-md-3 col-sm-6 col-12">
                    <span class="counter">142</span>
                    <span class="title">Company</span>
                </div>
                <!-- Funfact Start -->

            </div>
        </div>
    </div>
    <!-- Funfact Section End -->

    <!-- App Section Start -->
    <div class="section section-padding pb-0">
        <div class="container">
            <div class="row align-items-center">

                <!-- App Content Start -->
                <div class="col-md-8 col-12">
                    <div class="app-content">
                        <h2 class="title fw-700">Accesa donde quieras  <br>CONECTA OAXACA App</h2>
                            <p class="lead">Unete a Nosotro. Ahora puedes encontrar cursos y apoyos que coincidan con tus expectativas.</p>
                            <div class="d-flex flex-wrap m-n2">
                                <a href="#" class="btn btn-primary m-2"><i class="fa fa-android mr-2"></i> Google Play</a>
                                <a href="#" class="btn btn-primary m-2"><i class="fa fa-apple mr-2"></i> App Store</a>
                            </div>
                   
                    </div>
                </div>
                <!-- App Content End -->

                <!-- App Image Start -->
                <div class="col-md-4 col-12 align-self-end">
                    <div class="app-image">
                        <img src="assets/images/app/app.png" alt="App Image">
                    </div>
                </div>
                <!-- App Image End -->

            </div>
        </div>
    </div>
    <!-- App Section End -->

    <!-- Pricing Section Start -->
    <div class="section section-padding bg-gray">
        <div class="container">

            <div class="section-title">
                <h2 class="title">Pricing</h2>
                <p>Choose a plan that fits your needs</p>
            </div>

            <!-- Pricing Wrap Start -->
            <div class="pricing-wrap row">

                <!-- Pricing Start -->
                <div class="col-lg-4 col-md-6 col-sm-8 col-12 mx-auto">
                    <div class="pricing">
                        <div class="inner">

                            <div class="head">
                                <span class="title">Basic</span>
                                <h2 class="price"><sup>$</sup>0<sup>.00</sup></h2>
                                <span class="duration">Per Month</span>
                            </div>

                            <div class="body">
                                <ul>
                                    <li>1 job posting</li>
                                    <li>0 featured job</li>
                                    <li>Job displayed for 15 days</li>
                                    <li>Email Support</li>
                                </ul>
                            </div>

                            <div class="foot">
                                <button class="btn">Buy Now</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Pricing End -->

                <!-- Pricing Start -->
                <div class="col-lg-4 col-md-6 col-sm-8 col-12 mx-auto">
                    <div class="pricing">
                        <div class="inner">

                            <div class="head">
                                <span class="title">Standard</span>
                                <h2 class="price"><sup>$</sup>10<sup>.99</sup></h2>
                                <span class="duration">Per Month</span>
                            </div>

                            <div class="body">
                                <ul>
                                    <li>5 job posting</li>
                                    <li>1 featured job</li>
                                    <li>Job displayed for 30 days</li>
                                    <li>Premium Support 24/7</li>
                                </ul>
                            </div>

                            <div class="foot">
                                <button class="btn">Buy Now</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Pricing End -->

                <!-- Pricing Start -->
                <div class="col-lg-4 col-md-6 col-sm-8 col-12 mx-auto">
                    <div class="pricing">
                        <div class="inner">

                            <div class="head">
                                <span class="title">Professional</span>
                                <h2 class="price"><sup>$</sup>25<sup>.99</sup></h2>
                                <span class="duration">Per Month</span>
                            </div>

                            <div class="body">
                                <ul>
                                    <li>15 job posting</li>
                                    <li>4 featured job</li>
                                    <li>Job displayed for 60 days</li>
                                    <li>Premium Support 24/7</li>
                                </ul>
                            </div>

                            <div class="foot">
                                <button class="btn">Buy Now</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Pricing End -->

            </div>
            <!-- Pricing Wrap End -->

        </div>
    </div>
    <!-- Pricing Section End -->

    <!-- Blog Section Start -->
    <div class="section section-padding">
        <div class="container">

            <div class="section-title">
                <h3 class="title">Our Blog</h3>
                <p>Get more tips & tricks from out blog post.</p>
            </div>

            <!-- Blog Slider Start -->
            <div class="blog-slider row">

                <!-- Blog Start -->
                <div class="col">
                    <div class="blog">
                        <div class="media">
                            <a href="blog-single.html"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="blog-single.html">The Top 5 Job Interview Questions For IT Professional</a></h6>
                            <ul class="meta">
                                <li>Posted on 25 Jan, 2019</li>
                                <li><a href="#">3 Comments</a></li>
                            </ul>
                            <div class="desc">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                            </div>
                            <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Blog End -->

                <!-- Blog Start -->
                <div class="col">
                    <div class="blog">
                        <div class="media">
                            <a href="blog-single.html"><img src="assets/images/blog/blog-2.jpg" alt=""></a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="blog-single.html">7 Careers To Consider If You Love Traveling</a></h6>
                            <ul class="meta">
                                <li>Posted on 25 Jan, 2019</li>
                                <li><a href="#">3 Comments</a></li>
                            </ul>
                            <div class="desc">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                            </div>
                            <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Blog End -->

                <!-- Blog Start -->
                <div class="col">
                    <div class="blog">
                        <div class="media">
                            <a href="blog-single.html"><img src="assets/images/blog/blog-3.jpg" alt=""></a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="blog-single.html">When the Perfect Candidate Turns Out To Be an Imperfect Fit</a></h6>
                            <ul class="meta">
                                <li>Posted on 25 Jan, 2019</li>
                                <li><a href="#">3 Comments</a></li>
                            </ul>
                            <div class="desc">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                            </div>
                            <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Blog End -->

            </div>
            <!-- Blog Slider End -->

        </div>
    </div>
    <!-- Blog Section End -->

    <!-- Footer Top Section Start -->
    <div class="footer-top-section section">
        <div class="container">
            <div class="footer-widget-wrap row">

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-widget">
                        <div class="footer-widget-about">
                            <img src="assets/images/logo/logo-light.png" alt="">
                            <p>Lorem ipsum dolor sit amet consecte tur adipisicing elit. Maiores officiis quod quo id inventore quis.</p>

                            <ul class="footer-socail">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h6 class="title">Quick links</h6>
                        <div class="footer-widget-link">
                            <ul>
                                <li><a href="#">Post New Job</a></li>
                                <li><a href="#">Jobs List</a></li>
                                <li><a href="#">Candidate List</a></li>
                                <li><a href="#">Employer List</a></li>
                                <li><a href="#">Browse Categories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h6 class="title">Tranding Jobs</h6>
                        <div class="footer-widget-link">
                            <ul>
                                <li><a href="#">Designer</a></li>
                                <li><a href="#">UI & UX Expert</a></li>
                                <li><a href="#">Develpoer</a></li>
                                <li><a href="#">iOS developer</a></li>
                                <li><a href="#">Front-End developer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h6 class="title">Newsletter</h6>
                        <div class="footer-widget-newsletter">
                            <p>Subscribe to Lawson to get all latest Job, Resume, Company Listing & Blog post to stay update.</p>
                            <form id="mc-form" class="mc-form">
                                <input id="mc-email" autocomplete="off" type="email" placeholder="Enter your e-mail address">
                                <button id="mc-submit" class="btn"><i class="fa fa-envelope-o"></i></button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
                <!-- Footer Widget End -->

            </div>
        </div>
    </div>
    <!-- Footer Top Section End -->

    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-section section">
        <div class="container">
            <div class="row">

                <!-- Footer Copyright Start -->
                <div class="col-12">
                    <p class="footer-copyright text-center">Copyright &copy; 2019 <a href="https://hasthemes.com/">Hasthemes</a> All Rights Reserved.</p>
                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>
    </div>
    <!-- Footer Bottom Section End -->

    <!-- JS
============================================ -->

    <!-- Google Map API JS -->
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.min.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/jquery.parallax.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/jquery.scrollUp.min.js"></script>

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>