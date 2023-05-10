<?php
$district = $_GET['district'];
if ($district) {
// 絞り込み条件を追加
$taxquerysp[] = array(
	'taxonomy' => 'area',
	'terms' => $district, //取得したパラメーターが入る
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
?>

<form role="searchform" method="get" class="searchform-filterDistrict" id="searchform-filterDistrict" action="<?php bloginfo('url'); ?>">
    <!-- modalエリア -->
    <div class="modal js-modalArea">
        <div class="modal-inner">
            <?php $tax_posts = get_posts(array('post_type' => get_post_type(), 'taxonomy' => $taxonomy_name ) );?>
            <!-- modalヘッダー -->
            <div class="modal-header">
                <h2 class="modal-header__title">町名を選択</h2>
                <span></span>
                <span class="modal-header__close js-modalArea-close"></span>
            </div>

            <!-- modalボディー -->
            <div class="modal-body">
                <div class="modal-area">
                    <!-- 区名 -->
                    <ul class="area-list" style="margin: 0 auto;">
                        <!-- 港区 -->
                        <?php $term = get_term(3035 , 'area'); ?>
                        <li class="area-list__item">
                            <label>
                                <input id="parent1" class="disabled parent" type="checkbox" onclick="chkdisp(this, 'item1')" name="district[]" value="<?php echo $term->name; //ターム名 ?>" <?php if(isset($_GET['district']) && in_array('港区', $_GET['district'])): ?>checked="checked"<?php endif; ?>>
                                <span><p><?php echo $term->name; //ターム名 ?></p></span>
                            </label>
                        </li>

                        <!-- 中央区 -->
                        <?php $term = get_term(3030 , 'area'); ?>
                        <li class="area-list__item">
                            <label>
                                <input id="parent2" class="disabled parent" type="checkbox" onclick="chkdisp(this, 'item2')" name="district[]" value="<?php echo $term->name; //ターム名 ?>" <?php if(isset($_GET['district']) && in_array('中央区', $_GET['district'])): ?>checked="checked"<?php endif; ?>>
                                <span><p><?php echo $term->name; //ターム名 ?></p></span>
                            </label>
                        </li>

                        <!-- 品川区 -->
                        <?php $term = get_term(3041 , 'area'); ?>
                        <li class="area-list__item">
                            <label>
                                <input id="parent3" class="disabled parent" type="checkbox" onclick="chkdisp(this, 'item3')" name="district[]" value="<?php echo $term->name; //ターム名 ?>" <?php if(isset($_GET['district']) && in_array('品川区', $_GET['district'])): ?>checked="checked"<?php endif; ?>>
                                <span><p><?php echo $term->name; //ターム名 ?></p></span>
                            </label>
                        </li>

                        <!-- 江東区 -->
                        <?php $term = get_term(3708 , 'area'); ?>
                        <li class="area-list__item">
                            <label>
                                <input id="parent4" class="disabled parent" type="checkbox" onclick="chkdisp(this, 'item4')" name="district[]" value="<?php echo $term->name; //ターム名 ?>" <?php if(isset($_GET['district']) && in_array('江東区', $_GET['district'])): ?>checked="checked"<?php endif; ?>>
                                <span><p><?php echo $term->name; //ターム名 ?></p></span>
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="modal-district">
                    <ul>
                        <div class="modal-area__item"  id="item1" <?php if(isset($_GET['district']) && in_array('港区', $_GET['district'])): ?>style="display: block!important;"<?php endif; ?>>
                            <!-- 港区 町一覧-->
                            <?php $term = get_term(3035 , 'area'); ?>
                            <h3><?php echo $term->name;?></h3>
                            <ul>
                                <?php
                                $taxonomy_name = 'area'; //※point1
                                $term_id = 3035; //※point2
                                $termchildren = get_term_children( $term_id, $taxonomy_name );
                                if(!is_wp_error($termchildren) && count($termchildren)):
                                    foreach ( $termchildren as $child ) :
                                    $term = get_term_by( 'id', $child, $taxonomy_name );
                                        if($tax_posts):?>
                                        <li>
                                            <label>
                                                <input data-parent="parent1" class="area-checkbox child" type="checkbox" name="area[]" value="<?php echo $term->name; ?>" <?php if(isset($_GET['area']) && in_array($term->name, $_GET['area'])): ?>checked<?php endif; ?>>
                                                <span>
                                                    <p><?php echo $term->name; //ターム名 ?></p>
                                                </span>
                                            </label>
                                        </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <div class="modal-area__item"  id="item2" <?php if(isset($_GET['district']) && in_array('中央区', $_GET['district'])): ?>style="display: block!important;"<?php endif; ?>>
                            <!-- 中央区 町一覧-->
                            <?php $term = get_term(3030 , 'area'); ?>
                            <h3><?php echo $term->name;?></h3>
                            <ul>
                                <?php
                                $taxonomy_name = 'area'; //※point1
                                $term_id = 3030; //※point2
                                $termchildren = get_term_children( $term_id, $taxonomy_name );
                                if(!is_wp_error($termchildren) && count($termchildren)):
                                    foreach ( $termchildren as $child ) :
                                    $term = get_term_by( 'id', $child, $taxonomy_name );
                                        if($tax_posts):?>
                                        <li>
                                            <label>
                                                <input data-parent="parent2" class="area-checkbox child" type="checkbox" name="area[]" value="<?php echo $term->name; ?>" <?php if(isset($_GET['area']) && in_array($term->name, $_GET['area'])): ?>checked<?php endif; ?>>
                                                <span>
                                                    <p><?php echo $term->name; //ターム名 ?></p>
                                                </span>
                                            </label>
                                        </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <div class="modal-area__item"  id="item3" <?php if(isset($_GET['district']) && in_array('品川区', $_GET['district'])): ?>style="display: block!important;"<?php endif; ?>>
                            <!-- 品川区 町一覧-->
                            <?php $term = get_term(3041 , 'area'); ?>
                            <h3><?php echo $term->name;?></h3>
                            <ul>
                                <?php
                                $taxonomy_name = 'area'; //※point1
                                $term_id = 3041; //※point2
                                $termchildren = get_term_children( $term_id, $taxonomy_name );
                                if(!is_wp_error($termchildren) && count($termchildren)):
                                    foreach ( $termchildren as $child ) :
                                    $term = get_term_by( 'id', $child, $taxonomy_name );
                                        if($tax_posts):?>
                                        <li>
                                            <label>
                                                <input data-parent="parent3" class="area-checkbox child" type="checkbox" name="area[]" value="<?php echo $term->name; ?>" <?php if(isset($_GET['area']) && in_array($term->name, $_GET['area'])): ?>checked<?php endif; ?>>
                                                <span>
                                                    <p><?php echo $term->name; //ターム名 ?></p>
                                                </span>
                                            </label>
                                        </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <div class="modal-area__item"  id="item4" <?php if(isset($_GET['district']) && in_array('江東区', $_GET['district'])): ?>style="display: block!important;"<?php endif; ?>>
                            <!-- 江東区 町一覧-->
                            <?php $term = get_term(3708 , 'area'); ?>
                            <h3><?php echo $term->name;?></h3>
                            <ul>
                                <?php
                                $taxonomy_name = 'area'; //※point1
                                $term_id = 3708; //※point2
                                $termchildren = get_term_children( $term_id, $taxonomy_name );
                                if(!is_wp_error($termchildren) && count($termchildren)):
                                    foreach ( $termchildren as $child ) :
                                    $term = get_term_by( 'id', $child, $taxonomy_name );
                                        if($tax_posts):?>
                                        <li>
                                            <label>
                                                <input data-parent="parent4" class="area-checkbox child" type="checkbox" name="area[]" value="<?php echo $term->name; ?>" <?php if(isset($_GET['area']) && in_array($term->name, $_GET['area'])): ?>checked<?php endif; ?>>
                                                <span>
                                                    <p><?php echo $term->name; //ターム名 ?></p>
                                                </span>
                                            </label>
                                        </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>

            <!-- modalフッター -->
            <div class="modal-footer">
                <div class="modal-footer__buttons">
                    <button type="button" class="modal-buttons__districtBtn modal-buttons modal-buttons__searchBtn button-disabled btn3">町名を選択へ</button>
                    <input type="hidden" name="s" value="<?php if(get_search_query()) echo get_search_query() ?>">
                    <button class="modal-buttons modal-buttons button-disabled btn3" type="submit">検索する</button>
                </div>
            </div>
        </div>
        <div class="modal-bg js-modalArea-close"></div>
    </div>


    <!-- さらに絞り込む場合のチェックボックス -->
    <div class="modal js-modalAddFilter">
        <div class="modal-inner">
            <?php $tax_posts = get_posts(array('post_type' => get_post_type(), 'taxonomy' => $taxonomy_name ) );?>
            <!-- modalヘッダー -->
            <div class="modal-header">
                <h2>条件の追加・変更</h2>
                <span></span>
                <span class="modal-header__close js-modalAddFilter-close"></span>
            </div>

            <!-- modalボディー -->
            <div class="modal-body">
                <?php get_template_part('additional-filter') ?>
            </div>

            <!-- modalフッター -->
            <div class="modal-footer">
                <div class="modal-footer__buttons">
                    <button type="button" class="modal-buttons button-disabled btn3 js-modalAddFilter-close">戻る</button>
                    <input type="hidden" name="s" value="<?php if(get_search_query()) echo get_search_query() ?>">
                    <button class="modal-buttons__searchBtn modal-buttons button-disabled btn3" type="submit">検索する</button>
                </div>
            </div>
        </div>
        <div class="modal-bg js-modalAddFilter-close"></div>
    </div>








    <!-- 絞り込み検索エリア選択 -->
    <?php $tax_posts = get_posts(array('post_type' => get_post_type(), 'taxonomy' => $taxonomy_name ) );?>
    <div class="searchform-sidebar">
        <div class="searchform-filter">
            <h2 class="searchform-heading">絞り込み検索</h2>

            <div class="js-modalArea-open searchform-area">
                <dl class="searchform-area__dl">
                    <dt class="searchform-area__dt">
                        <span class="searchform-area__icon"><img src="/wp-content/themes/devote/img/searchform-filter__icon_map.svg" alt=""></span>
                    </dt>
                    <dd class="searchform-area__dd">
                        <div class="searchform-area__name replace-text">
                            <span>
                                <?php if (count($district) > 1): ?>
                                    <?php echo $district[0]; ?>
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
                                    <?php echo $district[0]; ?>
                                    <?php if (empty($area) != true): ?>
                                        <?php if (count($area) > 1): ?>
                                            <?php echo $area[0]; ?>他
                                        <?php else: ?>
                                            <?php echo $area[0]; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </span>
                        </div>
                        <span class="searchform-area__change">変更</span>
                    </dd>
                </dl>
            </div>
            <section class="modal-SBfilter__unit">
                <h3>賃料</h3>
                <div class="modal-SBfilter__unitArea">
                    <label class="modal-SBfilter__selectbox" for="s">
                        <select name="price_min">
                            <option selected="selected" value="0">下限なし</option>
                            <option value="15">15万円</option>
                            <option value="18">18万円</option>
                            <option value="20">20万円</option>
                            <option value="25">25万円</option>
                            <option value="30">30万円</option>
                            <option value="40">40万円</option>
                            <option value="50">50万円</option>
                            <option value="60">60万円</option>
                            <option value="70">70万円</option>
                            <option value="80">80万円</option>
                            <option value="90">90万円</option>
                            <option value="100">100万円</option>
                            <option value="120">120万円</option>
                            <option value="150">150万円</option>
                        </select>
                    </label>
                    <span>〜</span>
                    <label class="modal-SBfilter__selectbox" for="s">
                        <select class="is-range-max" name="price_max">
                            <option value="15">15万円</option>
                            <option value="18">18万円</option>
                            <option value="20">20万円</option>
                            <option value="25">25万円</option>
                            <option value="30">30万円</option>
                            <option value="40">40万円</option>
                            <option value="50">50万円</option>
                            <option value="60">60万円</option>
                            <option value="70">70万円</option>
                            <option value="80">80万円</option>
                            <option value="90">90万円</option>
                            <option value="100">100万円</option>
                            <option value="120">120万円</option>
                            <option value="150">150万円</option>
                            <option selected="selected" value="99999999">上限なし</option>
                        </select>
                    </label>
                </div>
            </section>

            <section class="modal-SBfilter__unit">
                <h3>販売価格（売買向け）</h3>
                <div class="modal-SBfilter__unitArea">
                    <label class="modal-SBfilter__selectbox" for="s">
                        <select name="selling_price_min">
                            <option selected="selected" value="0">下限なし</option>
                            <option value="3000">3,000万円</option>
                            <option value="4000">4,000万円</option>
                            <option value="5000">5,000万円</option>
                            <option value="6000">6,000万円</option>
                            <option value="7000">7,000万円</option>
                            <option value="8000">8,000万円</option>
                            <option value="9000">9,000万円</option>
                            <option value="10000">1億円</option>
                            <option value="12000">1億2,000万円</option>
                            <option value="15000">1億5,000万円</option>
                            <option value="20000">2億円</option>
                            <option value="30000">3億円</option>
                            <option value="40000">4億円</option>
                            <option value="50000">5億円</option>
                        </select>
                    </label>
                    <span>〜</span>
                    <label class="modal-SBfilter__selectbox" for="s">
                        <select class="is-range-max" name="selling_price_max">
                            <option value="3000">3,000万円</option>
                            <option value="4000">4,000万円</option>
                            <option value="5000">5,000万円</option>
                            <option value="6000">6,000万円</option>
                            <option value="7000">7,000万円</option>
                            <option value="8000">8,000万円</option>
                            <option value="9000">9,000万円</option>
                            <option value="10000">1億円</option>
                            <option value="12000">1億2,000万円</option>
                            <option value="15000">1億5,000万円</option>
                            <option value="20000">2億円</option>
                            <option value="30000">3億円</option>
                            <option value="40000">4億円</option>
                            <option value="50000">5億円</option>
                            <option selected="selected" value="99999999">上限なし</option>
                        </select>
                    </label>
                </div>
            </section>

            <section class="modal-SBfilter__unit">
                <h3>間取り</h3>
                <div class="modal-SBfilter__unitDetail">
                    <label class="modal-SBfilter__checkbox">
                        <input value="1R～1K／STUDIO" type="checkbox" name="layout[]">
                        <span>1R～1K／STUDIO</span>
                    </label>
                    <label class="modal-SBfilter__checkbox">
                        <input value="1DK～1LDK" type="checkbox" name="layout[]">
                        <span>1DK～1LDK</span>
                    </label>
                    <label class="modal-SBfilter__checkbox">
                        <input value="2K～2LDK" type="checkbox" name="layout[]">
                        <span>2K～2LDK</span>
                    </label>
                    <label class="modal-SBfilter__checkbox">
                        <input value="3K～3LDK" type="checkbox" name="layout[]">
                        <span>3K～3LDK</span>
                    </label>
                    <label class="modal-SBfilter__checkbox">
                        <input value="4K～4LDK以上" type="checkbox" name="layout[]">
                        <span>4K～4LDK以上</span>
                    </label>
                </div>
            </section>

            <section class="modal-SBfilter__unit">
                <h3>リビング</h3>
                <div class="modal-SBfilter__unitDetail">
                    <label class="modal-SBfilter__checkbox modal-SBfilter__radio">
                        <input value="10帖以上" type="radio" name="living[]">
                        <span>10帖以上</span>
                    </label>
                    <label class="modal-SBfilter__checkbox modal-SBfilter__radio">
                        <input value="15帖以上" type="radio" name="living[]">
                        <span>15帖以上</span>
                    </label>
                    <label class="modal-SBfilter__checkbox modal-SBfilter__radio">
                        <input value="20帖以上" type="radio" name="living[]">
                        <span>20帖以上</span>
                    </label>
                    <label class="modal-SBfilter__checkbox modal-SBfilter__radio">
                        <input value="30帖以上" type="radio" name="living[]">
                        <span>30帖以上</span>
                    </label>
                </div>
            </section>

            <section class="modal-SBfilter__unit">
                <h3>専有面積</h3>
                <div class="modal-SBfilter__unitArea">
                    <label class="modal-SBfilter__selectbox">
                        <select name="size_min" id="size_min">
                            <option selected="selected" value="0">下限なし</option>
                            <option value="15">15㎡</option>
                            <option value="18">18㎡</option>
                            <option value="20">20㎡</option>
                            <option value="25">25㎡</option>
                            <option value="30">30㎡</option>
                            <option value="40">40㎡</option>
                            <option value="50">50㎡</option>
                            <option value="60">60㎡</option>
                            <option value="70">70㎡</option>
                            <option value="80">80㎡</option>
                            <option value="90">90㎡</option>
                            <option value="100">100㎡</option>
                            <option value="120">120㎡</option>
                            <option value="1500">150㎡</option>
                        </select>
                    </label>
                    <span>〜</span>
                    <label class="modal-SBfilter__selectbox">
                        <select class="is-range-max" name="size_max" id="size_max">
                            <option value="15">15㎡</option>
                                <option value="18">18㎡</option>
                                <option value="20">20㎡</option>
                                <option value="25">25㎡</option>
                                <option value="30">30㎡</option>
                                <option value="40">40㎡</option>
                                <option value="50">50㎡</option>
                                <option value="60">60㎡</option>
                                <option value="70">70㎡</option>
                                <option value="80">80㎡</option>
                                <option value="90">90㎡</option>
                                <option value="100">100㎡</option>
                                <option value="120">120㎡</option>
                                <option value="1500">150㎡</option>
                                <option selected="selected" value="999999">上限なし</option>
                            </select>
                    </label>
                </div>
            </section>

            <section class="modal-SBfilter__unit">
                <h3>所在階</h3>
                <div class="modal-SBfilter__unitArea">
                    <label class="modal-SBfilter__selectbox">
                        <select name="floor" id="floor">
                            <option value="">選択</option>
                            <option value="1">1階以上</option>
                            <option value="2">2階以上</option>
                            <option value="5">5階以上</option>
                            <option value="10">10階以上</option>
                            <option value="15">15階以上</option>
                            <option value="20">20階以上</option>
                            <option value="30">30階以上</option>
                        </select>
                    </label>
                </div>
            </section>

            <section class="modal-SBfilter__unit">
                <h3>築年数</h3>
                <div class="modal-SBfilter__unitArea">
                    <label class="modal-SBfilter__selectbox">
                        <select name="age" id="age">
                            <option value="">選択</option>
                            <option value="1">新築／1年以内</option>
                            <option value="3">3年以内</option>
                            <option value="5">5年以内</option>
                            <option value="10">10年以内</option>
                            <option value="15">15年以内</option>
                            <option value="20">20年以内</option>
                            <option value="30">30年以内</option>
                        </select>
                    </label>
                </div>
            </section>

            <section class="modal-SBfilter__unit">
                <h3>駅徒歩</h3>
                <div class="modal-SBfilter__unitArea">
                    <label class="modal-SBfilter__selectbox">
                        <select name="station_walk" id="station_walk">
                            <option value="">選択</option>
                            <option value="3">3分以内</option>
                            <option value="5">5分以内</option>
                            <option value="7">7分以内</option>
                            <option value="10">10分以内</option>
                        </select>
                    </label>
                </div>
            </section>

            <button class="js-modalAddFilter-open searchform-filterBtn" type="button">さらに条件を追加する</button>
            <input type="hidden" name="s" value="<?php if(get_search_query()) echo get_search_query() ?>">
            <button class="search-button" type="submit">検索する</button>
        </div>
    </div>
</form>