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
</div>
<div class="selskaber">  
<div class="row" data-equalizer> 
  <div class="small-12 medium-12 large-12 columns "><h2 class="PageHdline"><a>Selskaber</a></h2></div> 
  <?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'koncern', 'category_name' => 'selskaber', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="kBlock small-6 medium-3 large-2 columns" data-equalizer-watch>
    <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }else {
        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.jpg" />';
    }?>
    <h5 style="font-size:13px;"><?php the_title(); ?></h5>
    <?php the_content(); ?>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
<div class="row" data-equalizer> 
  <div class="small-12 medium-12 large-12 columns "><h5 class="PageHdline">Associerede Selskaber</h5></div> 
  <?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'koncern', 'category_name' => 'associerede-selskaber', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="kBlock small-6 medium-3 large-2 columns" data-equalizer-watch>
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }else {
        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.jpg" />';
    }?>
<h5 style="font-size:13px;"><?php the_title(); ?></h5>
    <?php the_content(); ?>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
</div>
<!--div class="full-width koncernen kontakt">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns "><h2 class="PageHdline"><a>kontakt</a></h2></div> 
    <div class="small-12 medium-12 large-12 columns">
      <p>Du kan skrive til Bording A/S via vores kontaktformular nedenunder.<br> Vi glæder os til at høre fra dig.</p>
    </div>
    <div class="small-12 medium-12 large-12 text-left"> <?php echo do_shortcode( '[contact-form-7 id="105" title="Bordus Digital form"]' ); ?> </div>
  </div>
</div-->