<?php get_header(); ?>
<?php
    $title_bg = "style=''";
  if ( has_post_thumbnail() ) {
    $img_url = wp_get_attachment_url( get_post_thumbnail_id() );
    $title_bg = "style='background-image:url(".$img_url.");background-size:cover'";
  }
?>
<div class="header-space"></div>
<div class="jumbotron jumbotron-fluid" <?php echo $title_bg; ?>>
  <div class="container">
      <h1 class="p-heroUnit__title">
        <?php
          $category = get_the_category(); 
          echo $category[0]->cat_name;
        ?>
      </h1>
  </div>
</div>

<div id="content">

<div class="wrap">

  

  <div id="main" <?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    
    <div class="main-inner">
    
    <?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
    ?>
        
    <?php 
    global $post;
    $cf = get_post_meta($post->ID);
    $facebook_page_url = '';
    $facebook_page_url = get_option('facebook_page_url');
    $post_cat = '';
    ?>
    <article id="post-<?php the_id(); ?>" <?php post_class('p-post'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting">

      <header class="p-postHeader">
        <h1 class="h1 p-postHeader__title mb-5" itemprop="headline"><?php the_title(); ?></h1>
        <div class="pb-3">
          <span class="p-postHeader__label">
            <?php
              $category = get_the_category();
              echo $category[0]->cat_name;
            ?>
          </span>
          <span itemprop="datePublished" datetime="<?php the_time('c');?>" class="p-postHeader__date ml-2">
            <?php the_time('Y.m/d');?>
          </span>
        </div>
      </header>

      <section class="p-postContent py-4" itemprop="text">
        <?php the_content(); ?>
      </section>
    </article>
    <div class="row">
      <div class="col-6 p-postContent__link">
        <?php previous_post_link('< %link', '%title'); ?>
      </div>
      <div class="col-6 text-right p-postContent__link">
        <?php next_post_link('%link >', '%title'); ?>
      </div>
    </div>

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

</div><!-- /wrap -->

</div><!-- /content -->

<?php get_footer(); ?>


