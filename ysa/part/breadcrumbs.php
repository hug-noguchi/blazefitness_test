<ul class="c_breadcrumbs">
	<li><a href="<?php echo home_url(); ?>/">TOP</a></li>
	<?php if (is_page()) : ?>
		<?php if ($post->post_parent !== 0) : ?>
			<?php $parents = array_reverse(get_post_ancestors($page_id)); ?>
			<?php foreach ($parents as $parent) : ?>
				<li><a href="<?php echo get_permalink($parent); ?>"><?php echo get_the_title($parent); ?></a></li>
			<?php endforeach; ?>
		<?php endif; ?>
		<li><?php the_title(); ?></li>
	<?php elseif (is_post_type_archive()) : ?>
		<li><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></li>
	<?php elseif (is_singular()) : ?>
		<li><a href="<?php echo home_url(); ?>/<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></a></li>
		<li><?php the_title(); ?></li>
	<?php endif; ?>
</ul>
