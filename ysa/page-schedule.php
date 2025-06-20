<?php get_header(); ?>

<main>
	<section class="l_main">
		<h1 class="c_title libre">Class Schedule</h1>

		<div class="l_container schedule">
			<div class="c_bodyBlock c_animation_fadeIn">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="c_buttonWrapper">
			<a href="<?php echo home_url("/"); ?>" class="c_button libre">Back to Top<span class="arrow"></span></a>
		</div>

		<?php include(get_template_directory() . '/part/start.php'); ?>
		
		<?php include(get_template_directory() . '/part/reservation.php'); ?>
	</section>

</main>

<?php get_footer(); ?>
