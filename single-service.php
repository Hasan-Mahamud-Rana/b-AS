<?php
get_header();
global $post;
$postID = get_the_ID();
set_post_views(get_the_ID());
?>
<!-- service single post content goes here -->
<div class="tShadow">
  <div class="row ind">
  <div class="small-12 large-12 columns" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <div class="post-footer">
        <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'bordingweb' ), 'after' => '</p></nav>' ) ); ?>
        <p>
          <?php the_tags(); ?>
        </p>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>
</div>
<?php get_footer(); ?>