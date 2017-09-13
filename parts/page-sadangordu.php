<div class="full-width">
  <?php while ( have_posts() ) : the_post(); ?>
  <!-- <div class="full-width-banner" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div> -->
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
          <?php the_title(); ?>
          </a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns full-width-text">
        <?php the_content(); ?>
      </div>
    </article>
  </div>
  <?php endwhile;?>
 
  <div class="row">
    <?php if(get_field('below_block_text')){  echo ' <div class="small-12 medium-12 large-12 columns ">' . get_field('below_block_text') . '</div>';}?>
  </div>
</div>

<?php $query = new WP_Query( 'order=asc&tag=sadan-gor-du&post_status=publish&paged='. get_query_var('paged')); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<div style="background: #e8e8e8;" data-equalizer>

<div class="middle-post" style="height:530px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)" data-equalizer-watch>
  <div class="row trykkeriaftalen sadangordu" >
    <div class="small-12 medium-6 large-8 columns" data-equalizer-watch>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
</div>
</div>
<div class="kontakt-page ttypes ">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h2 class="PageHdline">Kontakt vores eksperter</h2>
      <p class="sadanP">-og få uforpligtigende råd, hjælp og vejledning:</p>
    </div>
  </div>
  <div class="row sadan-konakt" data-equalizer>
<div class="small-12 medium-1 large-1 customGap columns" data-equalizer-watch></div>
<?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'statens-indkob', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
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
<?php $query = new WP_Query( 'order=asc&tag=sadan-gor-du-2&post_status=publish&paged='. get_query_var('paged')); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<div style="background: #e8e8e8;margin-top:40px;" data-equalizer>

<div class="middle-post" style="height:530px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)" data-equalizer-watch>
  <div class="row trykkeriaftalen sadangordu" >
    <div class="small-12 medium-6 large-8 columns" data-equalizer-watch>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
</div>
</div>