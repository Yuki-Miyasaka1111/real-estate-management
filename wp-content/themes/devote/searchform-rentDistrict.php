<?php
    /*
    Template Name: 賃貸物件区絞り込み検索ページ
    */
?>

<?php get_header(); ?>
<?php get_template_part('gnavi') ?>

<main class="district">
    <div class="area">
        <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
            <div class="area-container">
                <p>SEARCH BY AREA</p>
                <h1>23区から高級賃貸を探す</h3>
                <h2>ご希望の区を選択</h2>

                <section>
                    <!-- マップ -->
                    <div></div>


                    <!-- 区リストの表示 -->
                    <ul class="area-list">
                        <!-- 港区 -->
                        <?php $query = new WP_Query(
                        array(
                            'post_type' => 'rent', // カスタム投稿タイプのスラッグを指定
                            'tax_query' => array(
                            array(
                                'taxonomy' => 'area', // タクソノミースラッグを指定
                                'field' => 'ID',
                                'terms' => 3035, // タームスラッグを指定
                            ),
                            ),
                        ) );?>
                        <?php $term = get_term(3035 , 'area');?>
                        <li class="area-list__item">
                            <label>
                                <input id="parent1" class="disabled parent" type="checkbox" onclick="chkdisp(this, 'item1')" name="rentDistrict[]" value="<?php echo $term->name; //ターム名 ?>" <?php if(isset($_GET['rentDistrict']) && in_array('港区', $_GET['rentDistrict'])): ?>checked="checked"<?php endif; ?>>
                                <span><p><?php echo $term->name; //ターム名 ?></p><p class="counts"><?php echo $query->found_posts; ?>件</p></span>
                            </label>
                        </li>

                        <!-- 中央区 -->
                        <?php $query = new WP_Query(
                        array(
                            'post_type' => 'rent', // カスタム投稿タイプのスラッグを指定
                            'tax_query' => array(
                            array(
                                'taxonomy' => 'area', // タクソノミースラッグを指定
                                'field' => 'ID',
                                'terms' => 3030, // タームスラッグを指定
                            ),
                            ),
                        ) );?>
                        <?php $term = get_term(3030 , 'area');?>
                        <li class="area-list__item">
                            <label>
                                <input id="parent2" class="disabled parent" type="checkbox" onclick="chkdisp(this, 'item2')" name="rentDistrict[]" value="<?php echo $term->name; //ターム名 ?>" <?php if(isset($_GET['rentDistrict']) && in_array('中央区', $_GET['rentDistrict'])): ?>checked="checked"<?php endif; ?>>
                                <span><p><?php echo $term->name; //ターム名 ?></p><p class="counts"><?php echo $query->found_posts; ?>件</p></span>
                            </label>
                        </li>

                        <!-- 品川区 -->
                        <?php $query = new WP_Query(
                        array(
                            'post_type' => 'rent', // カスタム投稿タイプのスラッグを指定
                            'tax_query' => array(
                            array(
                                'taxonomy' => 'area', // タクソノミースラッグを指定
                                'field' => 'ID',
                                'terms' => 3041, // タームスラッグを指定
                            ),
                            ),
                        ) );?>
                        <?php $term = get_term(3041 , 'area'); ?>
                        <li class="area-list__item">
                            <label>
                                <input id="parent3" class="disabled parent" type="checkbox" onclick="chkdisp(this, 'item3')" name="rentDistrict[]" value="<?php echo $term->name; //ターム名 ?>" <?php if(isset($_GET['rentDistrict']) && in_array('品川区', $_GET['rentDistrict'])): ?>checked="checked"<?php endif; ?>>
                                <span><p><?php echo $term->name; //ターム名 ?></p><p class="counts"><?php echo $query->found_posts; ?>件</p></span>
                            </label>
                        </li>

                        <!-- 江東区 -->
                        <?php $query = new WP_Query(
                        array(
                            'post_type' => 'rent', // カスタム投稿タイプのスラッグを指定
                            'tax_query' => array(
                            array(
                                'taxonomy' => 'area', // タクソノミースラッグを指定
                                'field' => 'ID',
                                'terms' => 3708, // タームスラッグを指定
                            ),
                            ),
                        ) );?>
                        <?php $term = get_term(3708 , 'area');?>
                        <li class="area-list__item">
                            <label>
                                <input id="parent4" class="disabled parent" type="checkbox" onclick="chkdisp(this, 'item4')" name="rentDistrict[]" value="<?php echo $term->name; //ターム名 ?>" <?php if(isset($_GET['rentDistrict']) && in_array('江東区', $_GET['rentDistrict'])): ?>checked="checked"<?php endif; ?>>
                                <span><p><?php echo $term->name; //ターム名 ?></p><p class="counts"><?php echo $query->found_posts; ?>件</p></span>
                            </label>
                        </li>
                    </ul>
                    <div class="area-btns">
                        <button class="js-modal-open modal-buttons__filterBtn modal-buttons btn2 button-disabled" type="button">町名を選択</button>
                        <input type="hidden" name="s" value="<?php if(get_search_query()) echo get_search_query() ?>">
                        <button class="modal-buttons button-disabled btn2" type="submit" value="検索する">検索する</button>
                    </div>
                </section>
            </div>





            <!-- modal -->
            <div class="modal js-modal">
                <div class="modal-inner">
                        <?php $tax_posts = get_posts(array('post_type' => get_post_type(), 'taxonomy' => $taxonomy_name ) );?>

                        <!-- modalヘッダー -->
                        <div class="modal-header">
                            <h2 class="modal-header__title">町名を選択</h2>
                            <span></span>
                            <span class="modal-header__close js-modal-close"></span>
                        </div>

                        <!-- modalボディ -->
                        <div class="modal-body">
                            <!-- 町名の表示 -->
                            <div class="modal-area">
                                <div class="modal-area__item"  id="item1" <?php if(isset($_GET['rentDistrict']) && in_array('港区', $_GET['rentDistrict'])): ?>style="display: block!important;"<?php endif; ?>>
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
                                                        <input data-parent="parent1" class="disabled child" type="checkbox" name="area[]" value="<?php echo $term->name; ?>">
                                                        <span>
                                                            <p>
                                                                <?php echo $term->name; //ターム名 ?>
                                                            </p>
                                                        </span>
                                                    </label>
                                                </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                                <div class="modal-area__item"  id="item2" <?php if(isset($_GET['rentDistrict']) && in_array('中央区', $_GET['rentDistrict'])): ?>style="display: block!important;"<?php endif; ?>>
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
                                                        <input data-parent="parent2" class="disabled child" type="checkbox" name="area[]" value="<?php echo $term->name; ?>">
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

                                <div class="modal-area__item"  id="item3" <?php if(isset($_GET['rentDistrict']) && in_array('品川区', $_GET['rentDistrict'])): ?>style="display: block!important;"<?php endif; ?>>
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
                                                        <input data-parent="parent3" class="disabled child" type="checkbox" name="area[]" value="<?php echo $term->name; ?>" id="checkbox1">
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

                                <div class="modal-area__item"  id="item4" <?php if(isset($_GET['rentDistrict']) && in_array('江東区', $_GET['rentDistrict'])): ?>style="display: block!important;"<?php endif; ?>>
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
                                                        <input data-parent="parent4" class="disabled child" type="checkbox" name="area[]" value="<?php echo $term->name; ?>">
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
                            </div>


                            <!-- 絞り込み条件の表示 -->
                            <div class="modal-filter">
                                <section class="modal-filter__unit">
                                    <h3>賃料</h3>
                                    <div class="modal-filter__unitArea">
                                        <label class="modal-filter__selectbox" for="s">
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
                                        <label class="modal-filter__selectbox" for="s">
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

                                <section class="modal-filter__unit">
                                    <h3>間取り</h3>
                                    <div class="modal-filter__unitDetail">
                                        <label class="modal-filter__checkbox">
                                            <input value="1R～1K／STUDIO" type="checkbox" name="layout[]">
                                            <span>1R～1K／STUDIO</span>
                                        </label>
                                        <label class="modal-filter__checkbox">
                                            <input value="1DK～1LDK" type="checkbox" name="layout[]">
                                            <span>1DK～1LDK</span>
                                        </label>
                                        <label class="modal-filter__checkbox">
                                            <input value="2K～2LDK" type="checkbox" name="layout[]">
                                            <span>2K～2LDK</span>
                                        </label>
                                        <label class="modal-filter__checkbox">
                                            <input value="3K～3LDK" type="checkbox" name="layout[]">
                                            <span>3K～3LDK</span>
                                        </label>
                                        <label class="modal-filter__checkbox">
                                            <input value="4K～4LDK以上" type="checkbox" name="layout[]">
                                            <span>4K～4LDK以上</span>
                                        </label>
                                    </div>
                                </section>

                                <section class="modal-filter__unit">
                                    <h3>リビング</h3>
                                    <div class="modal-filter__unitDetail">
                                        <label class="modal-filter__checkbox modal-filter__radio">
                                            <input value="10帖以上" type="radio" name="living[]">
                                            <span>10帖以上</span>
                                        </label>
                                        <label class="modal-filter__checkbox modal-filter__radio">
                                            <input value="15帖以上" type="radio" name="living[]">
                                            <span>15帖以上</span>
                                        </label>
                                        <label class="modal-filter__checkbox modal-filter__radio">
                                            <input value="20帖以上" type="radio" name="living[]">
                                            <span>20帖以上</span>
                                        </label>
                                        <label class="modal-filter__checkbox modal-filter__radio">
                                            <input value="30帖以上" type="radio" name="living[]">
                                            <span>30帖以上</span>
                                        </label>
                                    </div>
                                </section>

                                <section class="modal-filter__unit">
                                    <h3>専有面積</h3>
                                    <div class="modal-filter__unitArea">
                                        <label class="modal-filter__selectbox">
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
                                        <label class="modal-filter__selectbox">
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

                                <section class="modal-filter__unit">
                                    <h3>所在階</h3>
                                    <div class="modal-filter__unitArea">
                                        <label class="modal-filter__selectbox">
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

                                <section class="modal-filter__unit">
                                    <h3>築年数</h3>
                                    <div class="modal-filter__unitArea">
                                        <label class="modal-filter__selectbox">
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

                                <section class="modal-filter__unit">
                                    <h3>駅徒歩</h3>
                                    <div class="modal-filter__unitArea">
                                        <label class="modal-filter__selectbox">
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
                            </div>
                        </div>

                        <!-- modalフッター -->
                        <div class="modal-footer">
                            <div class="modal-footer__buttons">
                                <button type="button" class="modal-buttons__filterBtn button-disabled modal-buttons btn2" id="modal-buttons__filterBtn">絞り込み条件を設定</button>
                                <input type="hidden" name="s" value="<?php if(get_search_query()) echo get_search_query() ?>">
                                <input type="hidden" name="post_type" value="rent">
                                <button type="submit" class="modal-buttons button-disabled btn2">検索する</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-bg js-modal-close"></div>
            </div>
        </form>
    </div>
</main>
<?php get_footer(); ?>