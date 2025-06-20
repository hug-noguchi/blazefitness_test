<?php get_header(); ?>

<main>
	<section class="l_main">
		<div class="p_news_detail c_animation_fadeIn">
			<div class="p_news_item">
				<time class="nunito"><?php echo get_post_time('Y/m/d'); ?></time>
				<?php $terms = get_the_terms($post->ID, 'newscategory'); ?>
				<?php if ($terms) : ?>
					<ul class="p_news_category">
						<?php foreach ($terms as $term) : ?>
							<li><?php echo $term->name; ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
			<h1 class="p_news_heading nunito"><?php the_title(); ?></h1>
			<div class="c_bodyBlock">
				<?php the_content(); ?>
			</div>
			<div class="c_buttonWrapper">
				<a href="<?php echo home_url("/news/"); ?>" class="c_button libre">Back to All<span class="arrow"></span></a>
			</div>
			<div class="c_buttonWrapper">
				<a href="<?php echo home_url("/"); ?>" class="c_button libre">Back to Top<span class="arrow"></span></a>
			</div>
		</div>

		<?php include(get_template_directory() . '/part/start.php'); ?>
	
		<?php include(get_template_directory() . '/part/reservation.php'); ?>
	</section>
</main>

<?php get_footer(); ?>
