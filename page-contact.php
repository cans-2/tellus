<?php get_header() ?>

<body>
  <div class="contact-page-title">
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
    <div class="contact-page-title__text">
      <h2>Contact</h2>
      <p>お問い合わせ</p>
    </div>
  </div>
  <main>
    <p class="flow">お問い合わせの流れ</p>
    <section class="contact-flow">
      <div class="contact-flow__inner">
        <!-- 1 -->
        <div class="contact-flow__inner_item">
          <div class="contact-flow__inner_item_number">
            <p>01</p>
          </div>
          <div class="contact-flow__inner_item_images">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/item-phone.png" alt="phone" />
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/item-mail.png" alt="mail" />
          </div>
          <div class="contact-flow__inner_item_text">
            <h5>お問い合わせ</h5>
            <div class="contact-flow__inner_item_text_p">
              <p>お電話もしくは、お問い合わせフォームよりご相談ください。</p>
              <p>いただいた内容を確認させていただき、</p>
              <p>面談の日程を決めさせていただきます。</p>
            </div>
          </div>
          <div class="link"><a href="#form">Contact Form →</a></div>
        </div>
        <!-- 2 -->
        <div class="contact-flow__inner_item">
          <div class="contact-flow__inner_item_number">
            <p>02</p>
          </div>
          <div class="contact-flow__inner_item_images">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/item-soudan.png" alt="phone" />
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/item-contract.png" alt="mail" />
          </div>
          <div class="contact-flow__inner_item_text">
            <h5>ご相談・ご契約</h5>
            <div class="contact-flow__inner_item_text_p">
              <p>ゆったりとした空間でお話いただけます。</p>
              <p>ご相談いただいた内容を元に提案させていただきます。</p>
            </div>
          </div>
        </div>
        <!-- 3 -->
        <div class="contact-flow__inner_item">
          <div class="contact-flow__inner_item_number">
            <p>03</p>
          </div>
          <div class="contact-flow__inner_item_images">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/item-memo.png" alt="phone" />
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/item-nousha.png" alt="mail" />
          </div>
          <div class="contact-flow__inner_item_text">
            <h5>納車</h5>
            <div class="contact-flow__inner_item_text_p">
              <p>各種お手続きの後、納車させていただきます。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <a href="tel:052-732-5728">
      <div class="tel-btn">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/phone-white.png" alt="tel" />
        <div class="tel-btn__inner">
          <h6>電話でお問い合わせ</h6>
          <p>052-732-5728</p>
        </div>
      </div>
    </a>


    <section class="contact-form">
      <div class="contact-form__inner">
        <h4>お問い合わせフォーム</h4>
        <div class="contact-form__inner_title">
          <p>お問い合わせをご希望の方は、下記フォームへ必要情報をご入力下さい。</p>
          <p>※入力された個人情報は、個人情報保護方針に沿って厳重に管理、取扱を行います。お問い合わせ前に「<a href="<?php echo get_home_url() ?>/policy">プライバシーポリシー</a>」を必ずお読み下さい。</p>

        </div>
        <div class="contact-form__inner_form">
          <!-- フォーム -->
        <?php echo do_shortcode('[contact-form-7 id="15" title="コンタクトフォーム 1"]'); ?>

          
        </div>
      </div>
    </section>
  </main>

  <?php get_footer() ?>