<?php get_header(); ?>

<?php
    $title_bg = "style=''";
  if ( has_post_thumbnail() ) {
    $img_url = wp_get_attachment_url( get_post_thumbnail_id() );
    $title_bg = "style='background-image:url(".$img_url.");background-size:cover'";
  }
?>
<div class="header-space"></div>
<div class="jumbotron jumbotron-fluid p-heroUnit" <?php echo $title_bg; ?>>
      <div class="container">
          <h1 class="p-heroUnit__title">
            <?php 
              $parent_id = $post->post_parent; 
              $parent_title = get_post($parent_id)->post_title;
              echo $parent_title;
            ?> 
          </h1>
      </div>
</div>
<?php if( !(is_home() || is_front_page() || is_singular('lp') ) ){ ?><!-- パンくずリストここから -->
  
  <div class="breadcrumb-area">
    <div class="l-breadcrumb">
      <?php bzb_breadcrumb(); ?>
    </div>
  </div>
    
<?php } ?><!-- パンくずリストここまで -->


<div id="content">
  <div class="wrap clearfix">

    <div id="main" <?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage">

      <div class="main-inner">

      <?php
  			if ( have_posts() ) :

  				while ( have_posts() ) : the_post();

          ?>


      <?php $cf = get_post_meta($post->ID); ?>
      <article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/CreativeWork">

        <section class="post-content" itemprop="text">
          <?php the_content(); ?>
        </section>

        <?php bzb_get_cta($post->ID); ?>

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
