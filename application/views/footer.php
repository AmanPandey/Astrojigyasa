
  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color:antiquewhite; opacity: 0.7;">


    <div class="footer-top" style="color:#000;">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4><span style="color:#eb5d1e"><strong>ASTRO JIGYASA OFFICE</strong></span></h4>
            <p>
              Shop No-7,Maharaja Aggersen Complex <br>
              Bas Stand, Sant Nagar, Burari Road -110084<br>
              Delhi, India <br><br>
              <strong>Phone:</strong> +91 99533 34515<br>
              <strong>Email:</strong> info@astrojigyasa.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('About-Us'); ?>">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('Services'); ?>">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('Team'); ?>">Team Members</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('Services'); ?>">Kundali making</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('Services'); ?>">Business Problem Solution</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('Services'); ?>">Health Problem Solution</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('Services'); ?>">Career Problem Solution</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('Services'); ?>"> & many more...</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Networks</h4>
            <p>We are available on social media networks, please visit to follow us.</p>
            <div class="social-links mt-3">
              <a href="https://www.linkedin.com/in/astro-jigyasa-444a2122a/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              <a href="https://www.instagram.com/astrojigyasa/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.facebook.com/astrojigyasa1" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://twitter.com/AstroJigyasa" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://wa.me/919953334515" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span style="color:#eb5d1e;">ASTRO JIGYASA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Website Designed by <a href="#"><img src="assets/img/softidia_logo.png" width="150"/> </a>
      </div>
    </div>
  </footer><!-- End Footer -->
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>

</html>