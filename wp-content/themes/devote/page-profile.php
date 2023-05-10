<?php
    /*
    Template Name: メンバープロフィール
    */
?>
<?php get_header(); ?>
<header class="header" id="header" style="position: relative;">
    <div class="header-container">
        <div class="header-logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/devotelogo-black.svg" alt="">
            </a>
        </div>
    </div>
</header>

<main class="profile">
    <div class="profile-main">
        <section class="profile-form">
            <div class="profile-form__inner">
                <?php $url = $_SERVER['REQUEST_URI']; ?>
                <?php if(strstr($url,'?a=edit')): ?>
                    <h1><span>EDIT PROFILE</span>登録情報の編集</h1>
                <?php elseif(strstr($url,'?a=pwdchange')): ?>
                    <h1><span>CHANGE PASSWORD</span>パスワードを変更</h1>
                <?php else: ?>
                    <h1><span>ACCOUNT SETTING</span>アカウント設定</h1>
                <?php endif; ?>
                <?php echo do_shortcode('[wpmem_profile]'); ?>
                <?php if(strstr($url,'?a=edit')): ?>
                    <a href="/profile/" class="buttons">戻る</a>
                <?php elseif(strstr($url,'?a=pwdchange')): ?>
                    <a href="/profile/" class="buttons">戻る</a>
                <?php endif; ?>
                <a href="<?php echo wp_logout_url(); ?>" class="profile-form__button profile-form__button--logout">ログアウト</a>
            </div>
        </section>
    </div>
</main>

<style>
body{
    margin: 0;
    font-size: 1.0rem;
    font-family: dnp-shuei-gothic-kin-std, YuGothic, "游ゴシック Medium", "Yu Gothic Medium", "游ゴシック", "Yu Gothic", sans-serif;
}
#wpmem_login, #wpmem_reg{
    width: 100%;
}
fieldset{
    border: none;
    padding: 0;
    margin: 0 0 40px!important;
}
legend{
    display: none;
}
.wpmem_msg{
    color: red;
    margin: 20px 0;
    font-size: 14px;
}
label{
    font-size: 12px;
    line-height: 1.5;
    color: #444;
    display: block;
    margin-bottom: 8px;
    font-family: dnp-shuei-gothic-kin-std, YuGothic, "游ゴシック Medium", "Yu Gothic Medium", "游ゴシック", "Yu Gothic", sans-serif;
}
.req{
    display: inline-block!important;
    margin-left: 5px;
}
.req-text{
    display: none!important;
}
#fullname, #billing_address_1, #billing_phone, #user_email, #pass1, #pass2{
    width: 100%;
    border: 1px solid #ccc;
    color: #111;
    padding: 10px 16px;
    margin-bottom: 12px;
    box-sizing: border-box;
    font-size: 16px;
    line-height: 1.5;
    border-radius: 3px;
}
.button_div label{
    display: inline;
    vertical-align: middle;
}
.buttons{
    padding: 16px 0;
    margin-bottom: 20px;
    box-shadow: 0 0 8px rgb(0 0 0 / 25%);
    font-weight: 500;
    width: 100%;
    background: #1f2a34 0 0 no-repeat padding-box;
    border: 1px solid #1f2a34;
    border-radius: 3px;
    opacity: 1;
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 14px;
    line-height: 1.5;
    box-sizing: border-box;
    cursor: pointer;
    text-decoration: none;
    margin-top: 16px;
    transition: 0.3s ease-out;
    font-family: dnp-shuei-gothic-kin-std, YuGothic, "游ゴシック Medium", "Yu Gothic Medium", "游ゴシック", "Yu Gothic", sans-serif;
}
.buttons:hover{
    color: #1f2a34;
    background-color: #fff;
    transition: 0.3s ease-out;
}
</style>