<?php
$page_title = '브랜드스토리';
require_once __DIR__ . '/includes/header.php';

$stories = [
  [
    'no'    => '01',
    'title' => '작은 주방에서 시작하다',
    'img'   => 'images/brand-01.jpg',
    'img_alt' => '에이바이트키친 외관',
    'body'  => "2016년, 대구 동성로의 작은 주방에서 에이바이트키친의 이야기가 시작되었습니다.\n\n처음부터 거창하지 않았습니다. 단 하나의 믿음, '정직한 재료로 만든 음식은 반드시 사람의 마음을 움직인다'는 확신 하나로 문을 열었습니다.\n\n작은 공간이었지만, 그 안에서 만들어지는 음식만큼은 최선을 다했습니다.",
    'img_right' => false,
  ],
  [
    'no'    => '02',
    'title' => '우리만의 맛을 만들다',
    'img'   => 'images/brand-02.jpg',
    'img_alt' => '에이바이트키친 스테이크',
    'body'  => "퓨전 양식이라는 장르 안에서 에이바이트키친만의 언어를 찾아갔습니다.\n\n한국인의 입맛에 맞게, 그러나 기존에 없던 새로운 방식으로. 스테이크, 파스타, 덮밥 — 하나하나에 우리만의 레시피가 담겼습니다.\n\n손님들이 한 번 맛보고 다시 찾아오는 메뉴를 만드는 것, 그것이 목표였습니다.",
    'img_right' => true,
  ],
  [
    'no'    => '03',
    'title' => '맛의 기준을 고민하다',
    'img'   => 'images/brand-03.jpg',
    'img_alt' => '에이바이트키친 메뉴',
    'body'  => "더 맛있는 음식을 위해 끊임없이 고민했습니다.\n\n식재료 하나하나의 원산지를 따지고, 소스의 비율을 수십 번 바꾸고, 플레이팅을 다시 고민했습니다.\n\n'이 정도면 괜찮다'가 아니라 '이게 최선인가'를 매번 물었습니다. 그 과정이 지금의 에이바이트키친을 만들었습니다.",
    'img_right' => false,
  ],
  [
    'no'    => '04',
    'title' => '대구와 함께 성장하다',
    'img'   => 'images/brand-04.jpg',
    'img_alt' => '에이바이트키친 매장',
    'body'  => "동성로에서 시작해 경북대, 영남대까지. 10년 동안 대구 시민들과 함께 성장했습니다.\n\n대학가의 젊은 손님들, 가족 단위의 방문객들, 특별한 날을 기념하는 커플들 — 다양한 분들의 일상 속에 에이바이트키친이 함께했습니다.\n\n앞으로도 더 많은 분들의 소중한 한 끼를 책임지겠습니다.",
    'img_right' => true,
  ],
];
?>

  <!-- Page Hero -->
  <section class="hero-section" style="height:35vh; min-height:250px;">
    <div class="hero-overlay"></div>
    <div class="hero-content" style="padding-top:0; justify-content:flex-end; padding-bottom:40px;">
      <p class="section-label" style="color:#fff; border-color:rgba(255,255,255,0.6);">브랜드스토리</p>
      <h1 class="hero-title">A bite kitchen</h1>
    </div>
  </section>

  <!-- Brand Story Sections -->
  <section class="brand-stories">
    <?php foreach($stories as $story): ?>
    <div class="brand-story <?= $story['img_right'] ? 'reverse' : '' ?>">
      <div class="brand-story__text">
        <p class="brand-story__no"><?= $story['no'] ?></p>
        <h2 class="brand-story__title"><?= $story['title'] ?></h2>
        <div class="brand-story__body">
          <?php foreach(explode("\n\n", $story['body']) as $para): ?>
          <p><?= nl2br(htmlspecialchars($para)) ?></p>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="brand-story__img">
        <img src="<?= $story['img'] ?>" alt="<?= $story['img_alt'] ?>">
      </div>
    </div>
    <?php endforeach; ?>
  </section>

  <!-- Partnership CTA -->
  <section class="partnership-section">
    <div class="partnership-inner">
      <h2 class="partnership-title">함께 만들어갈 파트너를 찾습니다</h2>
      <p class="partnership-description">가맹점 창업, 납품 제안, 협업 사항,<br>편하게 문의해주세요</p>
      <p class="arrow-button">
        <a href="partnership.php" onclick="trackPartnershipClick()"> 문의하기 <i></i></a>
      </p>
    </div>
  </section>

<style>
.brand-stories { background: var(--white); }

.brand-story {
  display: grid;
  grid-template-columns: 1fr 1fr;
  min-height: 480px;
}
.brand-story.reverse { direction: rtl; }
.brand-story.reverse > * { direction: ltr; }

.brand-story__text {
  padding: 80px 60px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 20px;
  background: var(--white);
}
.brand-story__no {
  font-family: var(--font-heading);
  font-size: 48px;
  color: var(--color300);
  line-height: 1;
}
.brand-story__title {
  font-family: var(--font-heading);
  font-size: 28px;
  color: var(--color800);
  line-height: 1.3;
}
.brand-story__body p {
  font-size: 14px;
  color: var(--color600);
  line-height: 1.9;
  margin-bottom: 12px;
}
.brand-story__img { overflow: hidden; }
.brand-story__img img { width: 100%; height: 100%; object-fit: cover; }

@media (max-width: 768px) {
  .brand-story,
  .brand-story.reverse { grid-template-columns: 1fr; direction: ltr; }
  .brand-story__img    { height: 280px; }
  .brand-story__text   { padding: 50px 24px; }
  .brand-story__no     { font-size: 36px; }
  .brand-story__title  { font-size: 22px; }
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>