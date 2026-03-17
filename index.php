<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero-section">
  <div class="hero-overlay"></div>

  <header class="site-header">
    <div class="header-inner container">
      <a href="/" class="logo">
        <img src="images/logo.svg" alt="<?= SITE_NAME ?>">
      </a>

      <!-- 햄버거 버튼 (모바일) -->
      <button class="nav-toggle" aria-label="메뉴 열기" aria-expanded="false" aria-controls="mainNav">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="nav" id="mainNav">
        <a href="brand.php">브랜드스토리</a>
        <a href="menu.php">메뉴소개</a>
        <a href="location.php">지점소개</a>
        <a href="partnership.php">창업문의</a>
      </nav>
    </div>
  </header>

  <div class="hero-content container">
    <h1 class="hero-title gowun-batang-regular">정직한 재료, 진짜 맛</h1>
    <p class="hero-subtitle">
      신선하고 프리미엄 재료를 사용한 것과 같다,<br>
      오늘도 에이바이트키친과 함께합니다
    </p>
    <p class="arrow-button">
      <a href="brand.php">브랜드스토리 <i></i></a>
    </p>
  </div>
</section>

<main>

  <!-- 시그니처 메뉴 -->
  <section class="menu-content">
    <div class="signature-menu container" id="menu">
      <p class="section-label">시그니처 메뉴</p>
      <h2 class="section-title">10년간 사랑받은 시그니처</h2>
      <p class="section-description">
        2016년 대구 동성로에서 시작해 10년,<br>
        동성로·경북대·영남대 3개 지점으로 성장한<br>
        대구를 대표하는 퓨전 양식 레스토랑입니다
      </p>
      <p class="arrow-button">
        <a href="menu.php">메뉴 보러가기 <i></i></a>
      </p>
    </div>

    <div class="slider-container" aria-label="시그니처 메뉴 슬라이더">
      <ul class="slider-track">
        <?php for ($pass = 0; $pass < 2; $pass++): foreach ($menu_items as $item): ?>
        <li class="menu-item">
          <img src="<?= htmlspecialchars($item['img']) ?>" alt="<?= htmlspecialchars($item['alt']) ?>">
          <p class="menu-name"><?= htmlspecialchars($item['name']) ?></p>
        </li>
        <?php endforeach; endfor; ?>
      </ul>
    </div>
  </section>

  <!-- 파트너십 CTA -->
  <?php require_once __DIR__ . '/includes/cta_partnership.php'; ?>

  <!-- 지점 안내 (홈 - 카드 그리드) -->
  <section class="location-section" id="location">
    <div class="location-inner container">
      <p class="section-label">지점안내</p>
      <h2 class="section-title">가장 가까운 에이바이트키친</h2>
      <p class="section-description">가까운 지점을 찾아 오늘의 맛있는 한 끼를 즐기세요</p>
      <ul class="location-grid">
        <?php foreach ($branches as $branch): ?>
        <li class="location-card">
          <img src="<?= htmlspecialchars($branch['img']) ?>" alt="<?= htmlspecialchars($branch['name']) ?>">
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>