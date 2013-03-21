<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>
    <?php 
      if(!empty($title)) 
        echo $title; 
      else echo "Join Harvard"; ?>
  </title>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- enables scaling for mobile devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!-- The bootstrap  styles -->
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link href="css/bootstrap-responsive.css" rel="stylesheet"/>       
  
  <!-- The global styles-->
  <link href="css/styles.css" rel="stylesheet"/>

  <!-- Scripts -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="js/isotope.js"></script>
  <script src="js/scripts.js"></script>
</head>
