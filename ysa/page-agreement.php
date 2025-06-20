<?php get_header(); ?>

<main>
	<section class="l_main">
		<h1 class="c_title libre">Agreement</h1>
		
		<section class="agreement">
				<h2 class="agreement_heading">THE BLAZE FIT. MAGOME 会員規約</h2>
				<?php the_content(); ?>
			</section>

		<div class="c_buttonWrapper">
			<a href="<?php echo home_url("/"); ?>" class="c_button libre">Back to Top<span class="arrow"></span></a>
		</div>
	</section>
</main>

<?php get_footer(); ?>