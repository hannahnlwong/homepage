<?php 
/*Template Name: Portfolio
*/
?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
    	


    	<?php 
    		$customArgs = array("post_type" => "portfolio");

			$customQuery = new WP_Query($customArgs);

			if ($customQuery->have_posts()){
				while ($customQuery->have_posts()){
					$customQuery->the_post();
					?>

					<h1><?php the_title();?></h1>
					<?php while( has_sub_field('images') ): ?>
					  <?php $image = get_sub_field('image'); ?>
					  <img src="<?php echo $image["url"] ?>" alt="">
					  <?php the_sub_field('caption') ?>
					<?php endwhile; ?>

					<?php
				}
			}
    	 ?>
    




    </div> <!--/.content -->

    

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>