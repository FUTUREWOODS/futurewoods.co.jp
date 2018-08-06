<?php get_header(); ?>
<?php
    $title_bg = "style=''";
  if ( has_post_thumbnail() ) {
    $img_url = wp_get_attachment_url( get_post_thumbnail_id() );
    $title_bg = "style='background-image:url(".$img_url.");background-size:cover'";
  }
?>
<div class="jumbotron jumbotron-fluid" <?php echo $title_bg; ?>>
      <div class="container">
          <h1 class="p-heroUnit__title"><?php bzb_title(); ?></h1>
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

<div class="wrap">

  <div id="main" <?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    <div class="main-inner">
    
    <div class="l-title__heading">
      <h2 class="h2"><?php bzb_title(); ?>一覧</h2>
      <div class="l-title__image"></div>
    </div>
    <div class="p-postForm nav justify-content-end">
    　<form class="form-inline">
        <div class="form-group mb-2">
          カテゴリ:
            <?
            $args = array(
              'show_option_all' => 'すべて',
              'option_none_value' => '',
              'orderby' => 'id',
              'class' => 'form-control form-control-sm ml-2',
              'taxonomy' => 'news',
              'name' => 'news',
              'value_field' => 'slug',
            );
            wp_dropdown_categories($args);
          ?>
        </div>
        <div class="form-group mx-sm-3 mb-2">
          年度:
          <?
            $args = array(
              'show_option_all' => 'すべて',
              'option_none_value' => '',
              'orderby' => 'id',
              'class' => 'form-control form-control-sm ml-2',
              'taxonomy' => 'news',
              'name' => 'news',
              'value_field' => 'slug',
            );
            wp_dropdown_categories($args);
          ?>
        </div>
      </form>
    </div>
    <div class="post-loop-wrap">

    <?php if( is_category() ) { ?>
        <?php bzb_category_description(); ?>
    <?php } ?>

    <?php

			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

        $cf = get_post_meta($post->ID); ?>
    <article id="post-<?php echo the_ID(); ?>" <?php post_class('p-post'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting">

      <header class="post-header">
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

      <div class="p-postContent">
        <a href="<?php the_permalink(); ?>">
          <h3 class="h3 p-postContent__head mb-3" itemprop="headline">
            <?php the_title(); ?>
          </h3>
          <p><?php the_content() ?></p>
        </a>
      </div>

    </article>

    <?php

				endwhile;

			else :
		?>

    <article id="post-404"class="cotent-none post" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
      <section class="post-content" itemprop="text">
        <?php echo get_template_part('content', 'none'); ?>
      </section>
    </article>
    <?php
			endif;
		?>

<?php if (function_exists("pagination")) {
    pagination($wp_query->max_num_pages);
} ?>

    </div><!-- /post-loop-wrap -->



    </div><!-- /main-inner -->
  </div><!-- /main -->

<?php get_sidebar(); ?>

</div><!-- /wrap -->

</div><!-- /content -->

<?php get_footer(); ?>


