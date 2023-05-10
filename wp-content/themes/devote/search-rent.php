<?php get_header(); ?>
<?php get_template_part('gnavi') ?>

<?php
// searchform.phpから送られてきたパラメーターを取得
$s = $_GET['s'];

$rentDistrict = $_GET['rentDistrict'];
if ($rentDistrict) {
// 絞り込み条件を追加
$taxquerysp[] = array(
    'taxonomy' => 'area',
    'terms' => $rentDistrict, //取得したパラメーターが入る
    'field' => 'slug',
    'operator' => 'IN', //AND:termsで指定した値が配列の場合すべての要素に一致, IN:termsで指定した値が配列の場合いずれかの要素に一致, NOT IN:termsで指定した値（配列の場合はすべての要素）に一致しない
);
}

$area = $_GET['area']; //searchform.phpの<input>のname属性の値と合わせる
if ($area) {
// 絞り込み条件を追加
$taxquerysp[] = array(
    'taxonomy' => 'area',
    'terms' => $area, //取得したパラメーターが入る
    'field' => 'slug',
    'operator' => 'IN', //AND:termsで指定した値が配列の場合すべての要素に一致, IN:termsで指定した値が配列の場合いずれかの要素に一致, NOT IN:termsで指定した値（配列の場合はすべての要素）に一致しない
);
}

$rentPopular = $_GET['rentPopular'];
if ($rentPopular) { // 通常の検索フォームなど$nutrientのクエリが存在しない時はmetaqueryspに追加しない
$metaquerysp[] = array(
    'key' => 'popular-area',
    'value' => $rentPopular,
    'compare' => 'IN',
);
}

// 絞り込み条件を追加
$price_min = $_GET['price_min'];
$price_max = $_GET['price_max'];
if ($price_min && $price_max) {
$metaquerysp[] = array(
    'key'=>'rent_price',
    'value'=>array( $price_min, $price_max ),
    'compare'=>'BETWEEN',
    'type'=>'NUMERIC',
);
}

$layout = $_GET['layout'];
if ($layout) { // 通常の検索フォームなど$nutrientのクエリが存在しない時はmetaqueryspに追加しない
$metaquerysp[] = array(
    'key' => 'layout',
    'value' => $layout,
    'compare' => '=',
);
}

$living = $_GET['living'];
if ($living) { // 通常の検索フォームなど$nutrientのクエリが存在しない時はmetaqueryspに追加しない
$metaquerysp[] = array(
    'key' => 'living',
    'value' => $living,
    'compare' => '>=',
);
}

$size_min = $_GET['size_min'];
$size_max = $_GET['size_max'];
if ($size_min && $size_max) {
$metaquerysp[] = array(
    'key'=>'occupied_area',
    'value'=>array( $size_min, $size_max ),
    'compare'=>'BETWEEN',
    'type'=>'NUMERIC',
);
}

$floor = $_GET['floor'];
if ($floor) {
$metaquerysp[] = array(
    'key' => 'floor',
    'value' => $floor,
    'compare' => '>=',
);
}

$age = $_GET['age'];
if ($age) {
$metaquerysp[] = array(
    'key' => 'age',
    'value' => $age,
    'compare' => '<=',
);
}

$station_walk1 = $_GET['station_walk1'];
if ($station_walk1) {
	$metaquerysp[] = array(
		'key' => 'station_walk1',
		'value' => $station_walk1,
		'compare' => '<=',
	);
}

$utilities_bath = $_GET['utilities_bath'];
if ($utilities_bath) { 
	$metaquerysp[] = array(
		'key' => 'utilities_bath',
		'value' => $utilities_bath,
		'compare' => '=',
	);
}

$utilities_kitchen = $_GET['utilities_kitchen'];
if ($utilities_kitchen) { 
	$metaquerysp[] = array(
		'key' => 'utilities_kitchen',
		'value' => $utilities_kitchen,
		'compare' => '=',
	);
}

$utilities_security = $_GET['utilities_security'];
if ($utilities_security) { 
	$metaquerysp[] = array(
		'key' => 'utilities_security',
		'value' => $utilities_security,
		'compare' => '=',
	);
}

$utilities_room = $_GET['utilities_room'];
if ($utilities_room) { 
	$metaquerysp[] = array(
		'key' => 'utilities_room',
		'value' => $utilities_room,
		'compare' => '=',
	);
}

