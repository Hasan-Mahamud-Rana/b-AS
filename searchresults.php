<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<div class="small-12 medium-12 large-9 columns news end">
		<!-- Begin the posts loop -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
			<div class="newsstory">
				<div class="row">
					<div class="small-12 columns">
						<a href="<?php the_permalink(); ?>"><h3 class="small-12 columns"><?php the_title(); ?></h3></a><div class="small-12 columns"><?php reverie_entry_meta(); ?></div>
					</div>
				</div>
				<div class="row">
					
					<div class="small-12 medium-8 columns">
						<div class="small-12 columns">
							<?php echo get_excerpt(); ?> <br>
							<a href="<?php the_permalink(); ?>" class="button tiny">Læs mere</a>
						</div>
					</div>
				</div>
			</div>
		</article>
		<!-- End the posts loop -->
</div>