<?php

// wp-head不要情報削除（バージョン情報）
remove_action('wp_head', 'wp_generator');

// wp-head不要情報削除（RSS）
remove_action('wp_head', 'feed_links_extra', 3);

// wp-head不要情報削除（パーマリンク）
remove_action('wp_head', 'wp_shortlink_wp_head');

// wp-head不要情報削除（前後記事のURL）
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

// wp-head不要情報削除（リモート投稿）
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

// wp-head不要情報削除（絵文字）
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// wp-head不要情報削除（REST API）
remove_action('wp_head', 'rest_output_link_wp_head');

// wp-head不要情報削除（Embed）
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');


// jquery指定
function my_scripts_method(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_scripts_method');


// 管理画面メニュー非表示
function remove_menus(){
	remove_menu_page('edit.php');
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_menus');


// 管理画面メニュー位置変更
function move_menu(){
	global $menu;
	$menu[25] = $menu[10]; // メディア
	unset($menu[10]);
}
add_action('admin_menu', 'move_menu');


// カスタム投稿タイプ
function create_post_type(){
	register_post_type('news',
		array(
			'labels' => array(
				'name' => __('お知らせ'),
				'add_new_item' => __('新規お知らせを追加'),
				'edit_item' => __('お知らせを編集'),
				'search_items' => __('お知らせを検索'),
				'not_found' => __('お知らせが見つかりませんでした。'),
				'not_found_in_trash' => __('ゴミ箱内にお知らせが見つかりませんでした。'),
			),
			'public' => true,
			'menu_position' => 5,
			'supports' => array(
				'title',
				'editor',
				'revisions',
			),
			'has_archive' => true,
			'show_in_rest' => true,
		)
	);
	register_taxonomy(
		'newscategory',
		'news',
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリー',
			'singular_label' => 'カテゴリー',
			'public' => true,
			'show_ui' => true,
			'show_in_quick_edit' => false,
			'show_in_rest' => true,
			'meta_box_cb' => false,
		)
	);
	register_post_type('program',
		array(
			'labels' => array(
				'name' => __('プログラム'),
				'add_new_item' => __('新規プログラムを追加'),
				'edit_item' => __('プログラムを編集'),
				'search_items' => __('プログラムを検索'),
				'not_found' => __('プログラムが見つかりませんでした。'),
				'not_found_in_trash' => __('ゴミ箱内にプログラムが見つかりませんでした。'),
			),
			'public' => true,
			'menu_position' => 7,
			'supports' => array(
				'title',
				'editor',
				'revisions',
			),
			'has_archive' => true,
			'show_in_rest' => true,
		)
	);
}
add_action('init', 'create_post_type');


// カスタム投稿タイプ（管理画面タクソノミー枠）
function add_custom_column($columns){
	global $post;
	if($post->post_type == 'news'){
		$date_escape = $columns['date'];
		unset($columns['date']);
		$columns['author'] = '作成者';
		$columns['newscategory'] = 'カテゴリー';
		$columns['date'] = $date_escape;
	}
	if($post->post_type == 'program'){
		$date_escape = $columns['date'];
		unset($columns['date']);
		$columns['author'] = '作成者';
		$columns['date'] = $date_escape;
	}
	return $columns;
}
add_filter('manage_posts_columns', 'add_custom_column');


// カスタム投稿タイプ（管理画面タクソノミー）
function add_custom_column_taxonomy($column_name){
	global $post;
	if($post->post_type == 'news' && $column_name == 'newscategory'){
		$areas = get_the_terms($post->ID, 'newscategory');
		if(!empty($areas)){
			$out = array();
			foreach($areas as $d){
				$out[] = '<a href="edit.php?post_type=news&newscategory=' . $d->slug . '">' . esc_html(sanitize_term_field('name', $d->name, $d->term_id, 'newscategory', 'display')) . '</a>';
			}
			echo join(', ', $out);
		}else{
			echo '—';
		}
	}
}
add_action('manage_posts_custom_column', 'add_custom_column_taxonomy');


// カスタム投稿タイプ管理画面（絞り込み検索）
function add_custom_filter(){
	global $post_type;
	if('news' == $post_type){
		?>
		<select name="newscategory">
			<option value="">カテゴリー一覧</option>
			<?php $terms = get_terms('newscategory'); foreach($terms as $term){ ?>
				<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
			<?php } ?>
		</select>
		<?php
	}
}
add_action('restrict_manage_posts', 'add_custom_filter');


// アーカイブ表示件数
function change_posts_per_page($query){
	if(is_admin() || !$query->is_main_query())
		return;
	if($query->is_post_type_archive('program')){
		$query->set('posts_per_page', '-1');
	}
}
add_action('pre_get_posts', 'change_posts_per_page');


// ACF オプションページ
if(function_exists('acf_add_options_page')){
	acf_add_options_page(array(
		'page_title' => 'お知らせ一覧ページ',
		'menu_title' => 'お知らせ一覧ページ',
		'menu_slug' => 'newsarchive',
		'capability' => 'edit_posts',
		'redirect' => false,
		'position' => 6,
	));
	acf_add_options_page(array(
		'page_title' => 'プログラム一覧ページ',
		'menu_title' => 'プログラム一覧ページ',
		'menu_slug' => 'programarchive',
		'capability' => 'edit_posts',
		'redirect' => false,
		'position' => 8,
	));
	acf_add_options_page(array(
		'page_title' => 'フッター',
		'menu_title' => 'フッター',
		'menu_slug' => 'footer',
		'capability' => 'edit_posts',
		'redirect' => false,
		'position' => 21,
	));
	acf_add_options_page(array(
		'page_title' => '外部リンク',
		'menu_title' => '外部リンク',
		'menu_slug' => 'externallink',
		'capability' => 'edit_posts',
		'redirect' => false,
		'position' => 22,
	));
}


// ACF ブロック
function acf_add_block() {
	if(function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name' => 'subtitle',
			'title' => __('サブタイトル'),
			'description' => __('サブタイトル用のカスタムブロックです。'),
			'render_template' => 'acf/subtitle.php',
			'category' => 'formatting',
			'icon' => 'wordpress',
			'keywords' => array('subtitle', 'サブタイトル'),
			'mode' => 'auto',
		));
		acf_register_block_type(array(
			'name' => 'button',
			'title' => __('ボタン'),
			'description' => __('ボタン用のカスタムブロックです。'),
			'render_template' => 'acf/button.php',
			'category' => 'formatting',
			'icon' => 'wordpress',
			'keywords' => array('button', 'ボタン'),
			'mode' => 'auto',
		));
		acf_register_block_type(array(
			'name' => 'schedule',
			'title' => __('スケジュール'),
			'description' => __('スケジュール用のカスタムブロックです。'),
			'render_template' => 'acf/schedule.php',
			'category' => 'formatting',
			'icon' => 'wordpress',
			'keywords' => array('schedule', 'スケジュール'),
			'mode' => 'auto',
		));
		acf_register_block_type(array(
			'name' => 'flowchart',
			'title' => __('フローチャート'),
			'description' => __('フローチャート用のカスタムブロックです。'),
			'render_template' => 'acf/flowchart.php',
			'category' => 'formatting',
			'icon' => 'wordpress',
			'keywords' => array('flowchart', 'フローチャート'),
			'mode' => 'auto',
		));
		acf_register_block_type(array(
			'name' => 'pricelist',
			'title' => __('料金表'),
			'description' => __('料金表用のカスタムブロックです。'),
			'render_template' => 'acf/pricelist.php',
			'category' => 'formatting',
			'icon' => 'wordpress',
			'keywords' => array('pricelist', 'フローチャート'),
			'mode' => 'auto',
		));
		acf_register_block_type(array(
			'name' => 'companyprofile',
			'title' => __('会社概要'),
			'description' => __('会社概要用のカスタムブロックです。'),
			'render_template' => 'acf/companyprofile.php',
			'category' => 'formatting',
			'icon' => 'wordpress',
			'keywords' => array('companyprofile', 'フローチャート'),
			'mode' => 'auto',
		));
	}
}
add_action('acf/init', 'acf_add_block');


// ページネーション
function the_pagination(){
	global $wp_query;
	$big = 999999999;
	echo paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'total' => $wp_query->max_num_pages,
		'current' => max(1, get_query_var('paged')),
		'end_size' => 0,
		'mid_size' => 1,
		'prev_next' => true,
		'prev_text' => '',
		'next_text' => '',
		'type' => 'list',
	));
}


// サムネイル
function add_thumbnail_size(){
	add_theme_support('post-thumbnails');
	add_image_size('600x750', 600, 750, true);
}
add_action('after_setup_theme', 'add_thumbnail_size');


// ショートコード
function shortcode_url(){
	return home_url();
}
add_shortcode('url', 'shortcode_url');

function shortcode_templateurl(){
	return get_template_directory_uri();
}
add_shortcode('templateurl', 'shortcode_templateurl');

// リダイレクト
add_action( 'template_redirect', function(){
  // 404ページだったら
  if ( is_404() ) {
    // トップページに301リダイレクト
    wp_safe_redirect( home_url( '/' ), 301 );
    exit();
  }
} );

?>