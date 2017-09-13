<!-- frontpage content goes here -->
<div class="frontpage">
  <div class="row">
    <div class="small-12 medium-7 large-8 columns" role="main">
      <div class="postSlider" style="display: none;">
        <?php $query = new WP_Query( array( 'order' => 'dsc' , 'post_type' => 'slide' , 'post_status' => 'publish', 'posts_per_page' => 5 )); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="large-12 medium-12 columns">
          <?php the_title('<h2 class="PageHdline"><a>' , '</a></h2>'); ?>
          <?php
          $image = get_field('images');
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
          <?php the_content(); ?>
          <div class="small-12 speace">
            <?php the_excerpt(); ?>
          </div>
        </div>
        <?php endwhile;  wp_reset_postdata(); else : ?>
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="small-12 medium-5 large-4 columns nyheder" style="display:none;"><h2>nyheder</h2>
      <?php get_template_part( 'parts/nyheders' ); ?>
    </div>
  </div>
</div>