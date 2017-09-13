<div class="case-article">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns case-artilce-text">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>
<div class="case-panel cases-page">
  <div class="row" >
    <div class="small-12 text-center">
      <div class="case">
        <?php
          $query = new WP_Query( 'order=desc&post_type=case&post_status=publish&posts_per_page=9&paged='. get_query_var('paged'));
        ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="small-12 medium-4 large-4 columns cc">
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(320,242) ); ?></a>
          <div class="panel text-left case-text">
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
          </div>
          <div class="small-12 medium-12 large-12 columns text-left case-link">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere her</a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <div class="row" >
    <div class="small-12 navigation text-center">
      <?php
      if (function_exists("pagination")) {
        pagination($query->max_num_pages);
      }
      ?>
    </div>
  </div>
  <?php wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
</div>