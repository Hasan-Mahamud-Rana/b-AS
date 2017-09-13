<?php
/*
Template Name: Nyheder template
*/
?>

<?php get_header(); ?>

<div class="small-12 columns lightbg shadow" id="content" role="main">
		
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
			<div class="small-12 columns newsimg">
				<div class="small-12 columns">
					<?php if ( has_post_thumbnail() ) {the_post_thumbnail('slider-img'); } ?>

					<?php
					$user = get_user_by( 'login', 'lim' );
					$userid = $user->ID;
					// echo $userid;
					$user_info = get_userdata( $userid ); 

					?>

					<a class="genericon genericon-linkedin" href="<?php echo $user_info->linkedin ?>" target="_blank"></a>
					<a class="genericon genericon-mail" href="mailto:<?php echo $user_info->user_email ?>?Subject=Kontakt%20blog" target="_top"></a>

				</div>
			</div>

			
				<div class="small-12 medium-12 large-9 columns news end">
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
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				
					<!-- Begin the posts loop -->
					<?php $newsquery = new WP_Query( 'category_name=nyheder&showposts=6&paged='. $paged);
    if ( $newsquery->have_posts() ) : while ( $newsquery->have_posts() ) : $newsquery->the_post(); ?>
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
				<!-- End the posts loop -->


				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php if ( function_exists('news_pagination') ) { news_pagination(); } else if ( is_paged() ) { ?>
					<nav id="post-nav">
						<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
						<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
					</nav>
				<?php } ?>
				</div>
<?php get_sidebar(); ?>
				

			</div>
<?php wp_reset_query(); ?>
	</div>
<?php get_footer(); ?>