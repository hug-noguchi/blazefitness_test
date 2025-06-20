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
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Zen+Maru+Gothic:wght@500;700&display=swap" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/all.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/cafe.min.css?ver=<?php echo date('YmdHi') ?>" rel="stylesheet">
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js?ver=<?php echo date('YmdHi') ?>"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/cafe.js?ver=<?php echo date('YmdHi') ?>"></script>
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

	<div class="wrapper">
		<header class="l_header">
			<div class="l_header_logo">
				<a href="https://ysa.jp/cafe/">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/logo.png" alt="NORI LOUNGE" width="198" height="105">
				</a>
			</div>
			<div class="l_header_nav">
				<div class="l_header_nav_top">
					<p class="l_header_nav_detail">
						NORI LOUNGE（ノリ ラウンジ）/ 営業時間 : 不定休 11:30～22:30 (L.O. 22:00)<br>
						東京都大田区中馬込2-8-1 日経エスプラナード 1F / TEL : 03-5742-2906
					</p>
					<ul class="l_header_nav_link">
						<li>
							<a href="https://www.instagram.com/nori.lounge/" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/insta.svg" alt="">
							</a>
						</li>
						<li>
							<a href="https://www.google.co.jp/maps/search/%E6%9D%B1%E4%BA%AC%E9%83%BD%E5%A4%A7%E7%94%B0%E5%8C%BA%E4%B8%AD%E9%A6%AC%E8%BE%BC2-8-1+%E6%97%A5%E7%B5%8C%E3%82%A8%E3%82%B9%E3%83%97%E3%83%A9%E3%83%8A%E3%83%BC%E3%83%89+1F/@35.5969297,139.7058797,17z/data=!3m1!4b1?hl=ja&entry=ttu" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/location.svg" alt="">
							</a>
						</li>
					</ul>
				</div>
				<div class="l_header_nav_bottom">
					<nav class="l_header_nav_menu">
						<ul>
							<li>
								<a href="#about" class="l_header_nav_menu-en">About</a>
							</li>
							<li>
								<a href="#terrace" class="l_header_nav_menu-en">Terrace space</a>
							</li>
							<li>
								<a href="#beer" class="l_header_nav_menu-en">Original craft beer</a>
							</li>
							<li>
								<a href="#recommended" class="l_header_nav_menu-en">Recommended MENU</a>
							</li>
							<li>
								<a href="#regular" class="l_header_nav_menu-en">Regular MENU</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="menuBtn" id="menu">
				<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/menu.svg" alt="メニュー" width="40" height="12">
			</div>
			<nav class="gnav" id="gnav">
				<div class="closeBtn" id="close">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/close.svg" alt="閉じる" width="29" height="29">
				</div>
				<div class="gnav_inner">
					<ul class="gnav_link">
						<li>
							<a href="#about" class="l_header_nav_menu-en">About</a>
						</li>
						<li>
							<a href="#terrace" class="l_header_nav_menu-en">Terrace space</a>
						</li>
						<li>
							<a href="#beer" class="l_header_nav_menu-en">Original craft beer</a>
						</li>
						<li>
							<a href="#recommended" class="l_header_nav_menu-en">Recommended MENU</a>
						</li>
						<li>
							<a href="#regular" class="l_header_nav_menu-en">Regular MENU</a>
						</li>
					</ul>
					<ul class="l_header_nav_link">
						<li>
							<a href="https://www.instagram.com/nori.lounge/" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/insta-w.svg" alt="instagram" width="24" height="24">
							</a>
						</li>
						<li>
							<a href="https://www.google.co.jp/maps/search/%E6%9D%B1%E4%BA%AC%E9%83%BD%E5%A4%A7%E7%94%B0%E5%8C%BA%E4%B8%AD%E9%A6%AC%E8%BE%BC2-8-1+%E6%97%A5%E7%B5%8C%E3%82%A8%E3%82%B9%E3%83%97%E3%83%A9%E3%83%8A%E3%83%BC%E3%83%89+1F/@35.5969297,139.7058797,17z/data=!3m1!4b1?hl=ja&entry=ttu" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/location-w.svg" alt="location" width="20" height="26">
							</a>
						</li>
					</ul>
					<p class="gnav_detail">
						NORI LOUNGE（ノリ ラウンジ）<br>
						営業時間 : 不定休 11:30～22:30 (L.O. 22:00)<br>
						東京都大田区中馬込2-8-1 日経エスプラナード 1F<br>
						TEL : 03-5742-2906
					</p>
				</div>
			</nav>
		</header>
