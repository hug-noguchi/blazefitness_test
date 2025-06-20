<?php get_header(); ?>
<section class="l_pageHeader">
	<div class="l_pageHeader_breadcrumbs">
		<div class="l_wideContainer">
			<?php get_template_part('part/breadcrumbs'); ?>
		</div>
	</div>
	<div class="l_pageHeader_title">
		<div class="l_container">
			<h1 class="c_title">
				<span class="c_title_english">PROGRAM</span>
				<span class="c_title_japanese">プログラム</span>
			</h1>
		</div>
	</div>
	<?php echo wp_get_attachment_image(get_field('programarchive_pageHeader_image', 'option'), 'full'); ?>
</section>
<section class="l_main">
	<div class="l_container">
		<p class="c_catchcopy c_animation_splitText"><?php the_field('programarchive_catchcopy', 'option'); ?></p>
		<div class="c_bodyBlock c_animation_fadeIn u_textAlign_lg_center">
			<?php the_field('programarchive_description', 'option'); ?>
		</div>
	</div>
	<div class="l_wideContainer">
		<?php if (have_posts()) : ?>
			<ul class="p_program_list u_marginTop_40">
				<?php while (have_posts()) : the_post(); ?>
					<li class="c_animation_fadeIn">
						<a href="<?php the_permalink(); ?>">
							<div class="p_program_list_data">
								<span class="p_program_list_data_english"><?php the_field('pageHeader_english'); ?></span>
								<span class="p_program_list_data_japanese"><?php the_title(); ?></span>
							</div>
							<?php echo wp_get_attachment_image(get_field('pageHeader_image'), 'large'); ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php else: ?>
			<p class="c_animation_fadeIn u_margin_0 u_textAlign_center">只今、準備中です。</p>
		<?php endif; ?>
	</div>
</section>
<?php get_template_part('part/reservation'); ?>
<?php get_footer(); ?>
