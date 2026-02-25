<?php
$page_title = '창업문의';
require_once __DIR__ . '/includes/header.php';
?>

  <!-- Page Hero -->
  <section class="hero-section" style="height:35vh; min-height:250px;">
    <div class="hero-overlay"></div>
    <div class="hero-content" style="padding-top:0; justify-content:flex-end; padding-bottom:40px;">
      <p class="section-label" style="color:#fff; border-color:rgba(255,255,255,0.6);">창업문의</p>
      <h1 class="hero-title">함께 만들어갈<br>파트너를 찾습니다</h1>
    </div>
  </section>

  <!-- Info Cards -->
  <section class="partner-info-section">
    <div class="partner-info-inner">
      <div class="partner-info-card">
        <p class="partner-info-icon">🏪</p>
        <h3>가맹점 창업</h3>
        <p>에이바이트키친 브랜드로 함께 창업하세요. 10년의 노하우와 검증된 레시피를 제공합니다.</p>
      </div>
      <div class="partner-info-card">
        <p class="partner-info-icon">🤝</p>
        <h3>납품 제안</h3>
        <p>신선한 식재료, 소스류, 식품 납품을 원하시는 분들의 제안을 환영합니다.</p>
      </div>
      <div class="partner-info-card">
        <p class="partner-info-icon">💡</p>
        <h3>협업 문의</h3>
        <p>마케팅, 콜라보레이션, 이벤트 등 다양한 협업 제안도 검토합니다.</p>
      </div>
    </div>
  </section>

  <!-- Form -->
  <section class="partner-form-section">
    <div class="partner-form-inner">
      <div class="partner-form-header">
        <p class="section-label">문의하기</p>
        <h2>편하게 연락주세요</h2>
        <p class="partner-form-sub">평일 <?= HOURS_WEEKDAY ?> 운영 | <?= PHONE_CS ?></p>
      </div>

      <?php if($success): ?>
      <div class="partner-success">
        <p>✅ 문의가 접수되었습니다!</p>
        <p><?= htmlspecialchars($name) ?>님, 빠른 시일 내에 연락드리겠습니다.</p>
        <a href="index.php" class="partner-btn">홈으로 돌아가기</a>
      </div>
      <?php else: ?>

        <?php if(!empty($errors)): ?>
        <div class="partner-errors">
          <?php foreach($errors as $e): ?>
          <p>· <?= htmlspecialchars($e) ?></p>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <form method="POST" action="https://formspree.io/f/xpqjkowy" novalidate>
          <!-- 문의 유형 -->
          <div class="pform-group">
            <label>문의 유형 *</label>
            <div class="pform-radio-group">
              <?php foreach(['가맹점 창업', '납품 제안', '협업 문의', '기타'] as $t): ?>
              <label class="pform-radio">
                <input type="radio" name="type" value="<?= $t ?>" <?= (($_POST['type']??'')===$t)?'checked':'' ?>>
                <span><?= $t ?></span>
              </label>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="pform-row">
            <div class="pform-group">
              <label for="name">이름 *</label>
              <input type="text" id="name" name="name" value="<?= htmlspecialchars($_POST['name']??'') ?>" placeholder="홍길동" required>
            </div>
            <div class="pform-group">
              <label for="phone">연락처 *</label>
              <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($_POST['phone']??'') ?>" placeholder="010-0000-0000" required>
            </div>
          </div>

          <div class="pform-row">
            <div class="pform-group">
              <label for="email">이메일</label>
              <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email']??'') ?>" placeholder="선택사항">
            </div>
            <div class="pform-group">
              <label for="region">희망 지역</label>
              <input type="text" id="region" name="region" value="<?= htmlspecialchars($_POST['region']??'') ?>" placeholder="예: 대구 수성구 (창업 문의 시)">
            </div>
          </div>

          <div class="pform-group">
            <label for="message">문의 내용</label>
            <textarea id="message" name="message" rows="5" placeholder="궁금하신 점이나 제안 내용을 자유롭게 적어주세요."><?= htmlspecialchars($_POST['message']??'') ?></textarea>
          </div>

          <button type="submit" class="partner-btn">문의 보내기 →</button>
        </form>
      <?php endif; ?>
    </div>
  </section>

<style>
/* ── Info Cards ── */
.partner-info-section { background: var(--main100); padding: 60px 16px; }
.partner-info-inner   { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; }
.partner-info-card    { background: var(--white); padding: 40px 30px; text-align: center; }
.partner-info-icon    { font-size: 36px; margin-bottom: 16px; }
.partner-info-card h3 { font-family: var(--font-heading); font-size: 20px; color: var(--color800); margin-bottom: 12px; }
.partner-info-card p  { font-size: 13px; color: var(--color600); line-height: 1.8; }

/* ── Form Section ── */
.partner-form-section { background: var(--white); padding: 80px 16px; }
.partner-form-inner   { max-width: 760px; margin: 0 auto; }
.partner-form-header  { margin-bottom: 48px; }
.partner-form-header h2 { font-family: var(--font-heading); font-size: 32px; color: var(--color800); margin: 12px 0 8px; }
.partner-form-sub     { font-size: 13px; color: var(--color500); }

.partner-errors { background: #fff3cd; border-left: 3px solid var(--sub100); padding: 16px 20px; margin-bottom: 24px; }
.partner-errors p { font-size: 13px; color: var(--main200); line-height: 2; }

/* form elements */
.pform-row   { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.pform-group { display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px; }
.pform-group label { font-size: 12px; letter-spacing: 0.05em; color: var(--main200); font-weight: 500; }

.pform-group input,
.pform-group textarea {
  background: var(--color100);
  border: 1px solid var(--color300);
  padding: 14px 16px;
  font-family: var(--font-body);
  font-size: 14px;
  color: var(--color800);
  outline: none;
  transition: border-color 0.2s;
  border-radius: 0;
  -webkit-appearance: none;
}
.pform-group input:focus,
.pform-group textarea:focus { border-color: var(--main200); background: var(--white); }
.pform-group textarea { resize: vertical; }

.pform-radio-group { display: flex; flex-wrap: wrap; gap: 12px; }
.pform-radio       { display: flex; align-items: center; gap: 6px; cursor: pointer; }
.pform-radio input { width: 16px; height: 16px; accent-color: var(--main200); }
.pform-radio span  { font-size: 14px; color: var(--color700); }

.partner-btn {
  display: inline-block;
  background: var(--main200);
  color: var(--white);
  padding: 16px 40px;
  font-family: var(--font-body);
  font-size: 14px;
  font-weight: 500;
  cursor: pointer;
  border: none;
  transition: background 0.3s;
  text-align: center;
}
.partner-btn:hover { background: var(--color800); }

.partner-success { text-align: center; padding: 60px 20px; }
.partner-success p { font-family: var(--font-heading); font-size: 20px; color: var(--color800); margin-bottom: 12px; line-height: 1.6; }
.partner-success .partner-btn { margin-top: 24px; }

@media (max-width: 768px) {
  .partner-info-inner { grid-template-columns: 1fr; }
  .pform-row { grid-template-columns: 1fr; gap: 0; }
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>