$utilities_common = $_GET['utilities_common'];
if ($utilities_common) { 
	$metaquerysp[] = array(
		'key' => 'utilities_common',
		'value' => $utilities_common,
		'compare' => '=',
	);
}

$utilities_other = $_GET['utilities_other'];
if ($utilities_other) { 
	$metaquerysp[] = array(
		'key' => 'utilities_other',
		'value' => $utilities_other,
		'compare' => '=',
	);
}


$taxquerysp['relation'] = 'AND'; // AND検索です
$metaquerysp['relation'] = 'AND'; // AND検索です

?>

<?php $url = $_SERVER['REQUEST_URI'];?>
<?php

$args = array(
'post_type' => 'rent',
'posts_per_page' => 10,
'paged' => get_query_var( 'paged', 1 ),
'tax_query' => $taxquerysp,
'meta_query' => $metaquerysp,
's' => $s,
)
?>


<main class="rent">
    <div class="search">
        <div class="search-filter">
        <?php
        $url = $_SERVER['REQUEST_URI'];
            if(strstr($url,'popular')==true):
        ?>
            <?php get_template_part('searchform-filterPopular'); ?>
        <?php elseif(strstr($url,'rentPopular')==true): ?>
            <?php get_template_part('searchform-filterRentPopular'); ?>

        <?php elseif(strstr($url,'rentDistrict')==true): ?>
            <?php get_template_part('searchform-filterRentDistrict'); ?>

        <?php else: ?>
            <?php get_template_part('searchform-filterDistrict'); ?>
        <?php endif; ?>
        </div>

        

        <div class="results">
            <h1>
                <span class="replace-text">
                <?php if(strstr($url,'rentDistrict')==true): ?>
                    <?php if (count($rentDistrict) > 1): ?>
                        <?php echo $rentDistrict[0]; ?>
                        <?php if (empty($area) != true): ?>
                            <?php if (count($area) > 1): ?>
                                <?php echo $area[0]; ?>他
                            <?php else: ?>
                                <?php echo $area[0]; ?>他
                            <?php endif; ?>
                        <?php else: ?>
                            他
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo $rentDistrict[0]; ?>
                        <?php if (empty($area) != true): ?>
                            <?php if (count($area) > 1): ?>
                                <?php echo $area[0]; ?>他
                            <?php else: ?>
                                <?php echo $area[0]; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if(strstr($url,'rentPopular')==true): ?>
                    <?php if (count($rentPopular) > 1): ?>
                        <?php echo $rentPopular[0]; ?>他
                    <?php else: ?>
                        <?php echo $rentPopular[0]; ?>
                    <?php endif; ?>
                <?php endif; ?>

                </span>の高級マンション一覧
            </h1>

            <ul>
                <!-- 借りるー＞区検索の場合 -->
                <?php if(strstr($url,'rentDistrict')==true): ?>
                    <?php $wp_query = new WP_Query($args); ?>
                    <!-- サブループ作成 -->
                    <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <?php if(is_user_logged_in()): //ログインしている場合 ?>
                            <li class="results-item">
                                <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                                    <div class="results-list">
                                        <div class="results-list__img"><a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"><?php echo wp_get_attachment_image(get_post_meta($post->ID, "thumbnail", true), 'thumbnail'); ?></a></div>
                                        <div class="results-list__detail">
                                            <h2 class="results-list__title"><?php echo post_custom('p-name'); ?></h2>
                                            <div class="results-list__price">
                                                <?php if(get_post_meta($post->ID, 'rent_price',true)):?>
                                                    <?php $rentPrice = post_custom('rent_price') * 10000; ?>
                                                    <p>
                                                        <span>賃料</span>
                                                        <?php echo number_format($rentPrice); ?>円
                                                    </p>
                                                    
                                                <?php else: // 入力がない場合 ?>
                                                    <p>賃料  -</p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="results-list__info">
                                                <p><span>間取</span><?php echo post_custom('layout'); ?></p>
                                                <p><span>築年数</span><?php echo post_custom('age'); ?>年</p>
                                                <p><?php echo post_custom('route1'); ?><?php echo post_custom('station1'); ?><?php echo post_custom('station_walk1'); ?>分</p>
                                            </div>
                                            <div class="results-list__buttons">
                                                <?php if(get_post_meta($post->ID, 'rent_price',true)):?>
                                                    <a href="<?php the_permalink(); ?>" class="results-list__btn results-list__btn" target="_blank" rel="noopener noreferrer">賃貸物件</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php else: //ログインしてない場合?>
                            <?php $public = post_custom('public'); ?>
                            <?php if ($public == '非公開'): //非公開の場合?>
                                <li class="results-item">
                                    <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                                        <div class="results-list">
                                            <div class="results-list__img"><a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"><img src="/wp-content/themes/devote/img/unpublic.jpg"></a></div>
                                            <div class="results-list__detail">
                                                <h2 class="results-list__title">非公開</h2>
                                                <div class="results-list__price">
                                                        <p>賃料  -</p>
                                                </div>
                                                <div class="results-list__info">
                                                    <p><span>間取</span> -</p>
                                                    <p><span>築年数</span> -</p>
                                                </div>
                                                <div class="results-list__buttons">
                                                    <?php if(get_post_meta($post->ID, 'rent_price',true)):?>
                                                        <a href="<?php the_permalink(); ?>" class="results-list__btn results-list__btn"  target="_blank" rel="noopener noreferrer">賃貸物件</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php else://公開の場合?> 
                                <li class="results-item">
                                    <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                                        <div class="results-list">
                                            <div class="results-list__img"><a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"><?php echo wp_get_attachment_image(get_post_meta($post->ID, "thumbnail", true), 'thumbnail'); ?></a></div>
                                            <div class="results-list__detail">
                                                <h2 class="results-list__title"><?php echo post_custom('p-name'); ?></h2>
                                                <div class="results-list__price">
                                                    <?php if(get_post_meta($post->ID, 'rent_price',true)):?>
                                                        <?php $rentPrice = post_custom('rent_price') * 10000; ?>
                                                        <p><span>賃料</span><?php echo number_format($rentPrice); ?>円</p>
                                                    <?php else: // 入力がない場合 ?>
                                                        <p>賃料  -</p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="results-list__info">
                                                    <p><span>間取</span><?php echo post_custom('layout'); ?></p>
                                                    <p><span>築年数</span><?php echo post_custom('age'); ?>年</p>
                                                    <p><?php echo post_custom('route1'); ?><?php echo post_custom('station1'); ?><?php echo post_custom('station_walk1'); ?>分</p>
                                                </div>
                                                <div class="results-list__buttons">
                                                    <?php if(get_post_meta($post->ID, 'rent_price',true)):?>
                                                        <a href="<?php the_permalink(); ?>" class="results-list__btn results-list__btn" target="_blank" rel="noopener noreferrer">賃貸物件</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endif;?>
                        <?php endif;?>
                    <?php endwhile; ?>
                    <div class="pagination">
                        <?php the_posts_pagination(
                            array(
                                'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
                                'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                                'prev_text'     => __( '前へ'), // 「前へ」リンクのテキスト
                                'next_text'     => __( '次へ'), // 「次へ」リンクのテキスト
                                'type'          => 'list', // 戻り値の指定 (plain/list)
                            )
                        ); ?>
                    </div>
                    <?php else:?>
                    <div class="results-empty">
                        <p>条件にあう物件がありません。条件を変更して再度検索してください。</p>
                    </div>
                    <?php endif; wp_reset_query(); ?>
                <?php endif; ?>

                <!-- 借りるー＞人気エリア検索の場合 -->
                <?php  if(strstr($url,'rentPopular')==true): ?>
                    <?php $wp_query = new WP_Query($args); ?>
                    <!-- サブループ作成 -->
                    <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <?php if(is_user_logged_in()): //ログインしている場合 ?>
                            <li class="results-item">
                                <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                                    <div class="results-list">
                                        <div class="results-list__img"><a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"><?php echo wp_get_attachment_image(get_post_meta($post->ID, "thumbnail", true), 'thumbnail'); ?></a></div>
                                        <div class="results-list__detail">
                                            <h2 class="results-list__title"><?php echo post_custom('p-name'); ?></h2>
                                            <div class="results-list__price">
                                                <?php if(get_post_meta($post->ID, 'rent_price',true)):?>
                                                    <?php $rentPrice = post_custom('rent_price') * 10000; ?>
                                                    <p><span>賃料</span><?php echo number_format($rentPrice); ?>円</p>
                                                <?php else: // 入力がない場合 ?>
                                                    <p>賃料  -</p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="results-list__info">
                                                <p><span>間取</span><?php echo post_custom('layout'); ?></p>
                                                <p><span>築年数</span><?php echo post_custom('age'); ?>年</p>
                                                <p><?php echo post_custom('route1'); ?><?php echo post_custom('station1'); ?><?php echo post_custom('station_walk1'); ?>分</p>
                                            </div>
                                            <div class="results-list__buttons">
                                                <?php if(get_post_meta($post->ID, 'rent_price',true)):?>
                                                    <a href="<?php the_permalink(); ?>" class="results-list__btn results-list__btn" target="_blank" rel="noopener noreferrer">賃貸物件</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php else: //ログインしてない場合?>
                            <?php $public = post_custom('public'); ?>
                            <?php if ($public == '非公開'): //非公開の場合?>
                                <li class="results-item">
                                    <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                                        <div class="results-list">
                                            <div class="results-list__img"><a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"><img src="/wp-content/themes/devote/img/unpublic.jpg"></a></div>
                                            <div class="results-list__detail">
                                                <h2 class="results-list__title">非公開</h2>
                                                <div class="results-list__price">
                                                        <p>賃料  -</p>
                                                </div>
                                                <div class="results-list__info">
                                                    <p><span>間取</span> -</p>
                                                    <p><span>築年数</span> -</p>
                                                </div>
                                                <div class="results-list__buttons">
                                                    <?php if(get_post_meta($post->ID, 'rent_price',true)):?>
                                                        <a href="<?php the_permalink(); ?>" class="results-list__btn results-list__btn"  target="_blank" rel="noopener noreferrer">賃貸物件</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php else: //公開の場合?>
                                <li class="results-item">
                                    <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                                        <div class="results-list">
                                            <div class="results-list__img"><a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"><?php echo wp_get_attachment_image(get_post_meta($post->ID, "thumbnail", true), 'thumbnail'); ?></a></div>
                                            <div class="results-list__detail">
                                                <h2 class="results-list__title"><?php echo post_custom('p-name'); ?></h2>
                                                <div class="results-list__price">
                                                    <?php if(get_post_meta($post->ID, 'rent_price',true)):?>
                                                        <?php $rentPrice = post_custom('rent_price') * 10000; ?>
                                                        <p>
                                                            <span>賃料</span><?php echo number_format($rentPrice); ?>円</p>
                                                    <?php else: // 入力がない場合 ?>
                                                        <p>賃料  -</p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="results-list__info">
                                                    <p><span>間取</span><?php echo post_custom('layout'); ?></p>
                                                    <p><span>築年数</span><?php echo post_custom('age'); ?>年</p>
                                                    <p><?php echo post_custom('route1'); ?><?php echo post_custom('station1'); ?><?php echo post_custom('station_walk1'); ?>分</p>
                                                </div>
                                                <div class="results-list__buttons">
                                                    <?php if(get_post_meta($post->ID, 'rent_price',true)):?>
                                                        <a href="<?php the_permalink(); ?>" class="results-list__btn results-list__btn" target="_blank" rel="noopener noreferrer">賃貸物件</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endif;?>
                        <?php endif;?>
                    <?php endwhile; ?>
                    <div class="pagination">
                        <?php the_posts_pagination(
                            array(
                                'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
                                'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                                'prev_text'     => __( '前へ'), // 「前へ」リンクのテキスト
                                'next_text'     => __( '次へ'), // 「次へ」リンクのテキスト
                                'type'          => 'list', // 戻り値の指定 (plain/list)
                            )
                        ); ?>
                    </div>
                    <?php else:?>
                    <div class="results-empty">
                        <p>条件にあう物件がありません。条件を変更して再度検索してください。</p>
                    </div>
                    <?php endif; wp_reset_query(); ?>
                <?php endif;?>
            </ul>
        </div>
    </div>

    <div class="refinedSearch">
		<p class="refinedSearch-btn">絞り込み</p>
	</div>
</main>
<?php get_footer(); ?>