<?php get_header(); ?>

<main>
	<section class="l_main">
		<h1 class="c_title libre">Contact</h1>

		<div class="l_container">
			<div class="c_bodyBlock c_animation_fadeIn">
				<?php the_content(); ?>
			</div>
		</div>

		<div class="c_buttonWrapper">
			<a href="<?php echo home_url("/"); ?>" class="c_button libre">Back to Top<span class="arrow"></span></a>
		</div>
	</section>
</main>

<script>
	jQuery('.c_mailform_policy .mwform-checkbox-field-text').html('<a href="/privacypolicy" target="_blank" rel="noopener noreferrer" class="u-link">プライバシーポリシー</a>に同意する');
</script>

<?php get_footer(); ?>
