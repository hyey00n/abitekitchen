<?php
/**
 * header.php — 공통 헤더
 * $page_title  (선택) 탭 타이틀
 * $extra_css   (선택) 추가 CSS 배열
 */
require_once __DIR__ . '/config.php';

$tab_title = isset($page_title)
    ? htmlspecialchars($page_title) . ' - ' . SITE_TITLE
    : SITE_TITLE;

$current = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $tab_title ?></title>
  <meta name="description" content="<?= isset($page_desc) ? htmlspecialchars($page_desc) : SITE_DESC ?>">

  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">

  <?php foreach ($extra_css ?? [] as $css): ?>
  <link rel="stylesheet" href="<?= htmlspecialchars($css) ?>">
  <?php endforeach; ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <script async src="https://www.googletagmanager.com/gtag/js?id=<?= GA4_ID ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){ dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', '<?= GA4_ID ?>');

    if (window.location.search.includes('utm_source=qr')) {
      gtag('event', 'qr_scan', { event_category: 'engagement', event_label: 'business_card' });
    }
    function trackPartnershipClick() {
      gtag('event', 'partnership_inquiry', { event_category: 'conversion', event_label: 'form_click' });
    }
  </script>
</head>
<body>

<?php if ($current !== 'index.php'): ?>
<header class="site-header site-header--sub">
  <div class="header-inner">
    <a href="index.php" class="logo">
      <img src="images/logo.svg" alt="<?= SITE_NAME ?>">
    </a>
    <nav class="nav">
      <a href="brand.php"       <?= $current === 'brand.php'       ? 'class="active"' : '' ?>>브랜드스토리</a>
      <a href="menu.php"        <?= $current === 'menu.php'        ? 'class="active"' : '' ?>>메뉴소개</a>
      <a href="location.php"    <?= $current === 'location.php'    ? 'class="active"' : '' ?>>지점소개</a>
      <a href="partnership.php" <?= $current === 'partnership.php' ? 'class="active"' : '' ?>>창업문의</a>
    </nav>
  </div>
</header>
<?php endif; ?>