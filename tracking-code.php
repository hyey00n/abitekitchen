<?php
// tracking-code.php — 내부용 마케팅 추적 코드 설치 가이드
// 실제 배포 시에는 접근 제한을 권장합니다
require_once __DIR__ . '/includes/config.php';

$ga4_id        = GA4_ID;
$site_url      = 'https://abitekitchen.com';
$current_year  = date('Y');

// UTM URL 자동 생성
$utm_links = [
  ['label'=>'명함 QR코드',    'source'=>'qr',        'medium'=>'business_card', 'campaign'=>"{$current_year}_branding"],
  ['label'=>'인스타 프로필',   'source'=>'instagram',  'medium'=>'bio_link',      'campaign'=>'social_organic'],
  ['label'=>'인스타 스토리',   'source'=>'instagram',  'medium'=>'story',         'campaign'=>'social_organic'],
  ['label'=>'이메일 서명',     'source'=>'email',      'medium'=>'signature',     'campaign'=>'email_signature'],
];
foreach ($utm_links as &$u) {
  $u['url'] = $site_url . '/?' . http_build_query([
    'utm_source'   => $u['source'],
    'utm_medium'   => $u['medium'],
    'utm_campaign' => $u['campaign'],
  ]);
}
unset($u);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>마케팅 추적 코드 가이드 - <?= SITE_NAME ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500&display=swap" rel="stylesheet">
  <style>
    body { font-family:'Noto Sans KR',sans-serif; max-width:1200px; margin:0 auto; padding:20px; background:#f5f5f5; }
    .section { background:#fff; padding:30px; margin:20px 0; border-radius:8px; box-shadow:0 2px 4px rgba(0,0,0,.1); }
    h1 { color:#5D4E37; border-bottom:3px solid #C9A88A; padding-bottom:10px; }
    h2 { color:#C9A88A; margin-top:30px; }
    code { background:#f4f4f4; padding:2px 6px; border-radius:3px; font-family:'Courier New',monospace; }
    pre  { background:#2d2d2d; color:#f8f8f2; padding:20px; border-radius:5px; overflow-x:auto; white-space:pre-wrap; }
    .note { background:#fff3cd; border-left:4px solid #ffc107; padding:15px; margin:20px 0; }
    .tip  { background:#f0f7ff; border-left:4px solid #2196F3; padding:15px; margin:20px 0; }
    table { width:100%; border-collapse:collapse; margin:20px 0; }
    th, td { border:1px solid #ddd; padding:12px; text-align:left; word-break:break-all; }
    th { background:#C9A88A; color:#fff; }
    .badge { display:inline-block; padding:2px 8px; border-radius:10px; font-size:12px; font-weight:600; }
    .badge-required { background:#ffebee; color:#c62828; }
    .badge-optional { background:#e8f5e9; color:#2e7d32; }
  </style>
</head>
<body>

<div class="section">
  <h1>🎯 <?= SITE_NAME ?> 마케팅 추적 코드 가이드</h1>
  <p>아래 코드들은 <code>includes/header.php</code>의 <code>&lt;head&gt;</code> 섹션에 이미 포함되어 있습니다.<br>
     GA4 측정 ID만 <code>includes/config.php</code>의 <code>GA4_ID</code> 상수를 바꾸면 전 페이지에 자동 반영됩니다.</p>
  <p><strong>현재 GA4_ID:</strong> <code><?= htmlspecialchars($ga4_id) ?></code>
  <?php if ($ga4_id === 'G-XXXXXXXXXX'): ?>
    &nbsp;<span class="badge badge-required">⚠ 실제 ID로 교체 필요</span>
  <?php else: ?>
    &nbsp;<span class="badge badge-optional">✅ 설정됨</span>
  <?php endif; ?>
  </p>
</div>

<!-- GA4 -->
<div class="section">
  <h2>1. Google Analytics 4 (GA4) <span class="badge badge-required">필수</span></h2>
  <div class="note">
    <strong>⚠ 설치 전 준비:</strong><br>
    1. <a href="https://analytics.google.com" target="_blank">Google Analytics</a> 접속<br>
    2. 계정 → 속성 → 데이터 스트림 생성<br>
    3. 측정 ID (G-XXXXXXXXXX) 복사<br>
    4. <code>includes/config.php</code> 에서 <code>GA4_ID</code> 값 교체
  </div>
  <pre><code>&lt;!-- includes/config.php 에서만 수정하세요 --&gt;
define('GA4_ID', '여기에_실제_ID_입력');</code></pre>
</div>

<!-- Meta Pixel -->
<div class="section">
  <h2>2. Meta Pixel (페이스북/인스타그램) <span class="badge badge-optional">선택</span></h2>
  <div class="note">
    <strong>⚠ 준비:</strong>
    <a href="https://business.facebook.com/events_manager" target="_blank">Meta Events Manager</a>에서 픽셀 ID 발급 후
    아래 코드를 <code>includes/header.php</code>의 GA4 스크립트 아래에 붙여넣고 <code>YOUR_PIXEL_ID</code>를 교체하세요.
  </div>
  <pre><code>&lt;!-- Meta Pixel --&gt;
&lt;script&gt;
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init','YOUR_PIXEL_ID');
fbq('track','PageView');
&lt;/script&gt;
&lt;noscript&gt;&lt;img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=YOUR_PIXEL_ID&amp;ev=PageView&amp;noscript=1"/&gt;&lt;/noscript&gt;</code></pre>
</div>

<!-- UTM -->
<div class="section">
  <h2>3. UTM 파라미터 링크 🎯</h2>
  <p>아래 URL을 QR코드 생성 / 인스타 프로필 / 이메일 서명에 사용하세요.</p>
  <table>
    <thead><tr><th>용도</th><th>URL</th></tr></thead>
    <tbody>
      <?php foreach ($utm_links as $u): ?>
      <tr>
        <td><strong><?= htmlspecialchars($u['label']) ?></strong></td>
        <td><code><?= htmlspecialchars($u['url']) ?></code></td>
      </tr>
      <?php endforeach; ?>
      <tr>
        <td><strong>기본 URL (직접 입력)</strong></td>
        <td><code><?= htmlspecialchars($site_url) ?>/</code></td>
      </tr>
    </tbody>
  </table>
  <div class="note">
    💡 QR 코드 생성: <a href="https://www.qr-code-generator.com/" target="_blank">qr-code-generator.com</a>에서 위 UTM URL 입력 후 다운로드
  </div>
</div>

<!-- Search Console -->
<div class="section">
  <h2>4. Google Search Console <span class="badge badge-optional">선택</span></h2>
  <p><a href="https://search.google.com/search-console" target="_blank">Search Console</a>에서 소유권 확인 코드 발급 후 <code>includes/header.php</code> 안에 추가하세요.</p>
  <pre><code>&lt;meta name="google-site-verification" content="YOUR_VERIFICATION_CODE" /&gt;</code></pre>
</div>

<!-- 체크리스트 -->
<div class="section">
  <h2>✅ 설치 체크리스트</h2>
  <ul style="line-height:2.2;">
    <li>☐ Google Analytics 계정 생성 및 측정 ID 발급</li>
    <li>☐ <code>config.php</code>의 <code>GA4_ID</code> 실제 ID로 교체</li>
    <li>☐ Meta Pixel 생성 및 <code>header.php</code>에 추가 (인스타 운영 시)</li>
    <li>☐ UTM URL 생성 → QR코드 제작 → 명함 삽입</li>
    <li>☐ Google Search Console 소유권 확인</li>
    <li>☐ 실제 스마트폰으로 QR 스캔 후 GA4 실시간 보고서 확인</li>
  </ul>
</div>

<div class="tip">
  <h2 style="margin-top:0;">💡 GA4 확인 방법</h2>
  <ol style="line-height:2.2;">
    <li><strong>실시간</strong> → 방금 들어온 방문자 즉시 확인</li>
    <li><strong>획득 → 트래픽 획득</strong> → qr/business_card, instagram/bio_link 등 소스별 분석</li>
    <li><strong>참여 → 이벤트</strong> → <code>qr_scan</code>, <code>partnership_inquiry</code> 커스텀 이벤트 확인</li>
    <li><strong>참여 → 페이지 및 화면</strong> → 페이지별 체류시간</li>
  </ol>
</div>

</body>
</html>