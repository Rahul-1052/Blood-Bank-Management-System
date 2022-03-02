<?php include 'header.php';?>
<link type="text/css" rel="stylesheet" href="jscript/style.css"/>
<script src="jscript/jquery.min.js"></script>

<!--DOC: menu-always-on-top class to the body element to set menu on top -->
<body class = "menu-always-on-top">
 
	<?php include 'mobile_nav.php';?>
 
	<?php include 'slider.php';?>
	
	<?php include 'calendar.php';?>
 
  <div class="about-block content content-center" id="about">
    <div class="container">
		

      <h2><strong>Negros First</strong></h2>
      <h4>Provincial Blood Bank Center</h4>
     <p>The Negros First Provincial Blood Bank Center in Barangay 39 includes an ₱18.9-million structure, a ₱4.2-million fire protection system, and a ₱1-million pathological vault. Negros Occidental was a recipient of the 2012 National Sandugo Award for its outstanding performance in bloodletting activities. DoH records show that it is one of only three provinces that has blood donations from more than 1% of its population.</p>
    </div>
  </div>
  
	<?php include 'panel_menu.php';?>
 
  <?php include 'steps.php';?>
  <div class="message-block content content-center valign-center" id="message-block">
    <div class="valign-center-elem">
      <h2>If you want to be a donor <strong>hit the button below</strong></h2>
      <em><a href = "login.html" class = "btn btn-success">Log in</a> <a href = "signup.php" class = "btn btn-primary">Sign up</a></em>
    </div>
  </div>
 
	<?php 
  //include 'team_block.php';
  ?>
  <!-- Team block END -->
  <!-- Portfolio block BEGIN -->
  <?php include 'gallery.php';?>

  <!-- BEGIN FOOTER -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <!-- BEGIN COPYRIGHT -->
        <div class="col-md-12 col-sm-12">
          <div style= "text-align: center;" class="copyright">2017 © Web-Based Blood Bank Record System.</div>
        </div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN SOCIAL ICONS -->
        <!-- <div class="col-md-6 col-sm-6 pull-right">
          <ul class="social-icons">
            <li><a class="rss" data-original-title="rss" href="javascript:void(0);"></a></li>
            <li><a class="facebook" data-original-title="facebook" href="javascript:void(0);"></a></li>
            <li><a class="twitter" data-original-title="twitter" href="javascript:void(0);"></a></li>
            <li><a class="googleplus" data-original-title="googleplus" href="javascript:void(0);"></a></li>
            <li><a class="linkedin" data-original-title="linkedin" href="javascript:void(0);"></a></li>
            <li><a class="youtube" data-original-title="youtube" href="javascript:void(0);"></a></li>
            <li><a class="vimeo" data-original-title="vimeo" href="javascript:void(0);"></a></li>
            <li><a class="skype" data-original-title="skype" href="javascript:void(0);"></a></li>
          </ul>
        </div> -->
        <!-- END SOCIAL ICONS -->
      </div>
    </div>
  </div>
  <!-- END FOOTER -->
  <a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>
  
  <script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- Core plugins END (For ALL pages) -->
  <!-- BEGIN RevolutionSlider -->
  <script src="assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
  <script src="assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
  <script src="assets/frontend/onepage/scripts/revo-ini.js" type="text/javascript"></script> 
  <script src="assets/frontend/onepage/scripts/layout.js" type="text/javascript"></script>
  <!-- END RevolutionSlider -->
  <!-- Core plugins BEGIN (required only for current page) -->
  <script src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
  <script src="assets/global/plugins/jquery.easing.js"></script>
  <script src="assets/global/plugins/jquery.parallax.js"></script>
  <script src="assets/global/plugins/jquery.scrollTo.min.js"></script>
  <script src="assets/frontend/onepage/scripts/jquery.nav.js"></script>
  <script src="moment.min.js"></script>
	<script src="fullcalendar.js"></script>
  <!-- Core plugins END (required only for current page) -->
  <!-- Global js BEGIN -->

  
 
  
  <!-- Global js END -->
</body>
</html>