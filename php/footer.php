<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include the provided CSS styles -->
    <style>
        /* Adjust the margin or padding of the footer and its parent elements */
        .footer {
            margin-top: 0; /* Remove any top margin */
            padding-top: 20px; /* Add padding to the top of the footer if needed */
        }

        .footer-legal {
            margin-bottom: 0; /* Remove any bottom margin */
        }

        /* Optionally, adjust the positioning of the footer */
        #footer {
            position: fixed; /* Fix the footer to the bottom of the viewport */
            width: 100%; /* Make the footer span the entire width of the viewport */
            bottom: 0; /* Align the bottom edge of the footer with the bottom edge of the viewport */
        }
    </style>
</head>
<body>

<!-- Your HTML content goes here -->

<footer id="footer" class="footer">
    <div class="footer-legal text-center">
        <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div class="copyright">
                    2024 &copy; Copyright <strong><span> PlaceTech </span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <a href="">SVKM's Institute of Tecchnology - Placement Cell</a>
                </div>
            </div>
            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href="https://www.svkm-iot.ac.in/" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.svkm-iot.ac.in/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.svkm-iot.ac.in/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.svkm-iot.ac.in/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>
