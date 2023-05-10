<?php
    /*
    Template Name: 賃貸ページ
    */
?>
<?php get_header(); ?>
<?php get_template_part('gnavi') ?>

<main class="top">
    <div class="toppage">
        <div class="top-mv">
            <div class="top-mv__block">
                <div class="top-message">
                    <h1 class="top-message__title">Break<br>Common Sense</h1>
                    <p class="top-message__desc">安心して任せられる不動産屋は、<br>常識を越える提案を持っている</p>
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
                    ?>
                    <p class="search-left__text"><?php if (0 < $numposts_rent){
                        $numposts_rent = number_format($numposts_rent);
                        echo '掲載物件数<span class="search-left__num">' . $numposts_rent . '</span>件';
                    }
                    ?></p>
                </div>
                <div class="search-right">
                    <p class="search-right__text">条件を指定して検索</p>
                    <button onclick="location.href='/rent-district'"  class="search-right__button">区<br><span class="search-right__smallbutton">から探す</span></button>
                    <button onclick="location.href='/rent-popular'"  class="search-right__button">人気エリア<br><span class="search-right__smallbutton">から探す</span></button>
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
                            <?php endif;?>
                        <?php endif;?>
                    <?php endwhile; ?>
                <?php else: // 投稿がない場合?>
                <p>まだ投稿がありません。</p>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>

        <div class="popularArea">
            <div class="popularArea-title">
                <p class="popularArea-title__eng">POPULAR AREA</p>
                <h3 class="popularArea-title__jp">人気エリア</h3>
            </div>
            
            <ul class="popularArea-list">
                <li class="popularArea-item">
                    <a href="/?rentPopular%5B%5D=新橋・浜松町・汐留&s=&post_type=rent">
                        <img src="/wp-content/themes/devote/img/platform_bg.jpeg">
                        <p>新橋<br>浜松町<br>汐留</p>
                    </a>
                </li>
                <li class="popularArea-item">
                    <a href="/?rentPopular%5B%5D=芝・芝公園&s=&post_type=rent">
                        <img src="">
                        <p>芝<br>芝公園</p>
                    </a>
                </li>
                <li class="popularArea-item">
                    <a href="/?rentPopular%5B%5D=勝どき・月島・佃・晴海&s=&post_type=rent">
                        <img src="">
                        <p>勝どき<br>月島<br>佃<br>晴海</p>
                    </a>
                </li>
                <li class="popularArea-item">
                    <a href="/?rentPopular%5B%5D=豊洲・東雲・有明・台場&s=&post_type=rent">
                        <img src="">
                        <p>豊洲<br>東雲<br>有明<br>台場</p>
                    </a>
                </li>
                <li class="popularArea-item">
                    <a href="/?rentPopular%5B%5D=天王洲・大井町・品川シーサイド&s=&post_type=rent">
                        <img src="">
                        <p>天王洲<br>大井町<br>品川シーサイド</p>
                    </a>
                </li>
                <li class="popularArea-item">
                    <a href="/?rentPopular%5B%5D=芝浦・海岸・港南&s=&post_type=rent">
                        <img src="">
                        <p>芝浦<br>海岸<br>港南</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</main>

<?php get_footer(); ?>