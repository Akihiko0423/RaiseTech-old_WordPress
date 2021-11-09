<?php get_header(); ?>
    <div class = "top-space"></div>
    
    <!--main part-->
    <main>
      <!--背景画像1-->
      <div class = "main-top">
        <!--背景画像2-->
        <div class = "layer1">
          <!--マンガでわかるRaiseTech-->
          <div class = "main-title">
            <div class = "main-title-wrapper">
                <h2><img class = "main-logo" src="<?php echo get_template_directory_uri(); ?>/img/header-logo.svg" alt="RaiseTech"></h2>
                <p class = "main-text">はじめまして。RaiseTech(レイズテック)は<br>最速で「稼げる」エンジニアになるための、<br>実践的なWebエンジニアリングスクールです</p>
                <p class = "btn btn-big">
                  <a href="#">マンガでわかるRaiseTech</a>
                </p>
            </div>
          </div>
          <!--背景画像3-->
          <div class = "layer2"></div>
        </div>
      </div>
      <!--黒背景-->
      <div class = "black-bg">
        <div class = "main-detail">
          <section id = "detail1" class = "detail">
            <div class = "radius">
              <p class = "icon">
                <i class="fa fa-dumbbell fa-7x"></i>
              </p>
            </div>
            <div class = "detail-text">
              <h2>現場主義</h2>
              <p>「プログラム」だけでは稼げない！現場で求められる「技術」のみ教えます。</p>
            </div>
          </section>
          <section id = "detail2" class = "detail">
            <div class = "radius">
              <p class = "icon">
                <i class="fas fa-external-link-alt fa-7x"></i>
              </p>
            </div>
            <div class = "detail-text">
              <h2>現役講師</h2>
              <p>「今、求められている技術」をリアルタイムに教えてくれる、現役の技術者だけが講師です。</p>
            </div>
          </section>
          <section id = "detail3" class  = "detail">
            <div class = "radius">
              <p class = "icon">
                <i class="fab fa-galactic-republic fa-7x"></i>
              </p>
            </div>
            <div class = "detail-text">
              <h2>徹底サポート</h2>
              <p>期間中の質疑応答無制限！個別進捗管理！挫折させないサポートを徹底します。</p>
            </div>
          </section>
        </div>
      </div>
    </main>
    <?php wp_footer(); ?> 
  </body>
</html>