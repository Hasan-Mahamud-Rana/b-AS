<div class="full-width-banner" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
<div class="kontakt-article">
  <?php while ( have_posts() ) : the_post(); ?>
<div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns kontakt-artilce-text">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>
<div class="full-width kontakt kontakt">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <!-- <p>Du kan skrive til Bording A/S via vores kontaktformular nedenunder.<br> Vi glæder os til at høre fra dig.</p> -->
    </div>
    <div class="small-12 medium-12 large-12 text-left"> <?php //echo do_shortcode( '[contact-form-7 id="783" title="Contact Form"]' ); ?> </div>
  </div>
</div>
<div class="kontakt-page">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h4 class="dpt">Vores 3 afdelinger</h4>
    </div>
  </div>
  <div class="row">
  <?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'department', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="small-12 medium-4 large-4 columns">
    <div class="kontakt-text-block">
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
    </div>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
</div>
<div class="Kontakt">
<div class="row" data-equalizer>
  <div class="small-12 medium-12 large-12 columns "><h2 class="PageHdline"><a>Medarbejder Oversigt</a></h2></div>
  <div class="small-12 medium-12 large-12 columns "><h5 class="kntktPageHdline">Ledelse</h5></div>
<?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'ledelse', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="small-6 medium-3 large-2 columns kpdtls" data-equalizer-watch>
    <h5 class="kpname"><?php the_title(); ?></h5>
    <?php the_content(); ?>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
<div class="row" data-equalizer>
  <div class="small-12 medium-12 large-12 columns "><h5 class="kntktPageHdline">Salgsafdeling Søborg</h5></div>
  <?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'salgsafdeling-soborg', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="small-6 medium-3 large-2 columns kpdtls" data-equalizer-watch>
    <h5 class="kpname"><?php the_title(); ?></h5>
    <?php the_content(); ?>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
<div class="row" data-equalizer>
  <div class="small-12 medium-12 large-12 columns "><h5 class="kntktPageHdline">Salgsafdeling Aarhus</h5></div>
  <?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'salgsafdeling-aarhus', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="small-6 medium-3 large-2 columns kpdtls" data-equalizer-watch>
    <h5 class="kpname"><?php the_title(); ?></h5>
    <?php the_content(); ?>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
<div class="row" data-equalizer>
  <div class="small-12 medium-12 large-12 columns "><h5 class="kntktPageHdline">Salgsafdeling Aalborg</h5></div>
  <?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'salgsafdeling-aalborg', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="small-6 medium-3 large-2 columns kpdtls" data-equalizer-watch>
    <h5 class="kpname"><?php the_title(); ?></h5>
    <?php the_content(); ?>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
<div class="row" data-equalizer>
  <div class="small-12 medium-12 large-12 columns "><h5 class="kntktPageHdline">Team Digital</h5></div>
  <?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'team-digital', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="small-6 medium-3 large-2 columns kpdtls" data-equalizer-watch>
    <h5 class="kpname"><?php the_title(); ?></h5>
    <?php the_content(); ?>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
<div class="row" data-equalizer>
  <div class="small-12 medium-12 large-12 columns "><h5 class="kntktPageHdline">Marketing</h5></div>
  <?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'marketing', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="small-6 medium-3 large-2 columns kpdtls" data-equalizer-watch>
    <h5 class="kpname"><?php the_title(); ?></h5>
    <?php the_content(); ?>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
<div class="row" data-equalizer>
  <div class="small-12 medium-12 large-12 columns "><h5 class="kntktPageHdline">Logistik</h5></div>
  <?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'logistik', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="small-6 medium-3 large-2 columns kpdtls" data-equalizer-watch>
    <h5 class="kpname"><?php the_title(); ?></h5>
    <?php the_content(); ?>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
<div class="row" data-equalizer>
  <div class="small-12 medium-12 large-12 columns "><h5 class="kntktPageHdline">Økonomiafdeling</h5></div>
  <?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'okonomiafdeling', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="small-6 medium-3 large-2 columns kpdtls" data-equalizer-watch>
    <h5 class="kpname"><?php the_title(); ?></h5>
    <?php the_content(); ?>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
<div class="row" data-equalizer>
  <div class="small-12 medium-12 large-12 columns "><h5 class="kntktPageHdline">Reception/Sekretær</h5></div>
  <?php $query = new WP_Query( array('order' => 'asc', 'post_type' => 'kontakt-partners', 'kontakt_partner_catagory' => 'receptionsekretaer', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="small-6 medium-3 large-2 columns kpdtls" data-equalizer-watch>
    <h5 class="kpname"><?php the_title(); ?></h5>
    <?php the_content(); ?>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>

</div>