<?php get_header(); ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
        <?php the_field('client_name'); ?>
        <?php the_field('short_desc'); ?>
        <?php while( has_sub_field('images') ): ?>
          <?php $image = get_sub_field('image'); ?>
          <img src="<?php echo $image["url"] ?>" alt="">
          <?php the_sub_field('caption') ?>
        <?php endwhile; ?>

      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>