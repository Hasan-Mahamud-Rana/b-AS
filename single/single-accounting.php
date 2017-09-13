<?php
get_header();
global $post;
$postID = get_the_ID();
set_post_views(get_the_ID());
?>
<!-- content goes here accounting-->
<div class="row">
  <div class="small-12 large-12 columns" role="main">
    <?php do_action( 'bordingweb_before_content' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="courses">
       <div class="row">
        <div class="large-12 small-12 columns text-center">
         <div class="post-header"><h3><?php the_title(); ?></h3>  </div>
       </div>
     </div>
     <div class="entry-content">
      <?php if ( has_post_thumbnail() ) : ?>
      <div class="row">
          <!--<div class="column">
            <?php //the_post_thumbnail( '', array('class' => 'th') ); ?>
          </div> -->
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="small-12 large-8 large-centered columns ">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <div class="post-footer">
      <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'bordingweb' ), 'after' => '</p></nav>' ) ); ?>
      <p><?php the_tags(); ?></p>
    </div>
  </div>
</article>
<?php endwhile;?>
<?php do_action( 'bordingweb_after_content' ); ?>
</div>
</div>
<?php get_footer(); ?>