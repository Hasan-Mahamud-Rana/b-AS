<?php
get_header();
global $post;
$postID = get_the_ID();
set_post_views(get_the_ID());
?>
<!-- content goes here Blogs-->
<div class="tShadow">
  <div class="row ind">
    <?php do_action( 'bordingweb_before_content' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-7 large-8 columns entry-content">
        <p><span class="time"><?php the_time('F j, Y'); ?></span></p>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
      <div class="small-12 medium-5 large-4 columns">
        <div class="nyheder-panel"><h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">mest læste</a></h2>
        <div class="nyheder-panel nyheders-page nhs mCustomScrollbar" data-mcs-theme="dark">
          <?php
          $paged = ($paged) ? $paged : 1;
          $post_type = "blog";
          $args1 = array(
          'post__not_in' => array($postID),
          'post_type' => 'blog',
          'posts_per_page' => -1,
          'meta_key' => 'post_views_count',
          'orderby' => 'meta_value_num',
          'post_status' => 'publish',
          'order' => 'DESC'
          );
          $query1 = new WP_Query( $args1 );

          #$query = new WP_Query( array( 'post__not_in' => array($postID), 'order' => 'ASC', 'post_type' => 'blog', 'post_status' => 'publish', 'v_sortby' => 'views', 'posts_per_page' => -1 ));
          if ( $query1->have_posts() ) : while ( $query1->have_posts() ) : $query1->the_post();
          ?>
          <div class="row nyheder-box nfh" >
            <div class="small-12 medium-12 large-12 columns">
              <div class="panel text-left nyheder-text vnht">
                <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                </a></h4>
                <p class="time">
                  <?php the_time('F j, Y'); ?>
                </p>
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
        <div class="post-footer">
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'bordingweb' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
        </div>
      </article>
      <?php endwhile;?>
      <?php do_action( 'bordingweb_after_content' ); ?>
    </div>
  </div>
  <?php get_footer(); ?>