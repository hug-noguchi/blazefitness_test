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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lp.css">
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
	<script type="text/javascript">
    $(function(){
        $('.slick01').slick({
					autoplay:true,//自動再生する
					autoplaySpeed:2500,//自動再生するスピード 4秒
					slidesToShow:3,
					centerMode:true,
					centerPadding:true,
					focusOnSelect:false,
					infinite:true,
					touchMove:true,
					responsive: [
					{
					breakpoint: 400, // 399px以下のサイズに適用
					settings: {
					slidesToShow: 1,
					centerPadding: "10%",
						},
					},
				],
			});
    });
	</script>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RVJ32R"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
