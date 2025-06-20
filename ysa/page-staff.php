<?php get_header(); ?>

<style>
	.p_facility_catchcopy {
    color: #fb9700;
    font-size: clamp(14px, 8vw, 34px);
    letter-spacing: 0.1em;
		margin-bottom: 40px;
    text-align: center;
	}
	.p_facility_list {
		flex-direction: row;
		flex-wrap: wrap;
		gap: 20px;
	}
	.p_facility_item {
		display: block;
		flex-basis: calc(50% - 10px);
	}
	.p_facility_item figure {
		aspect-ratio: 3 / 4;
	}
	.p_facility_item img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.p_facility_main {
		color: #fb9700;
	}
	@media (min-width: 800px) {
		.p_facility_item {
			flex-basis: calc(33% - 13px);
			width: initial;
		}
	}
	@media (min-width: 1000px) {
		.p_facility_item {
			flex-basis: calc(25% - 15px);
			width: initial;
		}
	}
	@media (min-width: 1400px) {
		.p_facility_list {
			gap: 40px;
		}
		.p_facility_item {
			flex-basis: calc(25% - 30px);
		}
	}
	@media (min-width: 1600px) {
		.p_facility_item {
			flex-basis: calc(20% - 32px);
		}
	}
</style>

<main>
	<section class="l_main p_facility">
		<h1 class="c_title-v2">
			<span class="c_title-v2-en libre"><?php the_title(); ?></span>
		</h1>
		<p class="p_facility_catchcopy"><?php the_field('catchcopy'); ?></p>
		<div class="p_facility_lead">
			<?php the_content(); ?>
		</div>
		<div class="p_facility_content">
			<ul class="p_facility_list">
				<?php while(have_rows('staff_content')): the_row(); ?>
					<li class="p_facility_item c_animation_fadeIn u_textAlign_lg_left">
						<figure>
							<?php echo wp_get_attachment_image(get_sub_field('staff_image'),array(600, 750)); ?>
						</figure>
						<div>
							<p class="p_facility_main"><?php the_sub_field('staff_work'); ?></p>
							<p class="p_facility_sub"><?php the_sub_field('staff_name'); ?></p>
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