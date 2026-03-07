<?php
$page_title = '메뉴소개';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/menu_data.php';
?>

  <!-- Header -->
  <!-- Page Hero -->
  <?php 
$hero_title= "메뉴소개";
$hero_bg= "images/mainbanner.jpg";
require_once __DIR__ . '/includes/hero_section.php';
?>

  <!-- Menu Tabs + Grid -->
  <section class="menu-page-section">
    <div class="menu-page-inner">

      <!-- 탭 -->
      <ul class="menu-tabs" id="menuTabs">
        <li class="tab-item active" data-cat="전체">전체</li>
        <?php foreach($categories as $cat): ?>
        <li class="tab-item" data-cat="<?= $cat ?>"><?= $cat ?></li>
        <?php endforeach; ?>
      </ul>

      <!-- 메뉴 그리드 -->
      <ul class="menu-grid" id="menuGrid">
        <?php foreach($menu_all as $item): ?>
        <li class="menu-grid-item" data-cat="<?= $item['cat'] ?>">
          <div class="menu-grid-img">
            <img src="<?= $item['img'] ?>" alt="<?= $item['name'] ?>">
          </div>
          <div class="menu-grid-info">
            <p class="menu-grid-name"><?= $item['name'] ?></p>
            <p class="menu-grid-desc"><?= $item['desc'] ?></p>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- Partnership CTA -->
<?php require_once __DIR__ . '/includes/cta_partnership.php';?>

<script>
document.querySelectorAll('.tab-item').forEach(tab => {
  tab.addEventListener('click', () => {
    document.querySelectorAll('.tab-item').forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    const cat = tab.dataset.cat;
    document.querySelectorAll('.menu-grid-item').forEach(item => {
      item.classList.toggle('hidden', cat !== '전체' && item.dataset.cat !== cat);
    });
  });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>