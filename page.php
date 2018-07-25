<?php get_header(); ?>

<?php
    $title_bg = "style=''";
  if ( has_post_thumbnail() ) {
    $img_url = wp_get_attachment_url( get_post_thumbnail_id() );
    $title_bg = "style='background-image:url(".$img_url.");background-size:cover'";
  }
?>

<div id="content">
  <div class="jumbotron jumbotron-fluid" <?php echo $title_bg; ?>>
      <div class="container">
          <h1 class="display-4"><?php the_title(); ?></h1>
      </div>
  </div>
<div class="wrap clearfix">

  <div id="main" <?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage">

    <div class="main-inner">

    <?php
			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

        ?>


    <?php $cf = get_post_meta($post->ID); ?>
    <article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/CreativeWork">

      <header class="post-header">
        <h2 class="post-title" itemprop="headline"><?php the_title(); ?></h2>
      </header>


      <section class="post-content" itemprop="text">
        <?php the_content(); ?>
      </section>

      <?php bzb_get_cta($post->ID); ?>

      <div class="post-share">
        <?php dynamic_sidebar('freearea2');?>
      </div>

    </article>

        <?php

				endwhile;

			else :
		?>

    <p>投稿が見つかりません。</p>

    <?php
			endif;
		?>

    </div><!-- /main-inner -->
  </div><!-- /main -->

<?php get_sidebar(); ?>

</div><!-- /wrap -->

</div><!-- /content -->

<?php get_footer(); ?>
