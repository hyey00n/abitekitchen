<?php
/**
 * header.php — 공통 헤더
 *
 * 사용하는 페이지에서 include 전에 아래 변수를 설정하세요:
 *   $page_title  (선택) 탭 타이틀 앞에 붙는 텍스트, 예: '메뉴'
 *   $extra_css   (선택) 추가 CSS 파일 경로 배열, 예: ['css/location.css']
 */
require_once __DIR__ . '/config.php';

$tab_title = isset($page_title)
    ? htmlspecialchars($page_title) . ' - ' . SITE_TITLE
    : SITE_TITLE;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $tab_title ?></title>
  <meta name="description" content="<?= isset($page_desc) ? htmlspecialchars($page_desc) : SITE_DESC ?>">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />

  <?php if (!empty($extra_css)): ?>
    <?php foreach ($extra_css as $css): ?>
      <link rel="stylesheet" href="<?= htmlspecialchars($css) ?>">
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Google Analytics 4 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?= GA4_ID ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){ dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', '<?= GA4_ID ?>');

    if (window.location.search.includes('utm_source=qr')) {
      gtag('event', 'qr_scan', {
        event_category: 'engagement',
        event_label: 'business_card',
      });
    }

    function trackPartnershipClick() {
      gtag('event', 'partnership_inquiry', {
        event_category: 'conversion',
        event_label: 'form_click',
      });
    }
  </script>
</head>
<body>

<?php
// index.php는 hero 안에 헤더를 직접 넣으므로 nav 출력 제외
// 서브페이지에서만 공통 헤더 출력
$is_index = (basename($_SERVER['PHP_SELF']) === 'index.php');
if (!$is_index):
?>
<header class="header sub-header">
  <ul class="header_inner">
    <li class="logo">
      <a href="index.php"><img src="images/logo.svg" alt="<?= SITE_NAME ?>"></a>
    </li>
    <li class="nav">
      <a href="brand.php" <?= basename($_SERVER['PHP_SELF'])==='brand.php' ? 'class="active"' : '' ?>>브랜드스토리</a>
      <a href="menu.php" <?= basename($_SERVER['PHP_SELF'])==='menu.php' ? 'class="active"' : '' ?>>메뉴소개</a>
      <a href="location.php" <?= basename($_SERVER['PHP_SELF'])==='location.php' ? 'class="active"' : '' ?>>지점소개</a>
      <a href="partnership.php" <?= basename($_SERVER['PHP_SELF'])==='partnership.php' ? 'class="active"' : '' ?>>창업문의</a>
    </li>
  </ul>
</header>
<?php endif; ?>