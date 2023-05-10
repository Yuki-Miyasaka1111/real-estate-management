<div class="modal js-modal">
    <div class="modal-inner">
        <form form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <div class="modal-header">
                <h2>町名を選択</h2>
                <h2>絞り込み条件を設定</h2>
                <span></span>
                <span class="modal-header__close js-modal-close"></span>
            </div>

            <div class="modal-body">
                <div class="modal-area">
                    <div>
                        <ul>
                            <div class="modal-area__item"  id="item1">
                                <!-- 品川区 -->
                                <?php $term = get_term(3041 , 'area'); ?>
                                <h3><?php echo $term->name;?></h3>
                                <input type="checkbox" value=""><a>すべて選択</a>
                                <li>
                                    <?php
                                    $taxonomy_name = 'area'; //※point1
                                    $term_id = 3041; //※point2
                                    $termchildren = get_term_children( $term_id, $taxonomy_name );
                                    foreach ( $termchildren as $child ) :?>
                                    <?php $term = get_term_by( 'id', $child, $taxonomy_name );?>
                                    <label>
                                        <input type="checkbox" name="area[]" value="<?php echo $term->slug; ?>">
                                        <span>
                                            <a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
                                                <?php echo $term->name . "(" . $term->count . ")"; //ターム名 ?>
                                            </a>
                                        </span>
                                    </label>
                                    <?php endforeach; ?>
                                </li>
                            </div>

                            <div class="modal-area__item"  id="item2">
                                <!-- 目黒区 -->
                                <?php $term = get_term(3045 , 'area'); ?>
                                <h3><?php echo $term->name;?></h3>
                                <input type="checkbox" value=""><a>すべて選択</a>
                                <li>
                                    <?php
                                    $taxonomy_name = 'area'; //※point1
                                    $term_id = 3045; //※point2
                                    $termchildren = get_term_children( $term_id, $taxonomy_name );
                                    foreach ( $termchildren as $child ) :?>
                                    <?php $term = get_term_by( 'id', $child, $taxonomy_name );?>
                                    <label>
                                        <input type="checkbox" name="area[]" value="<?php echo $term->slug; ?>">
                                        <span>
                                            <a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
                                                <?php echo $term->name . "(" . $term->count . ")"; //ターム名 ?>
                                            </a>
                                        </span>
                                    </label>
                                    <?php endforeach; ?>
                                </li>
                            </div>

                            <div class="modal-area__item"  id="item3">
                                <!-- 港区 -->
                                <?php $term = get_term(3035 , 'area'); ?>
                                <h3><?php echo $term->name;?></h3>
                                <input type="checkbox" value=""><a>すべて選択</a>
                                <li>
                                    <?php
                                    $taxonomy_name = 'area'; //※point1
                                    $term_id = 3035; //※point2
                                    $termchildren = get_term_children( $term_id, $taxonomy_name );
                                    foreach ( $termchildren as $child ) :?>
                                    <?php $term = get_term_by( 'id', $child, $taxonomy_name );?>
                                    <label>
                                        <input type="checkbox" name="area[]" value="<?php echo $term->slug; ?>">
                                        <span>
                                            <a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
                                                <?php echo $term->name . "(" . $term->count . ")"; //ターム名 ?>
                                            </a>
                                        </span>
                                    </label>
                                    <?php endforeach; ?>
                                </li>
                            </div>

                            <div class="modal-area__item"  id="item4">
                                <!-- 渋谷区 -->
                                <?php $term = get_term(3037 , 'area'); ?>
                                <h3><?php echo $term->name;?></h3>
                                <input type="checkbox" value=""><a>すべて選択</a>
                                <li>
                                    <?php
                                    $taxonomy_name = 'area'; //※point1
                                    $term_id = 3037; //※point2
                                    $termchildren = get_term_children( $term_id, $taxonomy_name );
                                    foreach ( $termchildren as $child ) :?>
                                    <?php $term = get_term_by( 'id', $child, $taxonomy_name );?>
                                    <label>
                                        <input type="checkbox" name="area[]" value="<?php echo $term->slug; ?>">
                                        <span>
                                            <a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
                                                <?php echo $term->name . "(" . $term->count . ")"; //ターム名 ?>
                                            </a>
                                        </span>
                                    </label>
                                    <?php endforeach; ?>
                                </li>
                            </div>

                            <div class="modal-area__item"  id="item5">
                                <!-- 千代田区 -->
                                <?php $term = get_term(3025 , 'area'); ?>
                                <h3><?php echo $term->name;?></h3>
                                <input type="checkbox" value=""><a>すべて選択</a>
                                <li>
                                    <?php
                                    $taxonomy_name = 'area'; //※point1
                                    $term_id = 3025; //※point2
                                    $termchildren = get_term_children( $term_id, $taxonomy_name );
                                    foreach ( $termchildren as $child ) :?>
                                    <?php $term = get_term_by( 'id', $child, $taxonomy_name );?>
                                    <label>
                                        <input type="checkbox" name="area[]" value="<?php echo $term->slug; ?>">
                                        <span>
                                            <a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
                                                <?php echo $term->name . "(" . $term->count . ")"; //ターム名 ?>
                                            </a>
                                        </span>
                                    </label>
                                    <?php endforeach; ?>
                                </li>
                            </div>

                            <div class="modal-area__item"  id="item6">
                                <!-- 中央区 -->
                                <?php $term = get_term(3030 , 'area'); ?>
                                <h3><?php echo $term->name;?></h3>
                                <input type="checkbox" value=""><a>すべて選択</a>
                                <li>
                                    <?php
                                    $taxonomy_name = 'area'; //※point1
                                    $term_id = 3030; //※point2
                                    $termchildren = get_term_children( $term_id, $taxonomy_name );
                                    foreach ( $termchildren as $child ) :?>
                                    <?php $term = get_term_by( 'id', $child, $taxonomy_name );?>
                                    <label>
                                        <input type="checkbox" name="area[]" value="<?php echo $term->slug; ?>">
                                        <span>
                                            <a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
                                                <?php echo $term->name . "(" . $term->count . ")"; //ターム名 ?>
                                            </a>
                                        </span>
                                    </label>
                                    <?php endforeach; ?>
                                </li>
                            </div>

                            <div class="modal-area__item"  id="item7">
                                <!-- 江東区 -->
                                <?php $term = get_term(3708 , 'area'); ?>
                                <h3><?php echo $term->name;?></h3>
                                <input type="checkbox" value=""><a>すべて選択</a>
                                <li>
                                    <?php
                                    $taxonomy_name = 'area'; //※point1
                                    $term_id = 3708; //※point2
                                    $termchildren = get_term_children( $term_id, $taxonomy_name );
                                    foreach ( $termchildren as $child ) :?>
                                    <?php $term = get_term_by( 'id', $child, $taxonomy_name );?>
                                    <label>
                                        <input type="checkbox" name="area[]" value="<?php echo $term->slug; ?>">
                                        <span>
                                            <a href="<?php echo get_term_link( $child, $taxonomy_name );?>">
                                                <?php echo $term->name . "(" . $term->count . ")"; //ターム名 ?>
                                            </a>
                                        </span>
                                    </label>
                                    <?php endforeach; ?>
                                </li>
                            </div>
                        </ul>
                        
                        <input type="hidden" name="s" value="<?php the_search_query(); ?>">
                        <input type="submit" value="検索する">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="modal-footer__buttons">
                    <a href="" class="modal-buttons__filterBtn modal-buttons">絞り込み条件を設定</a>
                    <a href="" class="modal-buttons__resetBtn modal-buttons">絞り込み条件をリセット</a>
                    <a href="" class="modal-buttons__searchBtn modal-buttons">
                        <span>
                            検索する
                        </span>
                    </a>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-bg js-modal-close"></div>
</div>