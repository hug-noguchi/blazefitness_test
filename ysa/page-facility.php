<?php get_header(); ?>

<main>
	<section class="l_main p_facility">
		<h1 class="c_title-v2">
			<span class="c_title-v2-en libre"><?php the_title(); ?></span>
		</h1>
		<div class="p_facility_lead">
			<?php the_content(); ?>
		</div>
		<div class="p_facility_content">
			<ul class="p_facility_list">
				<?php while(have_rows('facility_content')): the_row(); ?>
					<li class="p_facility_item">
						<figure>
							<?php echo wp_get_attachment_image(get_sub_field('Facility_image'), '437x328'); ?>
						</figure>
						<div>
							<p class="p_facility_main"><?php the_sub_field('Facility_main'); ?></p>
							<p class="p_facility_sub"><?php the_sub_field('Facility_sub'); ?></p>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>

		<?php include(get_template_directory() . '/part/start.php'); ?>
	
		<?php include(get_template_directory() . '/part/reservation.php'); ?>
	</section>
</main>

<?php get_footer(); ?>