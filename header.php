<!DOCTYPE HTML>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <title><?php bzb_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php echo get_option('analytics_tracking_code');?>
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
<header id="header" class="l-rootHeader js-rootHeader" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
   <h1>
     <a href="/" class="l-headerImage">
        <img src="<?php echo get_theme_file_uri('dist/fw_logo_001.png'); ?>" alt="FUTUREWOODS">
     </a>
   </h1>
    <div id="" class="clearfix">
      
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



