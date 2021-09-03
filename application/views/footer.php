<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 ft-widget wow fadeInLeft animated">
                <h4>Follow Us</h4>
                <ul class="social-links">
                    <li><a href="<?php echo $fb_page; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $twitter_page; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo $linkin_page; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="<?php echo $gplus_page; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
                <p>&copy; Copyright 2017-2018 SRP Global Consultants. All right reserved</p>
            </div>
            <div class="col-md-6 col-sm-6 ft-widget wow fadeInRight animated">
                <h4>Quick Links</h4>
                <ul class="q-link">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>aboutus">About Us</a></li>
                    <li><a href="<?php echo base_url(); ?>services">Service</a></li>
                    <li><a href="<?php echo base_url(); ?>contactus">Contact Us</a></li>
                    <li><a href="<?php echo base_url(); ?>privacy_policy">Privacy Policy</a></li>
                </ul>
            </div>
            
        </div>
    </div>
</footer>
<div class="copyright-text text-center">
    <a href="#" target="_blank"><p>Powered by Airwan Technology</p></a>
</div>
<script src="<?php echo $client_path; ?>js/jquery.min.js"></script>
<script src="<?php echo $client_path; ?>js/bootstrap.min.js"></script>
<script src="<?php echo $client_path; ?>js/owl.carousel.min.js"></script>
<script src="<?php echo $client_path; ?>js/jquery.mixitup.js"></script>
<script src="<?php echo $client_path; ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $client_path; ?>js/jquery.waypoints.min.js"></script>
<script src="<?php echo $client_path; ?>js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo $client_path; ?>js/main_script.js"></script>
<script src="<?php echo $client_path; ?>js/wow.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyC606Aca7q4AK_cMBzQOTSa4Gh6K2qd2OM"></script>
<script type="text/javascript">
    var locations = [
      ['D-553, Street No.5, Ashok Nagar, Shahdara, Delhi-110093', 28.6978285, 77.2976545, 4],
      ['SF-2, Second Floor, Reliable Arcade, Jaipuria Enclave, Opp. Ganga Appt., Kaushambi, Ghaziabad, UP-201010', 28.6421917, 77.3151773, 3],
      ['C4C,-356, GF, Janak Puri, New Delhi-110085', 28.7047485,77.0998554, 2]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(28.68,77.28),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>
