<section class="l_pageHeader">
	<div class="l_pageHeader_breadcrumbs">
		<div class="l_wideContainer">
			<?php get_template_part('part/breadcrumbs'); ?>
		</div>
	</div>
	<div class="l_pageHeader_title">
		<div class="l_container">
			<h1 class="c_title">
				<span class="c_title_english"><?php the_field('pageHeader_english'); ?></span>
				<span class="c_title_japanese"><?php the_title(); ?></span>
			</h1>
		</div>
	</div>
	<?php echo wp_get_attachment_image(get_field('pageHeader_image'), 'full'); ?>
</section>
