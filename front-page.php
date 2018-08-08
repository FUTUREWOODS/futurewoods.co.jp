<?php get_header(); ?>

<div id="main_visual">
  <div class="wrap main-catchcopy">
    <h2><?php echo nl2br(get_option('top_catchcopy'));?></h2>
    <p><?php echo nl2br(get_option('top_description'));?></p>
  </div><!-- .wrap -->
</div>

<div id="content">

  <div id="main">
    <div class="main-inner">

      <div id="popular_post_content" class="front-loop">
        <div class="p-concept">
          <div class="l-title__heading">
            <h2>CONCEPT</h2>
            <div class="l-title__image"></div>
          </div>
          <div class="wrap">
            <div class="p-concept__text">
              <p>「売れる仕組み」とヒトコトで言っても、当たり前ですが、実に多くの要素やプロセスが内包されています。
                「売れる仕組み」の中で「人」がやるべき本質的かつ創造的なパーツはどこなのか？どうすれば、今より少しでも楽で楽しい「営業」に「人」が集中することができるのか？
              <br>・・・といった課題を「科学」というアプローチから、実際プロセスの中の「データ」に着目して支援してゆきたいと思っています。</p>  
            </div><!-- /text -->
          </div><!-- /wrap -->
        </div><!-- p-comcept -->
      </div><!-- popular_post_content -->

      <div id="recent_post_content" class="front-loop front-loop-featureBg">
        <div class="p-feature">
          <div class="l-title__heading">
            <h2>SERVICE</h2>
            <div class="l-title__image--mirror"></div>
          </div>
          <div class="wrap">
            <div class="front-loop-cont">
              <div class="p-feature__lead">
                <p>「実際の売れる仕組みづくり」で役に立つソリューションを生みだすために、
                  <br>私たちは2つの事業を展開し、サービスの開発に取り組んでいます。</p>  
              </div><!-- /text -->
              <div class="row pt-4">
                <div class="col-md-6 col-sm-12 p-feature__line">
                  <div class="p-feature__wrap">
                    <div class="p-feature__items">
                      <div class="p-feature__image--fs mb-4"></div>
                      <h3 class="p-feature__title">FutureSearch事業</h3>
                      <p class="p-feature__text pb-4">
                        営業の新規アプローチの為の企業リストや、既存のお客様に向けてのアップセルの為のフック情報を、
                        探したい条件でリアルタイムあるいは定期的にお届けするサービスです。</p>
                      <p class="btn">
                        <a href="#">詳細はこちら <i class="fas fa-chevron-right"></i></a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="p-feature__wrap">
                    <div class="p-feature__items">
                      <div class="p-feature__image--fs mb-4"></div>
                      <h3 class="p-feature__title">データサイエンス事業</h3>
                      <p class="p-feature__text">
                        データ解析コンサルティングやビッグデータ分析業務、各種データ基盤構築等幅広くサポート。
                        自社のデータ活用がうまく進んでいない、データにより事業をスケールさせたい、
                        散財するデータを一元化して事業成長に役立てたい等のニーズにお応えします。</p>
                      <p class="btn">
                        <a href="#">詳細はこちら <i class="fas fa-chevron-right"></i></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div><!-- /front-root-cont -->

        </div><!-- /wrap -->
      </div><!-- /recent_post_content -->

      <div id="recent_post_content" class="front-loop">
        <div class="p-news">
          <div class="l-title__heading mb-5">
            <h2>NEWS</h2>
            <div class="l-title__image"></div>
          </div>
          <div class="wrap">
            <div class="p-news__wrap">
              <div class="row front-loop-cont">
                <?php
                      $i = 1;
                      wp_reset_query();

                        $args=array(
                            'meta_query'=>
                            array(
                              array(  'key'=>'bzb_show_toppage_flag',
                                         'compare' => 'NOT EXISTS'
                              ),
                              array(  'key'=>'bzb_show_toppage_flag',
                                        'value'=>'none',
                                        'compare'=>'!='
                              ),
                             'relation'=>'OR'
                          ),
                            'showposts'=>6,
                            'order'=>'DESC'
                          );

                      query_posts($args);
                      
                      if ( have_posts() ) :
                        while ( have_posts() ) : the_post();

                        $cf = get_post_meta($post->ID);
                        $recent_class = 'popular_post_box recent-'.$i;
                ?>

                    <div class="p-news col-md-4 col-sm-12 px-4 mb-5">
                      <div class="p-news__items">
                        <article id="post-<?php echo the_ID(); ?>" <?php post_class($recent_class); ?>>
                            <a href="<?php the_permalink(); ?>" class="wrap-a">
                              <div class="row align-items-center no-gutters">
                                <div>
                                  <p class="p_category mr-2">
                                    <?php $cat = get_the_category(); $cat = $cat[0]; {
                                      echo $cat->cat_name;
                                    } ?>
                                  </p>
                                </div>
                                <div>
                                  <p class="p-news__date"><?php the_time('Y'); ?>.<?php the_time('m/j'); ?></p>
                                </div>
                              </div>
                              <h3><?php the_title(); ?></h3>
                            </a>
                        </article>
                      </div>
                    </div>

                  <?php
                          $i++;
                          endwhile;
                        endif;
                  ?>
              </div><!-- /front-root-cont -->
              <a class="btn btn--active" href="#">お知らせ一覧 <i class="fas fa-chevron-right"></i></a>
            </div>

          </div><!-- /wrap -->
        </div>
      </div><!-- /recent_post_content -->



    </div><!-- /main-inner -->
  </div><!-- /main -->
    
</div><!-- /content -->
<?php get_footer(); ?>


