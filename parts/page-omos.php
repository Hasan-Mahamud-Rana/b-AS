<div class="full-width">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="full-width-banner" id="omos" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
  <div class="row overLap">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_title(); ?></a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns full-width-text">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
  <div class="ttypes">
    <div class="row ">

      <?php if(get_field('history')){  echo ' <div class="small-12 medium-12 large-12 columns">' . get_field('history') . '</div>';}?>

    </div>
  </div>
  <div class="infograf">
    <div class="row ">
      <?php $field_name = "1792";$field = get_field_object($field_name);  echo ' <div class="small-12 medium-2 large-2 timeLine columns"><div class="small-12 columns"><h5>' . $field['label'] .'</h5></div><div class="small-12 whiteLine firstwl"><div class="small-12 whiteLineBullet">k</div></div><div class="small-12 columns"><p>' . $field['value'] . '</p></div></div>';?>
      <?php $field_name = "1835";$field = get_field_object($field_name);  echo ' <div class="small-12 medium-2 large-2 timeLine columns"><div class="small-12 columns"><h5>' . $field['label'] .'</h5></div><div class="small-12 whiteLine firstwl"><div class="small-12 whiteLineBullet">k</div></div><div class="small-12 columns"><p>' . $field['value'] . '</p></div></div>';?>
      <?php $field_name = "1977";$field = get_field_object($field_name);  echo ' <div class="small-12 medium-2 large-2 timeLine columns"><div class="small-12 columns"><h5>' . $field['label'] .'</h5></div><div class="small-12 whiteLine firstwl"><div class="small-12 whiteLineBullet">k</div></div><div class="small-12 columns"><p>' . $field['value'] . '</p></div></div>';?>
      <?php $field_name = "2000";$field = get_field_object($field_name);  echo ' <div class="small-12 medium-2 large-2 timeLine columns"><div class="small-12 columns"><h5>' . $field['label'] .'</h5></div><div class="small-12 whiteLine firstwl"><div class="small-12 whiteLineBullet">k</div></div><div class="small-12 columns"><p>' . $field['value'] . '</p></div></div>';?>
      <?php $field_name = "2005";$field = get_field_object($field_name);  echo ' <div class="small-12 medium-2 large-2 timeLine columns"><div class="small-12 columns"><h5>' . $field['label'] .'</h5></div><div class="small-12 whiteLine firstwl"><div class="small-12 whiteLineBullet">k</div></div><div class="small-12 columns"><p>' . $field['value'] . '</p></div></div>';?>
      <?php $field_name = "2014";$field = get_field_object($field_name);  echo ' <div class="small-12 medium-2 large-2 timeLine columns"><div class="small-12 columns"><h5>' . $field['label'] .'</h5></div><div class="small-12 whiteLine firstwl"><div class="small-12 whiteLineBullet">k</div></div><div class="small-12 columns"><p>' . $field['value'] . '</p></div></div>';?>
      <?php $field_name = "2016";$field = get_field_object($field_name);  echo ' <div class="small-12 medium-2 large-2 timeLine columns"><div class="small-12 columns"><h5>' . $field['label'] .'</h5></div><div class="small-12 whiteLine firstwl"><div class="small-12 whiteLineBullet">k</div></div><div class="small-12 columns"><p>' . $field['value'] . '</p></div></div>';?>
    </div>
  </div>
</div>
<!--Bording Koncern Page ---->
<?php
$post_id = get_field('page_link', false, false);
if( $post_id ): ?>
<div class="full-width">
  <div class="full-width-banner" id="koncern" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post_id) ); ?>)"></div>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php get_the_ID($post_id); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="#koncern"><?php echo get_the_title($post_id); ?></a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns full-width-text">
        <?php
        $content_post = get_post($post_id);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
        ?>
      </div>
    </article>
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
<?php endif; ?>
<!-- Bording Karrier Page -->
<?php
$post_id = get_field('page_link_2', false, false);
if( $post_id ): ?>
<div class="full-width">
  <div class="full-width-banner" id="karrier" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post_id) ); ?>)"></div>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php get_the_ID($post_id); ?>">
      <div class="small-12">
        <h2 class="PageHdline"><a href="#karrier"><?php echo get_the_title($post_id); ?></a></h2>
      </div>
      <div class="row">
        <div class="small-12 medium-8 large-8 columns full-width-text">
          <?php
          $content_post = get_post($post_id);
          $content = $content_post->post_content;
          $content = apply_filters('the_content', $content);
          $content = str_replace(']]>', ']]&gt;', $content);
          echo $content;
          ?>
        </div>
        <div class="small-12 medium-4 large-4 columns">
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
            <?php endif; ?>
          </div>
        </div>
      </div>
    </article>
  </div>
  <?php endif; ?>
<!--Bording CSR Page ---->
<?php
$post_id = get_field('page_link_3', false, false);
if( $post_id ): ?>
<div class="full-width-banner" id="csr" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post_id) ); ?>)"></div>
<div class="csr-article">
  <div class="row">
    <article <?php post_class() ?> id="post-<?php get_the_ID($post_id); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="#csr"><?php echo get_the_title($post_id); ?></a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns csr-artilce-text">
        <?php
        $content_post = get_post($post_id);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
        ?>
      </div>
    </article>
  </div>
</div>
<div class="csr-panel csrs-page">
  <?php $query = new WP_Query(array( 'category_name' => 'csr', 'posts_per_page' => 1 )); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="row csr-box" >
    <div class="small-12 medium-4 large-4 columns">
      <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
      <?php the_content(); ?>
    </div>
    <div class="small-12 medium-8 large-8 columns vdoPanel">
      <?php the_excerpt(); ?>
    </div>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
<?php endif; ?>