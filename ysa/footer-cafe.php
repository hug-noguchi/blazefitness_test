		<footer class="l_footer">
			<div class="w-container">
				<div class="l_footer_content">
					<div class="l_footer_content_logo">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/logo-footer.png" alt="NORI LOUNGE" width="270" height="153">
						</figure>
						<p class="l_footer_detail">
							NORI LOUNGE（ノリ ラウンジ）<br>
							TEL : 03-5742-2906<br>
							東京都大田区中馬込2-8-1 日経エスプラナード 1F<br>
							営業時間 : 不定休 11:30 ～ 22:30（L.O. 22:00）
						</p>
					</div>
					<div class="l_footer_qr">
						<ul>
							<li>
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/qr-instagram.png" alt="instagram" width="108" height="108">
								</figure>
								<p>official instagram</p>
							</li>
							<li>
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/qr-map.png" alt="map" width="108" height="108">
								</figure>
								<p>map</p>
							</li>
						</ul>
					</div>
				</div>
				<?php if(have_rows('externallink', 'option')): ?>
					<ul class="l_footer_externalLink">
						<?php
							$i = 1;
							while(have_rows('externallink', 'option')): the_row(); ?>
							<?php
								$id = "";
								if ($i == 2) {
									$id = "official";
								}
							?>
							<?php if ($i == 4) { ?>
								<li class="ysa">
									<a href="https://ysa.jp/" target="_blank">
										<span class="l_footer_externalLink_logo">
											<img width="102" height="35" class="attachment-full size-full" src="<?php echo get_template_directory_uri(); ?>/img/cafe/logo-ysa.png" decoding="async" loading="lazy">
										</span>
										<span class="l_footer_externalLink_name">YSA<br>Official HP</span>
									</a>
								</li>
							<?php } ?>
								<li>
									<a href="<?php the_sub_field('externallink_url', 'option'); ?>" target="_blank" id="<?php echo $id; ?>">
										<span class="l_footer_externalLink_logo"><?php echo wp_get_attachment_image(get_sub_field('externallink_logo', 'option'), 'full'); ?></span>
										<span class="l_footer_externalLink_name"><?php the_sub_field('externallink_name', 'option'); ?></span>
									</a>
								</li>
						<?php $i++; endwhile; ?>
					</ul>
				<?php endif; ?>
				<p class="l_footer_copyright">Copyright ©2023 NORILOUNGE All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<?php wp_footer(); ?>
</body>
</html>
