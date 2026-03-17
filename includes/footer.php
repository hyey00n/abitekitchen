<footer class="site-footer">
    <div class="footer-inner">

      <dl class="footer-hours">
        <div class="footer-hours__row">
          <dt>평일(월~금)</dt>
          <dd><?= HOURS_WEEKDAY ?></dd>
        </div>
        <div class="footer-hours__row">
          <dt>창업문의</dt>
          <dd><?= PHONE_CS ?></dd>
        </div>
      </dl>

      <nav class="footer-nav">
        <a href="">개인정보처리방침</a>
        <a href="">이용약관</a>
      </nav>

      <address class="footer-copy">
        <?= COMPANY_NAME ?> <?= COMPANY_ADDR ?> |
        대표자명 : <?= CEO_NAME ?> |
        사업자등록번호 <?= BIZ_REG_NO ?> |
        통신판매신고번호 : <?= MAIL_ORDER_NO ?> |
        문의 : <a href="mailto:<?= EMAIL_MASTER ?>"><?= EMAIL_MASTER ?></a><br>
        <small>copyright <?= COPYRIGHT_YEAR ?> bonif co.ltd. all rights reserved.</small>
      </address>

    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>

  <?php foreach ($extra_js ?? [] as $js): ?>
  <script src="<?= htmlspecialchars($js) ?>"></script>
  <?php endforeach; ?>

</body>
</html>