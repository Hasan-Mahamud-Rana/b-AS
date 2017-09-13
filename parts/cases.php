<div class="case-panel" style="display: none;">
  <div class="row" >
    <div class="large-12 text-center">
      <h2>Cases</h2>                                                              
      <div class="case">
        <?php $query = new WP_Query( 'order=asc&post_type=case&post_status=publish&paged='. get_query_var('paged')); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="medium-12 large-12 columns">
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(320,242) ); ?></a>
          <div class="panel text-left case-text">
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
          </div>
          <div class="medium-12 large-12 columns text-left case-link">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere her</a>
          </div>
        </div>
      <?php endwhile;  wp_reset_postdata(); else : ?>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
</div>
</div>
</div>