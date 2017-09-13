<?php
/*
Template Name: Search Page
*/
get_header(); ?>
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
  $query_split = explode("=", $string);
  $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>

<!--Search content goes here -->

<div class="row searchContent">
  <div class="small-12 large-12 columns" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="row nyheder-box" >
        <div class="small-12 medium-8 large-12 columns">
          <div class="panel text-left nyheder-image"> <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail( array(320,242) ); ?>
            </a> </div>
          <div class="panel text-left nyheder-text">
            <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
              <?php the_title(); ?>
              </a></h4>
            <p class="time">
              <?php the_time('F j, Y'); ?>
            </p>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere her</a> </div>
        </div>
      </div>
      <div class="post-footer">
        <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'bordingweb' ), 'after' => '</p></nav>' ) ); ?>
        <p>
          <?php the_tags(); ?>
        </p>
      </div>
    </article>
    <?php endwhile;?>
    <div class="navigation text-center">
      <?php if (function_exists("pagination")) {
    pagination($search->max_num_pages);
} ?>
    </div>
    <?php  wp_reset_postdata(); else : ?>
    <h4 class="srch"><?php _e( 'Sorry, nothing found with your search criteria.<br>Do you want to try again ?' ); ?></h4>
    <div class="row">
      <div class="small-12 large-12 columns CustomSearch" role="main">
        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
         <input type="search" 
	       class="search-text-field" 
	       placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" 
	       value="<?php echo get_search_query() ?>" 
	       name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
          <input type="submit" class="search-submit " value="Search" />
          <span class="clear"></span>
        </form>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>
<?php global $wp_query;
$total_results = $wp_query->found_posts;
?>
<?php get_footer(); ?>