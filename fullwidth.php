<?php
/*
Template Name: Full width banner
*/
 get_header(); ?>
<?php get_template_part( 'parts/full-width' ); ?>
<div class="kontakt-page ttypes ">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h2 class="PageHdline">Kontakt vores eksperter</h2>
      <p class="sadanP">-og få uforpligtigende råd, hjælp og vejledning:</p>
    </div>
  </div>
  <div class="row sadan-konakt" data-equalizer>
<div class="small-12 medium-1 large-1 customGap columns" data-equalizer-watch></div>
<?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'department', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <div class="small-12 medium-3 large-3 columns" data-equalizer-watch>
      <div class="small-12 medium-12 large-12  columns kontakt-text-block" data-equalizer-watch>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </div>
    </div>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
    <?php if(get_field('bottom_block_text')){  echo ' <div class="small-12 medium-12 large-12 columns left">' . get_field('bottom_block_text') . '</div>';}?>
  </div>
</div>

<?php get_footer(); ?>