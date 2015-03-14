<?php 
/*Template Name: HomePage
*/
?>

<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">

      <div class="aboutMeSection">
        <?php echo get_avatar( get_the_author_meta('user_email',1) ,250); ?>
        <p class="aboutMe"><?php echo get_the_author_meta('description',1); ?></p>
      </div> <!-- end aboutMeSection -->

    <!-- </div>  --><!-- end content -->

    <div class="focusSection">

      <div class="codeBlock">
        <i class="fa fa-code"></i>
        <h3 class="codeTitle">Web Development</h3>
        <p class="codeText">Building websites is a ... Chocolate cheesecake sweet sweet roll soufflé cake I love. Macaroon I love macaroon cotton candy. Tart pie soufflé sugar plum sesame snaps. Brownie halvah I love I love dragée.</p>
      </div> <!-- end codeBlock -->

      <div class="wpBlock">
        <i class="fa fa-wordpress"></i>
        <h3 class="wpTitle">WordPress</h3>
        <p class="wpText">WordPress themes ... Chocolate cheesecake sweet sweet roll soufflé cake I love. Macaroon I love macaroon cotton candy. Tart pie soufflé sugar plum sesame snaps. Brownie halvah I love I love dragée.</p>
      </div> <!-- end wpBlock -->

      <div class="respBlock">
        <i class="fa fa-laptop"></i>
        <i class="fa fa-tablet"></i>
        <i class="fa fa-mobile"></i>
        <h3 class="respTitle">Responsive Design</h3>
        <p class="respText">Responsive design ... Chocolate cheesecake sweet sweet roll soufflé cake I love. Macaroon I love macaroon cotton candy. Tart pie soufflé sugar plum sesame snaps. Brownie halvah I love I love dragée. </p>
      </div> <!-- end respBlock -->

    </div> <!-- end focusSection -->














    <div class="portfolioSection">
      <?php 
          $customArgs = array("post_type" => "portfolio");

        $customQuery = new WP_Query($customArgs);

        if ($customQuery->have_posts()){
          while ($customQuery->have_posts()){
            $customQuery->the_post();
            ?>

            
            <?php while( has_sub_field('images') ): ?>
              <?php $image = get_sub_field('image'); ?>
              <div class="portfolioPieces">
                <img src="<?php echo $image["url"] ?>" alt="">
              </div>
            <?php endwhile; ?>

            <?php
          }
        }
         ?>

    </div> <!-- end portfolioSection -->
</div>
  </div> <!-- end container -->
</div> <!-- end main -->

<?php get_footer(); ?>