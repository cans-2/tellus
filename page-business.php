<?php get_header() ?>

<body>
  <div class="business-page-title">
    <header class="header">
      <div class="header__left">
        <a href="<?php echo get_home_url() ?>">

          <h1>TELLUS INTERNATIONAL</h1>
          <p>有限会社テルズインターナショナル</p>
        </a>
      </div>
      <nav class="header__right">
        <ul>
          <li><a href="<?php echo get_home_url() ?>">Top</a></li>
          <li><a href="<?php echo get_home_url() ?>/business">Business</a></li>
          <li><a href="<?php echo get_home_url() ?>/about">About us</a></li>
          <li><a href="<?php echo get_home_url() ?>/contact">Contact</a></li>
        </ul>
      </nav>
      <div class="menu-icon">
        <span class="menu-icon__line"></span>
        <span class="menu-icon__line"></span>
        <span class="menu-icon__line"></span>
    </div>
      <nav class="menu">
        <ul>
            <li><a href="<?php echo get_home_url() ?>">Top</a></li>
            <li><a href="<?php echo get_home_url() ?>/business">Business</a></li>
            <li><a href="<?php echo get_home_url() ?>/about">About us</a></li>
            <li><a href="<?php echo get_home_url() ?>/contact">Contact</a></li>
        </ul>
    </nav>
    <div id="mask"></div>

    </header>
    <div class="business-page-title__text">
      <h2>Business</h2>
      <p>事業内容</p>
    </div>
  </div>
  <main>
    <div class="page-link">
      <div class="page-link__inner">
        <a href="#business-about">事業説明</a>
        <a href="#business-service">取扱について</a>
        <a href="#achievement">取引実績</a>
      </div>
    </div>

    <section class="business-about" id="business-about">
      <div class="business-sec-img">

        <img src="<?php echo get_template_directory_uri() ?>/assets/images/business-about.png" alt="about">
      </div>
      <div class="business-about__inner">
        <div class="business-about__inner_title">
          <div class="sec-title">
            <h3>事業説明</h3>
            <p>About</p>
          </div>
        </div>

        <div class="business-sec-content">
          <h4>あなただけの<br class="business-sec-content_br">「出会い」を</h4>
          <ul>
            <li>主に輸入車を中心に幅広く取り扱っております。</li>
            <li>
              高級車から希少価値の高い車まで、大手の量販店では出会えない車たちがあなたを出迎えます。
            </li>
            <li>
              圧倒的なノウハウが我々の強みです。些細なことでもお聞かせください。
            </li>
            <li>あなたの相棒に、必ず出会わせてみせます。</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="business-service" id="business-service">
      <div class="business-sec-img">

        <img src="<?php echo get_template_directory_uri() ?>/assets/images/business-about.png" alt="about">
      </div>
      <div class="business-service__inner">
        <div class="business-service__inner_title">
          <div class="sec-title">
            <h3>取扱について</h3>
            <p>Service</p>
          </div>
        </div>

        <div class="business-sec-content">
          <h4>その一台にしかない<br class="business-sec-content_br">「特別」を</h4>
          <ul>
            <li>憧れの車をあなたに。</li>
            <li>
              希少価値のある車や市場ではなかなか手に入らなくなった車。
            </li>
            <li>
              弊社の持つノウハウとオークションなどの特別なルートで手配致します。
            </li>
            <li>憧れの車に乗れる体験を提供させていただきます。</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="achievement" id="achievement">
      <div class="achievement__inner">
        <div class="achievement__inner_title">
          <div class="sec-title">
            <h3>取引実績</h3>
            <p>Achievement</p>
          </div>
        </div>
        <div class="swiper">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/carousel-item1.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/carousel-item1.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/carousel-item1.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/carousel-item1.png" alt="">
              </div>
            </div>
            
            <div class="swiper-pagination"></div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer() ?>