<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="hero-overlay"></div>

    <!-- Header -->
    <header class="header">
      <ul class="header_inner">
        <li class="logo">
          <a href="/"><img src="images/logo.svg" alt="<?= SITE_NAME ?>"></a>
        </li>
        <li class="nav">
          <a href="brand.php">브랜드스토리</a>
          <a href="menu.php">메뉴소개</a>
          <a href="location.php">지점소개</a>
          <a href="partnership.php">창업문의</a>
        </li>
      </ul>
    </header>

    <!-- Hero Content -->
    <div class="hero-content">
      <h1 class="hero-title gowun-batang-regular">정직한 재료, 진짜 맛</h1>
      <p class="hero-subtitle">
        신선하고 프리미엄 재료를 사용한 것과 같다,<br>
        오늘도 에이바이트키친과 함께합니다
      </p>
      <p class="arrow-button">
        <a href="brand.php"> 브랜드스토리 <i></i></a>
      </p>
    </div>
  </section>

  <!-- Signature Menu Section -->
  <section class="menu-content">
    <div class="signature-menu" id="menu">
      <p class="section-label">시그니처 메뉴</p>
      <h2 class="section-title">10년간 사랑받은 시그니처</h2>
      <p class="section-description">
        2016년 대구 동성로에서 시작해 10년,<br>
        동성로·경북대·영남대 3개 지점으로 성장한<br>
        대구를 대표하는 퓨전 양식 레스토랑입니다
      </p>
      <p class="arrow-button">
        <a href="menu.php"> 메뉴 보러가기 <i></i></a>
      </p>
    </div>

    <!-- 무한 슬라이더: config.php의 $menu_items 배열로 관리 -->
    <div class="slider-container">
      <ul class="slider-track">
        <?php
        // 원본 + 복사본을 PHP 루프로 출력 (무한 슬라이드 효과)
        for ($pass = 0; $pass < 2; $pass++):
          foreach ($menu_items as $item):
        ?>
        <li class="menu-item">
          <img src="<?= htmlspecialchars($item['img']) ?>" alt="<?= htmlspecialchars($item['alt']) ?>">
          <p class="menu-name"><?= htmlspecialchars($item['name']) ?></p>
        </li>
        <?php
          endforeach;
        endfor;
        ?>
      </ul>
    </div>
  </section>

  <!-- Partnership Section -->
<?php require_once __DIR__ . '/includes/cta_partnership.php'; ?>

  <!-- Location Section -->
  <section class="location-section" id="location">
    <div class="location-inner">
      <p class="section-label">지점안내</p>
      <h2 class="section-title">가장 가까운 에이바이트키친</h2>
      <p class="section-description">
        가까운 지점을 찾아 오늘의 맛있는 한 끼를 즐기세요
      </p>

      <!-- config.php의 $branches 배열로 관리 -->
      <ul class="location-grid">
        <?php foreach ($branches as $branch): ?>
        <li class="location-card">
          <img src="<?= htmlspecialchars($branch['img']) ?>" alt="<?= htmlspecialchars($branch['name']) ?>">
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>