<?php
session_start();

if (empty($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}

require_once("../db.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Placement Portal</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/AdminLTE.min.css">
    <link rel="stylesheet" href="../css/_all-skins.min.css">
    <!-- Custom -->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        .rounded {
            border-radius: 15px;
            /* Adjust the value to change the amount of rounding */
            /* background-color: #98F4CA */
        }

        .rounded-left-border {
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        .box22 {
            height: 350px;
            width: 350px;
            /* background-color: red; */
        }
    </style>
</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <?php include 'header.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="margin-left: 0px; ">

            <section id="candidates" class="content-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="box box-solid ">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Welcome <b>Admin</b></h3>
                                </div>
                                <div class="box-body no-padding">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                        <li><a href="active-jobs.php"><i class="fa fa-briefcase"></i> Active Drives</a></li>
                                        <li><a href="applications.php"><i class="fa fa-address-card-o"></i> Students Profile</a></li>
                                        <!-- <li><a href="companies.php"><i class="fa fa-building"></i> Companies</a></li> -->
                                        <!-- <li><a href="companies.php"><i class="fa fa-arrow-circle-o-right"></i> Co - Ordinators</a></li> -->
                                        <li><a href="companies.php"><i class="fa fa-arrow-circle-o-right"></i> Department TPO</a></li>
                                        <li><a href="../logout.php"><i class="fa fa-arrow-circle-o-right"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 bg-white padding-2">

                            <h3 style="font-weight:bold;">Placement Cell Statistics</h3>
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="info-box bg-c-yellow rounded">
                                        <span class="info-box-icon bg-green rounded-left-border"><i class="ion ion-person-stalker"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Registered Students</span>
                                            <?php
                                            $sql = "SELECT * FROM users WHERE active='1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <span class="info-box-number"><?php echo $totalno; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-box bg-c-yellow rounded">
                                        <span class="info-box-icon bg-green rounded-left-border"><i class="ion ion-person-stalker"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Pending Students Confirmation</span>
                                            <?php
                                            $sql = "SELECT * FROM users WHERE active='0'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <span class="info-box-number"><?php echo $totalno; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-box bg-c-yellow rounded">
                                        <span class="info-box-icon bg-aqua rounded-left-border"><i class="ion ion-person-add"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Total Drive Posts</span>
                                            <?php
                                            $sql = "SELECT * FROM job_post";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <span class="info-box-number"><?php echo $totalno; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-box bg-c-yellow rounded">
                                        <span class="info-box-icon bg-yellow rounded-left-border"><i class="ion ion-ios-browsers"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Total DRIVE Applications</span>
                                            <?php
                                            $sql = "SELECT * FROM apply_job_post";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <span class="info-box-number"><?php echo $totalno; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3><b>Placed student :</b></h3>
                            <br>
                            <?php
                            $sql_total_users = "SELECT COUNT(*) AS total_users FROM users";
                            $result_total_users = mysqli_query($conn, $sql_total_users);

                            if (mysqli_num_rows($result_total_users) > 0) {
                                // Fetching result
                                $row_total_users = mysqli_fetch_assoc($result_total_users);
                                $totalUsers = $row_total_users['total_users'];

                                // Query to count placed students
                                $sql_placed_students = "SELECT COUNT(DISTINCT users.id_user) AS placed_students_count 
                                              FROM users 
                                              INNER JOIN apply_job_post ON users.id_user = apply_job_post.id_user 
                                              INNER JOIN job_post ON apply_job_post.id_jobpost = job_post.id_jobpost";
                                $result_placed_students = mysqli_query($conn, $sql_placed_students);
                                $row_placed_students = mysqli_fetch_assoc($result_placed_students);
                                $placedStudentsCount = $row_placed_students['placed_students_count'];

                                // Calculate and display the percentage
                                $percentage_placed = ($placedStudentsCount / $totalUsers) * 100;
                            } else {
                                echo "No users found";
                            }
                            ?>

                            <div class="box22">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="yearDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Current Year
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="yearDropdown">
                                        <li><a class="dropdown-item" href="#" onclick="updateChart('current')">Current Year</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="updateChart('2021')">2021</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="updateChart('2022')">2022</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="updateChart('2023')">2023</a></li>
                                    </ul>
                                </div>
                                <canvas id="placedStudentsChart" width="400" height="400"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
                <br>
            </section>

        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer" style="margin-left: 0px;">
            <div class="text-center">
                <strong>Copyright &copy; 2024 <a href="learningfromscratch.online">Placement Portal</a>.</strong> All rights
                reserved.
            </div>
        </footer>

        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        function updateChart(year) {
            // Make an AJAX call to fetch data for the selected year
            // Replace this with your actual AJAX call to fetch data for the selected year
            // For example:
            // $.ajax({
            //     url: 'fetch_data.php',
            //     method: 'GET',
            //     data: { year: year },
            //     success: function(data) {
            //         // Parse the received data and update the chart
            //         var placedStudentsCount = data.placedStudentsCount;
            //         var remainingStudentsCount = data.remainingStudentsCount;
            //         updateChartData(placedStudentsCount, remainingStudentsCount);
            //     },
            //     error: function(xhr, status, error) {
            //         console.error('Error fetching data:', error);
            //     }
            // });

            // For demonstration purpose, I'll assume you have the data for 2021, 2022, and 2023 hardcoded
            // Replace this with your actual data retrieval logic
            var placedStudentsCounts = {
                'current': <?php echo $placedStudentsCount; ?>, // Replace with actual data
                '2021': 25, // Replace with actual data
                '2022': 28, // Replace with actual data
                '2023': 22 // Replace with actual data
            };

            var remainingStudentsCounts = {
                'current': <?php echo $totalUsers - $placedStudentsCount; ?>, // Replace with actual data
                '2021': 45, // Replace with actual data
                '2022': 42, // Replace with actual data
                '2023': 48 // Replace with actual data
            };

            // Update the chart with data for the selected year
            var placedStudentsCount = placedStudentsCounts[year];
            var remainingStudentsCount = remainingStudentsCounts[year];
            var totalStudentsCount = <?php echo $totalUsers; ?>;
            updateChartData(placedStudentsCount, remainingStudentsCount, totalStudentsCount);
        }

        function updateChartData(placedStudentsCount, remainingStudentsCount, totalStudentsCount) {
            // Get the canvas element
            var ctx = document.getElementById('placedStudentsChart').getContext('2d');

            // Get the existing chart instance if it exists
            var existingChart = Chart.getChart(ctx);

            // Destroy the existing chart if it exists
            if (existingChart) {
                existingChart.destroy();
            }

            // Create a new chart
            var placedStudentsChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Placed Students (' + placedStudentsCount + ')', 'Remaining Students (' + remainingStudentsCount + ')', 'Total Students (' + totalStudentsCount + ')'],
                    datasets: [{
                        data: [placedStudentsCount, remainingStudentsCount],
                        backgroundColor: ['#36a2eb', '#ff6384',]
                    }]
                },
                options: {
                    responsive: true
                }
            });
        }
    </script>
    <script>
        updateChart('current');
    </script>
</body>

</html>
