<?php get_header(); ?>
<div class="row">

	<?php $i = 1; ?>
	<?php if ( have_posts() ) : ?>

		<p><?php the_field('blog_header'); ?></p>

		<?php do_action('foundationPress_before_content'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ($i == 1) { ?>
				<div class="small-12 medium-10 medium-centered large-9 columns" role="main">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header>
							<h6>from <?php the_category(', '); ?></h6>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php FoundationPress_entry_meta(); ?>
						</header>
						<div class="entry-content">
							<?php my_excerpt(110); ?>
						</div>
						<footer>
							<a href="<?php get_the_permalink(); ?>" class="button">Continue reading</a>
						</footer>
					</article>
				</div>
			<?php } elseif ($i == 2) { ?>
				<div class="small-12 medium-6 columns">
					<?php get_template_part( 'excerpt' ); ?>
				</div>
			<?php } else { ?>
				<div class="small-12 medium-6 columns">
					<?php get_template_part( 'excerpt' ); ?>
				</div>
			<?php } ?>

    	<?php $i++; ?>
		<?php endwhile; ?>
		<?php do_action('foundationPress_before_pagination'); ?>

	<?php endif;?>

	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action('foundationPress_after_content'); ?>

</div>
<?php get_footer(); ?>
