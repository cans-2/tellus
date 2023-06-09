<?php get_header() ?>
<header>
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

    <!-- ハンバーガー -->
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
<main>
    <div class="white-bg"></div>
    <div class="main-img">
        <div class="catchcopy">
            <p class="catchcopy__en">A new experience for your car life.</p>
            <p class="catchcopy__ja">特別な体験をあなたに。</p>
        </div>
    </div>
    </div>
    <section class="concept">
        <div class="concept__left">

            <img src='<?php echo get_template_directory_uri() ?>/assets/images/sec-concept.png' alt="concept">
        </div>
        <div class="concept__right">
            <h2>CONCEPT</h2>
            <div class="concept__right_text">
                <p>あなただけの出会い</p>
                <p>あなただけの相棒</p>
                <p>ここにしかない、「あなただけ」</p>
            </div>
            <div class="concept__right_line"></div>
            <a class="readmore" href="<?php echo get_home_url() ?>/business">Read more →</a>
        </div>

    </section>
    <section class="company">
        <div class="company__left">
            <h2>COMPANY</h2>
            <div class="company__left_text">
                <p>出会いに同席出来る喜び</p>
                <p>他にはない</p>
                <p>こだわりがある</p>
            </div>
            <a class="readmore" href="<?php echo get_home_url() ?>/about">About us →</a>
        </div>
        <div class="company__right">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/sec-company.png" alt="company">
        </div>
    </section>
    <section class="top-contact">
        <h2>CONTACT</h2>
        <p>ゆったりと落ち着いた雰囲気の中でお話を伺います</p>
        <p>ノウハウを活かしてご希望に沿った車をご提供いたします</p>
        <div class="top-contact__tell-form">
            <div class="top-contact__tell">
                <p>電話で</p>
                <p>お問い合わせ</p>
                <div class="top-contact__tell-form-line"></div>
                <p class="phone">052-732-5728</p>
                <p class="hours">平日 10:00 〜 18:00</p>
            </div>
            <div class="top-contact__form">
                <p>お問い合わせ</p>
                <p>フォーム</p>
                <div class="top-contact__tell-form-line"></div>
                <a href="<?php echo get_home_url() ?>/contact">
                    <p>CONTACT FORM</p>
                    <div class="arrow"></div>
                </a>
            </div>
        </div>
    </section>

    <section class="address">
        <div class="address__wrapper">
            <div class="address__left">

                <div class="tellus">
                    <p class="tellus__en">TELLUS</p>
                    <p class="tellus__en">INTERNATIONAL</p>
                    <p class="tellus__ja">有限会社 テルズインターナショナル</p>
                </div>

                <div class="address__left_content">
                    <div class="address__left_content_line"></div>
                    <ul>
                        <li>TEL : 052-732-5728</li>
                        <li>住所 : 〒464-0858</li>
                        <li>愛知県名古屋市千種区千種3丁目35-17吹上インタービル1F/2F</li>
                        <li>アクセス : 吹上駅から徒歩9分</li>
                    </ul>
                </div>
            </div>
            <div class="address__right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.847162310292!2d136.92659281518831!3d35.16043226596468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600370916fb03abf%3A0x2b7637f9a32b0130!2z44CSNDY0LTA4NTgg5oSb55-l55yM5ZCN5Y-k5bGL5biC5Y2D56iu5Yy65Y2D56iu77yT5LiB55uu77yT77yV4oiS77yR77yXIOWQueS4iuOCpOODs-OCv-ODvOODk-ODqw!5e0!3m2!1sja!2sjp!4v1678875919025!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>