<!DOCTYPE HTML>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <title><?php bzb_title(); ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

<?php echo get_option('analytics_tracking_code');?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
<?php 
wp_head();
?>
</head>

<body <?php body_class();?> itemschope="itemscope" itemtype="http://schema.org/WebPage">

<?php bzb_show_facebook_block(); ?>

<?php if( is_singular('lp') ) { ?>

<div class="lp-wrap">

<header id="lp-header">
  <h1 class="lp-title"><?php wp_title(''); ?></h1>
</header>

<?php }else{ ?>
<header id="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
  <div class="wrap clearfix">
    <?php
      $logo_image = get_option('logo_image');
      $logo_text = get_option('logo_text');
      if( !empty($logo_image) && get_option('toppage_logo_type') == 'logo_image') :
        $logo_inner = '<img src="'. get_option('logo_image') .'" alt="'.get_bloginfo('name').'" />';
      else:
        if (!empty($logo_text) && get_option('toppage_logo_type') == 'logo_text') :
          $logo_inner = get_option('logo_text');
        else:
          $logo_inner = get_bloginfo('name');
        endif;
        $logo_inner_desc = '<p class="header-description">'.get_bloginfo('description').'</p>';
      endif;
      $logo_wrap = ( is_front_page() || is_home() ) ? 'h1' : 'p' ;
    ?>
    <<?php echo $logo_wrap; ?> id="logo" itemprop="headline">
      <a href="<?php echo home_url(); ?>" class="l-headerImage"><?php echo $logo_inner; ?></a><br />
    </<?php echo $logo_wrap; ?>>    <!-- start global nav  -->
    
    <div id="header-right" class="clearfix">
      
    <?php if( has_nav_menu( 'footer_nav' ) ){ ?>
    
    <div id="header-fnav-area">
      <p id="header-fnav-btn"><a href="#"><?php echo get_option('footer_menu_title'); ?><br /><i class="fa fa-angle-down"></i></a></p>
      <nav id="header-fnav" role="navigation" itemscope="itemscope" itemtype="http://scheme.org/SiteNavigationElement">
      <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'footer_nav',
            'menu_class'      => 'clearfix',
            'menu_id'         => 'fnav-h-ul',
            'container'       => 'div',
            'container_id'    => 'fnav-h-container',
            'container_class' => 'fnav-h-container'
          )
        );?>  
      </nav>
    </div>
    
    <?php } // if footer_nav ?>
    
    <?php if( has_nav_menu( 'global_nav' ) ){ ?>
    <div id="header-gnav-area">
      <nav id="gnav" role="navigation" itemscope="itemscope" itemtype="http://scheme.org/SiteNavigationElement">
      <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'global_nav',
            'menu_class'      => 'clearfix',
            'menu_id'         => 'gnav-ul',
            'container'       => 'div',
            'container_id'    => 'gnav-container',
            'container_class' => 'gnav-container'
          )
        );?>  
      </nav>
    </div>
    <?php } ?>
    
    </div><!-- /header-right -->
    
    <?php if( has_nav_menu('global_nav') || has_nav_menu('footer_nav') ){ ?>
      

      <div id="header-nav-btn">
        <a href="#"><i class="fas fa-bars"></i></a>
      </div>
      
    <?php } ?>
  </div>
</header>
<?php } // if is_singular('lp') ?>


  <nav id="gnav-sp">
    <div class="wrap">
    
    <div class="grid-wrap">
            <div id="header-cont-about" class="grid-3">
          <?php if( has_nav_menu( 'footer_nav' ) ){ 
          
            wp_nav_menu(
              array(
                'theme_location'  => 'footer_nav',
                'menu_class'      => '',
                'menu_id'         => 'fnav',
                'container'       => 'nav',
                'items_wrap'      => '<ul id="footer-nav" class="%2$s">%3$s</ul>'
              )
            );
          } //if footer_nav 
          ?>
        </div>
        <div id="header-cont-content" class="grid-6">
                <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'global_nav',
            'menu_class'      => 'clearfix',
            'menu_id'         => 'gnav-ul-sp',
            'container'       => 'div',
            'container_id'    => 'gnav-container-sp',
            'container_class' => 'gnav-container'
          )
        );?>
        </div>
        
    </div>
    
    </div>
  </nav>



