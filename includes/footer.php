<!-- Footer -->
  <footer class="footer">
    <div class="footer-inner">
      <ul class="info-item">
        <li>
          <span class="item_label">평일(월~금)</span>
          <span class="item_value"><?= HOURS_WEEKDAY ?></span>
        </li>
        <li>
          <span class="item_label">창업문의</span>
          <span class="item_value"><?= PHONE_CS ?></span>
        </li>
      </ul>

      <ul class="info-item">
        <li><a href="">개인정보처리방침</a></li>
        <li><a href="">이용약관</a></li>
      </ul>

      <ul>
        <li class="cs-content">
          <?= COMPANY_NAME ?> <?= COMPANY_ADDR ?> |
          대표자명 : <?= CEO_NAME ?> |
          사업자등록번호 <?= BIZ_REG_NO ?> |
          통신판매신고번호:<?= MAIL_ORDER_NO ?> |
          문의 : <a href="mailto:<?= EMAIL_MASTER ?>"><?= EMAIL_MASTER ?></a>
          copyright <?= COPYRIGHT_YEAR ?> bonif co.ltd.all rights reserved.
        </li>
      </ul>
    </div>
  </footer>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Main JS -->
  <script src="js/main.js"></script>

  <?php if (!empty($extra_js)): ?>
    <?php foreach ($extra_js as $js): ?>
      <script src="<?= htmlspecialchars($js) ?>"></script>
    <?php endforeach; ?>
  <?php endif; ?>

</body>
</html>