<?php
/**
 * The header for displaying header file
 * 
 * @package best-it
 */
?>
<!doctype html>
<html <?php language_attributes();?>>

    <!-- Basic -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="<?php echo get_template_directory_uri();?>/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head();?>
</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
	<!-- header top details-->
    <?php do_action("do_best_it_header_top_section","best-it");?>
    <!--/ End header top details -->

    <!-- header menu-->
    <?php get_template_part('template-part/header/header-menu','best-it');?>
    <!--/ End header menu -->
