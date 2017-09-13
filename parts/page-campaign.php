<?php
  $wrapperColor = get_field( "wrapper_background_color" );
  if( $wrapperColor ) {
    $wrapperColor = "background-color: " . $wrapperColor . ";";
  }
  $wrapperImage = get_field( "wrapper_background_image" );
  if( $wrapperImage ) {
    $wrapperImage = "background-image: url(" . $wrapperImage . ");";
  }
  $wrapperImageRepeat = get_field( "wrapper_background_image_repeat" );
  if( $wrapperImageRepeat ) {
    $wrapperImageRepeat = "background-repeat: " . $wrapperImageRepeat . ";";
  }
  $wrapperImageSize = get_field( "wrapper_background_image_size" );
  if( $wrapperImageSize ) {
    $wrapperImageSize = "background-size: " . $wrapperImageSize . ";";
  }
  $wrapperImagePosition = get_field( "wrapper_background_image_position" );
  if( $wrapperImagePosition ) {
    $wrapperImagePosition = "background-position: " . $wrapperImagePosition . ";";
  }

  if( $wrapperColor || $wrapperImage || $wrapperImageRepeat || $wrapperImageSize || $wrapperImagePosition ) {
    $wrapperStyle = "style=" . '"' . $wrapperColor . $wrapperImage . $wrapperImageRepeat . $wrapperImageSize . $wrapperImagePosition . '"';
  }
?>
<div class="campaign-article">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="row" <?php echo $wrapperStyle; ?>>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="small-12 columns">
				<?php
					the_title('<h2>','</h2>');
				?>
				<div class="row">
					<div class="small-12 meduium-8 large-8 columns">
						<?php
							$subHeadline = get_field( "sub_headline" );
							if( $subHeadline ) {
								echo '<h3>' . $subHeadline . '</h3>';
							}

							the_content();

							$featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
							if( $featuredImage ) {
								echo '<div class="f-image" style="height:250px; background-image: url(' . $featuredImage . ')"></div>';
							}

							$bulletPoints = get_field( "bullet_points" );
							if( $bulletPoints ) {
								echo '<div>' . $bulletPoints . '</div>';
							}
							$nextStep = get_field( "next_step" );
							if( $nextStep ) {
								echo '<h4>' . $nextStep . '</h4>';
							}
						?>
					</div>
					<div class="small-12 meduium-4 large-4 columns contact-form">
						<?php
						$contact_form_label = get_field( "contact_form_label" );
							if( $contact_form_label ) {
								echo '<h3>' . $contact_form_label . '</h3>';
							}
						$contact_form = get_field( "contact_form" );
							if( $contact_form ) {
								echo do_shortcode( $contact_form);
							}
						?>
					</div>
				</div>
				<div class="row testimonialsWrapper">
					<div class="small-12 columns">
						<?php
						$testimonialsLabel = get_field( "testimonials_label" );
						if( $testimonialsLabel ) {
						echo '<h3>' . $testimonialsLabel . '</h3>';
						}
						?>
					</div>
					<div class="small-12 meduium-4 large-4 columns text-center">
						<?php
						$t_image_1 = get_field( "t_image_1" );
						if( $t_image_1 ) {
									echo '<div class="t-image" style="height:160px; background-image: url(' . $t_image_1 . ')">	</div>';
						}
						$t_text_1 = get_field( "t_text_1" );
						if( $t_text_1 ) {
						echo '<p class="text-center">' . $t_text_1 . '</p>';
						}
						?>
					</div>
					<div class="small-12 meduium-4 large-4 columns text-center">
						<?php
						$t_image_2 = get_field( "t_image_2" );
						if( $t_image_2 ) {
									echo '<div class="t-image" style="height:160px; background-image: url(' . $t_image_2 . ')">	</div>';
						}
						$t_text_2 = get_field( "t_text_2" );
						if( $t_text_2 ) {
						echo '<p class="text-center">' . $t_text_2 . '</p>';
						}
						?>
					</div>
					<div class="small-12 meduium-4 large-4 columns text-center">
						<?php
							$t_image_3 = get_field( "t_image_3" );
							if( $t_image_3 ) {
										echo '<div class="t-image" style="height:160px; background-image: url(' . $t_image_3 . ')">	</div>';
							}
							$t_text_3 = get_field( "t_text_3" );
							if( $t_text_3 ) {
							echo '<p class="text-center">' . $t_text_3 . '</p>';
							}
						?>
					</div>
				</div>
				<div class="row ftr">
					<div class="small-12 meduium-8 large-8 columns">
						<?php
							$address = get_field( "address" );
							if( $address ) {
							echo '<p>' . $address . '</p>';
							}
						?>
					</div>
					<div class="small-12 meduium-4 large-4 columns text-right">
						<?php
						$linkedin_link = get_field( "linkedin_link" );
						$facebook_link = get_field( "facebook_link" );
						if( $linkedin_link || $facebook_link ) {
							echo '<ul id="menu-socialiser" class="menu">';
								if( $linkedin_link ) {
									echo '<li id="menu-item-46"><a href="' . $linkedin_link . '"></a></li>';
								}
								if( $facebook_link ) {
									echo '<li id="menu-item-44"><a href="' . $facebook_link . '"></a></li>';
								}
							echo '</ul>';
						}
						?>
					</div>
				</div>
			</div>
		</article>
		<?php endwhile;?>
	</div>
</div>