<div class="job-article">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns job-artilce-text">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>
<div class="job-panel jobs-page">
        <?php $query = new WP_Query( 'order=desc&post_type=job&post_status=publish&paged='. get_query_var('paged')); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="row job-box" >
        <div class="small-12 medium-12 large-12 columns">
          <div class="panel text-left job-text entry-content">
            <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
            <p class="time"><?php the_time('F j, Y'); ?></p>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere her</a>
          </div>
        </div>
      </div>
      <?php endwhile;  wp_reset_postdata(); else : ?>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
</div>