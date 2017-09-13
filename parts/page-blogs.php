<div class="full-width">
  <div class="full-width-banner" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
</div>
<div class="nyheders-page">
  <div class="row">
    <div class="small-12 medium-7 large-8 columns">
      <div class="nyheder-panel">
        <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <?php
        $paged = intval(get_query_var('paged'));
        $paged = ($paged) ? $paged : 1;
        $args = array(
        'post_type' => 'blog',
        'paged' => $paged,
        'more' => $more = 0,
        'order' => 'DESC'
        );
        $query = new WP_Query($args); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="row" >
          <div class="small-12 medium-12 large-12 columns">
            <div class=" text-left blog-text">
              <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
              <p class="time"><?php
                the_time('F j, Y');
                echo ' - ' . get_post_views(get_the_ID());
                ?>
              </p>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere her</a> </div>
              <hr>
            </div>
          </div><?php endwhile; ?>
          <div class="navigation text-center">
            <?php if (function_exists("pagination")) {
            pagination($query->max_num_pages);
            } ?>
          </div>
          <?php wp_reset_postdata(); else : ?>
          <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
          <?php endif; ?>
        </div>
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
          if ( $query1->have_posts() ) : while ( $query1->have_posts() ) : $query1->the_post(); ?>
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
      </div>
      <div class="nhs">
        <h2 class="block-headline">Skribenter</h2>
        <?php $query2 = new WP_Query( 'order=asc&category_name=blog-author&v_sortby=views&post_status=publish');?>
        <?php if ( $query2->have_posts() ) : while ( $query2->have_posts() ) : $query2->the_post(); ?>
        <div class="row nfh">
          <div class="small-12 medium-12 large-12 columns" data-equalizer>
            <div class="small-6 medium-6 large-6 columns" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);height:186px;    background-size: 100% 100%;">
            </div>
            <div class="small-6 medium-6 large-6 columns panel" style="height:186px;">
              <h4>
              <?php the_title(); ?>
              </h4>
              <div class="designation">
                <?php the_excerpt(); ?>
                <?php
                if(get_field('mail_')){  echo '<a class="email" href="mailto:'  . get_field('mail_') . '"alt=""">m</a>';}
                if(get_field('linkedin_')){  echo '<a class="linkedIn" href="'  . get_field('linkedin_') . '"alt=""">i</a>';}
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns ">
            <?php the_content(); ?>
          </div>
        </div>
        <?php endwhile;  wp_reset_postdata(); else : ?>
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>