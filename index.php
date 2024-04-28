<?php


session_start();


require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Home</title>

<head>
    <?php

    include 'php/head.php'

    ?>

<style>
    #statistics {
        background-color: #f4f4f4; /* Set a background color */
        padding: 40px 0; /* Add padding to the section */
    }

    .latest-job h1 {
        color: #333; /* Set the heading color */
        font-size: 36px; /* Adjust the heading font size */
        margin-bottom: 20px; /* Add margin to the heading */
    }

    .small-box {
        margin-bottom: 20px; /* Add margin to each small box */
        border-radius: 5px; /* Add border radius for a rounded appearance */
        overflow: hidden; /* Hide overflowing content */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
    }

    .small-box .inner {
        padding: 10px; /* Add padding to the inner content */
    }

    .small-box h3 {
        font-size: 24px; /* Adjust the number font size */
        margin: 0; /* Remove default margin for the number */
    }

    .small-box p {
        margin: 0; /* Remove default margin for the description */
    }

    .small-box .icon {
        font-size: 48px; /* Adjust the icon font size */
        color: #fff; /* Set the icon color */
        text-align: right; /* Align the icon to the right */
        padding: 10px; /* Add padding to the icon */
        background: rgba(0, 0, 0, 0.2); /* Add a semi-transparent background to the icon area */
    }

    .bg-aqua {
        background-color: #00c0ef; /* Set the background color for the first box */
    }

    .bg-green {
        background-color: #00a65a; /* Set the background color for the second box */
    }

    .bg-yellow {
        background-color: #f39c12; /* Set the background color for the third box */
    }

    .bg-red {
        background-color: #d9534f; /* Set the background color for the fourth box */
    }
    body {
  background-color: #98F4CA;
}
</style>

</head>

<body>

    <!-- header starts -->
    <?php

    include 'php/header.php'

    ?>
    <!-- header ends -->

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <img src="assets/img/hero-carousel/hero-carousel-1.svg" class="img-fluid animated">
            <h2  style="font-weight:bold;">Welcome to <span>Placement Cell</span></h2>
            <p>We Will Support You In Your Entire Placement Journey.</p>
            <div class="d-flex">
                <a href="login.php" class="btn-get-started scrollto">Get Started</a>

            </div>
        </div>
    </section>

    <main id="main" >

        

        </div>

        </div>
        </section>




        <section id="cta" class="cta"  >
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                    <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>Placement <em>Portal</em> </h3>
                        <p>The Placement Cell plays a crucial role in locating job
                            opportunities for under graduates and post graduates passing out from the college by
                            keeping in touch with reputed firms and industrial establishments.
                            <br>The placement cell operates round the year to facilitate contacts between companies
                            and graduates. The number of students placed through the campus interviews is
                            continuously rising.
                        </p>
                        <a class="cta-btn align-self-start" href="#">Get Started</a>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                        <div class="img">
                            <img src="assets/img/feature-7.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>
        </section>
        
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.svg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                        <!-- <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div> -->
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                        <!-- <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div> -->
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                        <!-- <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div> -->
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                    </div>
                </div>

            </div>
        </section>



        <!-- ======= Features Section ======= -->
        <section id="objectives" class="features" name="objectives">
            <div class="container" data-aos="fade-up">



                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Objectives</h3>
                                <p class="fst-itali">
                                    Our Placement Portal - <strong> PlaceTech </strong> serves various objectives:
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Elevate student participation with AI chatbot, dynamic resume builder for efficient placement readiness.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Empower TPOs with streamlined tools for comprehensive placement management, including statistics, job matching.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Enable data-driven decisions with analytics, offering TPOs insights into placement trends and success metrics through user-friendly visual representations.</li>

                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets/img/features-1.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content -->





                    <section id="statistics" class="content-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center latest-job margin-bottom-20">
                                    <h1>Our Statistics</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-aqua">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM job_post";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Total Drives</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios-paper"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM company WHERE active='1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Job Offers</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM users WHERE resume!=''";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>CV'S/Resume</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios-list"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-red">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM users WHERE active='1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Daily Users</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-stalker"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                    </section>
                    <!-- ======= F.A.Q Section ======= -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <?php

    include 'php/ifooter.php';
    ?>

    <!-- End Footer -->

    

</body>

</html>
