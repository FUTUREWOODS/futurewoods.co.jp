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
        <div class="p-comcept">
          <div class="p-comcept__heading">
            <h2>COMCEPT</h2>
            <img src="./src/images/titleUl.png" alt="">
          </div>
          <div class="wrap">
            <div class="p-comcept__text">
              <p>「売れる仕組み」とヒトコトで言っても、当たり前ですが、実に多くの要素やプロセスが内包されています。
                「売れる仕組み」の中で「人」がやるべき本質的かつ創造的なパーツはどこなのか？どうすれば、今より少しでも楽で楽しい「営業」に「人」が集中することができるのか？
              <br>・・・といった課題を「科学」というアプローチから、実際プロセスの中の「データ」に着目して支援してゆきたいと思っています。</p>  
            </div><!-- /text -->
          </div><!-- /wrap -->
        </div><!-- p-comcept -->
      </div><!-- popular_post_content -->

      <div id="recent_post_content" class="front-loop front-loop-serviceBg">
        <div class="p-comcept__heading">
          <h2>SERVICE</h2>
          <img src="./src/images/titleUl.png" alt="">
        </div>
        <div class="wrap">
          <div class="front-loop-cont">
            <div class="p-service__lead">
              <p>「実際の売れる仕組みづくり」で役に立つソリューションを生みだすために、
                <br>私たちは2つの事業を展開し、サービスの開発に取り組んでいます。</p>  
            </div><!-- /text -->
            <div class="row">
              <div class="col-6">
                <a class="btn btn-primary" href="#">詳細はこちら</a>
              </div>
              <div class="col-6"></div>
            </div>


          </div><!-- /front-root-cont -->

        </div><!-- /wrap -->
      </div><!-- /recent_post_content -->

      <div id="recent_post_content" class="front-loop">
        <div class="p-comcept__heading">
          <h2>NEWS</h2>
          <img src="./src/images/titleUl.png" alt="">
        </div>
        <div class="wrap">
          <div class="front-loop-cont">
            <div class="">
              <p>ニュース記事一覧</p>
              <a class="btn btn--primary" href="#">詳細はこちら</a>
            </div><!-- /text -->
            <div class="row">
              <div class="col-4"></div>
              <div class="col-4"></div>
              <div class="col-4"></div>
            </div>


          </div><!-- /front-root-cont -->

        </div><!-- /wrap -->
      </div><!-- /recent_post_content -->



    </div><!-- /main-inner -->
  </div><!-- /main -->
    
</div><!-- /content -->
<?php get_footer(); ?>


