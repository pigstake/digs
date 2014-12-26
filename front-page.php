<?php
get_header(); ?>

<header id="homepage-hero" role="banner">
  <div class="row">
    <div class="small-12 medium-10 medium-centered large-9 columns">
      <h1><a>Digs will save you thousands of dollars on your new home.</a></h1>
      <h4 class="subheader">Guaranteed. Isn’t it time for a new kind of real estate broker? You shouldn’t have to compromise on buying your new home.</h4>
      <a role="button" class="large button" href="<?php bloginfo('url'); ?>/contact">Contact Digs</a>
    </div>
  </div>

</header>

  <div class="row">
    <div class="small-12 medium-10 medium-centered large-9 columns" role="main">

    <?php do_action('foundationPress_before_content'); ?>

    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <?php do_action('foundationPress_page_before_entry_content'); ?>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile;?>

    <?php do_action('foundationPress_after_content'); ?>

    </div>

</div>
<?php get_footer(); ?>
