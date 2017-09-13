<?php
get_header();
global $post;
$postID = get_the_ID();
set_post_views(get_the_ID());
?>
<!--single content goes here case-->
<?php
global $post;
$postID = get_the_ID();
?>
<div class="tShadow">
  <div class="row">
  <?php do_action( 'bordingweb_before_content' ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div <?php echo 'id="'.get_the_ID().'"'?> class="small-12 medium-12 large-12 columns entry-content">
      <div class="post-thumb">
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="row">
          <div class="column">
            <?php the_post_thumbnail( '', array('class' => 'th') ); ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
      <h2>
        <?php the_title(); ?>
      </h2>
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
  <?php do_action( 'bordingweb_after_content' ); ?>
  <div class="small-12 columns case-relevant"><hr></div>
</div>
</div>
<div class="relevant-case-panel cases-page">
  <div class="row" >
    <div class="large-12 text-center">
      <div class="relevant-case">
    <?php $query = new WP_Query( array( 'post__not_in' => array($postID),'order' => 'ASC', 'post_type' => 'case', 'post_status' => 'publish')); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div <?php echo 'id="'.get_the_ID().'"'?> class="small-12 medium-4 large-4 columns cc">
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(320,242) ); ?></a>
          <div class="panel text-left case-text">
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
              <?php if (strlen($post->post_title) > 39)
              {
                echo substr(the_title($before = '', $after = '', FALSE), 0, 39) . '...'; } else {
                  the_title();
              } ?>
              <?php //the_title(); ?></a></h3>
          </div>
        </div>
      <?php endwhile;  wp_reset_postdata(); else : ?>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
</div>
</div>
</div>
<?php get_footer(); ?>