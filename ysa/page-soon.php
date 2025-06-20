<?php get_header(); ?>

<style>
	.l_footer {
		display: none;
	}
</style>

<main>
	<div class="l_main">
		<div class="p_soon c_animation_fadeIn u_textAlign_lg_left">
			<section class="p_soon_body">
				<h1 class="p_soon_logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.png" alt="THE BLAZE FIT. MAGOME" width="432" height="200">
				</h1>
				<section>
					<h2 class="p_soon_title libre">COMING SOON</h2>
					<p class="p_hero_text">こちらのページは<br class="sp">近日公開予定です。</p>
				</section>
			</section>
			<div class="c_buttonWrapper">
				<a href="<?php echo home_url("/"); ?>" class="c_button libre">Back to Top<span class="arrow"></span></a>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>