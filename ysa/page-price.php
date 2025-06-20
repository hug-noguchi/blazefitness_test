<?php get_header(); ?>

<section class="l_main">
  <div class="p_price c_animation_fadeIn u_textAlign_lg_left">
    <h1 class="c_title libre">Price</h1>

    <section class="p_price_section">
      <h2 class="p_price_heading">ご入会について</h2>
      <div class="p_price_box">
        <p class="p_price_box_lead">ご入会には下記が必要となります。</p>
        <ul class="p_price_box_list">
          <li>
            入会金<p class="p_price_box_price"><span class="nunito">33,000</span>円</p>
          </li>
          <li>
            事務手数料<p class="p_price_box_price"><span class="nunito">5,500</span>円</p>
          </li>
          <li>初月会費＆2ヶ月目会費</li>
          <li>クレジットカード</li>
          <li>メールアドレス</li>
          <li>各種身分証明書</li>
        </ul>
        <?php if( have_rows('member') ): ?>
          <?php while( have_rows('member') ): the_row(); ?>
            <p class="p_price_box_text"><?php the_sub_field('member_text'); ?></p>
            <ul class="p_price_box_notice">
              <?php while( have_rows('member_notice') ): the_row(); ?>
                <li>※<?php the_sub_field('member_notice'); ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>

    <section class="p_price_section">
      <h2 class="p_price_heading">会費</h2>
      <?php if( have_rows('membership') ): ?>
        <ul class="p_price_notice">
          <?php while( have_rows('membership') ): the_row(); ?>
            <li>※<?php the_sub_field('membership_text'); ?></li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      <div class="p_price_member -regular">
        <h3 class="p_price_member_heading">
          <img src="<?php echo get_template_directory_uri(); ?>/img/price/icon-regular.svg" alt="レギュラー会員" width="40" height="40">
          <span class="p_price_member_heading-en libre">REGULAR</span>
          <span class="p_price_member_heading-ja">レギュラー会員</span>
        </h3>
        <div class="p_price_member_row">
          <section class="p_price_member_section">
            <h4 class="">男性会員用</h4>
            <div class="p_price_member_cost">
              <p>月額費</p>
              <p><span class="num nunito"><?php the_field('regular-men'); ?></span>円<span class="tax">（税込）</span></p>
            </div>
          </section>
          <section class="p_price_member_section">
            <h4 class="">女性会員用</h4>
            <div class="p_price_member_cost">
              <p>月額費</p>
              <p><span class="num nunito"><?php the_field('regular-women'); ?></span>円<span class="tax">（税込）</span></p>
            </div>
          </section>
        </div>
        <ul class="p_price_member_list">
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/regular/item01_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/regular/item01_pc.png" alt="ジムエリア" width="210" height="121" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/regular/item02_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/regular/item02_pc.png" alt="ファンクショナルトレーニングエリア" width="210" height="121" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/regular/item03_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/regular/item03_pc.png" alt="スタジオエリア" width="210" height="121" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/regular/item04_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/regular/item04_pc.png" alt="コワーキングスペース(フリーWi-Fi&充電スポット付き)" width="210" height="121" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/regular/item05_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/regular/item05_pc.png" alt="サウナ外気浴スペースあり（男性サウナのみ）" width="210" height="131" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/regular/item06_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/regular/item06_pc.png" alt="更衣室" width="210" height="131" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/regular/item07_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/regular/item07_pc.png" alt="シャワー" width="210" height="131" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/regular/item08_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/regular/item08_pc.png" alt="ウォーターサーバー利用無料" width="210" height="131" />
            </picture>
          </li>
        </ul>
      </div>
      <div class="p_price_member -gold">
        <h3 class="p_price_member_heading">
          <img src="<?php echo get_template_directory_uri(); ?>/img/price/icon-gold.svg" alt="ゴールド会員" width="40" height="40">
          <span class="p_price_member_heading-en libre">GOLD</span>
          <span class="p_price_member_heading-ja">ゴールド会員</span>
        </h3>
        <figure class="p_price_member_card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/price/card-gold.png" alt="ゴールド会員" width="390" height="246">
        </figure>
        <div class="p_price_member_row">
          <section class="p_price_member_section">
            <h4 class="">男性会員用</h4>
            <div class="p_price_member_cost">
              <p>月額費</p>
              <p><span class="num nunito"><?php the_field('gold-men'); ?></span>円<span class="tax">（税込）</span></p>
            </div>
          </section>
          <section class="p_price_member_section">
            <h4 class="">女性会員用</h4>
            <div class="p_price_member_cost">
              <p>月額費</p>
              <p><span class="num nunito"><?php the_field('gold-women'); ?></span>円<span class="tax">（税込）</span></p>
            </div>
          </section>
        </div>
        <ul class="p_price_member_list">
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item01_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item01_pc.png" alt="ジムエリア" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item02_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item02_pc.png" alt="ファンクショナルトレーニングエリア" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item03_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item03_pc.png" alt="スタジオエリア" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item04_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item04_pc.png" alt="パーソナルトレーニング(30分1回/月)" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item05_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item05_pc.png" alt="シミュレーションゴルフ(30分1回)" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item06_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item06_pc.png" alt="サウナ外気浴スペースあり（男性サウナのみ）" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item07_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item07_pc.png" alt="更衣室" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item08_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item08_pc.png" alt="シャワー" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item09_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item09_pc.png" alt="コワーキングスペース(フリーWi-Fi&充電スポット付き)" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item10_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item10_pc.png" alt="ウォーターサーバー利用無料" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item11_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item11_pc.png" alt="レンタルガウン" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item12_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item12_pc.png" alt="レンタルタオル" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/gold/item13_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/gold/item13_pc.png" alt="レンタルウェア" width="166" height="122" />
            </picture>
          </li>
        </ul>
      </div>
      <div class="p_price_member -diamond">
        <h3 class="p_price_member_heading">
          <img src="<?php echo get_template_directory_uri(); ?>/img/price/icon-diamond.svg" alt="ダイヤモンド会員" width="40" height="40">
          <span class="p_price_member_heading-en libre">DIAMOND</span>
          <span class="p_price_member_heading-ja">ダイヤモンド会員</span>
        </h3>
        <figure class="p_price_member_card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/price/card-diamond.png" alt="ダイヤモンド会員" width="390" height="246">
        </figure>
        <div class="p_price_member_cost">
          <p>月額費</p>
          <p><span class="num nunito"><?php the_field('diamond'); ?></span>円<span class="tax">（税込）</span></p>
        </div>
        <ul class="p_price_member_list">
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item01_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item01_pc.png" alt="ジムエリア" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item02_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item02_pc.png" alt="ファンクショナルトレーニングエリア" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item03_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item03_pc.png" alt="スタジオエリア" width="166" height="12
              2" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item04_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item04_pc.png" alt="パーソナルトレーニング(60分2回/月)" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item05_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item05_pc.png" alt="シミュレーションゴルフ(60分1回)" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item06_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item06_pc.png" alt="クローク" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item07_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item07_pc.png" alt="サウナ外気浴スペースあり（男性サウナのみ）" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item08_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item08_pc.png" alt="更衣室" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item09_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item09_pc.png" alt="シャワー" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item10_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item10_pc.png" alt="コワーキングスペース(フリーWi-Fi&充電スポット付き)" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item11_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item11_pc.png" alt="レンタルガウン" width="166" height="122" />
            </picture>
          </li>
           <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item12_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item12_pc.png" alt="レンタルタオル" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item13_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item13_pc.png" alt="レンタルウェア" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item14_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item14_pc.png" alt="ウォーターサーバー利用無料" width="166" height="122" />
            </picture>
          </li>
          <li>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item15_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/diamond/item15_pc.png" alt="フリードリンク" width="166" height="122" />
            </picture>
          </li>
        </ul>
      </div>
    </section>

    <section class="p_price_section">
      <h2 class="p_price_heading">オプション</h2>

      <section class="p_price_option">
        <h3 class="p_price_option_heading">月契約</h3>
        <?php $month = get_field('month'); ?>
        <ul class="p_price_option_list">
          <li class="p_price_option_item">
            <?php $locker = $month['locker']; ?>
            <h4>
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/option/icon01.svg" alt="契約ロッカー" width="40" height="40">
              <span>契約ロッカー</span>
            </h4>
            <div class="p_price_option_cost">
              <p class="p_price_option_lead">ロッカー 小</p>
              <div class="p_price_option_row">
                <p>月額費</p>
                <p><span class="num nunito"><?php echo $locker['price01']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <div class="p_price_option_cost">
              <p class="p_price_option_lead">ロッカー 大</p>
              <div class="p_price_option_row">
                <p>月額費</p>
                <p><span class="num nunito"><?php echo $locker['price02']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <p class="p_price_option_text pre"><?php echo $locker['text']; ?></p>
          </li>
          <li class="p_price_option_item">
            <?php $gown = $month['gown']; ?>
            <h4>
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/option/icon02.svg" alt="レンタルガウン" width="40" height="40">
              <span>レンタルガウン</span>
            </h4>
            <div class="p_price_option_cost">
              <div class="p_price_option_row">
                <p>月額費</p>
                <p><span class="num nunito"><?php echo $gown['price']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <p class="p_price_option_text pre"><?php echo $gown['text']; ?></p>
          </li>
          <li class="p_price_option_item">
            <?php $towel = $month['towel']; ?>
            <h4>
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/option/icon03.svg" alt="レンタルタオル" width="40" height="40">
              <span>レンタルタオル</span>
            </h4>
            <div class="p_price_option_cost">
              <div class="p_price_option_row">
                <p>月額費</p>
                <p><span class="num nunito"><?php echo $towel['price']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <p class="p_price_option_text pre"><?php echo $towel['text']; ?></p>
          </li>
          <li class="p_price_option_item">
            <?php $wear = $month['wear']; ?>
            <h4>
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/option/icon04.svg" alt="レンタルウェア" width="40" height="40">
              <span>レンタルウェア</span>
            </h4>
            <div class="p_price_option_cost">
              <div class="p_price_option_row">
                <p>月額費</p>
                <p><span class="num nunito"><?php echo $wear['price']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <p class="p_price_option_text pre"><?php echo $wear['text']; ?></p>
          </li>
          <li class="p_price_option_item">
            <h4>
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/option/icon05.svg" alt="GRANDEオーダーメイドサプリメント" width="40" height="40">
              <span>GRANDE<br>オーダーメイドサプリメント</span>
            </h4>
            <div class="p_price_option_item_row">
              <?php $trial = $month['trial']; ?>
              <div>
                <div class="p_price_option_cost">
                  <p class="p_price_option_lead">トライアルコース</p>
                  <div class="p_price_option_row">
                    <p>月額費</p>
                    <p><span class="num nunito"><?php echo $trial['price']; ?></span>円<span class="tax">（税込）</span></p>
                  </div>
                </div>
                <p class="p_price_option_text02"><?php echo $trial['heading']; ?></p>
                <div class="p_price_option_lead02">
                  <p><span class="nunito"><?php echo $trial['num']; ?></span>種類のサプリ配合</p>
                </div>
                <p class="p_price_option_text02"><?php echo $trial['text']; ?></p>タオル
                <p class="p_price_option_item02"><?php echo $trial['content']; ?></p>
                <p class="p_price_option_notice">※<span class="nunito">GRANDE</span>専用シェイカーの受取はスタッフへお声掛けください。</p>
              </div>
              <?php $basic = $month['basic']; ?>
              <div>
                <div class="p_price_option_cost">
                  <p class="p_price_option_lead">ベーシックコース</p>
                  <div class="p_price_option_row">
                    <p>月額費</p>
                    <p><span class="num nunito"><?php echo $basic['price']; ?></span>円<span class="tax">（税込）</span></p>
                  </div>
                </div>
                <p class="p_price_option_text02"><?php echo $basic['heading']; ?></p>
                <div class="p_price_option_lead02">
                  <p><span class="nunito"><?php echo $basic['num']; ?></span>種類のサプリ配合</p>
                </div>
                <p class="p_price_option_text02"><?php echo $basic['text']; ?></p>
                <p class="p_price_option_item02"><?php echo $basic['content']; ?></p>
                <p class="p_price_option_notice">※<span class="nunito">GRANDE</span>専用シェイカーの受取はスタッフへお声掛けください。</p>
              </div>
              <?php $complete = $month['complete']; ?>
              <div>
                <div class="p_price_option_cost">
                  <p class="p_price_option_lead">コンプリートコース</p>
                  <div class="p_price_option_row">
                    <p>月額費</p>
                    <p><span class="num nunito"><?php echo $complete['price']; ?></span>円<span class="tax">（税込）</span></p>
                  </div>
                </div>
                <p class="p_price_option_text02"><?php echo $complete['heading']; ?></p>
                <div class="p_price_option_lead02">
                  <p><span class="nunito"><?php echo $complete['num']; ?></span>種類のサプリ配合</p>
                </div>
                <p class="p_price_option_text02"><?php echo $complete['text']; ?></p>
                <p class="p_price_option_item02"><?php echo $complete['content']; ?></p>
                <p class="p_price_option_notice">※<span class="nunito">GRANDE</span>専用シェイカーの受取はスタッフへお声掛けください。</p>
              </div>
            </div>
          </li>
        </ul>
        <?php
          $link = $month['link'];
          if ($link){
            $link_url = $link['url'];
            $link_title = $link['title'];
        ?>
          <div class="p_price_link">
            <a href="<?php echo $link['url']; ?>" target="_blank"><?php echo $link['title']; ?></a>
          </div>
        <?php } ?>
      </section>
      <section class="p_price_option">
        <h3 class="p_price_option_heading">都度払い</h3>
        <?php $each_time = get_field('each_time'); ?>
        <ul class="p_price_option_list row-3">
          <li class="p_price_option_item">
            <?php $visitor = $each_time['visitor'];?>
            <h4>
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/option/icon06.svg" alt="ビジター（2時間）" width="40" height="40">
              <span>ビジター（2時間）</span>
            </h4>
            <div class="p_price_option_cost">
              <div class="p_price_option_row">
                <p>2時間1回</p>
                <p><span class="num nunito"><?php echo $visitor['price']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <p class="p_price_option_text"><?php echo $visitor['text']; ?></p>
          </li>
          <li class="p_price_option_item">
            <?php $personal = $each_time['personal'];?>
            <h4>
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/option/icon07.svg" alt="パーソナル" width="40" height="40">
              <span>パーソナル</span>
            </h4>
            <div class="p_price_option_cost">
              <div class="p_price_option_row">
                <p>30分1回</p>
                <p><span class="num nunito"><?php echo $personal['price01']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <div class="p_price_option_cost">
              <div class="p_price_option_row">
                <p>60分1回</p>
                <p><span class="num nunito"><?php echo $personal['price02']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <p class="p_price_option_text"><?php echo $personal['text']; ?></p>
          </li>
          <li class="p_price_option_item">
            <?php $personal02 = $each_time['personal02'];?>
            <h4>
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/option/icon08.svg" alt="パーソナルお試し60分3回チケット" width="40" height="40">
              <span>パーソナルお試し<br>60分3回チケット</span>
            </h4>
            <div class="p_price_option_cost">
              <div class="p_price_option_row">
                <p>1セット</p>
                <p><span class="num nunito"><?php echo $personal02['price']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <p class="p_price_option_text"><?php echo $personal02['text']; ?></p>
          </li>
          <li class="p_price_option_item">
            <?php $gown = $each_time['gown'];?>
            <h4>
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/option/icon09.svg" alt="レンタルガウン" width="40" height="40">
              <span>レンタルガウン</span>
            </h4>
            <div class="p_price_option_cost">
              <div class="p_price_option_row">
                <p>1回</p>
                <p><span class="num nunito"><?php echo $gown['price']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <p class="p_price_option_text"><?php echo $gown['text']; ?></p>
          </li>
          <li class="p_price_option_item">
            <?php $towel = $each_time['towel'];?>
            <h4>
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/option/icon10.svg" alt="レンタルタオル" width="40" height="40">
              <span>レンタルタオル</span>
            </h4>
            <div class="p_price_option_cost">
              <div class="p_price_option_row">
                <p>1回</p>
                <p><span class="num nunito"><?php echo $towel['price']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <p class="p_price_option_text"><?php echo $towel['text']; ?></p>
          </li>
          <li class="p_price_option_item">
            <?php $wear = $each_time['wear'];?>
            <h4>
              <img src="<?php echo get_template_directory_uri(); ?>/img/price/option/icon11.svg" alt="レンタルウェア" width="40" height="40">
              <span>レンタルウェア</span>
            </h4>
            <div class="p_price_option_cost">
              <div class="p_price_option_row">
                <p>1回</p>
                <p><span class="num nunito"><?php echo $wear['price']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <p class="p_price_option_text"><?php echo $wear['text']; ?></p>
          </li>
        </ul>
      </section>
      <section class="p_price_option">
        <h3 class="p_price_option_heading">体験・見学</h3>
        <?php $experience_visit = get_field('experience_visit'); ?>
        <ul class="p_price_option_list row-2">
          <li class="p_price_option_item">
            <?php $experience = $experience_visit['experience']; ?>
            <h4>
              <span>体験<br><span>【お一人様1回限り】</span></span>
            </h4>
            <div class="p_price_option_cost">
              <div class="p_price_option_row">
                <p>1回</p>
                <p><span class="num nunito"><?php echo $experience['price']; ?></span>円<span class="tax">（税込）</span></p>
              </div>
            </div>
            <div class="p_price_option_text"><?php echo $experience['text']; ?></div>
          </li>
          <li class="p_price_option_item">
            <?php $visit = $experience_visit['visit']; ?>
            <h4>
              <span>見学</span>
            </h4>
            <div class="p_price_option_cost">
              <div class="p_price_option_row">
                <p><span class="num nunito"><?php echo $visit['price']; ?></span>円</p>
              </div>
            </div>
            <div class="p_price_option_text"><?php echo $visit['text']; ?></p>
          </li>
        </ul>
      </section>
    </section>
  </div>

  <?php include(get_template_directory() . '/part/start.php'); ?>

	<?php include(get_template_directory() . '/part/reservation.php'); ?>
</section>

<?php get_footer(); ?>
