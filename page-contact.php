<?php get_header(); ?>
<div class="row">
	<div class="small-12 large-8 columns" role="main">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

	<?php endif;?>

	</div>

	<div class="small-12 large-4 columns">
		<p>
			<label>Call Digs</label>
	    <a class="hide-for-large-up" href="tel:1-408-555-5555">1-408-555-5555</a>
	    <a class="show-for-large-up">1-408-555-5555</a>
	  </p>
	  <p>
	  	<label>Email Digs</label>
      <a href="mailto:itsalawthing@oracl.co">itsalawthing@ORACL.co</a>
    </p>
	</div>
</div>

<?php get_footer(); ?>
