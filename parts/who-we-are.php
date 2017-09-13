<div class="who-we-are-panel" style="display: none;">
  <div class="row" >
      <?php $query = new WP_Query( 'order=asc&category_name=who-we-are&post_status=publish&paged='. get_query_var('paged')); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="small-12 medium-12 large-12 columns">
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns who-we-are">
        <?php the_content(); ?>
      </div>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
</div>