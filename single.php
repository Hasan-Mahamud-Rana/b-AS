<?php
get_header();
global $post;
$postID = get_the_ID();
set_post_views(get_the_ID());
?>
<!-- single post content goes here -->
<div class="tShadow"><div class="row ind">
  <div class="small-12 large-12 columns" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="post-header">
        <h1 class="entry-title">
          <?php the_title(); ?>
        </h1>
      </div>
      <div class="post-thumb">
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="row">
          <div class="column">
            <?php the_post_thumbnail( '', array('class' => 'th') ); ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
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
</div></div>
<?php get_footer(); ?>