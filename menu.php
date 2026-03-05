<?php
$page_title = '메뉴보기';
require_once __DIR__ . '/includes/header.php';

$categories = ['스테이크', '덮밥/리조또', '파스타', '기타'];

$menu_all = [
  ['cat'=>'스테이크', 'img'=>'images/png/pork_neck_steak.png',      'name'=>'에바키 부채살 스테이크',    'desc'=>'에이바이트키친 특유의 숙성기법으로 부드럽게 익힌 소고기 부채살을 특제 소스 및 샐러드 곁들여 플레이팅'],
  ['cat'=>'스테이크', 'img'=>'images/png/pork_neck_steak.png',      'name'=>'에바키 통 목살 스테이크',    'desc'=>'에이바이트키친의 특별한 목살 특제 구운 방식으로 그을린 구운 목살을 감칠맛 나게 플레이팅'],
  ['cat'=>'파스타',   'img'=>'images/png/cream_pasta.png',          'name'=>'화이트 링구 파스타',         'desc'=>'수제 소스의 크리미한 화이트소스를 사용하여 링구 이탈리아 파스타를 찰진 식감으로 만들어낸 특제'],
  ['cat'=>'파스타',   'img'=>'images/png/aglio_olio.png',           'name'=>'에바키 알리오 올리오',        'desc'=>'국내산 제육, 특제 알리오올리오 소스로 조화를 이룬 에바키 만의 특별한 알리오올리오'],
  ['cat'=>'스테이크', 'img'=>'images/png/tomato_pasta.png',         'name'=>'만양 볼고기 아리바이따',      'desc'=>'특별한 불고기와 토마토를 조합하여 초보자도 좋아하는 볼고기 토마토 소스 파스타'],
  ['cat'=>'덮밥/리조또','img'=>'images/png/meat_bomb_rice_bowl.png','name'=>'항정살 덮밥',                 'desc'=>'고소하게 구워낸 항정살과 특제 소스를 얹어 베이컨 크리스피 가득 담은'],
  ['cat'=>'덮밥/리조또','img'=>'images/png/pork_jowl_rice_bowl.png','name'=>'트러플 크림 리조또',          'desc'=>'고급 트러플 향을 입혀 만들어낸 크리미한 리조또에 특별하게 담아낸 고급 요리'],
  ['cat'=>'파스타',   'img'=>'images/png/cream_pasta.png',          'name'=>'상하이 크림 파스타',          'desc'=>'에이바이트키친만의 특특한 상하이 크림 소스를 이용하여 만들어낸 동양과 서양의 만남 파스타'],
];
?>

  <!-- Header -->
  <!-- Page Hero -->
  <section class="hero-section" >
    <div class="hero-overlay"></div>
    <div class="hero-content" >
      <h1 class="hero-title">당신의 한 끼, 우리만의 맛을 만나보세요</h1>
    </div>
  </section>

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
  <section class="partnership-section">
    <div class="partnership-inner">
      <h2 class="partnership-title">함께 만들어갈 파트너를 찾습니다</h2>
      <p class="partnership-description">가맹점 창업, 납품 제안, 협업 사항,<br>편하게 문의해주세요</p>
      <p class="arrow-button">
        <a href="partnership.php" onclick="trackPartnershipClick()"> 문의하기 <i></i></a>
      </p>
    </div>
  </section>

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