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
<?php endwhile;?>
</div>
<div class="row karrier">
  <?php $query = new WP_Query( 'order=asc&category_name=karriere&post_status=publish&paged='. get_query_var('paged')); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="small-12 medium-12 large-12 columns">
    <div class=" small-12 medium-12 large-12 columns ">
      <h4><?php the_title(); ?></h4>
    </div>
    <div class=" small-12 medium-12 large-12 columns text-center">
      <?php the_content(); ?>
    </div>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>  </div>
</div>
