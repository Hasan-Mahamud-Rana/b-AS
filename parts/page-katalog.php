<div class="full-width">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="full-width-banner" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns full-width-text">
        <?php the_content(); ?>
      </div>
    </article>
  </div>
  <?php endwhile;?>
  <?php
  $query = new WP_Query( array( 'order' => 'dsc' , 'post_type' => 'katalog' , 'post_status' => 'publish' , 'posts_per_page' => -1  ) );
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
  $postTag = wp_get_post_tags($post->ID);
  $count=0;
  if ($postTag) {
  foreach($postTag as $tag) {
  $count++;
  if (1 == $count) {
  $tag->slug;
  }
  }
  }
  ?>
  <div class="full-width <?php echo $tag->slug; ?>">
    <div class="row" data-equalizer="bar">
      <div class="small-12 medium-6 large-6 columns" data-equalizer-watch="bar">
        <?php
        the_title('<h1>','</h1>');
        the_content();
        $download = get_field('download');
        if( $download ): ?>
        <p><a class="button success" href="<?php echo $download['url']; ?>" target="_blank"><?php echo get_field('download_button_text') ?></a></p>
        <?php endif;
        if(get_field('external_url'))
        {
        echo '<p><a class="button success" href="' . get_field('external_url') . '" target="_blank">' . get_field('url_button_text') . '</a></p>';
        }
        ?>
      </div>
      <div class="small-12 medium-6 large-6 columns brochear" style="background-size: contain; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>); background-position: center center; " data-equalizer-watch="bar">&nbsp;</div>
    </div>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>