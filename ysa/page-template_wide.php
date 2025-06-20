<?php
/*
Template Name: テンプレート_幅広
*/
?>
<?php get_header(); ?>
<?php get_template_part('part/pageheader'); ?>
<section class="l_main">
	<div class="l_wideContainer">
		<div class="c_bodyBlock c_animation_fadeIn">
			<?php the_content(); ?>
		</div>
	</div>
</section>
<?php get_template_part('part/reservation'); ?>
<?php get_footer(); ?>
