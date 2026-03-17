<?php
$page_title = '지점안내';

require_once __DIR__ . '/includes/header.php';

$branches = [
  [
    'id'      => 'dongseong',
    'label'   => '동성로점',
    'title'   => '51년 전통의 맛과 향긋한 커피가 어우러진 도심 속 쉼터',
    'desc'    => '송파둘레길의 자연과 어우러진 아늑하고 편안한 공간입니다. 전통의 미와 현대적 감각이 조화를 이루는 인테리어 속에서 여유로운 시간을 만끽하세요. 매일 새벽, 아늑한 명장의 손길로 가장 신선하고 따뜻한 찰밥백을 맛보실 수 있습니다. 명품 찰밥 외에도, 밀가루 없이 잘 만들어낸 건강한 \'1968년 옥수수빵\', 신선한 원두로 내린 커피 등 다양한 베이커리와 음료가 준비되어 있습니다.',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.0!2d128.5960!3d35.8700!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35660142fd7a5555%3A0x0!2z64-Z6rWt67OA7J207Iqk7YGs652864yA6rWs64-ZIDLquIkgNC0xNSDsoJA!5e0!3m2!1sko!2skr!4v1234567890',
    'address' => '대구 중구 동성로2길 4-15 1층',
    'tel'     => '02-423-4082',
    'mobile'  => '010-4725-4082',
    'hours'   => '베이커리 07:00-20:00',
    'cafe'    => '카페 09:00-21:30',
    'naver'   => 'https://map.naver.com/v5/search/%EC%97%90%EC%9D%B4%EB%B0%94%EC%9D%B4%ED%8A%B8%ED%82%A4%EC%B9%9C%20%EB%8F%99%EC%84%B1%EB%A1%9C',
    'kakao'   => 'https://map.kakao.com/link/search/%EC%97%90%EC%9D%B4%EB%B0%94%EC%9D%B4%ED%8A%B8%ED%82%A4%EC%B9%9C%20%EB%8F%99%EC%84%B1%EB%A1%9C',
    'photos'  => [
      'images/locations/dongseong_1.jpg',
      'images/locations/dongseong_2.jpg',
      'images/locations/dongseong_3.jpg',
      'images/locations/dongseong_4.jpg',
      'images/locations/dongseong_5.jpg',
    ],
  ],
  [
    'id'      => 'gyeongbuk',
    'label'   => '경북대점',
    'title'   => '경북대 캠퍼스 옆, 활기찬 청춘과 함께하는 공간',
    'desc'    => '경북대학교 정문 앞에 위치하여 학생과 교직원, 지역 주민 모두가 편하게 찾아오는 아늑한 쉼터입니다. 신선한 재료로 매일 준비되는 정성스러운 한 끼와 향긋한 커피 한 잔을 즐겨보세요.',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.0!2d128.6060!3d35.8980!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35660560f5555555%3A0x0!2z64-Z6rWt67OA7J207Iqk7YGs652864yA6rWs64-ZIOyYpOuzuOyKpDggMzUtMSDsoJA!5e0!3m2!1sko!2skr!4v1234567891',
    'address' => '대구 북구 산격로8길 35-1 1층',
    'tel'     => '053-111-2222',
    'mobile'  => '010-1234-5678',
    'hours'   => '베이커리 08:00-20:00',
    'cafe'    => '카페 08:00-21:00',
    'naver'   => 'https://map.naver.com/v5/search/%EC%97%90%EC%9D%B4%EB%B0%94%EC%9D%B4%ED%8A%B8%ED%82%A4%EC%B9%9C%20%EA%B2%BD%EB%B6%81%EB%8C%80%EC%A0%90',
    'kakao'   => 'https://map.kakao.com/link/search/%EC%97%90%EC%9D%B4%EB%B0%94%EC%9D%B4%ED%8A%B8%ED%82%A4%EC%B9%9C%20%EA%B2%BD%EB%B6%81%EB%8C%80%EC%A0%90',
    'photos'  => [
      'images/locations/gyeongbuk_1.jpg',
      'images/locations/gyeongbuk_2.jpg',
      'images/locations/gyeongbuk_3.jpg',
    ],
  ],
  [
    'id'      => 'yeongnam',
    'label'   => '영남태점',
    'title'   => '영남 전통의 맛, 현대적인 감각으로 재해석한 공간',
    'desc'    => '영남 지역의 깊은 식문화를 바탕으로, 정성과 전통이 살아있는 메뉴를 선보입니다. 넓고 쾌적한 공간에서 가족과 함께 특별한 식사 시간을 만들어 보세요.',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.0!2d128.7380!3d35.8180!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35660a0000000001%3A0x0!2z6rK96brp7Iqk7YGs652864yA6rWs64-ZIOyXrOqwlOyKpCAxIDHsupQ!5e0!3m2!1sko!2skr!4v1234567892',
    'address' => '경북 경산시 청운로 1 1층 에이바이트키친',
    'tel'     => '053-333-4444',
    'mobile'  => '010-9876-5432',
    'hours'   => '베이커리 07:30-19:30',
    'cafe'    => '카페 08:00-20:30',
    'naver'   => 'https://map.naver.com/v5/search/%EC%97%90%EC%9D%B4%EB%B0%94%EC%9D%B4%ED%8A%B8%ED%82%A4%EC%B9%9C%20%EC%98%81%EB%82%A8%ED%83%9C%EC%A0%90',
    'kakao'   => 'https://map.kakao.com/link/search/%EC%97%90%EC%9D%B4%EB%B0%94%EC%9D%B4%ED%8A%B8%ED%82%A4%EC%B9%9C%20%EC%98%81%EB%82%A8%ED%83%9C%EC%A0%90',
    'photos'  => [
      'images/locations/yeongnam_1.jpg',
      'images/locations/yeongnam_2.jpg',
      'images/locations/yeongnam_3.jpg',
    ],
  ],
];
?>

