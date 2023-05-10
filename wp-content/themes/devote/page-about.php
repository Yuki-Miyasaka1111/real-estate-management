<?php
    /*
    Template Name: Aboutページ
    */
?>
<?php get_header(); ?>
<?php get_template_part('gnavi') ?>
<main class="about">
    <section class="about-mainvisual">
        <div class="about-mainvisual__inner">
            <nav class="about-mainvisual__breadcrumb">
                <ul>
                    <li class="home"><a href="/">不動産情報サイト Devote</a></li>
                    <li><span>貸す</span></li>
                </ul>
            </nav>
            <div class="about-mainvisual__title">
                <span>ABOUT</span>
                <h1>DEVOTEについて</h1>
            </div>
        </div>
    </section>

    <h1 class="about-title">「こんな不動産屋がいいな」を叶える</h1>
    <section class="about-idea">
        <p>
        Devoteでは、お客様のニーズの本質に寄り添うことを大切にし、お求めの物件を絞ってご紹介をします。
        これまで、多岐にわたる不動産活用のお手伝いをしてきました。圧倒的な実績がお客様を支えられるように、常に最新の情報で多方面の不動産種別にも対応しています。
        </p>
        <img src="/wp-content/themes/devote/img/about_img_01_mv.jpg">
    </section>

    <h1 class="about-title">Voice</h1>
    <section class="about-voice">
        <div class="about-voice__item">
            <img src="/wp-content/themes/devote/img/about_icon_01_voice.svg">
            <p>​所有の一棟ビルをホテルに転用してくださり、オペレーション会社様のご紹介も頂いて、かなりの利回り向上に繋がりました。</p>
        </div>
        <div class="about-voice__item">
            <img src="/wp-content/themes/devote/img/about_icon_02_voice.svg">
            <p>かなり難しい条件での購入依頼をさせていただきましたが、ご丁寧且つ迅速にご対応くださり、求めていた物件を購入することが出来ました。</p>
        </div>
        <div class="about-voice__item">
            <img src="/wp-content/themes/devote/img/about_icon_03_voice.svg">
            <p>事務所移転、そして飲食店の3号店出店と繰り返しお世話頂き大変感謝しております。</p>
        </div>
    </section>

    <section class="about-service">
        <div class="about-service__title">
            <h1>Service</h1>
            <h2>需要と供給のバランスを見極め、<br>一歩先のご提案を。</h2>
        </div>
        <div class="about-service__item">
            <img src="/wp-content/themes/devote/img/lease_img_01.jpg" alt="">
            <div>
                <h1>投資用物件</h1>
                <p>独自のノウハウと、幅広い情報網を駆使し、価値あるコンサルティングをいたします。これから購入予定の方、運用中の方、売却予定の方、どのタイミングの方でもご相談いただけます。常にお客様の立場に立ち、信頼されるパートナーとして、資産運用の最善のアドバイスをいたします。</p>
            </div>
        </div>
        <div class="about-service__item">
            <img src="/wp-content/themes/devote/img/lease_img_02.jpg" alt="">
            <div>
                <h1>住宅用物件</h1>
                <p>何よりもお客様のニーズを第一に、鮮度の高い幅広いご提案をしております。豊富な実績、豊富な情報量に加え、売買も賃貸も対応しております当社ですので、お客様のお探しのご条件に最適な不動産をご提供いたします。</p>
            </div>
        </div>
        <div class="about-service__item">
            <img src="/wp-content/themes/devote/img/lease_img_03.jpg" alt="">
            <div>
                <h1>事業用物件</h1>
                <p>事務所用物件、店舗用物件など、業種を問わず取り扱いしております。新規開業、増床、店舗数拡大などなんでもお任せ下さい。</p>
            </div>
        </div>
        <div class="about-service__item">
            <img src="/wp-content/themes/devote/img/lease_img_02.jpg" alt="">
            <div>
                <h1>用途変更</h1>
                <p>不動産の新しい活用方法のご提案をしております。角度を変え、視点を変え、不動産に新たな息吹を与えるご提案をいたします。</p>
            </div>
        </div>
        <div class="about-service__item">
            <img src="/wp-content/themes/devote/img/lease_img_01.jpg" alt="">
            <div>
                <h1>リフォーム・リノベーション</h1>
                <p>室内の原状回復から、商業施設の内装工事まで、規模の大小問わず行っております​。当社だから出来るプランニングを用意しております。</p>
            </div>
        </div>
    </section>

    <section class="about-contact" id="contact">
        <h1 class="about-contact__title">ご相談はこちら</h1>
        <p class="about-contact__text">
            所有されている物件に関するご相談は、
            フォームを送信いただいた方から順番にご連絡させて頂きます。
            ご入力の前に<a href="#">プライバシーポリシー</a>をご確認ください。
        </p>
        <div class="about-contact__form">
            <?php echo do_shortcode('[contact-form-7 id="456" title="Aboutページお問い合わせフォーム"]'); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>