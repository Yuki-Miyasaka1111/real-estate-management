<?php get_header(); ?>
<?php get_template_part('gnavi') ?>
<main class="buy">
	<div class="article-seminar">
		<?php
		$args = [
			'post_type' => 'buy', // カスタム投稿名が「buy」の場合
		];
		$my_query = new WP_Query($args); ?>

		<?php if ($my_query->have_posts()): // 投稿がある場合 ?>
			<!-- ▽ ループ開始 ▽ -->

			<?php if(is_user_logged_in()): //ログインしている場合 ?>
				<!-- コンテントエリア -->
				<div class="content show">
					<!-- body -->
					<div class="content-primary">
						<h1 class="content-primary__h1"><?php echo post_custom('p-name'); ?></h1>
						<h2 class="content-primary__h2">
							<span>
								<?php if(get_post_meta($post->ID, 'floor',true)): // 入力がある場合 ?>
									<?php echo post_custom('floor'); ?>階
								<?php else: ?>
									- 階
								<?php endif; ?>
							</span>
							<span>
								<?php if(get_post_meta($post->ID, 'layout',true)): // 入力がある場合 ?>
									<?php echo post_custom('layout'); ?>
								<?php else: ?>
									- 
								<?php endif; ?>
							</span>
							<span class="content-primary__price">
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
							</span>
						</h2>

						<div class="property-thumbnails">
							<div class="property-thumbnails__slider slider">
								<?php
									$imgsize = "full";
									$thumbnails = post_custom('thumbnail');
									if($thumbnails){
										if(is_array($thumbnails)){
										foreach($thumbnails as $image){
										$thumbnail = wp_get_attachment_image_src($image, $imgsize);
										list( $url, $w, $h) = $thumbnail; ?>

											<div><img src="<?php echo $url; ?>"></div>
								
										<?php }
										}else{
											echo wp_get_attachment_image($thumbnails); 
										}
									}
								?>
							</div>

							<div class="property-sub__slider">
								<?php
									$imgsize = "full";
									$thumbnails = post_custom('thumbnail');
									if($thumbnails){
										if(is_array($thumbnails)){
										foreach($thumbnails as $image){
										$thumbnail = wp_get_attachment_image_src($image, $imgsize);
										list( $url, $w, $h) = $thumbnail; ?>

											<div><img src="<?php echo $url; ?>"></div>
								
										<?php }
										}else{
											echo wp_get_attachment_image($thumbnails); 
										}
									}
								?>
							</div>
						</div>

						<p class="property-note">※表示写真は、建物の外観写真・共用部分の写真を除き、同じ建物内の別物件の写真を表示していることがあります。また、写真に家具等の家財がある場合も、イメージ図となります。詳細は、お問い合わせのうえご確認下さい。</p>

						<section class="property-primary">
							<h1 class="content-primary__h1">物件概要</h1>
							<p></p>
							<dl class="property-details">
								<dt>物件名</dt>
								<dd class="property-details__wideCell"><?php echo post_custom('p-name'); ?></dd>
								<dt>住所</dt>
								<dd class="property-details__wideCell"><?php echo post_custom('address'); ?></dd>
								<dt>最寄駅</dt>
								<dd class="property-details__wideCell">
									<?php if(get_post_meta($post->ID, 'route1',true)): // 入力がある場合 ?>
										<?php echo post_custom('route1'); ?>
									<?php else: ?>
										-
									<?php endif; ?>
									<?php if(get_post_meta($post->ID, 'station1',true)): // 入力がある場合 ?>
										「<?php echo post_custom('station1'); ?>駅」
									<?php endif; ?>
									<?php if(get_post_meta($post->ID, 'station_walk1',true)): // 入力がある場合 ?>
										徒歩<?php echo post_custom('station_walk1'); ?>分<br>
									<?php endif; ?>

									<?php if(get_post_meta($post->ID, 'route2',true)): // 入力がある場合 ?>
										<?php echo post_custom('route2'); ?>
									<?php endif; ?>
									<?php if(get_post_meta($post->ID, 'station2',true)): // 入力がある場合 ?>
										「<?php echo post_custom('station2'); ?>駅」
									<?php endif; ?>
									<?php if(get_post_meta($post->ID, 'station_walk2',true)): // 入力がある場合 ?>
										徒歩<?php echo post_custom('station_walk2'); ?>分<br>
									<?php endif; ?>

									<?php if(get_post_meta($post->ID, 'route3',true)): // 入力がある場合 ?>
										<?php echo post_custom('route3'); ?>
									<?php endif; ?>
									<?php if(get_post_meta($post->ID, 'station3',true)): // 入力がある場合 ?>
										「<?php echo post_custom('station3'); ?>駅」
									<?php endif; ?>
									<?php if(get_post_meta($post->ID, 'station_walk3',true)): // 入力がある場合 ?>
										徒歩<?php echo post_custom('station_walk3'); ?>分<br>
									<?php endif; ?>

									<?php if(get_post_meta($post->ID, 'route4',true)): // 入力がある場合 ?>
										<?php echo post_custom('route4'); ?>
									<?php endif; ?>
									<?php if(get_post_meta($post->ID, 'station4',true)): // 入力がある場合 ?>
										「<?php echo post_custom('station4'); ?>駅」
									<?php endif; ?>
									<?php if(get_post_meta($post->ID, 'station_walk4',true)): // 入力がある場合 ?>
										徒歩<?php echo post_custom('station_walk4'); ?>分<br>
									<?php endif; ?>

									<?php if(get_post_meta($post->ID, 'route5',true)): // 入力がある場合 ?>
										<?php echo post_custom('route5'); ?>
									<?php endif; ?>
									<?php if(get_post_meta($post->ID, 'station5',true)): // 入力がある場合 ?>
										「<?php echo post_custom('station5'); ?>駅」
									<?php endif; ?>
									<?php if(get_post_meta($post->ID, 'station_walk5',true)): // 入力がある場合 ?>
										徒歩<?php echo post_custom('station_walk5'); ?>分<br>
									<?php endif; ?>
								</dd>

								<dt>販売価格</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'sale_price',true)): // 入力がある場合 ?>
										<?php $salePrice = number_format(post_custom('sale_price')); ?>
										<?php if (strlen($salePrice) >= 6)://カンマの数も含まれているため ?>
											<?php echo substr_replace($salePrice, "億", 1, 0) ?>万円
										<?php else: ?>
											<?php echo $salePrice ?>万円
										<?php endif; ?>
									<?php else: ?>
										-
									<?php endif; ?>
								</dd>
								<dt>管理費</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'management_fee',true)): // 入力がある場合 ?>
										<?php echo post_custom('management_fee'); ?>0,000円
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>修繕積立金</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'maintenance_charge',true)): // 入力がある場合 ?>
										<?php echo post_custom('maintenance_charge'); ?>0,000円
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>その他使用料</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'other_charge',true)): // 入力がある場合 ?>
										<?php echo post_custom('other_charge'); ?>0,000円
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>間取り</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'layout_disc',true)): // 入力がある場合 ?>
										<?php echo post_custom('layout_disc'); ?>
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>専有面積</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'occupied_area',true)): // 入力がある場合 ?>
										<?php echo post_custom('occupied_area'); ?>㎡
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>バルコニー面積</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'balcony_area',true)): // 入力がある場合 ?>
										<?php echo post_custom('balcony_area'); ?>㎡
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>築年月</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'age',true)): // 入力がある場合 ?>
										<?php echo post_custom('age'); ?>年
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>構造</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'structure',true)): // 入力がある場合 ?>
										<?php echo post_custom('structure'); ?>
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>所在階</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'structure',true)): // 入力がある場合 ?>
										<?php echo post_custom('structure'); ?>
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>総階数</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'total_ground_floor',true)): // 入力がある場合 ?>
										地上<?php echo post_custom('total_ground_floor'); ?>階 
									<?php else: ?>
									-
									<?php endif; ?>
									 / 
									<?php if(get_post_meta($post->ID, 'total_underground_floor',true)): // 入力がある場合 ?>
										地下<?php echo post_custom('total_underground_floor'); ?>階</dd>
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>総戸数</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'total_units',true)): // 入力がある場合 ?>
										<?php echo post_custom('total_units'); ?>戸
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>エレベータ有無</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'elevator',true)): // 入力がある場合 ?>
										<?php echo post_custom('elevator'); ?>戸
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>
								
								<dt>用途地域</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'district',true)): // 入力がある場合 ?>
										<?php echo post_custom('district'); ?>戸
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>管理会社</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'proprietary_company',true)): // 入力がある場合 ?>
										<?php echo post_custom('proprietary_company'); ?>戸
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>管理方式</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'management_system',true)): // 入力がある場合 ?>
										<?php echo post_custom('management_system'); ?>戸
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>

								<dt>施工会社</dt>
								<dd>
									<?php if(get_post_meta($post->ID, 'construction_company',true)): // 入力がある場合 ?>
										<?php echo post_custom('construction_company'); ?>戸
									<?php else: ?>
									-
									<?php endif; ?>
								</dd>
							</dl>
						</section>

						<?php if(have_posts()): while(have_posts()):the_post();
						$utilities_bath = post_custom('utilities_bath');
						$utilities_kitchen = post_custom('utilities_kitchen');
						$utilities_security = post_custom('utilities_security');
						$utilities_room = post_custom('utilities_room');
						$utilities_common = post_custom('utilities_common');
						$utilities_other = post_custom('utilities_other');
						?>
						<section class="property-primary">
							<h1 class="content-primary__h1">物件設備</h1>
							<table>
								<tbody>
									<tr>
										<th>バス・トイレ</th>
										<td>
										<?php if(get_post_meta($post->ID, 'utilities_bath',true)): // 入力がある場合 ?>
											<?php 
												if (is_array($utilities_bath)) {
													foreach($utilities_bath  as $val){
														if ($val === end($utilities_bath)) {
															echo $val;
														}else{
															echo $val."、";
														}
													}
												}else{
													echo $utilities_bath;   
												}
											?>
										<?php else: ?>
										-
										<?php endif; ?>										
										</td>
									</tr>
									<tr>
										<th>キッチン</th>
										<td>
										<?php if(get_post_meta($post->ID, 'utilities_kitchen',true)): // 入力がある場合 ?>
											<?php 
												if (is_array($utilities_kitchen)) {
													foreach($utilities_kitchen  as $val){
														if ($val === end($utilities_kitchen)) {
															echo $val;
														}else{
															echo $val."、";
														}
													}
												}else{
													echo $utilities_kitchen;   
												}
											?>
										<?php else: ?>
										-
										<?php endif; ?>	
										</td>
									</tr>
									<tr>
										<th>セキュリティー</th>
										<td>
										<?php if(get_post_meta($post->ID, 'utilities_security',true)): // 入力がある場合 ?>
											<?php 
												if (is_array($utilities_security)) {
													foreach($utilities_security  as $val){
														if ($val === end($utilities_security)) {
															echo $val;
														}else{
															echo $val."、";
														}
													}
												}else{
													echo $utilities_security;   
												}
											?>
										<?php else: ?>
										-
										<?php endif; ?>													
										</td>
									</tr>
									<tr>
										<th>室内設備</th>
										<td>
										<?php if(get_post_meta($post->ID, 'utilities_room',true)): // 入力がある場合 ?>
											<?php 
												if (is_array($utilities_room)) {
													foreach($utilities_room  as $val){
														if ($val === end($utilities_room)) {
															echo $val;
														}else{
															echo $val."、";
														}
													}
												}else{
													echo $utilities_room;   
												}
											?>
										<?php else: ?>
										-
										<?php endif; ?>	
										</td>
									</tr>
									<tr>
										<th>共有部</th>
										<td>
										<?php if(get_post_meta($post->ID, 'utilities_common',true)): // 入力がある場合 ?>
											<?php 
												if (is_array($utilities_common)) {
													foreach($utilities_common  as $val){
														if ($val === end($utilities_common)) {
															echo $val;
														}else{
															echo $val."、";
														}
													}
												}else{
													echo $utilities_common;   
												}
											?>
										<?php else: ?>
										-
										<?php endif; ?>
										</td>
									</tr>
									<tr>
										<th>その他の特徴</th>
										<td>
										<?php if(get_post_meta($post->ID, 'utilities_other',true)): // 入力がある場合 ?>
											<?php 
												if (is_array($utilities_other)) {
													foreach($utilities_other  as $val){
														if ($val === end($utilities_other)) {
															echo $val;
														}else{
															echo $val."、";
														}
													}
												}else{
													echo $utilities_other;   
												}
											?>
										<?php else: ?>
										-
										<?php endif; ?>
										</td>
									</tr>
								</tbody>
							</table>
							<p class="property-primary__note">※駐輪場・バイク置き場・駐車場の空き状況についてはお問い合わせください。</p>

							<section class="property-primary__remark">
								<h3>備考</h3>
								<p>※敷金・礼金・各種キャンペーンについてはお部屋ごとに異なる場合がございます。なおキャンペーン情報は予告なく変更・終了する場合がございます。入居の際は事前に必ず募集条件をご確認ください。</p>
								<p>※分譲賃貸マンションの場合、貸主様や代理不動産業者によって家賃・管理費・敷金・礼金など賃貸借契約に関する設定が様々です。各所有者様によって、設備・仕様・内装などが変更されている場合もございます。</p>
								<p>※ペット飼育やSOHO利用の可否に関しては、建物の管理規約で可能になっていても、お部屋の所有者様によって禁止の場合もございますのでご注意下さい。</p>
								<p>詳細はメールやお電話にてスタッフまでご相談下さい。</p>
							</section>
						</section>
						<?php endwhile; endif; ?>

						

						<?php get_template_part('property-contact') ?>
					</div>

					<!-- sidebar -->
					<div class="content-secondary">
						<?php get_template_part('property-sidebar') ?>
					</div>
				</div>
			<?php else: //ログインしてない場合?>
				<?php $public = post_custom('public'); ?>
				<?php if ($public == '非公開'): //非公開の場合 ?>
					<!-- コンテントエリア -->
					<div class="content show">
						<!-- body -->
						<div class="content-primary">
							<h1 class="content-primary__h1">非公開</h1>
							<h2 class="content-primary__h2"></h2>
							<section class="property-primary hidden">
								<h1 class="content-primary__h1">物件概要</h1>
								<p></p>
								<dl class="property-details">
									<dt>物件名</dt>
									<dd class="property-details__wideCell">-</dd>
									<dt>住所</dt>
									<dd class="property-details__wideCell">-</dd>
									<dt>最寄駅</dt>
									<dd class="property-details__wideCell">-</dd>
									<dt>販売価格</dt>
									<dd>-</dd>
									<dt>管理費</dt>
									<dd>-</dd>
									<dt>修繕積立金</dt>
									<dd>-</dd>
									<dt>その他使用料</dt>
									<dd>-</dd>
									<dt>間取り</dt>
									<dd>-</dd>
									<dt>専有面積</dt>
									<dd>-</dd>
									<dt>所在階</dt>
									<dd>-</dd>
									<dt>総階数</dt>
									<dd>-</dd>
									<dt>総戸数</dt>
									<dd>-</dd>
									<dt>エレベータ有無</dt>
									<dd>-</dd>
									<dt>用途地域</dt>
									<dd>-</dd>
									<dt>管理会社</dt>
									<dd>-</dd>
									<dt>管理方式</dt>
									<dd>-</dd>
									<dt>施工会社</dt>
									<dd>-</dd>
								</dl>
								<?php get_template_part('property-readmore') ?>
							</section>

							<section class="property-primary__remark">
								<h3>備考</h3>
								<p>※敷金・礼金・各種キャンペーンについてはお部屋ごとに異なる場合がございます。なおキャンペーン情報は予告なく変更・終了する場合がございます。入居の際は事前に必ず募集条件をご確認ください。</p>
								<p>※分譲賃貸マンションの場合、貸主様や代理不動産業者によって家賃・管理費・敷金・礼金など賃貸借契約に関する設定が様々です。各所有者様によって、設備・仕様・内装などが変更されている場合もございます。</p>
								<p>※ペット飼育やSOHO利用の可否に関しては、建物の管理規約で可能になっていても、お部屋の所有者様によって禁止の場合もございますのでご注意下さい。</p>
								<p>詳細はメールやお電話にてスタッフまでご相談下さい。</p>
							</section>
							</section>
						</div>

						<!-- sidebar -->
						<div class="content-secondary">
							<?php get_template_part('property-sidebar') ?>
						</div>
					</div>
				<?php else: //公開の場合?>
					<!-- コンテントエリア -->
					<div class="content show">
						<!-- body -->
						<div class="content-primary">
							<h1 class="content-primary__h1"><?php echo post_custom('p-name'); ?></h1>
							<h2 class="content-primary__h2">
								<span>
									<?php if(get_post_meta($post->ID, 'floor',true)): // 入力がある場合 ?>
										<?php echo post_custom('floor'); ?>階
									<?php else: ?>
										- 階
									<?php endif; ?>
								</span>
								<span>
									<?php if(get_post_meta($post->ID, 'layout',true)): // 入力がある場合 ?>
										<?php echo post_custom('layout'); ?>
									<?php else: ?>
										- 
									<?php endif; ?>
								</span>
								<span class="content-primary__price">
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
								</span>
							</h2>

							<div class="property-thumbnails">
								<div class="property-thumbnails__slider slider">
									<?php
										$imgsize = "full";
										$thumbnails = post_custom('thumbnail');
										if($thumbnails){
											if(is_array($thumbnails)){
											foreach($thumbnails as $image){
											$thumbnail = wp_get_attachment_image_src($image, $imgsize);
											list( $url, $w, $h) = $thumbnail; ?>

												<div><img src="<?php echo $url; ?>"></div>
									
											<?php }
											}else{
												echo wp_get_attachment_image($thumbnails); 
											}
										}
									?>
								</div>

								<div class="property-sub__slider">
									<?php
										$imgsize = "full";
										$thumbnails = post_custom('thumbnail');
										if($thumbnails){
											if(is_array($thumbnails)){
											foreach($thumbnails as $image){
											$thumbnail = wp_get_attachment_image_src($image, $imgsize);
											list( $url, $w, $h) = $thumbnail; ?>

												<div><img src="<?php echo $url; ?>"></div>
									
											<?php }
											}else{
												echo wp_get_attachment_image($thumbnails); 
											}
										}
									?>
								</div>
							</div>

							<p class="property-note">※表示写真は、建物の外観写真・共用部分の写真を除き、同じ建物内の別物件の写真を表示していることがあります。また、写真に家具等の家財がある場合も、イメージ図となります。詳細は、お問い合わせのうえご確認下さい。</p>

							<section class="property-primary">
								<h1 class="content-primary__h1">物件概要</h1>
								<p></p>
								<dl class="property-details">
									<dt>物件名</dt>
									<dd class="property-details__wideCell"><?php echo post_custom('p-name'); ?></dd>
									<dt>住所</dt>
									<dd class="property-details__wideCell"><?php echo post_custom('address'); ?></dd>
									<dt>最寄駅</dt>
									<dd class="property-details__wideCell">
										<?php if(get_post_meta($post->ID, 'route1',true)): // 入力がある場合 ?>
											<?php echo post_custom('route1'); ?>
										<?php else: ?>
											-
										<?php endif; ?>
										<?php if(get_post_meta($post->ID, 'station1',true)): // 入力がある場合 ?>
											「<?php echo post_custom('station1'); ?>駅」
										<?php endif; ?>
										<?php if(get_post_meta($post->ID, 'station_walk1',true)): // 入力がある場合 ?>
											徒歩<?php echo post_custom('station_walk1'); ?>分<br>
										<?php endif; ?>

										<?php if(get_post_meta($post->ID, 'route2',true)): // 入力がある場合 ?>
											<?php echo post_custom('route2'); ?>
										<?php endif; ?>
										<?php if(get_post_meta($post->ID, 'station2',true)): // 入力がある場合 ?>
											「<?php echo post_custom('station2'); ?>駅」
										<?php endif; ?>
										<?php if(get_post_meta($post->ID, 'station_walk2',true)): // 入力がある場合 ?>
											徒歩<?php echo post_custom('station_walk2'); ?>分<br>
										<?php endif; ?>

										<?php if(get_post_meta($post->ID, 'route3',true)): // 入力がある場合 ?>
											<?php echo post_custom('route3'); ?>
										<?php endif; ?>
										<?php if(get_post_meta($post->ID, 'station3',true)): // 入力がある場合 ?>
											「<?php echo post_custom('station3'); ?>駅」
										<?php endif; ?>
										<?php if(get_post_meta($post->ID, 'station_walk3',true)): // 入力がある場合 ?>
											徒歩<?php echo post_custom('station_walk3'); ?>分<br>
										<?php endif; ?>

										<?php if(get_post_meta($post->ID, 'route4',true)): // 入力がある場合 ?>
											<?php echo post_custom('route4'); ?>
										<?php endif; ?>
										<?php if(get_post_meta($post->ID, 'station4',true)): // 入力がある場合 ?>
											「<?php echo post_custom('station4'); ?>駅」
										<?php endif; ?>
										<?php if(get_post_meta($post->ID, 'station_walk4',true)): // 入力がある場合 ?>
											徒歩<?php echo post_custom('station_walk4'); ?>分<br>
										<?php endif; ?>

										<?php if(get_post_meta($post->ID, 'route5',true)): // 入力がある場合 ?>
											<?php echo post_custom('route5'); ?>
										<?php endif; ?>
										<?php if(get_post_meta($post->ID, 'station5',true)): // 入力がある場合 ?>
											「<?php echo post_custom('station5'); ?>駅」
										<?php endif; ?>
										<?php if(get_post_meta($post->ID, 'station_walk5',true)): // 入力がある場合 ?>
											徒歩<?php echo post_custom('station_walk5'); ?>分<br>
										<?php endif; ?>
									</dd>

									<dt>販売価格</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'sale_price',true)): // 入力がある場合 ?>
											<?php $salePrice = number_format(post_custom('sale_price')); ?>
											<?php if (strlen($salePrice) >= 6)://カンマの数も含まれているため ?>
												<?php echo substr_replace($salePrice, "億", 1, 0) ?>万円
											<?php else: ?>
												<?php echo $salePrice ?>万円
											<?php endif; ?>
										<?php else: ?>
											-
										<?php endif; ?>
									</dd>
									<dt>管理費</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'management_fee',true)): // 入力がある場合 ?>
											<?php echo post_custom('management_fee'); ?>0,000円
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>修繕積立金</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'maintenance_charge',true)): // 入力がある場合 ?>
											<?php echo post_custom('maintenance_charge'); ?>0,000円
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>その他使用料</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'other_charge',true)): // 入力がある場合 ?>
											<?php echo post_custom('other_charge'); ?>0,000円
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>間取り</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'layout_disc',true)): // 入力がある場合 ?>
											<?php echo post_custom('layout_disc'); ?>
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>専有面積</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'occupied_area',true)): // 入力がある場合 ?>
											<?php echo post_custom('occupied_area'); ?>㎡
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>バルコニー面積</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'balcony_area',true)): // 入力がある場合 ?>
											<?php echo post_custom('balcony_area'); ?>㎡
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>築年月</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'age',true)): // 入力がある場合 ?>
											<?php echo post_custom('age'); ?>年
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>構造</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'structure',true)): // 入力がある場合 ?>
											<?php echo post_custom('structure'); ?>
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>所在階</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'structure',true)): // 入力がある場合 ?>
											<?php echo post_custom('structure'); ?>
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>総階数</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'total_ground_floor',true)): // 入力がある場合 ?>
											地上<?php echo post_custom('total_ground_floor'); ?>階 
										<?php else: ?>
										-
										<?php endif; ?>
										/ 
										<?php if(get_post_meta($post->ID, 'total_underground_floor',true)): // 入力がある場合 ?>
											地下<?php echo post_custom('total_underground_floor'); ?>階</dd>
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>総戸数</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'total_units',true)): // 入力がある場合 ?>
											<?php echo post_custom('total_units'); ?>戸
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>エレベータ有無</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'elevator',true)): // 入力がある場合 ?>
											<?php echo post_custom('elevator'); ?>戸
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>
									
									<dt>用途地域</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'district',true)): // 入力がある場合 ?>
											<?php echo post_custom('district'); ?>戸
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>管理会社</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'proprietary_company',true)): // 入力がある場合 ?>
											<?php echo post_custom('proprietary_company'); ?>戸
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>管理方式</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'management_system',true)): // 入力がある場合 ?>
											<?php echo post_custom('management_system'); ?>戸
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>

									<dt>施工会社</dt>
									<dd>
										<?php if(get_post_meta($post->ID, 'construction_company',true)): // 入力がある場合 ?>
											<?php echo post_custom('construction_company'); ?>戸
										<?php else: ?>
										-
										<?php endif; ?>
									</dd>
								</dl>
							</section>

							<section class="property-primary">
								<h1 class="content-primary__h1">物件設備</h1>
								<table>
									<tbody>
										<tr>
											<th>バス・トイレ</th>
											<td>
											<?php if(get_post_meta($post->ID, 'utilities_bath',true)): // 入力がある場合 ?>
												<?php 
													if (is_array($utilities_bath)) {
														foreach($utilities_bath  as $val){
															if ($val === end($utilities_bath)) {
																echo $val;
															}else{
																echo $val."、";
															}
														}
													}else{
														echo $utilities_bath;   
													}
												?>
											<?php else: ?>
											-
											<?php endif; ?>										
											</td>
										</tr>
										<tr>
											<th>キッチン</th>
											<td>
											<?php if(get_post_meta($post->ID, 'utilities_kitchen',true)): // 入力がある場合 ?>
												<?php 
													if (is_array($utilities_kitchen)) {
														foreach($utilities_kitchen  as $val){
															if ($val === end($utilities_kitchen)) {
																echo $val;
															}else{
																echo $val."、";
															}
														}
													}else{
														echo $utilities_kitchen;   
													}
												?>
											<?php else: ?>
											-
											<?php endif; ?>	
											</td>
										</tr>
										<tr>
											<th>セキュリティー</th>
											<td>
											<?php if(get_post_meta($post->ID, 'utilities_security',true)): // 入力がある場合 ?>
												<?php 
													if (is_array($utilities_security)) {
														foreach($utilities_security  as $val){
															if ($val === end($utilities_security)) {
																echo $val;
															}else{
																echo $val."、";
															}
														}
													}else{
														echo $utilities_security;   
													}
												?>
											<?php else: ?>
											-
											<?php endif; ?>													
											</td>
										</tr>
										<tr>
											<th>室内設備</th>
											<td>
											<?php if(get_post_meta($post->ID, 'utilities_room',true)): // 入力がある場合 ?>
												<?php 
													if (is_array($utilities_room)) {
														foreach($utilities_room  as $val){
															if ($val === end($utilities_room)) {
																echo $val;
															}else{
																echo $val."、";
															}
														}
													}else{
														echo $utilities_room;   
													}
												?>
											<?php else: ?>
											-
											<?php endif; ?>	
											</td>
										</tr>
										<tr>
											<th>共有部</th>
											<td>
											<?php if(get_post_meta($post->ID, 'utilities_common',true)): // 入力がある場合 ?>
												<?php 
													if (is_array($utilities_common)) {
														foreach($utilities_common  as $val){
															if ($val === end($utilities_common)) {
																echo $val;
															}else{
																echo $val."、";
															}
														}
													}else{
														echo $utilities_common;   
													}
												?>
											<?php else: ?>
											-
											<?php endif; ?>
											</td>
										</tr>
										<tr>
											<th>その他の特徴</th>
											<td>
											<?php if(get_post_meta($post->ID, 'utilities_other',true)): // 入力がある場合 ?>
												<?php 
													if (is_array($utilities_other)) {
														foreach($utilities_other  as $val){
															if ($val === end($utilities_other)) {
																echo $val;
															}else{
																echo $val."、";
															}
														}
													}else{
														echo $utilities_other;   
													}
												?>
											<?php else: ?>
											-
											<?php endif; ?>
											</td>
										</tr>
									</tbody>
								</table>
								<p class="property-primary__note">※駐輪場・バイク置き場・駐車場の空き状況についてはお問い合わせください。</p>

								<section class="property-primary__remark">
									<h3>備考</h3>
									<p>※敷金・礼金・各種キャンペーンについてはお部屋ごとに異なる場合がございます。なおキャンペーン情報は予告なく変更・終了する場合がございます。入居の際は事前に必ず募集条件をご確認ください。</p>
									<p>※分譲賃貸マンションの場合、貸主様や代理不動産業者によって家賃・管理費・敷金・礼金など賃貸借契約に関する設定が様々です。各所有者様によって、設備・仕様・内装などが変更されている場合もございます。</p>
									<p>※ペット飼育やSOHO利用の可否に関しては、建物の管理規約で可能になっていても、お部屋の所有者様によって禁止の場合もございますのでご注意下さい。</p>
									<p>詳細はメールやお電話にてスタッフまでご相談下さい。</p>
								</section>
							</section>

							

							<?php get_template_part('property-contact') ?>
						</div>

						<!-- sidebar -->
						<div class="content-secondary">
							<?php get_template_part('property-sidebar') ?>
						</div>
					</div>
				<?php endif;?>

			<?php endif;?>

			

			<!-- △ ループ終了 △ -->
		<?php else: // 投稿がない場合?>
		
		<p>まだ投稿がありません。</p>
		
		<?php endif; wp_reset_postdata(); ?>
	</div>
</main>
<?php get_footer(); ?>