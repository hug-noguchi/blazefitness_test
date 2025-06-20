<?php get_header(); ?>

<main>
	<section class="l_main">
		<h1 class="c_title libre">News</h1>
		<div class="p_news_content c_animation_fadeIn">
			<?php if (have_posts()) : ?>
				<ul class="p_news_list">
					<?php while (have_posts()) : the_post(); ?>
						<li class="p_news_item">
							<a href="<?php the_permalink(); ?>">
								<time class="nunito"><?php echo get_post_time('Y/m/d'); ?></time>
								<?php $terms = get_the_terms($post->ID, 'newscategory'); ?>
								<?php if ($terms) : ?>
									<ul class="p_news_category">
										<?php foreach ($terms as $term) : ?>
											<li><?php echo $term->name; ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
								<p class="p_news_title"><?php the_title(); ?></p>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
				<?php if (function_exists('the_pagination') && !empty(paginate_links())) : ?>
					<div class="c_pagination">
						<?php the_pagination(); ?>
					</div>
				<?php endif; ?>
			<?php else: ?>
				<p class="u_margin_0 u_textAlign_center">只今、準備中です。</p>
			<?php endif; ?>
			<div class="c_buttonWrapper">
				<a href="<?php echo home_url("/"); ?>" class="c_button libre">Back to Top<span class="arrow"></span></a>
			</div>
		</div>
		<?php include(get_template_directory() . '/part/start.php'); ?>
	
		<?php include(get_template_directory() . '/part/reservation.php'); ?>
	</section>

</main>

<?php get_footer(); ?>
