<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="headerContainer">
    <div class="topBar">
      
        <a class="logo" href="<?php echo home_url( '/' ); ?>" title=" <?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
      )); ?>
    </div> <!-- end topBar -->
    <?php $image =  get_field('header_image',18); ?>
    <img class="headerImage" src="<?= $image['url']?>" alt="">

  


    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php while( has_sub_field('images') ): ?>
          <?php $image = get_sub_field('header_image'); ?>
          <img src="<?php echo $image["url"] ?>" alt="">
        <?php endwhile; ?>

    <?php endwhile; // end of the loop. ?>



  </div> <!-- /.headerContainer -->

</header><!--/.header-->

