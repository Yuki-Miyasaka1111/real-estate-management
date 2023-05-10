<?php
    /*
    Template Name: お問い合わせページ
    */
?>
<?php get_header(); ?>
<?php get_template_part('gnavi') ?>

<div class="contact">
    <div class="contact-head">
        <h1>賃貸に関するお問い合わせ</h1>
    </div>
    <div class="contact-tel">
        <h2 class="contact-tel__h2">お電話でのお問い合わせはこちら</h2>
        <a href="" class="contact-tel__link">
            <p class="contact-tel__text1">
                <span></span>
                0120-123-123
            </p>
            <p>電話受付 24時間 年中無休</p>
        </a>
    </div>

    <div class="contact-inner">
        <section>
            <?php echo do_shortcode('[contact-form-7 id="14" title="お問い合わせフォーム"]'); ?>
        </section>
    </div>
</div>
<?php get_footer(); ?>