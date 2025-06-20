<?php get_header(); ?>
<section class="l_pageHeader">
	<div class="l_pageHeader_breadcrumbs">
		<div class="l_wideContainer">
			<?php get_template_part('part/breadcrumbs'); ?>
		</div>
	</div>
	<div class="l_pageHeader_title">
		<div class="l_container">
			<p class="c_title">
				<span class="c_title_english">PROGRAM</span>
				<span class="c_title_japanese">プログラム</span>
			</p>
		</div>
	</div>
	<?php echo wp_get_attachment_image(get_field('pageHeader_image'), 'full'); ?>
</section>
<section class="l_main">
	<div class="l_container">
		<h1 class="c_secondTitle c_animation_fadeIn">
			<span class="c_secondTitle_english"><?php the_field('pageHeader_english'); ?></span>
			<span class="c_secondTitle_japanese"><?php the_title(); ?></span>
		</h1>
		<div class="c_bodyBlock c_animation_fadeIn u_textAlign_lg_center">
			<?php the_content(); ?>
		</div>
	</div>
</section>
<section class="l_main p_program_other u_background_black u_color_white">
	<div class="l_container">
		<p class="c_subTitle u_marginTop_0">
			<span class="c_subTitle_english">OTHER PROGRAM</span>
		</p>
	</div>
	<?php $args = array(
		'post_type' => 'program',
		'posts_per_page' => 4,
	);
	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) : ?>
		<div class="l_wideContainer">
			<ul class="p_program_list">
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<div class="p_program_list_data">
								<span class="p_program_list_data_english"><?php the_field('pageHeader_english'); ?></span>
								<span class="p_program_list_data_japanese"><?php the_title(); ?></span>
							</div>
							<?php echo wp_get_attachment_image(get_field('pageHeader_image'), 'large'); ?>
						</a>
					</li>
				<?php endwhile; wp_reset_postdata(); ?>
			</ul>
		</div>
		<div class="l_container">
			<p class="c_buttonWrapper"><a href="<?php echo home_url(); ?>/program/" class="c_button"><span>MORE</span></a></p>
		</div>
	<?php else: ?>
		<div class="l_container">
			<p class="u_margin_0 u_textAlign_center">只今、準備中です。</p>
		</div>
	<?php endif; ?>
</section>
<?php get_template_part('part/reservation'); ?>
<?php get_footer(); ?>
