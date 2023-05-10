<footer class="footer">
    <div class="footer-inner">
        <div class="footer-inner__left">
            <h2>
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/img/devotelogo-black.svg" alt="">
                </a>
            </h2>
            <p>運営会社: 株式会社Devote<br>〒105-0013 東京都港区浜松町2-5-3 リブポート浜松町</p>
        </div>

        <div class="footer-inner__middleLeft">
            <h3>SERVICE</h3>
            <ul>
                <li>
                    <a href="/rent/">借りる</a>
                </li>
                <li>
                    <a href="/buy/">買う</a>
                </li>
                <li>
                    <a href="/sell/">売る</a>
                </li>
                <li>
                    <a href="/lease/">貸す</a>
                </li>
            </ul>
        </div>

        <div class="footer-inner__middleRight">
            <h3>ABOUT</h3>
            <ul>
                <li>
                    <a href="/company/">会社概要</a>
                </li>
                <li>
                    <a href="/about/">Devoteについて</a>
                </li>
            </ul>
        </div>

        <div class="footer-inner__right">
            <ul>
                <li>
                    <a class="RENOSY-cmnfooterV3__contactLink" href="/contact/">お問い合わせ</a>
                </li>
                <?php if(is_user_logged_in()): //ログインしている場合 ?>
                    <li>
                        <a href="<?php echo wp_logout_url(); ?>">ログアウト</a>
                    </li>
                <?php else: //ログインしてない場合?>
                    <li>
                        <a href="/ewgistration">会員登録</a>
                    </li>
                    <li>
                        <a href="/login">ログイン</a>
                    </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>