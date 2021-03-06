<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

 
<head>
	<meta charset="utf-8">
	<title><?php wp_title( '|', true, 'right' );  ?>   <?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
	<!-- the default values -->
 

	<!-- if page is content page -->
	<?php if (is_single()) { ?>
	<meta property="og:url" content="<?php the_permalink() ?>"/>
	<meta property="og:title" content="<?php single_post_title(''); ?>" />
	<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="<?php bloginfo('template_url' );?>/images/century-equities.png" />

	<!-- if page is others -->
	<?php } else { ?>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php bloginfo('template_url' );?>/images/century-equities.png" /> <?php } ?>


	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">

	<!-- CSS (* with Edge Inspect Fix)
  ================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/style.css" />
	<!-- <link rel="stylesheet" type="text/css" media="all" href="http://192.168.1.8/ce/wp-content/themes/MESH_Starter/style.css" /> -->

	<!-- Typekit
	================================================== -->
	<script type="text/javascript" src="//use.typekit.net/byu7jsq.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo('url' );?>/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<?php wp_head(); ?>
	<style type="text/css">
	/*.contact-us{position: absolute; top: 10px; right: 10px;} .contact-us a:hover{color: white;}
	.top-bar{text-align:right;}
		.top-links{background:#98a6b9; margin-bottom:7px; padding:.7em .7em .5em 0;}
		.top-links a:hover, .top-links a:active, .top-links a:focus{opacity:.8;}*/
	</style>

</head>

<body>
	<div class="top-bar">
		<div class="top-links">
			<!-- <div class="contact-us">
					<a href="http://centuryequities.com/contact/">CONTACT US</a>
			</div> -->
			<a href="http://www.century-realty.com" ><img src="<?php bloginfo('template_url' );?>/images/centuryRealtyTopLink.png"></a>
			<img src="<?php bloginfo('template_url' );?>/images/linkSeparator.png">
			<a href="http://www.centuryhospitality.net"><img src="<?php bloginfo('template_url' );?>/images/centuryHospitalityTopLink.png"></a>
		</div>
	</div>

	<div id="header">
		<div class="container">
 
				<div class="three columns logo">
					 <a href="<?php bloginfo( 'url' );?>" title="Century Equities"><img src="<?php bloginfo('template_url' );?>/images/century-equities.png" title="Century Equities, Proven Real Estate Partners" alt="Century Equities, Proven Real Estate Partners"></a>
				</div>

				<div class="nine columns navigation">

					<?php wp_nav_menu( array( 'menu_id' => 'nav', 'theme_location' => 'primary-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>')); ?>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
				<!-- <div class="contact-us">
					<a href="http://centuryequities.com/contact/">CONTACT US</a>
				</div> -->
 		</div>
	</div><!-- End of Header -->





