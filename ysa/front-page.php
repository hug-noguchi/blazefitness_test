<?php get_header(); ?>

<style>
	.l_header {
		position: absolute;
		top: 0;
		z-index: 1;
	}
	.l_header_nav .nav_link {
		color: #fff;
	}
	.l_header_schedule a {
		border: 1px solid #fff;
		color: #fff;
	}
	.l_header_menu .hamburger span {
		background-color: #fff;
	}
	.l_header_menu .hamburger.active span {
		background-color: #40220F;
	}
	.l_main {
		margin-top: 0;
	}
</style>

<script>
let src = $('.attr').children('img').attr('src').replace('logo', 'logo-w');
$('.attr').children('img').attr('src', src);
</script>

<main class="l_main">
	<div class="p_hero c_animation_fadeIn u_textAlign_lg_left">
		<picture>
			<source srcset="<?php the_field('hero_sp'); ?>" media="(max-width: 767px)" />
			<img src="<?php the_field('hero_pc'); ?>" alt="THE BLAZE FIT. MAGOME" width="1920" height="1080" />
		</picture>
	</div>

	<section class="p_about">
		<h2 class="c_title-v2 c_animation_fadeIn u_textAlign_lg_left">
			<span class="c_title-v2-en libre">About Us</span>
			<span class="c_title-v2-ja">当ジムについて</span>
		</h2>

		<div class="p_about_img">
			<img src="<?php the_field('about_img01'); ?>" alt="About Us" width="" height="" />
		</div>
		<div class="p_about_content">
			<div class="p_about_content-left">
				<h3 class="p_about_heading">
					<span class="p_about_heading-en libre"><?php the_field('about_lead_en'); ?></span>
					<span class="p_about_heading-ja"><?php the_field('about_lead_ja'); ?></span>
				</h3>
				<div class="p_about_img pc">
					<figure>
						<img src="<?php the_field('about_img02'); ?>" alt="About Us" width="" height="" />
					</figure>
				</div>
			</div>
			<div class="p_about_content-right">
				<div class="p_about_text">
					<?php the_field('about_text'); ?>
				</div>
				<div class="c_buttonWrapper">
					<a href="<?php echo home_url(); ?>/aboutus/" class="c_button libre">View more<span class="arrow"></span></a>
				</div>
			</div>
		</div>
		<div class="p_about_img sp">
			<figure>
				<img src="<?php the_field('about_img02'); ?>" alt="About Us" width="" height="" />
			</figure>
		</div>
	</section>

	<section class="p_news">
		<h2 class="c_title c_animation_fadeIn u_textAlign_lg_left libre">News</h2>
		<div class="p_news_body">
			<?php
				$args = array(
					'post_type' => 'news',
					'posts_per_page' => 3,
				);
				$the_query = new WP_Query($args);
			?>
			<?php	if ($the_query->have_posts()) : ?>
				<ul class="p_news_list">
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<li class="p_news_item c_animation_fadeIn">
							<a href="<?php the_permalink(); ?>">
								<time class="nunito"><?php echo get_post_time('Y/m/d'); ?></time>
								<?php $terms = get_the_terms($post->ID, 'newscategory'); ?>
								<?php if ($terms) : ?>
									<ul class="p_news_category">
										<?php foreach ($terms as $term) : ?>
											<li class="p_news_list_category"><?php echo $term->name; ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
								<p class="p_news_title"><?php the_title(); ?></p>
							</a>
						</li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
				<p class="c_buttonWrapper c_animation_fadeIn">
					<a href="<?php echo home_url(); ?>/news/" class="c_button libre">View more<span class="arrow"></span></a>
				</p>
			<?php else: ?>
				<p class="c_animation_fadeIn u_margin_0 u_textAlign_center">只今、準備中です。</p>
			<?php endif; ?>
		</div>
	</section>

	<?php include(get_template_directory() . '/part/start.php'); ?>

	<?php include(get_template_directory() . '/part/reservation.php'); ?>
</main>

<?php get_footer(); ?>
