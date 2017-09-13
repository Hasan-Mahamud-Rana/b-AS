<?php
/*
Template Name: Nyheder template
*/
?>

<?php get_header(); ?>

<div class="small-12 columns lightbg shadow" id="content" role="main">
		<article>
			<div class="row">
				<div class="small-12 columns">
					
					<!-- This sets the $curauth variable -->
				    <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
					    <div class="small-12 medium-12 large-9 columns authortop">
					    		<div class="small-12 medium-5 large-5 columns">
					    			<?php echo get_wp_user_avatar(); ?>
					    		</div>
					    		<div class="small-12 medium-7 large-7 columns">
					    			<div class="small-12 columns authordesc panel">
					    				<?php echo $curauth->user_description; ?>
					    			</div>
					    			<div class="small-12 columns">
					    				<a class="genericon genericon-linkedin" href="<?php echo $curauth->linkedin; ?>" target="_blank"></a>
					    				<a class="genericon genericon-mail" href="mailto:<?php echo $curauth->user_email; ?>?Subject=Kontakt%20blog" target="_top"></a>
					    			</div>
					    		</div>
					    		<div class="small-12 medium-4 large-4 columns authortitle">
					    			<h3><?php echo $curauth->nickname; ?></h3>
					    			<p><?php echo $curauth->user_lastname; ?></p>
					    		</div>
					    </div>
					    <div class="small-12 medium-12 large-9 columns news">
					    
					    <?php 

					    	if ( is_author('Daniel') ) {
					    		$catname = 'daniel';
					    	} elseif ( is_author('Steen') ) {
					    		$catname = 'steen';
					    	}

					    	$newsquery = new WP_Query( 'category_name='.$catname.'&showposts=6&paged='. $paged);
    						if ( $newsquery->have_posts() ) : while ( $newsquery->have_posts() ) : $newsquery->the_post();
					     ?>
							<div class="newsstory">
								<div class="row">
									<div class="small-12 columns">
										<a href="<?php the_permalink(); ?>"><h3 class="small-12 columns"><?php the_title(); ?></h3></a><div class="small-12 columns"><?php reverie_entry_meta(); ?></div>
									</div>
								</div>
								<div class="row">
									<div class="small-12 medium-4 columns rightmobpad">
										<a class="small-12 columns" href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('small'); } ?> </a>
									</div>
									<div class="small-12 medium-8 columns leftmobpad">
										<div class="small-12 columns leftmobpad">
											<?php echo get_excerpt(); ?> <br>
											<a href="<?php the_permalink(); ?>" class="button tiny">Læs mere</a>
										</div>
									</div>
								</div>
							</div>
							<?php endwhile; ?>
						<?php endif; ?>
				    	</div>
					    <?php get_sidebar(); ?>
	<!-- MERE INDHOLD HER! -->
				</div>
			</div>
		
		</article>
	<!-- Navigation til paging med flere posts -->
	<div class="row">
		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists('news_pagination') ) { news_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
			</nav>
		<?php } ?>
	</div>
<?php wp_reset_query(); ?>
	</div>
<?php get_footer(); ?>