<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smartphone.css">
    <?php wp_head(); ?>
    <?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
      header{
        margin-top: 32px;
      }
      @media (max-width:782px){
        header{
          margin-top: 0px;
        }    
      }
    </style>
    <?php endif; ?>
  </head>
    
  <body>
    <!--header part-->
    <header>
      <div class = "header-left">
        <img class = "header-logo" src="<?php echo get_template_directory_uri(); ?>/img/header-logo.svg" alt="header-left">
        <p>最速で<strong>「稼げる」</strong>プロになる<br>エンジニアスクール</p>
      </div>
      <div class = "header-right">
        <!--ハンバーガーボタン-->
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menu-btn"><span></span></label>
        <!--アコーディオン部分-->
        <div class = "header-link">
          <nav>
            <ul>
              <li class = "menu-item">
                <a class = "sub-link" href = "#">はじめての方へ</a>
                <ul class = "sub-menu close acodion">
                  <li><a href="#">マンガでわかるRaiseTech</a></li>
                  <li><a href="#">サポート体制</a></li>
                  <li><a href="#">トライアル受講</a></li>
                  <li><a href="#"> 就職・転職支援活動</a></li>
                  <li><a href="#">ご利用の流れ</a></li>
                </ul>
              </li>
              <li class = "menu-item">
                <a class = "sub-link">コース案内</a>
                <ul class = "sub-menu close acodion">
                  <li><a href="#">マーケティングコース</a></li>
                  <li><a href="#">デザインコース</a></li>
                  <li><a href="#">WordPress副業コース</a></li>
                  <li><a href="#">AWSフルコース</a></li>
                  <li><a href="#">AWS自動化コース</a></li>
                  <li><a href="#">Javaフルコース</a></li>
                  <li><a href="#">Javaフレームワークコース</a></li>
                </ul>                
              </li>
              <li class = "menu-item">
                <a class = "sub-link-lecturer" href="#">講師案内</a>
              </li>
              <li class = "menu-item">
                <a class = "sub-link">卒業生の声・実態</a>
                <ul class = "sub-menu-min close acodion">
                  <li><a href="#">卒業生の声</a></li>
                  <li><a href="#">転職・案件実績</a></li>
                </ul>
              </li>
              <li class = "menu-item">
                <a class = "sub-link">メディア</a>
                <ul class = "sub-menu-min close acodion">
                  <li><a href="#">動画一覧</a></li>
                  <li><a href="#">掲載記事一覧</a></li>
                </ul>                
              </li>
              <li class = "menu-item">
                <a class = "sub-link">サポート</a>
                <ul class = "sub-menu-min close acodion">
                  <li><a href="#">よくあるご質問</a></li>
                  <li><a href="#">お問い合わせ</a></li>
                </ul>   
              </li>
              <li class = "menu-item form apply"><a href="#">受講お申込み</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>