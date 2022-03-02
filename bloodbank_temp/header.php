<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest (the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Negros First Provincial Blood Bank Center</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="">
  <!-- Fonts START -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">	<!-- Fonts END -->
  <!-- Global styles BEGIN -->
  <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
  <!-- Global styles END -->
  <!-- Page level plugin styles BEGIN -->
  <link href="assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->
  <!-- Theme styles BEGIN -->
  <link href="assets/global/css/components.css" rel="stylesheet">
  <link href="assets/frontend/onepage/css/style.css" rel="stylesheet">
  <link href="assets/frontend/onepage/css/style-responsive.css" rel="stylesheet">
  <link href="assets/frontend/onepage/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="assets/frontend/onepage/css/custom.css" rel="stylesheet">
  <link href='fullcalendar.min.css' rel='stylesheet' />
	<link href='fullcalendar.print.min.css' rel='stylesheet' media='print' />
  		
  	<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
 	
  <!-- Theme styles END -->
 

 <script>
    $(document).ready(function() {      
     var calendar = $('#calendar').fullCalendar({
       header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek'
			},			
			navLinks: true, // can click day/week names to navigate views
			editable: false,
			eventLimit: false,
     	  events: {
            url: 'calendar_data.php',
            type: 'POST', // Send post data
            error: function() {
                alert('There was an error while fetching events.');
            }
        }
    });



      Layout.init();

    });
  </script>
 <style>
	a.scroll.site-logo > img {
    width: 61px;
	}
  .fc-day-grid-event .fc-content{
        white-space: normal !important;
    }
  </style>
 
  
</head>