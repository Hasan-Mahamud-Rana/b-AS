<?php
/*
Template Name: BordingAS Frontpage
*/
?>

<?php get_header(); ?>

	
<!-- SLIDER -->
<div class="sliderbg">
	<div class="row">
		<div class="small-12 columns">
			<div class="small-12 columns">
			<ul data-orbit id="slidershow">
				<?php $counter =  0; ?>
				<?php query_posts('category_name=slider-forsiden&showposts=6'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php ++$counter; ?>
				<li data-orbit-slide="slide-<?php echo $counter; ?>" class="slide">
					<!-- slider img-size: 950x332 px -->
					<a href="<?php the_permalink(); ?>" title=""><?php if ( has_post_thumbnail() ) {the_post_thumbnail('slider-img'); } ?></a>
				      <div class="orbit-caption">
				        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				        <div>
				        <!-- get_excerpt function max 300 characters (functions.php) -->
				        <?php the_excerpt(); ?>
				        <a href="<?php the_permalink() ?>" class="tiny button" title="Permanent link to <?php the_title_attribute(); ?>">Læs mere her <img src="<?php echo get_template_directory_uri(); ?>/img/ReadMoreArrow.png" id="sliderarrow" alt="read more"></a>
				        </div>
				      </div>
				</li>
				<!-- Stop The Loop (but note the "else:" - see next line). -->
				<?php endwhile; ?>

				
				<!-- REALLY stop The Loop. -->
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</ul>
			</div>
		</div>
	</div>
</div><!-- /END SLIDER -->


<?php get_footer(); ?>