<div class="full-width">
  <?php while ( have_posts() ) : the_post(); ?>
    <!-- <div class="full-width-banner" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div> -->
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns full-width-text">
        <?php the_content(); ?>
      </div>
    </article>
</div>
<?php endwhile;?>

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
<div class="kontakt-page ttypes ">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h2 class="PageHdline">Kontakt vores eksperter</h2>
      <p class="sadanP">-og få uforpligtigende råd, hjælp og vejledning:</p>
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