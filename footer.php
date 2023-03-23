<footer>
    <?php wp_footer() ?>
    <div class="footer__inner">
        <a href="<?php echo get_home_url()?>">
            <div class="tellus">
                <p class="tellus__en">TELLUS</p>
                <p class="tellus__en">INTERNATIONAL</p>
                <p class="tellus__ja">有限会社 テルズインターナショナル</p>
            </div>
        </a>
        <nav>
            <ul>
                <li><a href="<?php echo get_home_url()?>">Top</a></li>
                <li><a href="<?php echo get_home_url()?>/business">Business</a></li>
                <li><a href="<?php echo get_home_url()?>/about">About us</a></li>
                <li><a href="<?php echo get_home_url()?>/contact">Contact</a></li>
                <li><a href="<?php echo get_home_url()?>/policy">Privacy policy</a></li>
            </ul>
        </nav>
    </div>
    <p class="copy-right">© 2023 TELLUS INTERNATIONAL Inc.</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/assets/js/swiper.js"></script>
    </body>
    </html>