<?php
    /*
    Template Name: メンバーログイン
    */
?>

<?php if(is_user_logged_in()): //ログインしている場合 ?>
    <?php wp_safe_redirect( home_url() );?>
<?php else: //ログインしてない場合?>
    <div class="login">
        <div class="login-left">
            <p class="login-left__title">住まい探しと資産運用を、<br>もっとカンタンに。</p>
        </div>

        <div class="login-right">
            <section class="login-right__form">
                <h1><span>LOGIN</span>ログイン</h1>
                <?php echo do_shortcode('[wpmem_form login redirect_to="/"]'); ?>
                <small class="login-right__copylight">©︎2018-2022 Co., Ltd.</small>
            </section>
        </div>
    </div>
<?php endif;?>


<style>
body{
    margin: 0;
    font-size: 1.0rem;
    font-family: dnp-shuei-gothic-kin-std, YuGothic, "游ゴシック Medium", "Yu Gothic Medium", "游ゴシック", "Yu Gothic", sans-serif;
}
fieldset{
    border: none;
    padding: 0;
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
}
.req{
    display: none;
}
.req-text{
    display: none!important;
}

.login{
    display: flex;
    height: 100vh;
}
.login-left{
    background-image: url(/wp-content/themes/devote/img/top_mv_bg.jpeg);
    width: 50vw;
    height: 100%;
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: center;
    color: #fff;
    padding-left: 70px;
    padding-right: 40px;
    box-sizing: border-box;
}
.login-left__title{
    font-size: 48px;
    line-height: 1.4583333333;
    font-weight: 500;
}
.login-right{
    width: 50vw;
    min-width: 375px;
    height: 100%;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
    flex-direction: column;
    position: relative;
    background-color: #fff;
}
.login-right__form{
    width: 335px;
    background-color: #fff;
}
.login-right__form h1{
    font-weight: 500;
    font-size: 40px;
    line-height: 1.475;
    text-align: center;
    letter-spacing: 0.04em;
    margin: 0 0 24px 0;
    white-space: nowrap;
}
.login-right__form h1 span{
    font-size: 16px;
    line-height: 1.1875;
    color: #8e8e8e;
    font-family: "century-gothic", "Avenir Next", "Century Gothic", sans-serif;
    font-weight: normal;
    display: block;
    margin-bottom: 8px;
}
#log, #pwd{
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
    padding: 24px 0;
    box-shadow: 0 0 8px rgb(0 0 0 / 25%);
    font-weight: 500;
    height: 72px;
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
}
.buttons:hover{
    color: #1f2a34;
    background-color: #fff;
    transition: 0.3s ease-out;
}
.login-right__links{
    font-size: 12px;
    margin-top: 16px;
    margin-bottom: 20px;
    min-height: 1em;
}
.login-right__links a{
    text-decoration: underline;
    color: #111;
}
.login-right__links a:hover{
    text-decoration: none;
}
.login-right__login{
    font-size: 12px;
    margin-top: 16px;
    margin-bottom: 20px;
    min-height: 1em;
    text-align: center;
}
.login-right__login a{
    text-decoration: underline;
    color: #111;
}
.login-right__login a:hover{
    text-decoration: none;
}
.link-text{
    text-align: center;
    margin-top: 15px;
}
.link-text-forgot, .link-text-register{
    font-size: 12px;
    min-height: 1em;
}
.link-text-forgot a, .link-text-register a{
    text-decoration: underline;
    color: #111;
}
.link-text-forgot a:hover, .link-text-register a:hover{
    text-decoration: none;
}
.login-right__copylight{
    font-family: "century-gothic", "Avenir Next", "Century Gothic", sans-serif;
    font-weight: normal;
    font-size: 10px;
    color: #444;
    position: absolute;
    bottom: 2em;
    left: 50%;
    transform: translateX(-50%);
    right: 0;
    text-align: center;
    letter-spacing: 0.05em;
}
</style>