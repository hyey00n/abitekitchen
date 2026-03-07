<?php
$page_title = '창업문의';
require_once __DIR__ . '/includes/header.php';
?>

  <!-- Page Hero -->
  <?php 
$hero_title= "창업문의";
$hero_bg= "images/mainbanner.jpg";
require_once __DIR__ . '/includes/hero_section.php';
?>

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
<?php require_once __DIR__ . '/includes/footer.php'; ?>