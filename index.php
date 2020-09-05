<?php get_header()?>
    <div class="top-main">
      <div class="top-image">
        <div class="parent">
          <div class="slider">
            <button type="button" id="right" class="right" name="button">
              <svg
                version="1.1"
                id="Capa_1"
                width="40px"
                height="40px "
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 477.175 477.175"
                style="enable-background: new 0 0 477.175 477.175;"
                xml:space="preserve"
              >
                <g>
                  <path
                    style="fill: #9d9d9d;"
                    d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                  c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
                  "
                  />
                </g>
              </svg>
            </button>
            <button type="button" id="left" class="left" name="button">
              <svg
                version="1.1"
                id="Capa_2"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 477.175 477.175"
                style="enable-background: new 0 0 477.175 477.175;"
                xml:space="preserve"
              >
                <g>
                  <path
                    style="fill: #9d9d9d;"
                    d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                  c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"
                  />
                </g>
              </svg>
            </button>
            <svg
              id="svg2"
              class="up2"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
            >
              <circle
                id="circle1"
                class="circle1 steap"
                cx="34px"
                cy="49%"
                r="20"
              />
              <circle
                id="circle2"
                class="circle2 steap"
                cx="34px"
                cy="49%"
                r="100"
              />
              <circle
                id="circle3"
                class="circle3 steap"
                cx="34px"
                cy="49%"
                r="180"
              />
              <circle
                id="circle4"
                class="circle4 steap"
                cx="34px"
                cy="49%"
                r="260"
              />
              <circle
                id="circle5"
                class="circle5 steap"
                cx="34px"
                cy="49%"
                r="340"
              />
              <circle
                id="circle6"
                class="circle6 steap"
                cx="34px"
                cy="49%"
                r="420"
              />
              <circle
                id="circle7"
                class="circle7 steap"
                cx="34px"
                cy="49%"
                r="500"
              />
              <circle
                id="circle8"
                class="circle8 steap"
                cx="34px"
                cy="49%"
                r="580"
              />
              <circle
                id="circle9"
                class="circle9 steap"
                cx="34px"
                cy="49%"
                r="660"
              />
            </svg>
            <svg
              id="svg1"
              class="up2"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
            >
              <circle
                id="circle10"
                class="circle10 steap"
                cx="648px"
                cy="49%"
                r="20"
              />
              <circle
                id="circle11"
                class="circle11 steap"
                cx="648px"
                cy="49%"
                r="100"
              />
              <circle
                id="circle12"
                class="circle12 steap"
                cx="648px"
                cy="49%"
                r="180"
              />
              <circle
                id="circle13"
                class="circle13 steap"
                cx="648px"
                cy="49%"
                r="260"
              />
              <circle
                id="circle14"
                class="circle14 steap"
                cx="648px"
                cy="49%"
                r="340"
              />
              <circle
                id="circle15"
                class="circle15 steap"
                cx="648px"
                cy="49%"
                r="420"
              />
              <circle
                id="circle16"
                class="circle16 steap"
                cx="648px"
                cy="49%"
                r="500"
              />
              <circle
                id="circle17"
                class="circle17 steap"
                cx="648px"
                cy="49%"
                r="580"
              />
              <circle
                id="circle18"
                class="circle18 steap"
                cx="648px"
                cy="49%"
                r="660"
              />
            </svg>
            <div id="slide1" class="slide1 up1">MOUNTAIN</div>
            <div id="slide2" class="slide2">BEACH</div>
            <div id="slide3" class="slide3">FOREST</div>
            <div id="slide4" class="slide4">DESERT</div>
          </div>
        </div>
      </div>
    </div>
    <section class="topics" id="1">
      <div class="head-name">
        <h2>Topics</h2>
        <p>トピックス</p>
      </div>
      <div class="container">
      <?php $posts = get_posts('numberposts=6'); global $post; ?>
    <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
        <article>
        <a href="<?php the_permalink() ?>">
          <p class="topic-img">
            <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url(); ?>">
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri()?>/img/Large Card.svg">
            <?php endif; ?>
          </p>
          <div class="topic-item">
            <p class="topic-title"><?php the_title(); ?></p>
            <p class="topic-date"><?php the_time('Y年m月d日'); ?></p>
            <p class="topic-content">
            <?php the_content(); ?>
            </p>
          </div>
          </a>
        </article>
        <?php endforeach; endif; ?>
      </div>
    </section>
    <section class="topics topics-color"" id="2">
      <div class="head-name">
        <h2>Gallery</h2>
        <p>ギャラリー</p>
      </div>
      <div class="container">
      <?php echo do_shortcode('[instagram-feed]'); ?>
      </div>
    </section>
    <section class="menu" id="3">
      <div class="head-name">
        <h2 id="menu-title-color">Menu</h2>
        <p id="menu-title-color">料金表</p>
      </div>
      <div class="menu-box">
        <div class="menu-one">
          <p class="menu-sub-name">Cut</p>
          <p class="menu-sub-name-border">カットメニュー</p>
          <ul>
            <li>カット(小学生まで)<span class="yen-font">&yen;1200</span></li>
            <li>カット(小学生まで)<span class="yen-font">&yen;1200</span></li>
            <li>カット(小学生まで)<span class="yen-font">&yen;1200</span></li>
          </ul>
        </div>
        <div class="menu-one">
          <p class="menu-sub-name">Cut</p>
          <p class="menu-sub-name-border">カットメニュー</p>
          <ul>
            <li>カット(小学生まで)<span class="yen-font">&yen;1200</span></li>
            <li>カット(小学生まで)<span class="yen-font">&yen;1200</span></li>
            <li>カット(小学生まで)<span class="yen-font">&yen;1200</span></li>
          </ul>
        </div>
      </div>
    </section>
    <section class="stylist-info" id="4">
      <p><img src="<?php echo get_template_directory_uri()?>/img/stylist_A.png" alt="" /></p>
      <div class="stylist-box">
        <p id="stylist-name">山田太郎</p>
        <p id="stylist-name-sub">stylist</p>
        <p id="stylist-content">
          親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。新築の二階から首を出していたら、同級生の一人が冗談に、いくら威張っても、そこから飛び降りる事は出来まい。弱虫やーい。と囃したからである。小使に負ぶさって帰って来た時、おやじが大きな眼をして二階ぐらいから飛び降りて腰を抜かす奴があるかと云ったから、この次は抜かさずに飛んで見せますと答えた。
        </p>
      </div>
    </section>
    <section class="access-info" id="5">
      <div class="background_test">
        <div class="head-name">
          <h2>Access</h2>
          <p>アクセス</p>
        </div>
        <div class="access-box">
          <div class="attention">
            <div class="attention_box">
              <h2>ご予約について</h2>
              <p id="attention_text">プライベートサロンとなりますので、
                女性専用の完全予約制とさせて頂きます。
                ※男性のお客様は既存の顧客様のみとさせて頂きます。
                お電話・メールのいずれかからご予約お願いします。</p>
                <a href="https://www.instagram.com/hairandmakekacco/" class="insta_btn2">
                  <i class="fab fa-instagram"></i> <span>To Instagram</span>
                </a>
            </div>
          </div>
          <p class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3529.0347823142597!2d128.89440591503538!3d27.808700227637456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e193642a2e16c1%3A0xca8bef4c01646fec!2z44CSODkxLTc2MTIg6bm_5YWQ5bO255yM5aSn5bO26YOh5aSp5Z-O55S65bmz5Zyf6YeO77yU77yY4oiS77yV!5e0!3m2!1sja!2sjp!4v1598191484880!5m2!1sja!2sjp"
              width="100%"
              height="460"
              frameborder="0"
              style="border: 0;"
              allowfullscreen=""
              aria-hidden="false"
              tabindex="0"
            ></iframe>
          </p>
        </div>
    </div>
    </section>
    <?php get_footer()?>