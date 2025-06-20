<?php
/*
Template Name: 講師
*/
?>
<?php get_header(); ?>
<?php get_template_part('part/pageheader'); ?>
<section class="l_main">
	<div class="l_container">
		<p class="c_catchcopy c_animation_splitText"><?php the_field('catchcopy'); ?></p>
		<div class="c_bodyBlock c_animation_fadeIn u_textAlign_lg_center">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="l_wideContainer">
		<ul class="p_instructor_list u_marginTop_40">
			<?php while(have_rows('instructor_person')): the_row(); ?>
				<li class="c_animation_fadeIn">
					<div class="p_instructor_list_image">
						<?php echo wp_get_attachment_image(get_sub_field('instructor_person_image'), '600x750'); ?>
					</div>
					<span class="p_instructor_list_english"><?php the_sub_field('instructor_person_english'); ?></span>
					<span class="p_instructor_list_japanese"><?php the_sub_field('instructor_person_japanese'); ?></span>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
</section>
<?php get_template_part('part/reservation'); ?>
<?php get_footer(); ?>
