<div class="row showcase">
  <div class="small-12 medium-12 large-12">
    <div class="slider" style="display: none;">
      <?php $query = new WP_Query( 'order=desc&post_type=slide&post_status=publish&paged='. get_query_var('paged')); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="large-12 medium-12 columns fpbdslider" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
        <h2 class="sliderHdline trickyLinkToSLide"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </div>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
  </div>
</div>