<?php
get_header();
global $post;
$postID = get_the_ID();
set_post_views(get_the_ID());
?>
<!-- content goes here Slide-->
<div class="nyheder-article">
<div class="row">
  <div class="small-12 columns" role="main">
    <?php do_action( 'bordingweb_before_content' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="courses">
     <div class="entry-content">
      <div class="row">
        <div class="small-12 columns text-center">
          <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       </div>
      <div class="small-12 columns slidec" >
          <?php the_content(); ?>
      </div>
      <div class="small-12 large-12 speace columns">
          <?php the_excerpt(); ?>
      </div>
      </div>
    </div>
  </div>
</article>
<?php endwhile;?>
<?php do_action( 'bordingweb_after_content' ); ?>
</div>
</div>
</div>
<?php get_footer(); ?>