<?php
  $hero_title = '지점안내';
  $hero_bg    = 'images/mainbanner.jpg';
  require_once __DIR__ . '/includes/hero_section.php';
?>

<main>

  <section class="branch-section">
    <div class="branch-inner">

      <ul class="menu-tabs" id="branchTabs" role="tablist">
        <?php foreach ($branches as $i => $branch): ?>
        <li class="tab-item <?= $i === 0 ? 'active' : '' ?>"
            data-target="branch-<?= $branch['id'] ?>"
            role="tab">
          <?= $branch['label'] ?>
        </li>
        <?php endforeach; ?>
      </ul>

      <?php foreach ($branches as $i => $branch): ?>
      <article class="branch-panel <?= $i === 0 ? 'active' : '' ?>"
               id="branch-<?= $branch['id'] ?>"
               role="tabpanel">

        <header class="branch-intro">
          <h2 class="branch-title"><?= $branch['title'] ?></h2>
          <p class="branch-desc"><?= $branch['desc'] ?></p>
        </header>

        <figure class="branch-map">
          <iframe
            src="<?= $branch['map_src'] ?>"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="<?= $branch['label'] ?> 지도">
          </iframe>
        </figure>

        <address class="branch-info">
          <span class="branch-addr">📍 <?= $branch['address'] ?></span>
          <span class="branch-meta">
            <?= $branch['tel'] ?> <span class="sep">|</span>
            <?= $branch['mobile'] ?> <span class="sep">|</span>
            <?= $branch['hours'] ?> <span class="sep">|</span>
            <?= $branch['cafe'] ?>
          </span>
          <span class="branch-btns">
            <a href="<?= $branch['naver'] ?>" target="_blank" class="map-btn btn-naver">네이버 지도 보기</a>
            <a href="<?= $branch['kakao'] ?>" target="_blank" class="map-btn btn-kakao">카카오 지도 보기</a>
          </span>
        </address>

        <?php if (!empty($branch['photos'])): ?>
        <div class="branch-slider" id="slider-<?= $branch['id'] ?>">
          <button class="slider-btn prev" aria-label="이전">&#8249;</button>
          <div class="slider-wrap">
            <ul class="slider-list">
              <?php foreach ($branch['photos'] as $photo): ?>
              <li class="slider-item">
                <img src="<?= $photo ?>" alt="<?= $branch['label'] ?> 사진">
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <button class="slider-btn next" aria-label="다음">&#8250;</button>
        </div>
        <?php endif; ?>

      </article>
      <?php endforeach; ?>

    </div>
  </section>

  <?php require_once __DIR__ . '/includes/cta_partnership.php'; ?>

</main>

<script>
(function () {
  /* 탭 전환 */
  document.querySelectorAll('.tab-item').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.tab-item').forEach(t => t.classList.remove('active'));
      document.querySelectorAll('.branch-panel').forEach(p => p.classList.remove('active'));
      tab.classList.add('active');
      document.getElementById(tab.dataset.target).classList.add('active');
    });
  });

  /* 슬라이더 */
  document.querySelectorAll('.branch-slider').forEach(slider => {
    const list    = slider.querySelector('.slider-list');
    const items   = slider.querySelectorAll('.slider-item');
    const prevBtn = slider.querySelector('.slider-btn.prev');
    const nextBtn = slider.querySelector('.slider-btn.next');
    let current   = 0;

    const visible = () => window.innerWidth <= 420 ? 1 : window.innerWidth <= 640 ? 2 : 3;

    function move(dir) {
      current = Math.min(Math.max(current + dir, 0), Math.max(0, items.length - visible()));
      list.style.transform = `translateX(-${current * (items[0].getBoundingClientRect().width + 12)}px)`;
    }

    prevBtn.addEventListener('click', () => move(-1));
    nextBtn.addEventListener('click', () => move(+1));
    window.addEventListener('resize', () => move(0));
  });
})();
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>