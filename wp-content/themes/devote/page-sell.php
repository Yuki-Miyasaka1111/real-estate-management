<?php
    /*
    Template Name: 賃貸売却ページ
    */
?>
<?php get_header(); ?>
<?php get_template_part('gnavi') ?>
<main class="sell">
    <section class="sell-mainvisual">
        <div class="sell-mainvisual__inner">
            <nav class="sell-mainvisual__breadcrumb">
                <ul>
                    <li class="home"><a href="/">不動産情報サイト Devote</a></li>
                    <li><span>売る</span></li>
                </ul>
            </nav>
            <div class="sell-mainvisual__title">
                <span>SELL</span>
                <h1>売る</h1>
            </div>
        </div>
    </section>

    <section class="sell-support">
        <h1>不動産売却サポート</h1>
        <p>
        お客様にとって一番身近なコンシェルジュとして、ご要望・お悩みを第一に考え、相場に応じた売却査定はもちろんのことより最善の売却プランをご提案させていただきます。
        ご所有の不動産の売却相談、価格査定、ローンのご相談など様々なご要望に対応させていただきます。ぜひご気軽にご相談ください。
        </p>
        <a href="#contact" class="property-btn__contact">ご相談はこちらから</a>
    </section>

    <section class="sell-why">
        <h2>WHY DEVOTE?</h2>
        <div class="sell-why__flex">
            <a href="#trading-performance"><img src="/wp-content/themes/devote/img/sell_icon_01.svg" alt=""></a>
            <a href="#property-type"><img src="/wp-content/themes/devote/img/sell_icon_02.svg" alt=""></a>
            <a href="#channel"><img src="/wp-content/themes/devote/img/sell_icon_03.svg" alt=""></a>
        </div>
    </section>

    <section class="sell-item">
        <div class="sell-item__block" id="trading-performance">
            <div class="sell-item__block--flex">
                <img src="/wp-content/themes/devote/img/sell_img_01.jpg">
                <div>
                    <h2>豊富な取引実績</h2>
                    <p>
                        これまでの豊富な売買取引実績から、経験豊富な営業担当者が募集条件や売却プランをご提案させていただきます。
                        売却に関わるご不安やご心配ごとを一つずつ取り除き、ご満足いただけるお手伝いをさせていただきます。
                    </p>
                </div>
            </div>
        </div>

        <div class="sell-item__block" id="property-type">
            <div class="sell-item__block--flex">
                <div>
                    <h2>物件種別不問</h2>
                    <p>
                        一棟ビルや区分マンションはもちろん、戸建て、テナント(オフィス)物件までも幅広く対応可能でございます。法人まるごと売却マッチング(M&A)に関するご相談もお待ちしております。
                    </p>
                </div>
                <img src="/wp-content/themes/devote/img/sell_img_02.jpg">
            </div>
        </div>

        <div class="sell-item__block" id="channel">
            <div class="sell-item__block--flex">
                <img src="/wp-content/themes/devote/img/sell_img_03.jpg">
                <div>
                    <h2>多彩な集客チャネル</h2>
                    <p>
                        当社独自の多彩な集客チャネルとネットワークを駆使し、幅広く購入希望者にアプローチいたします。売主様と買主様それぞれのニーズをマッチングさせるご提案をさせていただきます。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sell-contact" id="contact">
        <h1 class="sell-contact__title">ご相談はこちら</h1>
        <p class="sell-contact__text">
            所有されている物件に関するご相談は、
            フォームを送信いただいた方から順番にご連絡させて頂きます。
            ご入力の前に<a href="#">プライバシーポリシー</a>をご確認ください。
        </p>
        <div class="sell-contact__form">
            <?php echo do_shortcode('[contact-form-7 id="447" title="売却用お問い合わせフォーム"]'); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>