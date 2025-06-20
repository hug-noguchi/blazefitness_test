<?php get_header(); ?>

<main>
	<section class="l_main">
		<h1 class="c_title libre">Specified Commercial<br>Transaction Law</h1>
		<section class="agreement">
				<h2 class="agreement_heading">特定商取引法に基づく表示</h2>

				<div class="agreement_content">
					<?php the_content(); ?>
				</div>
			</section>

		<div class="c_buttonWrapper">
			<a href="<?php echo home_url("/"); ?>" class="c_button libre">Back to Top<span class="arrow"></span></a>
		</div>
	</section>
</main>

<?php get_footer(); ?>