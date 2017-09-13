<div class="nyheder-panel nyheders-page nhs mCustomScrollbar" data-mcs-theme="dark">
        <?php $query = new WP_Query( 'order=desc&post_type=nyheder&post_status=publish&paged='. get_query_var('paged')); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="row nyheder-box nfh" >
        <div class="small-12 medium-12 large-12 columns">
          <div class="panel text-left nyheder-text vnht">
            <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
            <p class="time"><?php the_time('F j, Y'); ?></p>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere her</a>
            <hr>
          </div>
        </div>
      </div>
      <?php endwhile;  wp_reset_postdata(); else : ?>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
</div>