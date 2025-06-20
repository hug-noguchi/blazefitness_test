<!DOCTYPE html>
<html lang="jp">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5RVJ32R');</script>
	<!-- End Google Tag Manager -->
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-2JRCQHXWGW"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-2JRCQHXWGW');
	</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/load.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Nunito+Sans:ital,opsz@0,6..12;1,6..12&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />

	<link href="<?php echo get_template_directory_uri(); ?>/css/all.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.min.css?ver=<?php echo date('YmdHi') ?>" rel="stylesheet">
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js?ver=<?php echo date('YmdHi') ?>"></script>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RVJ32R"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="l_load" id="load">
		<div class="l_loading">
			<div class="l_loading_text">NOW LOADING...</div>
			<div class="l_loading_bar"></div>
		</div>
	</div>

	<header class="l_header <?php if(is_user_logged_in()): ?>wp_login<?php endif; ?>" id="header">
		<div class="l_header_translate">
			<div id="google_translate_element"></div>
			<script type="text/javascript">
				function googleTranslateElementInit() {
					new google.translate.TranslateElement({
						pageLanguage: 'jp',
						includedLanguages: 'en,ko,zh-CN,zh-TW,ru,pt',
						layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
					}, 'google_translate_element');
				}
			</script>
			<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		</div>
		<div class="l_header_inner">
			<a href="<?php echo home_url("/"); ?>" class="l_header_logo attr">
				<img src="<?php echo get_template_directory_uri(); ?>/img/header/logo.png" alt="" width="335" height="36" />
			</a>
			<div class="l_header_row">
				<nav class="l_header_nav">
					<ul class="nav_list">
						<li>
							<a href=<?php echo home_url("/aboutus/"); ?>" class="nav_link libre">About Us</a>
						</li>
						<li>
							<a href=<?php echo home_url("/news/"); ?>" class="nav_link libre">News</a>
						</li>
						<li>
							<a href="<?php echo home_url("/price/"); ?>" class="nav_link libre">Price</a>
						</li>
						<li>
							<a href="<?php echo home_url("/facility/"); ?>" class="nav_link libre">Facility</a>
						</li>
						<!-- <li>
							<a href="<?php echo home_url("/soon/"); ?>" class="nav_link libre">Program</a>
						</li> -->
					</ul>
				</nav>
				<div class="l_header_schedule">
					<a href="<?php echo home_url("/schedule/"); ?>" class="libre">Class Schedule</a>
				</div>
				<div class="l_header_menu">
					<button type="button" class="hamburger" id="hamburger">
						<span></span>
						<span></span>
					</button>
					<div class="menu" id="menu">
						<div class="menu_inner">
							<a href="" class="l_header_logo">
								<img src="<?php echo get_template_directory_uri(); ?>/img//header/logo.png" alt="" width="335" height="36" />
							</a>
							<div class="menu_row">
								<ul class="menu_list">
								<li class="menu_item">
										<a href="<?php echo home_url("/aboutus/"); ?>" class="menu_link"><span class="libre">About Us</span>当ジムについて</a>
									</li>
									<li class="menu_item">
										<a href="<?php echo home_url("/news/"); ?>" class="menu_link"><span class="libre">News</span>お知らせ</a>
									</li>
									<li class="menu_item">
										<a href="<?php echo home_url("/price/"); ?>" class="menu_link"><span class="libre">Price</span>料金</a>
									</li>
									<li class="menu_item">
										<a href="<?php echo home_url("/facility/"); ?>" class="menu_link"><span class="libre">Facility</span>GYM設備</a>
									</li>
									<!-- <li class="menu_item">
										<a href="<?php echo home_url("/soon/"); ?>" class="menu_link"><span class="libre">Staff</span>スタッフ紹介</a>
									</li> -->
								</ul>
								<ul class="menu_list">
								<li class="menu_item">
										<a href="<?php echo home_url("/schedule/"); ?>" class="menu_link"><span class="libre">Class Schedule</span>スケジュール</a>
									</li>
									<li class="menu_item">
										<a href="<?php echo home_url("/company/"); ?>" class="menu_link"><span class="libre">Company</span>会社概要</a>
									</li>
									<li class="menu_item">
										<a href="<?php echo home_url("/access/"); ?>" class="menu_link"><span class="libre">Access</span>アクセス</a>
									</li>
									<li class="menu_item">
										<a href="<?php echo home_url("/contact/"); ?>" class="menu_link"><span class="libre">Contact</span>お問い合わせ</a>
									</li>
								</ul>
							</div>
							<ul class="menu_bottom">
								<!-- <li>
									<a href="<?php echo home_url("/soon/"); ?>">YSAの法人契約について</a>
								</li> -->
								<li>
									<a href="<?php echo home_url("/privacypolicy/"); ?>">プライバシーポリシー</a>
								</li>
								<li>
									<a href="<?php echo home_url("/agreement/"); ?>">会員規約</a>
								</li>
								<li>
									<a href="<?php echo home_url("/law/"); ?>">特定商取引法に基づく表示</a>
								</li>
							</ul>
						</div>
						<div class="c_reservation">
							<p class="c_reservation_lead">WEB入会・体験／見学予約はこちら</p>
							<a href="" class="c_reservation_line">LINE@</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
