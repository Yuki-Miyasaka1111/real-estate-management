<?php
    /*
    Template Name: 区絞り込み検索ページ
    */
?>

<?php get_header(); ?>
<?php get_template_part('gnavi') ?>

<main class="district">
    <div class="area">
        <p>SEARCH BY AREA</p>
        <h3>23区から高級マンションを探す</h3>
        <h5>ご希望の区を選択</h5>

        <section>
            <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
                <!-- マップ -->
                <div></div>

                <ul class="area-list">
                    <!-- 品川区 -->
                    <?php $term = get_term(3041 , 'area'); ?>
                    <li class="area-list__item">
                        <label for="type-shinagawa">
                            <input type="checkbox" onclick="chkdisp(this, 'item1')" name="district[]" value="<?php echo $term->name; //ターム名 ?>">
                            <span><a href="<?php echo get_term_link( $term, $taxonomy ); ?>"><?php echo $term->name; //ターム名 ?></a></span>
                        </label>
                    </li>

                    <!-- 目黒区 -->
                    <?php $term = get_term(3045 , 'area'); ?>
                    <li class="area-list__item">
                        <label>
                            <input type="checkbox" onclick="chkdisp(this, 'item2')" name="district[]" value="<?php echo $term->name; //ターム名 ?>">
                            <span><a href="<?php echo get_term_link( $term, $taxonomy ); ?>"><?php echo $term->name; //ターム名 ?></a></span>
                        </label>
                    </li>

                    <!-- 港区 -->
                    <?php $term = get_term(3035 , 'area'); ?>
                    <li class="area-list__item">
                        <label>
                            <input type="checkbox" onclick="chkdisp(this, 'item3')" name="district[]" value="<?php echo $term->name; //ターム名 ?>">
                            <span><a href="<?php echo get_term_link( $term, $taxonomy ); ?>"><?php echo $term->name; //ターム名 ?></a></span>
                        </label>
                    </li>

                    <!-- 渋谷区 -->
                    <?php $term = get_term(3037 , 'area'); ?>
                    <li class="area-list__item">
                        <label>
                            <input type="checkbox" onclick="chkdisp(this, 'item4')" name="district[]" value="<?php echo $term->name; //ターム名 ?>">
                            <span><a href="<?php echo get_term_link( $term, $taxonomy ); ?>"><?php echo $term->name; //ターム名 ?></a></span>
                        </label>
                    </li>

                    <!-- 千代田区 -->
                    <?php $term = get_term(3025 , 'area'); ?>
                    <li class="area-list__item">
                        <label>
                            <input type="checkbox" onclick="chkdisp(this, 'item5')" name="district[]" value="<?php echo $term->name; //ターム名 ?>">
                            <span><a href="<?php echo get_term_link( $term, $taxonomy ); ?>"><?php echo $term->name; //ターム名 ?></a></span>
                        </label>
                    </li>

                    <!-- 中央区 -->
                    <?php $term = get_term(3030 , 'area'); ?>
                    <li class="area-list__item">
                        <label>
                            <input type="checkbox" onclick="chkdisp(this, 'item6')" name="district[]" value="<?php echo $term->name; //ターム名 ?>">
                            <span><a href="<?php echo get_term_link( $term, $taxonomy ); ?>"><?php echo $term->name; //ターム名 ?></a></span>
                        </label>
                    </li>

                    <!-- 江東区 -->
                    <?php $term = get_term(3708 , 'area'); ?>
                    <li class="area-list__item">
                        <label>
                            <input type="checkbox" onclick="chkdisp(this, 'item7')" name="district[]" value="<?php echo $term->name; //ターム名 ?>">
                            <span><a href="<?php echo get_term_link( $term, $taxonomy ); ?>"><?php echo $term->name; //ターム名 ?></a></span>
                        </label>
                    </li>
                </ul>
                <input type="hidden" name="s" value="<?php if(get_search_query()) echo get_search_query() ?>">
                <input type="submit" value="検索する">
            </form>
        </section>

        <a class="js-modal-open" href="">町名を選択</a>
    </div>
</main>

<?php get_template_part('searchform') ?>

<?php get_footer(); ?>