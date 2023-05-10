<?php
$buyPopular = $_GET['buyPopular'];
if ($buyPopular) { 
$metaquerysp[] = array(
	'key' => 'popular-area',
	'value' => $buyPopular,
	'compare' => 'IN',
);
}
?>

<form role="searchform" method="get" class="searchform-filterPopular" id="searchform-filterPopular" action="<?php bloginfo('url'); ?>">
    <!-- modalエリア -->
    <div class="modal js-modalArea filterBuyPopular">
        <div class="modal-inner">
            <?php $tax_posts = get_posts(array('post_type' => get_post_type(), 'taxonomy' => $taxonomy_name ) );?>
            <!-- modalヘッダー -->
            <div class="modal-header">
                <h2>町名を選択</h2>
                <h2>絞り込み条件を設定</h2>
                <span></span>
                <span class="modal-header__close js-modalArea-close"></span>
            </div>

            <!-- modalボディー -->
            <div class="modal-body">
                <div class="modal-popular">
                    <!-- 人気エリア名 -->
                    <section class="modal-filter__unit">
                        <h2>エリア</h2>
                        <div class="modal-filter__unitDetail">
                            <label class="modal-filter__checkbox modal-filter__checkboxPopular">
                                <input class="disabled" value="新橋・浜松町・汐留" type="checkbox" name="buyPopular[]" <?php if(isset($_GET['buyPopular']) && in_array('新橋・浜松町・汐留', $_GET['buyPopular'])): ?>checked<?php endif; ?>>
                                <span>新橋・浜松町・汐留<small>(<?php echo loopPostCountBuy ('popular-area', '新橋・浜松町・汐留'); ?>)</small></span>
                            </label>
                            <label class="modal-filter__checkbox modal-filter__checkboxPopular">
                                <input class="disabled" value="芝・芝公園" type="checkbox" name="buyPopular[]" <?php if(isset($_GET['buyPopular']) && in_array('芝・芝公園', $_GET['buyPopular'])): ?>checked<?php endif; ?>>
                                <span>芝・芝公園<small>(<?php echo loopPostCountBuy ('popular-area', '芝・芝公園'); ?>)</small></span>
                            </label>
                            <label class="modal-filter__checkbox modal-filter__checkboxPopular">
                                <input class="disabled" value="勝どき・月島・佃・晴海" type="checkbox" name="buyPopular[]" <?php if(isset($_GET['buyPopular']) && in_array('勝どき・月島・佃・晴海', $_GET['buyPopular'])): ?>checked<?php endif; ?>>
                                <span>勝どき・月島・佃・晴海<small>(<?php echo loopPostCountBuy ('popular-area', '勝どき・月島・佃・晴海'); ?>)</small></span>
                            </label>
                            <label class="modal-filter__checkbox modal-filter__checkboxPopular">
                                <input class="disabled" value="豊洲・東雲・有明・台場" type="checkbox" name="buyPopular[]" <?php if(isset($_GET['buyPopular']) && in_array('豊洲・東雲・有明・台場', $_GET['buyPopular'])): ?>checked<?php endif; ?>>
                                <span>豊洲・東雲・有明・台場<small>(<?php echo loopPostCountBuy ('popular-area', '豊洲・東雲・有明・台場'); ?>)</small></span>
                            </label>
                            <label class="modal-filter__checkbox modal-filter__checkboxPopular">
                                <input class="disabled" value="天王洲・大井町・品川シーサイド" type="checkbox" name="buyPopular[]" <?php if(isset($_GET['buyPopular']) && in_array('天王洲・大井町・品川シーサイド', $_GET['buyPopular'])): ?>checked<?php endif; ?>>
                                <span>天王洲・大井町・品川シーサイド<small>(<?php echo loopPostCountBuy ('popular-area', '天王洲・大井町・品川シーサイド'); ?>)</small></span>
                            </label>
                            <label class="modal-filter__checkbox modal-filter__checkboxPopular">
                                <input class="disabled" value="芝浦・海岸・港南" type="checkbox" name="buyPopular[]" <?php if(isset($_GET['buyPopular']) && in_array('芝浦・海岸・港南', $_GET['buyPopular'])): ?>checked<?php endif; ?>>
                                <span>芝浦・海岸・港南<small>(<?php echo loopPostCountBuy ('popular-area', '芝浦・海岸・港南'); ?>)</small></span>
                            </label>
                        </div>
                    </section>
                </div>
            </div>

            <!-- modalフッター -->
            <div class="modal-footer">
                <div class="modal-footer__buttons">
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
                                <?php if (count($buyPopular) > 1): ?>
                                    <?php echo $buyPopular[0]; ?>他
                                <?php else: ?>
                                    <?php echo $buyPopular[0]; ?>
                                <?php endif; ?>
                            </span>
                        </div>
                        <span class="searchform-area__change">変更</span>
                    </dd>
                </dl>
            </div>

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
            <input type="hidden" name="post_type" value="buy">
            <button class="search-button" type="submit">検索する</button>
        </div>
    </div>
</form>