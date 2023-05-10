<header class="header" id="header">
    <div class="header-container">
        <div class="header-logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/devotelogo-black.svg" alt="">
            </a>
        </div>
        <div class="header-contents">
            <ul class="menu">
                <li class="menu-single">
                    <a href="/rent/" class="init-bottom">借りる</a>
                </li>
                <li class="menu-single">
                    <a href="/buy/" class="init-bottom">買う</a>
                </li>
                <li class="menu-single">
                    <a href="/sell/" class="init-bottom">売る</a>
                </li>
                <li class="menu-single">
                    <a href="/lease/" class="init-bottom">貸す</a>
                </li>
                <li class="menu-single">
                    <a href="/about/" class="init-bottom">devoteについて</a>
                </li>
                <li class="menu-single">
                    <a href="/company/" class="init-bottom">会社概要</a>
                </li>
                <?php if(is_user_logged_in()): //ログインしている場合 ?>
                    <li class="menu-single mypage">
                        <a>マイページ</a>
                        <div class="mypage-inner">
                            <ul class="mypage-inner__links">
                                <li>
                                    <a href="/profile/">アカウント設定</a>
                                </li>
                                <li>
                                    <a href="<?php echo wp_logout_url(); ?>" class="init-bottom">ログアウト</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                <?php else: //ログインしてない場合?>
                    <li class="menu-single">
                        <a href="/login/" class="init-bottom">ログイン</a>
                    </li>
                    <li class="menu-single">
                        <a href="/registration/" class="init-bottom">新規会員登録</a>
                    </li>
                <?php endif;?>
            </ul>
            <div class="top-contact">
                <a class="top-contact__button" id="btn" href="/contact/">お問い合わせ</a>
            </div>
        </div>
    </div>
</header>

<div class="header-sp">
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav class="header-hamburger">
        <ul class="header-hamburger__other">
            <li><a class="header-hamburger__otherItem header-hamburger__otherItem--bold" href="/">Devote 総合TOP</a></li>
            <li><a class="header-hamburger__otherItem" href="/rent/">借りる</a></li>
            <li><a class="header-hamburger__otherItem" href="/buy/">買う</a></li>
            <li><a class="header-hamburger__otherItem" href="/sell/">売る</a></li>
            <li><a class="header-hamburger__otherItem" href="/lease/">貸す</a></li>
        </ul>
        <ul class="header-hamburger__other">
            <li><a class="header-hamburger__otherItem header-hamburger__otherItem--company" href="/about/">Devoteについて</a></li>
            <li><a class="header-hamburger__otherItem header-hamburger__otherItem--company" href="/company/">会社概要</a></li>
            <li><a class="header-hamburger__otherItem header-hamburger__otherItem--company" href="/profile/">登録情報の変更</a></li>
            <li><a class="header-hamburger__otherItem GAEVENT-common-generalcta-header" href="/support/contact/">お問い合わせ</a></li>
        </ul>
        <ul class="header-hamburger__other">
            <li><a class="header-hamburger__otherItem" rel="nofollow" data-method="delete" href="/logout/">ログアウト</a></li>
        </ul>
    </nav>
    <div id="overlay"></div>
</div>