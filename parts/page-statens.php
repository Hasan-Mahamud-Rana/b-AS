<div class="full-width agetor" >
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="full-width-banner"  style="padding: 8% 0;height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
  </div>
  <div class="row overLap" id="statens">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline" >
          <?php the_title(); ?>
        </h2>
      </div>
      <div class="small-12 medium-12 large-12 columns entry-content">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>
<div class="full-width Bordas_download">
  <?php $query = new WP_Query( 'order=asc&category_name=statens-indkob&post_status=publish&paged='. get_query_var('paged')); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="row" data-equalizer="bar">
    <div class="small-12 medium-6 large-6 columns" data-equalizer-watch="bar">
      <?php the_content(); ?>
    </div>
    <div class="small-12 medium-6 large-6 columns brochear" style="background-position: 67%;background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)" data-equalizer-watch="bar">&nbsp;</div>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
<!--2nd Page content Start-->
<div class="full-width" style="padding-top: 2rem;" id="trykkeriaftalen">
  <div class="row" >
    <article>
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline" >
        <?php if(get_field('trykkeriaftalen_title')){  echo '<a >'. get_field('trykkeriaftalen_title').'</a>' ;}?>
        </h2>
      </div>
      <div class="small-12 medium-12 large-12 columns full-width-text">
        <?php if(get_field('trykkeriaftalen_content')){  echo '<p>'. get_field('trykkeriaftalen_content').'</p>' ;}?>
      </div>
    </article>
</div>
<div class="row trykkeriaftalen">
<div class="small-12 medium-12 large-12 columns" data-equalizer>  
  <?php $query = new WP_Query( 'order=asc&category_name=trykkeriaftalen&post_status=publish&paged='. get_query_var('paged')); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?> 
  <div class="panel small-12 medium-6 large-6 columns" data-equalizer-watch>
    <div class="small-12 medium-12 large-12 trykkeriaftalenHeadline columns">
      <h4><?php the_title(); ?></h4>
    </div>
    <div class="small-12 medium-12 large-12 columns text-center">
      <?php the_content(); ?>
    </div>
</div>  
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
</div>
<div class="ttypes">
<div class="row ">
    <?php if(get_field('type_1')){  echo ' <div class="small-12 medium-4 large-4 columns">' . get_field('type_1') . '</div>';}?>
    <?php if(get_field('type_2')){  echo ' <div class="small-12 medium-4 large-4 columns">' . get_field('type_2') . '</div>';}?>
    <?php if(get_field('type_3')){  echo ' <div class="small-12 medium-4 large-4 columns">' . get_field('type_3') . '</div>';}?>
</div>
</div>
</div>
 <div class="row trykkeriaftalen sadan" data-equalizer>
 <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="http://dev.bordingas.dk/sadan-bestiller-du-paa-trykkeriaftalen/" rel="bookmark" title="Permanent Link to Sådan gør du">
          Sådan gør du          </a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns full-width-text">
        <p>For at bestille gennem Trykkeriaftalen kan du&nbsp;benytte én af to modeller:</p>
      </div>
    <div class="small-12 medium-12 large-12 columns">

      <?php $query = new WP_Query( 'order=asc&category_name=sadan-gor-du&post_not_in=array(519)&post_status=publish&paged='. get_query_var('paged')); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="panel small-12 medium-6 large-6 columns" data-equalizer-watch>
        <div class="small-12 medium-12 large-12 columns">
          <h4>
            <?php the_title(); ?>
          </h4>
        </div>
        <div class="small-12 medium-12 large-12 columns text-center">
          <?php the_content(); ?>
        </div>
      </div>
      <?php endwhile;  wp_reset_postdata(); else : ?>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
      <?php endif; ?>
    </div>
  </div>
<!--2nd Page content End -->
<!-- 3rd Page Contnet Start -->
<div class="full-width" style="background: #EFEFEF;padding-top: 2rem;" id="hvorfor">
   <div class="row" >
    <article>
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline" >
        <?php if(get_field('hvorfor_vælge_title')){  echo '<a >'. get_field('hvorfor_vælge_title').'</a>' ;}?>
        </h2>
      </div>
      <div class="small-12 medium-12 large-12 columns full-width-text">
        <?php if(get_field('hvorfor_vælge_content')){  echo '<p>'. get_field('hvorfor_vælge_content').'</p>' ;}?>
      </div>
    </article>
</div>
</div>
<?php $query = new WP_Query( 'order=asc&tag=sadan-gor-du&post_status=publish&paged='. get_query_var('paged')); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<div style="background: #e8e8e8;" data-equalizer>

<div class="middle-post" style="height:530px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)" data-equalizer-watch>
  <div class="row trykkeriaftalen sadangordu divAdj" >
    <div class="small-12 medium-6 large-8 columns" data-equalizer-watch>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
</div>
</div>
<?php $query = new WP_Query( 'order=asc&tag=sadan-gor-du-2&post_status=publish&paged='. get_query_var('paged')); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<div style="background: #e8e8e8;margin-top:40px;" data-equalizer>

<div class="middle-post" style="height:530px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);background-color: #EFEFEF;" data-equalizer-watch>
  <div class="row trykkeriaftalen sadangordu divAdj" >
    <div class="small-12 medium-6 large-8 columns" data-equalizer-watch>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
</div>
</div>
<!-- 3rd Page Content End -->
<div class="kontakt-page ttypes " style="background-color: #F6F6F6;">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h2 class="PageHdline">Kontakt vores eksperter</h2>
      <p class="statensP">-og få uforpligtigende råd, hjælp og vejledning:</p>
    </div>
  </div>
  <div class="row sadan-konakt" data-equalizer>
<div class="small-12 medium-1 large-1 customGap columns" data-equalizer-watch></div>
<?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'statens-indkob', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <div class="small-12 medium-3 large-3 columns" data-equalizer-watch>
      <div class="small-12 medium-12 large-12  columns kontakt-text-block" data-equalizer-watch>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </div>
    </div>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
    <?php if(get_field('bottom_block_text')){  echo ' <div class="small-12 medium-12 large-12 columns left">' . get_field('bottom_block_text') . '</div>';}?>
  </div>
</div>
