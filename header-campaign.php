 <!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php if ( is_category() ) {
      echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title( '' ); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Search for &quot;'.esc_html( $s ).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    } elseif ( is_404() ) {
      echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title( '' );
    } else {
      echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
    } ?>
</title>
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>img/icons/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/apple-touch-icon-precomposed.png">
<?php wp_head(); ?>
</head>
<?php
  $bodyColor = get_field( "body_background_color" );
  if( $bodyColor ) {
    $bodyColor = "background-color: " . $bodyColor . ";";
  }
  $bodyImage = get_field( "body_background_image" );
  if( $bodyImage ) {
    $bodyImage = "background-image: url(" . $bodyImage . ");";
  }
  $bodyImageRepeat = get_field( "body_background_image_repeat" );
  if( $bodyImageRepeat ) {
    $bodyImageRepeat = "background-repeat: " . $bodyImageRepeat . ";";
  }
  $bodyImageSize = get_field( "body_background_image_size" );
  if( $bodyImageSize ) {
    $bodyImageSize = "background-size: " . $bodyImageSize . ";";
  }
  $bodyImagePosition = get_field( "body_background_image_position" );
  if( $bodyImagePosition ) {
    $bodyImagePosition = "background-position: " . $bodyImagePosition . ";";
  }

  if( $bodyColor || $bodyImage || $bodyImageRepeat || $bodyImageSize || $bodyImagePosition ) {
    $bodyStyle = "style=" . '"' . $bodyColor . $bodyImage . $bodyImageRepeat . $bodyImageSize . $bodyImagePosition . '"';
  }
?>
<body <?php body_class(); echo $bodyStyle; ?>>
<header class="tt">
  <div class="hShadow">
    <div class="layer">
    <?php get_template_part( 'parts/campaign-top-bar' ); ?>
    </div>
  </div>
</header>
<section class="main-section">