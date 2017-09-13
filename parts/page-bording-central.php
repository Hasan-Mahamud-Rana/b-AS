<div class="bording_central" style="display: none;">  
<div class="row">
  <?php $query = new WP_Query( 'order=asc&category_name=bording-central&post_status=publish&paged='. get_query_var('paged')); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="small-12 medium-4 large-4 columns">
    <div class="small-12 medium-12 large-12" style="background-repeat: no-repeat;background-position: center center;height:150px;background-size: contain;background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">&nbsp;</div>
    <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>  
  <div class="small-12 medium-12 large-12 columns">
  <a target="_blank" href="http://www.bordingcentral.dk/">Læs mere her</a>
  </div>
  </div>
</div>