<?php
    /*
    Template Name: トップページ
    */
?>
<?php get_header(); ?>
<?php get_template_part('gnavi') ?>

<main class="top">
    <div class="toppage">
        <div class="top-mv">
            <div class="top-nav">
                <ul class="top-list">
                    <li class="top-list__items">
                        <img src="/wp-content/themes/devote/img/lease_img_01.jpg">
                        <div class="top-list__items--flex">
                            <div>
                                <h1>湾岸エリアに住まう</h1>
                                <h1><span>借りる</span>を探す</h1>
                            </div>
                            <div class="top-list__items--flex___link">
                                <a href="/rent/">賃貸物件検索<span class="linkArrow"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="top-list__items">
                        <img src="/wp-content/themes/devote/img/lease_img_02.jpg">
                        <div class="top-list__items--flex">
                            <div>
                                <h1>湾岸エリアに住まう</h1>
                                <h1><span>買う</span>を探す</h1>
                            </div>
                            <div class="top-list__items--flex___link">
                                <a href="/buy/">賃貸物件検索<span class="linkArrow"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="top-list__items">
                        <img src="/wp-content/themes/devote/img/lease_img_03.jpg">
                        <div class="top-list__items--flex">
                            <div>
                                <h1>湾岸エリアに住まう</h1>
                                <h1><span>売る</span>を探す</h1>
                            </div>
                            <div class="top-list__items--flex___link">
                                <a href="/sell/">賃貸物件検索<span class="linkArrow"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="top-list__items">
                        <img src="/wp-content/themes/devote/img/lease_img_02.jpg">
                        <div class="top-list__items--flex">
                            <div>
                                <h1>湾岸エリアに住まう</h1>
                                <h1><span>貸す</span>を探す</h1>
                            </div>
                            <div class="top-list__items--flex___link">
                                <a href="/lease/">賃貸物件検索<span class="linkArrow"></span></a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="top-nav__left">
                    <p>湾岸エリアのプロフェッショナル<span>What is DEVOTE ?</span></p>
                </div>
            </div>
            <!-- <div class="top-mv__block">
                <div class="top-message">
                    <h1 class="top-message__title">Break<br>Common Sense</h1>
                    <p class="top-message__desc">安心して任せられる不動産屋は、<br>常識を越える提案を持っている</p>
                </div>
            </div>
            <div class="top-service">
                <ul class="top-service__blocks">
                    <li class="service-single">
                        <div class="service-single__img"><img src="/wp-content/themes/devote/img/card_rent.jpg"></div>
                        <p class="service-single__eng">RENT</p>
                        <p class="service-single__jp">借りる</p>
                        <a class="service-single__link" href="/rent/"></a>
                    </li>
                    <li class="service-single">
                        <div class="service-single__img"><img src="/wp-content/themes/devote/img/card_buy.jpg"></div>
                        <p class="service-single__eng">BUY</p>
                        <p class="service-single__jp">買う</p>
                        <a class="service-single__link" href="/buy/"></a>
                    </li>
                    <li class="service-single">
                        <div class="service-single__img"><img src="/wp-content/themes/devote/img/card_sell.jpg"></div>
                        <p class="service-single__eng">SELL</p>
                        <p class="service-single__jp">売る</p>
                        <a class="service-single__link" href="/sell/"></a>
                    </li>
                    <li class="service-single">
                        <div class="service-single__img"><img src="/wp-content/themes/devote/img/card_lease.jpg"></div>
                        <p class="service-single__eng">LEASE</p>
                        <p class="service-single__jp">貸す</p>
                        <a class="service-single__link" href="/lease/"></a>
                    </li>
                </ul>
            </div> -->
            <div class="top-brand">
                <div class="top-brand__box">
                    <ul class="top-brand__items">
                        <li class="top-brand__item"><img src="/wp-content/themes/devote/img/logo_footer_01.png"></li>
                        <li class="top-brand__item"><img src="/wp-content/themes/devote/img/logo_footer_02.png"></li>
                        <li class="top-brand__item"><img src="/wp-content/themes/devote/img/logo_footer_03.png"></li>
                        <li class="top-brand__item"><img src="/wp-content/themes/devote/img/logo_footer_04.png"></li>
                        <li class="top-brand__item"><img src="/wp-content/themes/devote/img/logo_footer_05.png"></li>
                        <li class="top-brand__item"><img src="/wp-content/themes/devote/img/logo_footer_06.png"></li>
                        <li class="top-brand__item"><img src="/wp-content/themes/devote/img/logo_footer_07.png"></li>
                        <li class="top-brand__item"><img src="/wp-content/themes/devote/img/logo_footer_08.png"></li>
                        <li class="top-brand__item"><img src="/wp-content/themes/devote/img/logo_footer_09.png"></li>
                        <li class="top-brand__item"><img src="/wp-content/themes/devote/img/logo_footer_10.png"></li>
                        <li class="top-brand__item"><img src="/wp-content/themes/devote/img/logo_footer_11.png"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="top-search">
            <div class="top-search__block">
                <div class="search-left">
                    <p class="search-left__eng">SEARCH</p>
                    <h2 class="search-left__jp">賃貸・購入物件を探す</h2>
                    <?php
                    $numposts_rent = $wpdb->get_var("SELECT count(*) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'rent'");
                    $numposts_buy = $wpdb->get_var("SELECT count(*) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'buy'");
                    ?>
                    <p class="search-left__text"><?php if (0 < $numposts_rent && 0 < $numposts_buy){
                        $numposts_rent = number_format($numposts_rent);
                        $numposts_buy = number_format($numposts_buy);
                        $numposts_total = $numposts_rent + $numposts_buy;
                        echo '掲載物件数<span class="search-left__num">' . $numposts_total . '</span>件';
                    }
                    ?></p>
                </div>
                <div class="search-right">
                    <p class="search-right__text">条件を指定して検索</p>
                    <button onclick="location.href='/district'"  class="search-right__button">区<br><span class="search-right__smallbutton">から探す</span></button>
                    <button onclick="location.href='/popular'"  class="search-right__button">人気エリア<br><span class="search-right__smallbutton">から探す</span></button>
                </div>
            </div>
        </div>
        <div class="top-latest">
            <div class="top-latest__text">
                <p class="latest-text__eng">LATEST</p>
                <h3 class="latest-text__jp">新着物件</h3>
            </div>
            <div class="top-latest__rent">
                <?php
                $args = [
                    'post_type' => 'rent', // カスタム投稿名が「rent」の場合
                    'posts_per_page' => 4, // 表示する数
                ];
                $my_query = new WP_Query($args); ?>
                <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <?php
                        $thumbnail = wp_get_attachment_image_src(post_custom('thumbnail'),'full' );
                        $public = post_custom('public');
                        $p_name = post_custom('p-name');
                        $rent_price = post_custom('rent_price');
                        $layout_disc = post_custom('layout_disc');
                        $occupied_area = post_custom('occupied_area');
                        $age = post_custom('age');
                        $station1 = post_custom('station1');
                        $station_walk1 = post_custom('station_walk1');
                    ?>
                        <?php if(is_user_logged_in()): //ログインしている場合 ?>
                            <div class="latest-rent__block">
                                <a href="<?php echo get_permalink(); ?>">
                                    <div class="latest-rent__img"> 
                                        <?php if (post_custom('thumbnail')) : ?>
                                            <?php echo wp_get_attachment_image(get_post_meta($post->ID,"thumbnail",true),'full'); ?>
                                        <?php else : ?>
                                            <img src="/wp-content/themes/devote/img/noimage.jpg" style="object-fit:contain;">
                                        <?php endif; ?>
                                    </div>
                                    <h2 class="latest-rent__title"><?php echo $p_name ?></h2>
                                    <ul class="latest-rent__details">
                                        <li class="latest-rent__detail">
                                            <?php $rentPrice = post_custom('rent_price') * 10000; ?>
									        <?php echo number_format($rentPrice); ?>円 / <?php echo $layout_disc ?>(<?php echo $occupied_area ?>㎡) / 築<?php echo $age ?>年
                                        </li>
                                        <li class="latest-rent__detail"><?php echo $station1 ?> 徒歩<?php echo $station_walk1 ?>分</li>
                                    </ul>
                                </a>
                            </div>
                        <?php else: //ログインしてない場合?>
                            <!-- 非公開の物件は非公開と表示 -->
                            <?php if ($public == '非公開'): ?>
                                <div class="latest-rent__block">
                                    <div class="latest-rent__img"> 
                                        <img src="/wp-content/themes/devote/img/unpublic.jpg">
                                    </div>
                                    <h2 class="latest-rent__title">非公開</h2>
                                    <ul class="latest-rent__details">
                                        <li class="latest-rent__detail">非公開</li>
                                    </ul>
                                </div>
                            <!-- 公開してもいい物件は表示 -->
                            <?php else:?>
                                <div class="latest-rent__block">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <div class="latest-rent__img"> 
                                            <?php if (post_custom('thumbnail')) : ?>
                                                <?php echo wp_get_attachment_image(get_post_meta($post->ID,"thumbnail",true),'full'); ?>
                                            <?php else : ?>
                                                <img src="/wp-content/themes/devote/img/noimage.jpg" style="object-fit:contain;">
                                            <?php endif; ?>
                                        </div>
                                        <h2 class="latest-rent__title"><?php echo $p_name ?></h2>
                                        <ul class="latest-rent__details">
                                            <li class="latest-rent__detail">
                                                <?php $rentPrice = post_custom('rent_price') * 10000; ?>
                                                <?php echo number_format($rentPrice); ?>円 / <?php echo $layout_disc ?>(<?php echo $occupied_area ?>㎡) / 築<?php echo $age ?>年
                                            </li>
                                            <li class="latest-rent__detail"><?php echo $station1 ?> 徒歩<?php echo $station_walk1 ?>分</li>
                                        </ul>
                                    </a>
                                </div>
                            <?php endif;?>
                        <?php endif;?>
                    
                    <?php endwhile; ?>
                <?php else: // 投稿がない場合?>
                <p>まだ投稿がありません。</p>
                <?php endif; wp_reset_postdata(); ?>
            </div>

            <div class="top-latest__sale">
                <?php
                $args = [
                    'post_type' => 'buy', // カスタム投稿名が「buy」の場合
                    'posts_per_page' => 4, // 表示する数
                    'meta_value' => '売買',
                ];
                $my_query = new WP_Query($args); ?>
                <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <?php
                        $thumbnail = wp_get_attachment_image_src(post_custom('thumbnail'),'full' );
                        $public = post_custom('public');
                        $p_name = post_custom('p-name');
                        $sale_price = post_custom('sale_price');
                        $layout_disc = post_custom('layout_disc');
                        $occupied_area = post_custom('occupied_area');
                        $age = post_custom('age');
                        $station1 = post_custom('station1');
                        $station_walk1 = post_custom('station_walk1');
                    ?>               
                        <?php if(is_user_logged_in()): //ログインしている場合 ?>
                            <div class="latest-sale__block">
                                <a href="<?php echo get_permalink(); ?>">
                                    <div class="latest-sale__img"> 
                                        <?php if (post_custom('thumbnail')) : ?>
                                            <?php echo wp_get_attachment_image(get_post_meta($post->ID,"thumbnail",true),'full'); ?>
                                        <?php else : ?>
                                            <img src="/wp-content/themes/devote/img/noimage.jpg" style="object-fit:contain;">
                                        <?php endif; ?>
                                    </div>
                                    <h2 class="latest-sale__title"><?php echo $p_name ?></h2>
                                    <ul class="latest-sale__details">
                                        <li class="latest-sale__detail">
                                            <?php $salePrice = number_format(post_custom('sale_price')); ?>
                                            <?php if (strlen($salePrice) >= 6)://カンマの数も含まれているため ?>
                                                <?php echo substr_replace($salePrice, "億", 1, 0) ?>万円
                                            <?php else: ?>
                                                <?php echo $salePrice ?>万円
                                            <?php endif; ?> / <?php echo $layout_disc ?>(<?php echo $occupied_area ?>㎡) / 築<?php echo $age ?>年
                                        </li>
                                        <li class="latest-sale__detail"><?php echo $station1 ?> 徒歩<?php echo $station_walk1 ?>分</li>
                                    </ul>
                                </a>
                            </div>
                        <?php else: //ログインしてない場合?>
                            <?php if ($public == '非公開'): ?>
                                <div class="latest-sale__block">
                                    <div class="latest-sale__img"> 
                                        <img src="/wp-content/themes/devote/img/unpublic.jpg">
                                    </div>
                                    <h2 class="latest-sale__title">非公開</h2>
                                    <ul class="latest-sale__details">
                                        <li class="latest-sale__detail">非公開</li>
                                    </ul>
                                </div>
                            <?php else:?>
                                <div class="latest-sale__block">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <div class="latest-sale__img"> 
                                            <?php if (post_custom('thumbnail')) : ?>
                                                <?php echo wp_get_attachment_image(get_post_meta($post->ID,"thumbnail",true),'full'); ?>
                                            <?php else : ?>
                                                <img src="/wp-content/themes/devote/img/noimage.jpg" style="object-fit:contain;">
                                            <?php endif; ?>
                                        </div>
                                        <h2 class="latest-sale__title"><?php echo $p_name ?></h2>
                                        <ul class="latest-sale__details">
                                            <li class="latest-sale__detail"><?php echo $rent_price ?>0,000円 / <?php echo $layout_disc ?>(<?php echo $occupied_area ?>㎡) / 築<?php echo $age ?>年</li>
                                            <li class="latest-sale__detail"><?php echo $station1 ?> 徒歩<?php echo $station_walk1 ?>分</li>
                                        </ul>
                                    </a>
                                </div>
                            <?php endif;?>
                        <?php endif;?>
                    <?php endwhile; ?>
                <?php else: // 投稿がない場合?>
                <p>まだ投稿がありません。</p>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="top-about">
            <div class="top-about__block">
                <div class="about-left">
                    <p class="about-left__eng">ABOUT DEVOTE</p>
                    <h2 class="about-left__jp">"こんな不動産屋がいいな"<br>を叶える不動産屋</h2>
                    <p class="about-left__text">Devoteでは、お客様のニーズの本質に寄り添うことを大切にし、お求めの物件を絞ってご紹介をします。<br><br>これまで、​​多岐にわたる不動産活用のお手伝いをしてきました。<br>圧倒的な実績がお客様を支えられるように、常に最新の情報で多方面の不動産種別にも対応しています。</p>
                    <button onclick="location.href='/about/'" class="about-left__button">DEVOTEについて</button>
                </div>
                <div class="about-right">
                    <img src="/wp-content/themes/devote/img/about.png">
                </div>
            </div>
        </div>
        <div class="top-owner">
            <div class="top-owner__block">
                <div class="owner-left">
                    <img src="/wp-content/themes/devote/img/platform_iphone.png">
                </div>
                <div class="owner-right">
                    <h2 class="owner-right__title">物件オーナー様はこちらからお問合せください</h2>
                    <ul class="owner-right__features">
                        <li class="owner-right__feature">・ご希望スケジュールでの売却</li>
                        <li class="owner-right__feature">・スピード感のある客付け</li>
                    </ul>
                    <button onclick="location.href='/contact/'" class="owner-right__button">オーナー様お問合せ</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>