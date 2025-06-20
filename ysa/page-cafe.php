<?php get_header('cafe'); ?>

	<main>
		<div class="p_hero">
			<h1 class="p_hero_lead">
				ご近所の<br>
				ちょっといいカフェ<br>
				お探しじゃないですか？
			</h1>
			<picture class="p_hero_img">
				<source srcset="<?php echo get_template_directory_uri(); ?>/img/cafe/hero_sp.jpg" media="(max-width: 767px)">
				<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/hero.jpg" alt="" width="1280" height="720">
			</picture>
		</div>

		<div class="bg">
			<section class="p_about" id="about">
				<div class="p_about_row w-container">
					<div>
						<h2 class="p_about_title-en">About</h2>
						<p class="p_about_text">NORI LOUNGEでは、都内提携飲食店の総料理長が監修する、本格的な料理をお楽しみいただけます。</p>
						<p class="p_about_text">国内でも有数の面積を誇るGYMに併設された本格CAFÉ&RESTAURANT BAR。</p>
						<p class="p_about_text">唯一無二の空間で楽しいひとときをお過ごしください。</p>
					</div>
					<figure class="p_about_thumb">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/about.jpg" alt="About" width="560" height="374">
					</figure>
				</div>
			</section>

			<section class="p_terrace" id="terrace">
				<div class="p_terrace_row reverse w-container">
					<div>
						<h2 class="p_terrace_title-en">Terrace space</h2>
						<p class="p_terrace_text">NORI LOUNGEにはテラス席のご用意もございます。</p>
						<p class="p_terrace_text">NORI 風の通りも良く落ち着いた遊歩道沿いで、お子様連れでも安心してご利用でき、ペットを連れてのご利用も可能となっております。</p>
					</div>
					<picture class="p_terrace_thumb">
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/cafe/terrace_sp.jpg" media="(max-width: 767px)">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/terrace.jpg" alt="Terrace space" width="720" height="540">
					</picture>
				</div>
			</section>

			<section class="p_beer" id="beer">
				<div class="p_beer_row w-container">
					<div>
						<h2 class="p_beer_title-en">Original craft beer</h2>
						<p class="p_beer_text">NORI LOUNGEのOPENを記念して醸造されたオリジナルクラフトビール。</p>
						<p class="p_beer_text">格闘技に情熱を注ぎ全力で生きた山本“KID”徳郁が、ハードなトレーニングや闘いから少し離れ、リラックスする際に仲間と楽しく飲めるビールをイメージして造られました。</p>
						<p class="p_beer_text">全力で走り続ける人たちを応援し、リラックスタイムに飲んでほしいという願いが込められていて、アメリカ【ニュージーランド産のホップ】をふんだんに使用したフルーティーでほどよい苦みを感じることができます。</p>
						<p class="p_beer_text">軽く爽やかな味わいで、多くのお客様からご好評をいただいております。</p>
					</div>
					<picture class="p_beer_thumb">
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/cafe/beer_sp.jpg" media="(max-width: 767px)">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/beer.jpg" alt="Original craft beer" width="840" height="640">
					</picture>
				</div>
			</section>

			<div>
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/img/cafe/bg_sp.jpg" media="(max-width: 767px)">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/bg.jpg" alt="" width="1920" height="300">
				</picture>
			</div>

			<section class="p_menu">
				<div class="w-container">
					<div class="p_menu_inner">
						<section class="section" id="recommended">
							<h2 class="p_menu_title-en">Recommended<br> menu</h2>
							<ul class="p_menu_content">
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/recommended-menu01.png" alt="NORI LOUNGEの極旨カレーライス" width="580" height="440">
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/recommended-menu02.png" alt="きのこと鶏肉のクリームパスタ" width="580" height="440">
								</li>
							</ul>
						</section>

						<section class="section" id="regular">
							<h2 class="p_menu_title-en">Regular menu</h2>
							<section class="p_menu_content-v2">
								<div class="center">
									<h3 class="-en">Food</h3>
								</div>
								<ul class="p_menu_list pasta">
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/pasta01.png" alt="ミートソース" width="368" height="377">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/pasta02.png" alt="きのこと鶏肉のクリームパスタ" width="360" height="260">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/pasta03.png" alt="明太子のパスタ" width="360" height="260">
									</li>
								</ul>
								<ul class="p_menu_list">
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/bowl.png" alt="NORI LOUNGE のビーフボウル" width="375" height="377">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/curry.png" alt="NORI LOUNGE の極旨カレーライス" width="375" height="260">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/onigiri.png" alt="おにぎり" width="360" height="185">
									</li>
								</ul>
								<ul class="p_menu_list soup">
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/soup01.png" alt="コンソメスープ" width="368" height="377">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/soup02.png" alt="コムタンスープ" width="360" height="396">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/soup03.png" alt="エビクリームスープ" width="360" height="296">
									</li>
								</ul>
								<ul class="p_menu_list healthy">
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/healthy01.png" alt="枝豆" width="368" height="377">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/healthy02.png" alt="冷奴のピリ辛ソース" width="360" height="296">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/healthy03.png" alt="蒸し鶏のネギソース" width="360" height="296">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/healthy04.png" alt="ほうれん草のおひたし" width="360" height="296">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/healthy05.png" alt="NORI LOUNGE のビーフディッシュ" width="360" height="296">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/healthy06.png" alt="トマトとモッツァレラのカプレーゼ" width="360" height="296">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/healthy07.png" alt="生ハムとサラミの盛り合わせ" width="360" height="296">
									</li>
								</ul>
								<ul class="p_menu_list">
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/salad.png" alt="サラダ" width="360" height="386">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/bread.png" alt="朝食" width="360" height="474">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/oden.png" alt="おでん" width="360" height="474">
									</li>
								</ul>
							</section>

							<section class="p_menu_content-v2">
								<div class="center">
									<h3 class="-en">Drinks</h3>
								</div>
								<figure class="pc">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/menu-drink.png" alt="ドリンクメニュー" width="1000" height="931">
								</figure>
								<div class="sp">
									<figure>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/menu-soft.png" alt="ソフトドリンク" width="400" height="880">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/menu-beer.png" alt="アルコール" width="400" height="931">
									</figure>
								</div>
							</section>
						</section>
					</div>
				</div>
			</section>
		</div>

		<div class="p_shop">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/shop.png" alt="店内" width="960" height="480">
			</figure>
			<div class="p_shop_body">
				<ul>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/icon-seat.svg" alt="席数" width="26" height="25">席数:店内20名+テラス席8名最大28名
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/img/cafe/icon-dog.svg" alt="犬" width="26" height="24">ワンちゃん同伴可（テラス席のみ）
					</li>
				</ul>
			</div>
		</div>
	</main>


<?php get_footer('cafe'); ?>