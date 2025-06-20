<?php get_header(); ?>

<main>
	<section class="l_main p_aboutus">
		<h1 class="c_title-v2">
			<span class="c_title-v2-en libre"><?php the_field('pageHeader_english'); ?></span>
			<span class="c_title-v2-ja"><?php the_field('pageHeader_ja'); ?></span>
		</h1>
		<div class="p_aboutus_img">
			<picture>
				<source srcset="<?php the_field('pageHeader_image_sp'); ?>" media="(max-width: 767px)" />
				<img src="<?php the_field('pageHeader_image_pc'); ?>" alt="<?php the_field('pageHeader_ja'); ?>" width="1040" height="643" />
			</picture>
		</div>
		<section class="p_aboutus_content">
			<h2 class="p_aboutus_heading">
				<span class="p_aboutus_heading-en libre"><?php the_field('catchcopy_en'); ?></span>
				<span class="p_aboutus_heading-ja"><?php the_field('catchcopy_ja'); ?></span>
			</h2>
			<div class="p_aboutus_bg">
				<div class="p_aboutus_text">
					<?php the_field('catchcopy_text'); ?>
				</div>
			</div>
			<div class="p_aboutus_sp">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/about/about_sp.png" alt="" width="370" height="481" />
				</figure>
			</div>
			<div class="p_aboutus_slide">
				<ul class="p_aboutus_list">
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide01_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide01_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide02_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide02_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide03_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide03_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide04_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide04_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide05_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide05_pc.png" alt="" width="296" height="392" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide06_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide06_pc.png" alt="" width="296" height="392" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide07_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide07_pc.png" alt="" width="296" height="392" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide08_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide08_pc.png" alt="" width="296" height="392" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide09_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide09_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide10_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide10_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide11_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide11_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide12_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide12_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide13_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide13_pc.png" alt="" width="296" height="392" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide14_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide14_pc.png" alt="" />
						</picture>
					</li>
				</ul>
				<ul aria-hidden class="p_aboutus_list">
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide01_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide01_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide02_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide02_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide03_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide03_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide04_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide04_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide05_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide05_pc.png" alt="" width="296" height="392" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide06_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide06_pc.png" alt="" width="296" height="392" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide07_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide07_pc.png" alt="" width="296" height="392" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide08_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide08_pc.png" alt="" width="296" height="392" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide09_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide09_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide10_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide10_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide11_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide11_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide12_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide12_pc.png" alt="" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide13_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide13_pc.png" alt="" width="296" height="392" />
						</picture>
					</li>
					<li>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/slide14_sp.png" media="(max-width: 767px)" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/slide14_pc.png" alt="" />
						</picture>
					</li>
				</ul>
			</div>
		</section>

		<?php include(get_template_directory() . '/part/start.php'); ?>
	
		<?php include(get_template_directory() . '/part/reservation.php'); ?>
	</section>

</main>

<?php get_footer(); ?>