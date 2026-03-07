<?php
$page_title = '브랜드스토리';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/brand_data.php';

?>

  <!-- Page Hero -->
<?php 
$hero_title= "브랜드 스토리";
$hero_bg= "images/mainbanner.jpg";
require_once __DIR__ . '/includes/hero_section.php';
?>

  <!-- Brand Story Sections -->
  <section class="brand-stories">
    <?php foreach($stories as $story): ?>
    <div class="brand-story <?= $story['img_right'] ? 'reverse' : '' ?>">
      <div class="brand-story__text">
        <p class="brand-story__no"><?= $story['no'] ?></p>
        <h2 class="brand-story__title"><?= $story['title'] ?></h2>
        <div class="brand-story__body">
          <?php foreach(explode("\n\n", $story['body']) as $para): ?>
          <p><?= nl2br(htmlspecialchars($para)) ?></p>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="brand-story__img">
        <img src="<?= $story['img'] ?>" alt="<?= $story['img_alt'] ?>">
      </div>
    </div>
    <?php endforeach; ?>
  </section>

  <!-- cta_partnership Sections -->
  <?php require_once __DIR__ . '/includes/cta_partnership.php';?>
<?php require_once __DIR__ . '/includes/footer.php'; ?>