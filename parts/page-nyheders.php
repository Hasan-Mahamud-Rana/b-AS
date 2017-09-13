<div class="full-width-banner" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
<div class="nyheder-article">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns nyheder-artilce-text">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>
<div class="nyheder-panel nyheders-page">
  <?php $query = new WP_Query( 'order=desc&post_type=nyheder&post_status=publish&posts_per_page=7&paged='. get_query_var('paged')); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="row " >
        <div class="small-12 medium-12 large-12 columns nyheder-box" data-equalizer>
        <div class="small-12 medium-4 large-3 columns nyheder-box-image-thumb" data-equalizer-watch>
          <div class="panel text-left nyheder-image">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(320,242) ); ?></a>
          </div>
        </div>
        <div class="small-12 medium-8 large-9 columns nyheder-box-text" data-equalizer-watch>
          <div class="panel text-left nyheder-text">
            <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
            <p class="time"><?php the_time('F j, Y'); ?></p>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere her</a>
          </div>
        </div>
      </div>
      </div>
      <?php endwhile; ?> 
      <div class="navigation text-center">
      <?php if (function_exists("pagination")) {
    pagination($query->max_num_pages);
} ?>
    </div>
    <?php wp_reset_postdata(); else : ?>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
</div>