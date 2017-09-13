<?php get_header(); ?>


<!-- Row for main content area -->

	<div class="small-12 large-12 columns lightbg shadow" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<div class="small-12 columns">
			<div class="row">
				<div class=" small-12 columns">
				<header>
						<h1 class="small-12 columns entry-title"><?php the_title(); ?></h1>
						
				</header>
				</div>
			</div>
			<div class="row">
				<div class="small-12 columns">
				<div class="small-12 columns entry-content">
					<?php the_content(); ?>
				</div>
				</div>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
			</footer>
		</div>
		</article>
	<?php endwhile; // End the loop ?>

	</div>


	
		
<?php get_footer(); ?>