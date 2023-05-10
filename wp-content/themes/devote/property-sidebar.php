<section class="property-contact">
    <div class="property-contact__inner">
        <div class="property-contact__list">
            <?php if(is_user_logged_in()): //ログインしている場合 ?>
                <?php if( is_singular( 'rent' ) ): // 投稿タイプがrentのシングルページ?>
                    <div class="property-contact__flex">
                        <div>
                            <p class="property-contact__title">賃料</p>
                            <p class="property-contact__text">
                                <?php if(get_post_meta($post->ID, 'rent_price',true)): // 入力がある場合 ?>
                                    <?php $rentPrice = post_custom('rent_price') * 10000; ?>
									<?php echo number_format($rentPrice); ?>円
								<?php else: ?>
									- 円
								<?php endif; ?>
                            </p>
                        </div>
                        <div>
                            <p class="property-contact__title">敷金 / 礼金</p>
                            <p class="property-contact__text">
                                    <?php if(get_post_meta($post->ID, 'deposit',true)): // 入力がある場合 ?>
										<?php echo post_custom('deposit'); ?>ヶ月 
									<?php else: ?>
									-
									<?php endif; ?>
                                </span>
                                    /
                                    <?php if(get_post_meta($post->ID, 'key_money',true)): // 入力がある場合 ?>
										<?php echo post_custom('key_money'); ?>ヶ月
									<?php else: ?>
									-
									<?php endif; ?>
                                </span>
                            </p>
                        </div>
                        <div>
                            <p class="property-contact__title">共益費 / 管理費</p>
                            <p class="property-contact__text">
                                    <?php if(get_post_meta($post->ID, 'management_fee',true)): // 入力がある場合 ?>
										<?php echo post_custom('management_fee'); ?>0,000円
									<?php else: ?>
									-
									<?php endif; ?>
                                </span>
                            </p>
                        </div>
                    </div>

                    <table class="property-contact__listInfo">
                        <tbody>
                            <tr>
                                <th class="property-listPrice__title">駅徒歩</th>
                                <td class="property-listPrice__text">
                                    <?php if(get_post_meta($post->ID, 'station_walk1',true)): // 入力がある場合 ?>
										<?php echo post_custom('station_walk1'); ?>分
                                    <?php else: ?>
										-
									<?php endif; ?>
                                    (<?php if(get_post_meta($post->ID, 'route1',true)): // 入力がある場合 ?>
										<?php echo post_custom('route1'); ?>
									<?php else: ?>
										-
									<?php endif; ?>
                                    <?php if(get_post_meta($post->ID, 'station1',true)): // 入力がある場合 ?>
										<?php echo post_custom('station1'); ?>駅
                                    <?php else: ?>
										-
									<?php endif; ?>)
                                </td>
                            </tr>
                            <tr>
                                <th class="property-listPrice__title">間取り</th>
                                <td class="property-listPrice__text">
                                    <?php if(get_post_meta($post->ID, 'layout_disc',true)): // 入力がある場合 ?>
										<?php echo post_custom('layout_disc'); ?>
									<?php else: ?>
									-
									<?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="property-listPrice__title">築年数</th>
                                <td class="property-listPrice__text">
                                    <?php if(get_post_meta($post->ID, 'age',true)): // 入力がある場合 ?>
										<?php echo post_custom('age'); ?>年
									<?php else: ?>
									-
									<?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="property-listPrice__title">広さ</th>
                                <td class="property-listPrice__text">
                                    <?php if(get_post_meta($post->ID, 'occupied_area',true)): // 入力がある場合 ?>
										<?php echo post_custom('occupied_area'); ?>㎡
									<?php else: ?>
									-
									<?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="property-listPrice__title">階数</th>
                                <td class="property-listPrice__text">
                                    <?php if(get_post_meta($post->ID, 'floor',true)): // 入力がある場合 ?>
										<?php echo post_custom('floor'); ?>階
									<?php else: ?>
									-
									<?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="property-contact__buttons">
                        <a href="/contact/" class="property-btn__contact">
                            <span class="property-btn__contactIcon"></span>
                            詳細をお問い合わせ
                        </a>

                        <a href="tel:0120-123-123" class="property-btn__tel">
                            <p class="property-btn__telNumber">
                                <span class="property-btn__telIcon"></span>
                                0120-123-123
                            </p>
                            <p class="property-btn__telInfo">電話受付 24時間 年中無休</p>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if( is_singular( 'buy' ) ): // 投稿タイプがbuyのシングルページ?>
                    <div class="property-contact__flex">
                        <div>
                            <p class="property-contact__title">賃料</p>
                            <p class="property-contact__text">
                                <?php if(get_post_meta($post->ID, 'sale_price',true)): // 入力がある場合 ?>
									<?php $salePrice = number_format(post_custom('sale_price')); ?>
                                    <?php if (strlen($salePrice) >= 6)://カンマの数も含まれているため ?>
                                        <?php echo substr_replace($salePrice, "億", 1, 0) ?>万円
                                    <?php else: ?>
                                        <?php echo $salePrice ?>万円
                                    <?php endif; ?>
								<?php else: ?>
									- 円
								<?php endif; ?>
                            </p>
                        </div>
                        <div>
                            <p class="property-contact__title">広さ</p>
                            <p class="property-contact__text">
                                <?php if(get_post_meta($post->ID, 'occupied_area',true)): // 入力がある場合 ?>
                                    <?php echo post_custom('occupied_area'); ?>㎡
                                <?php else: ?>
                                -
                                <?php endif; ?>
                            </p>
                        </div>
                        <div>
                            <p class="property-contact__title">間取り</p>
                            <p class="property-contact__text">
                                <?php if(get_post_meta($post->ID, 'layout_disc',true)): // 入力がある場合 ?>
                                    <?php echo post_custom('layout_disc'); ?>
                                <?php else: ?>
                                -
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>

                    <?php 
                    $management_fee = post_custom('management_fee')*1000;
                    $maintenance_charge = post_custom('maintenance_charge')*1000;
                    $borrowing_amount = post_custom('sale_price')*1000 + $management_fee + $maintenance_charge;
                    $monthly_interest = 0.45/12;
                    $repayment_counts = 35;
                    $repayment_amount = $borrowing_amount * $monthly_interest * pow((1 + $monthly_interest), $repayment_counts) / pow((1 + $monthly_interest), $repayment_counts) - 1;
                    ?>
                    <div class="property-contact__payment">
                        <dl>
                            <dt class="property-contact__title">月々想定支払い額※</dt>
                            <dd class="property-contact__text"><?php echo number_format(round($repayment_amount, -2)) ?><span> 円/月（管理費+修繕費込）</span></dd>
                        </dl>
                    </div>

                    <table class="property-contact__listInfo">
                        <tbody>
                            <tr>
                                <th class="property-listPrice__title">駅徒歩</th>
                                <td class="property-listPrice__text">
                                    <?php if(get_post_meta($post->ID, 'station_walk1',true)): // 入力がある場合 ?>
										<?php echo post_custom('station_walk1'); ?>分
                                    <?php else: ?>
										-
									<?php endif; ?>
                                    (<?php if(get_post_meta($post->ID, 'route1',true)): // 入力がある場合 ?>
										<?php echo post_custom('route1'); ?>
									<?php else: ?>
										-
									<?php endif; ?>
                                    <?php if(get_post_meta($post->ID, 'station1',true)): // 入力がある場合 ?>
										<?php echo post_custom('station1'); ?>駅
                                    <?php else: ?>
										-
									<?php endif; ?>)
                                </td>
                            </tr>
                            <tr>
                                <th class="property-listPrice__title">築年数</th>
                                <td class="property-listPrice__text">
                                    <?php if(get_post_meta($post->ID, 'age',true)): // 入力がある場合 ?>
										<?php echo post_custom('age'); ?>年
									<?php else: ?>
									-
									<?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="property-listPrice__title">階数</th>
                                <td class="property-listPrice__text">
                                    <?php if(get_post_meta($post->ID, 'floor',true)): // 入力がある場合 ?>
										<?php echo post_custom('floor'); ?>階
									<?php else: ?>
									-
									<?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="property-listPrice__title">管理費</th>
                                <td class="property-listPrice__text">
                                    <?php if(get_post_meta($post->ID, 'management_fee',true)): // 入力がある場合 ?>
                                        <?php echo post_custom('management_fee'); ?>0,000円
                                    <?php else: ?>
                                    -
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="property-listPrice__title">修繕積立金</th>
                                <td class="property-listPrice__text">
                                    <?php if(get_post_meta($post->ID, 'maintenance_charge',true)): // 入力がある場合 ?>
										<?php echo post_custom('maintenance_charge'); ?>0,000円
									<?php else: ?>
									-
									<?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="property-contact__note">
                        ※借入総額<?php echo post_custom('sale_price'); ?>万円、管理費<?php echo post_custom('management_fee'); ?>0,000円、修繕積立費<?php echo post_custom('maintenance_charge'); ?>0,000円、頭金無し、紹介ローン・都市銀行・変動金利（<?php echo $monthly_interest; ?>%）、
                        借り入れ年数35年を想定。金融機関の審査によって個人差がありますので、予めご了承ください。変動金利につき、
                        月々の支払額は変動する可能性があります。オーナーチェンジ（投資用）物件の場合、投資用ローンでご購入となるため、金利その他条件により、
                        想定支払い額が表示価格よりも高額となる場合があります。表示条件での購入をお約束するものではありませんのでご了承ください。
                    </p>

                    <div class="property-contact__buttons">
                        <a href="/contact/" class="property-btn__contact">
                            <span class="property-btn__contactIcon"></span>
                            詳細をお問い合わせ
                        </a>

                        <a href="tel:0120-123-123" class="property-btn__tel">
                            <p class="property-btn__telNumber">
                                <span class="property-btn__telIcon"></span>
                                0120-123-123
                            </p>
                            <p class="property-btn__telInfo">電話受付 24時間 年中無休</p>
                        </a>
                    </div>
                <?php endif; ?>
            <?php else: //ログインしてない場合?>
                <?php $public = post_custom('public'); ?>
				<?php if ($public == '非公開'): //非公開の場合 ?>
                    <?php if( is_singular( 'rent' ) ): // 投稿タイプがrentのシングルページ?>
                        <div class="property-contact__flex">
                            <div>
                                <p class="property-contact__title">賃料</p>
                                <p class="property-contact__text">
                                    -
                                </p>
                            </div>
                            <div>
                                <p class="property-contact__title">敷金 / 礼金</p>
                                <p class="property-contact__text">
                                    - / -
                                </p>
                            </div>
                            <div>
                                <p class="property-contact__title">共益費 / 管理費</p>
                                <p class="property-contact__text">
                                    -
                                </p>
                            </div>
                        </div>

                        <table class="property-contact__listInfo">
                            <tbody>
                                <tr>
                                    <th class="property-listPrice__title">駅徒歩</th>
                                    <td class="property-listPrice__text">
                                            -
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">間取り</th>
                                    <td class="property-listPrice__text">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">築年数</th>
                                    <td class="property-listPrice__text">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">広さ</th>
                                    <td class="property-listPrice__text">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">階数</th>
                                    <td class="property-listPrice__text">
                                        -
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="property-contact__buttons">
                            <a href="/contact/" class="property-btn__contact">
                                <span class="property-btn__contactIcon"></span>
                                詳細をお問い合わせ
                            </a>

                            <a href="tel:0120-123-123" class="property-btn__tel">
                                <p class="property-btn__telNumber">
                                    <span class="property-btn__telIcon"></span>
                                    0120-123-123
                                </p>
                                <p class="property-btn__telInfo">電話受付 24時間 年中無休</p>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if( is_singular( 'buy' ) ): // 投稿タイプがbuyのシングルページ?>
                        <div class="property-contact__flex">
                            <div>
                                <p class="property-contact__title">賃料</p>
                                <p class="property-contact__text">
                                    - 
                                </p>
                            </div>
                            <div>
                                <p class="property-contact__title">広さ</p>
                                <p class="property-contact__text">
                                    -
                                </p>
                            </div>
                            <div>
                                <p class="property-contact__title">間取り</p>
                                <p class="property-contact__text">
                                    -
                                </p>
                            </div>
                        </div>

                        <div class="property-contact__payment">
                            <dl>
                                <dt class="property-contact__title">月々想定支払い額※</dt>
                                <dd class="property-contact__text">-</dd>
                            </dl>
                        </div>

                        <table class="property-contact__listInfo">
                            <tbody>
                                <tr>
                                    <th class="property-listPrice__title">駅徒歩</th>
                                    <td class="property-listPrice__text">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">築年数</th>
                                    <td class="property-listPrice__text">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">階数</th>
                                    <td class="property-listPrice__text">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">管理費</th>
                                    <td class="property-listPrice__text">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">修繕積立金</th>
                                    <td class="property-listPrice__text">
                                        -
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="property-contact__buttons">
                            <a href="/contact/" class="property-btn__contact">
                                <span class="property-btn__contactIcon"></span>
                                詳細をお問い合わせ
                            </a>

                            <a href="tel:0120-123-123" class="property-btn__tel">
                                <p class="property-btn__telNumber">
                                    <span class="property-btn__telIcon"></span>
                                    0120-123-123
                                </p>
                                <p class="property-btn__telInfo">電話受付 24時間 年中無休</p>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php else: //公開の場合?>
                    <?php if( is_singular( 'rent' ) ): // 投稿タイプがrentのシングルページ?>
                        <div class="property-contact__flex">
                            <div>
                                <p class="property-contact__title">賃料</p>
                                <p class="property-contact__text">
                                    <?php if(get_post_meta($post->ID, 'rent_price',true)): // 入力がある場合 ?>
                                        <?php $rentPrice = post_custom('rent_price') * 10000; ?>
									    <?php echo number_format($rentPrice); ?>円
                                    <?php else: ?>
                                        - 円
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div>
                                <p class="property-contact__title">敷金 / 礼金</p>
                                <p class="property-contact__text">
                                        <?php if(get_post_meta($post->ID, 'deposit',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('deposit'); ?>ヶ月 
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </span>
                                        /
                                        <?php if(get_post_meta($post->ID, 'key_money',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('key_money'); ?>ヶ月
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </span>
                                </p>
                            </div>
                            <div>
                                <p class="property-contact__title">共益費 / 管理費</p>
                                <p class="property-contact__text">
                                        <?php if(get_post_meta($post->ID, 'management_fee',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('management_fee'); ?>0,000円
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </span>
                                </p>
                            </div>
                        </div>

                        <table class="property-contact__listInfo">
                            <tbody>
                                <tr>
                                    <th class="property-listPrice__title">駅徒歩</th>
                                    <td class="property-listPrice__text">
                                        <?php if(get_post_meta($post->ID, 'station_walk1',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('station_walk1'); ?>分
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                        (<?php if(get_post_meta($post->ID, 'route1',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('route1'); ?>
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                        <?php if(get_post_meta($post->ID, 'station1',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('station1'); ?>駅
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>)
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">間取り</th>
                                    <td class="property-listPrice__text">
                                        <?php if(get_post_meta($post->ID, 'layout_disc',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('layout_disc'); ?>
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">築年数</th>
                                    <td class="property-listPrice__text">
                                        <?php if(get_post_meta($post->ID, 'age',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('age'); ?>年
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">広さ</th>
                                    <td class="property-listPrice__text">
                                        <?php if(get_post_meta($post->ID, 'occupied_area',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('occupied_area'); ?>㎡
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">階数</th>
                                    <td class="property-listPrice__text">
                                        <?php if(get_post_meta($post->ID, 'floor',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('floor'); ?>階
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="property-contact__buttons">
                            <a href="/contact/" class="property-btn__contact">
                                <span class="property-btn__contactIcon"></span>
                                詳細をお問い合わせ
                            </a>

                            <a href="tel:0120-123-123" class="property-btn__tel">
                                <p class="property-btn__telNumber">
                                    <span class="property-btn__telIcon"></span>
                                    0120-123-123
                                </p>
                                <p class="property-btn__telInfo">電話受付 24時間 年中無休</p>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if( is_singular( 'buy' ) ): // 投稿タイプがbuyのシングルページ?>
                        <div class="property-contact__flex">
                            <div>
                                <p class="property-contact__title">賃料</p>
                                <p class="property-contact__text">
                                    <?php if(get_post_meta($post->ID, 'sale_price',true)): // 入力がある場合 ?>
                                        <?php echo post_custom('sale_price'); ?>
                                    <?php else: ?>
                                        - 円
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div>
                                <p class="property-contact__title">広さ</p>
                                <p class="property-contact__text">
                                    <?php if(get_post_meta($post->ID, 'occupied_area',true)): // 入力がある場合 ?>
                                        <?php echo post_custom('occupied_area'); ?>㎡
                                    <?php else: ?>
                                    -
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div>
                                <p class="property-contact__title">間取り</p>
                                <p class="property-contact__text">
                                    <?php if(get_post_meta($post->ID, 'layout_disc',true)): // 入力がある場合 ?>
                                        <?php echo post_custom('layout_disc'); ?>
                                    <?php else: ?>
                                    -
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>

                        <?php 
                        $management_fee = post_custom('management_fee')*1000;
                        $maintenance_charge = post_custom('maintenance_charge')*1000;
                        $borrowing_amount = post_custom('sale_price')*1000 + $management_fee + $maintenance_charge;
                        $monthly_interest = 0.45/12;
                        $repayment_counts = 35;
                        $repayment_amount = $borrowing_amount * $monthly_interest * pow((1 + $monthly_interest), $repayment_counts) / pow((1 + $monthly_interest), $repayment_counts) - 1;
                        ?>
                        <div class="property-contact__payment">
                            <dl>
                                <dt class="property-contact__title">月々想定支払い額※</dt>
                                <dd class="property-contact__text"><?php echo round($repayment_amount, 0) ?><span> 円/月（管理費+修繕費込）</span></dd>
                            </dl>
                        </div>

                        <table class="property-contact__listInfo">
                            <tbody>
                                <tr>
                                    <th class="property-listPrice__title">駅徒歩</th>
                                    <td class="property-listPrice__text">
                                        <?php if(get_post_meta($post->ID, 'station_walk1',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('station_walk1'); ?>分
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                        (<?php if(get_post_meta($post->ID, 'route1',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('route1'); ?>
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                        <?php if(get_post_meta($post->ID, 'station1',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('station1'); ?>駅
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>)
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">築年数</th>
                                    <td class="property-listPrice__text">
                                        <?php if(get_post_meta($post->ID, 'age',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('age'); ?>年
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">階数</th>
                                    <td class="property-listPrice__text">
                                        <?php if(get_post_meta($post->ID, 'floor',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('floor'); ?>階
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">管理費</th>
                                    <td class="property-listPrice__text">
                                        <?php if(get_post_meta($post->ID, 'management_fee',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('management_fee'); ?>0,000円
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="property-listPrice__title">修繕積立金</th>
                                    <td class="property-listPrice__text">
                                        <?php if(get_post_meta($post->ID, 'maintenance_charge',true)): // 入力がある場合 ?>
                                            <?php echo post_custom('maintenance_charge'); ?>0,000円
                                        <?php else: ?>
                                        -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="property-contact__note">
                            ※借入総額<?php echo post_custom('sale_price'); ?>万円、管理費<?php echo post_custom('management_fee'); ?>0,000円、修繕積立費<?php echo post_custom('maintenance_charge'); ?>0,000円、頭金無し、紹介ローン・都市銀行・変動金利（<?php echo $monthly_interest; ?>%）、
                            借り入れ年数35年を想定。金融機関の審査によって個人差がありますので、予めご了承ください。変動金利につき、
                            月々の支払額は変動する可能性があります。オーナーチェンジ（投資用）物件の場合、投資用ローンでご購入となるため、金利その他条件により、
                            想定支払い額が表示価格よりも高額となる場合があります。表示条件での購入をお約束するものではありませんのでご了承ください。
                        </p>

                        <div class="property-contact__buttons">
                            <a href="/contact/" class="property-btn__contact">
                                <span class="property-btn__contactIcon"></span>
                                詳細をお問い合わせ
                            </a>

                            <a href="tel:0120-123-123" class="property-btn__tel">
                                <p class="property-btn__telNumber">
                                    <span class="property-btn__telIcon"></span>
                                    0120-123-123
                                </p>
                                <p class="property-btn__telInfo">電話受付 24時間 年中無休</p>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endif;?>
            <?php endif;?>
        </div>
    </div>
</section>