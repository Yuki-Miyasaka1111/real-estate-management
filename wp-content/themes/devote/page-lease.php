<?php
    /*
    Template Name: 賃貸管理ページ
    */
?>
<?php get_header(); ?>
<?php get_template_part('gnavi') ?>
<main class="lease">
    <section class="lease-mainvisual">
        <div class="lease-mainvisual__inner">
            <nav class="lease-mainvisual__breadcrumb">
                <ul>
                    <li class="home"><a href="/">不動産情報サイト Devote</a></li>
                    <li><span>貸す</span></li>
                </ul>
            </nav>
            <div class="lease-mainvisual__title">
                <span>LEASE</span>
                <h1>貸す</h1>
            </div>
        </div>
    </section>

    <section class="lease-support">
        <h1>不動産活用サポート</h1>
        <p>
            お客様にとって一番身近なコンシェルジュとして、ご要望・お悩みを第一に考え、賃貸に関わる不安やお悩みに寄り添った、不動産活用のご提案をさせていただきます。
            賃貸条件の設計、募集はもちろん、その後の管理なども含めてよりよいプランをご用意しております。ぜひご気軽にご相談ください。
        </p>
        <a href="#contact" class="property-btn__contact">ご相談はこちらから</a>
    </section>

    <section class="lease-why">
        <h2>WHY DEVOTE?</h2>
        <div class="lease-why__flex">
            <a href="#attracting-customers"><img src="/wp-content/themes/devote/img/lease_icon_01.svg" alt=""></a>
            <a href="#management"><img src="/wp-content/themes/devote/img/lease_icon_02.svg" alt=""></a>
            <a href="#analysis"><img src="/wp-content/themes/devote/img/lease_icon_03.svg" alt=""></a>
        </div>
    </section>

    <section class="lease-item">
        <div class="lease-item__block" id="attracting-customers">
            <div class="lease-item__block--flex">
                <img src="/wp-content/themes/devote/img/lease_img_01.jpg">
                <div>
                    <h2>スピーディな集客</h2>
                    <p>当社独自の多彩な集客チャネルとネットワーク、提携企業・同業他社とのリレーションを駆使し、スピーディな入居者集客を実現。空室リスクを最大限低減いたします。</p>
                </div>
            </div>
        </div>

        <div class="lease-item__block" id="management">
            <div class="lease-item__block--flex">
                <div>
                    <h2>安心の運用管理</h2>
                    <p>契約締結業務並びに資料作成、募集条件やリーシング計画、賃貸管理プラン、集金管理や室内設備故障などの緊急トラブル対応など、不動産運用をする上での様々な賃貸管理サービスをご提案いたします。</p>
                </div>
                <img src="/wp-content/themes/devote/img/lease_img_02.jpg">
            </div>
        </div>

        <div class="lease-item__block" id="analysis">
            <div class="lease-item__block--flex">
                <img src="/wp-content/themes/devote/img/lease_img_03.jpg">
                <div>
                    <h2>調査・分析・提案力</h2>
                    <p>これまでの取引から得られた豊富な情報、実績、経験、スキルを基にエリア特性や周辺物件のマーケティング、将来の動向予測などを調査、シミュレーションの上、的確な分析を実施いたします。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="lease-contact" id="contact">
        <h1 class="lease-contact__title">ご相談はこちら</h1>
        <p class="lease-contact__text">
            所有されている物件に関するご相談は、
            フォームを送信いただいた方から順番にご連絡させて頂きます。
            ご入力の前に<a href="#">プライバシーポリシー</a>をご確認ください。
        </p>
        <div class="lease-contact__form">
            <?php echo do_shortcode('[contact-form-7 id="453" title="貸す用お問い合わせフォーム"]'); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>