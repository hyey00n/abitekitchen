<?php
// =============================================
// 에이바이트키친 사이트 설정
// 이 파일만 수정하면 전체 페이지에 반영됩니다
// =============================================

// 사이트 기본 정보
define('SITE_NAME',    '에이바이트키친');
define('SITE_NAME_EN', 'A bite kitchen');
define('SITE_TITLE',   '에이바이트키친 - A bite kitchen');
define('SITE_DESC',    '정직한 재료, 진짜 맛 — 신선하고 프리미엄 재료를 사용한 대구 퓨전 양식 레스토랑');

// 연락처
define('PHONE_CS',      '1644-6288');
define('EMAIL_MASTER',  'bonwebmaster@bongroup.co.kr');

// 영업시간
define('HOURS_WEEKDAY', 'AM 09:30~PM 05:30');

// 회사 정보
define('COMPANY_NAME',   '본아이에프(주)');
define('COMPANY_ADDR',   '서울특별시 영등포구 선유로 165 (양평동3가, 와이피센터) 6층');
define('CEO_NAME',       '이진희');
define('BIZ_REG_NO',     '101-86-07256');
define('MAIL_ORDER_NO',  '2019-서울영등포-1230호');
define('COPYRIGHT_YEAR', '2025');

// Google Analytics 4 측정 ID
define('GA4_ID', 'G-XXXXXXXXXX');

// 지점 목록
$branches = [
  ['name' => '동성로점', 'img' => 'images/동성로점.png'],
  ['name' => '경북대점', 'img' => 'images/경북대점.png'],
  ['name' => '영남대점', 'img' => 'images/영남대점.png'],
];

// 메뉴 슬라이더 아이템
// 추가/제거 시 이 배열만 수정하세요 — 슬라이더에 자동 반영됩니다
$menu_items = [
  ['img' => 'images/png/aglio_olio.png',         'alt' => '알리오올리오',   'name' => '알리오올리오'],
  ['img' => 'images/png/cream_pasta.png',         'alt' => '크림 파스타',   'name' => '크림 파스타'],
  ['img' => 'images/png/meat_bomb_rice_bowl.png', 'alt' => '고기폭탄 덮밥', 'name' => '고기폭탄 덮밥'],
  ['img' => 'images/png/pork_jowl_rice_bowl.png', 'alt' => '삼겹 덮밥',    'name' => '삼겹 덮밥'],
  ['img' => 'images/png/pork_neck_steak.png',     'alt' => '목살 스테이크', 'name' => '목살 스테이크'],
  ['img' => 'images/png/tomato_pasta.png',        'alt' => '토마토 파스타', 'name' => '토마토 파스타'],
];

// 지점 상세 정보 (location.php에서 사용)
$branch_details = [
  [
    'name'      => '에이바이트키친 동성로',
    'address'   => '대구 중구 동성로4길 4-15 1층',
    'phone'     => '010-4333-0666',
    'hours'     => '매일 11:30 - 21:30 (라스트오더 20:30)',
    'subway'    => '반시역 2번 출구에서 도보 약 190m',
    'map_src'   => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.234!2d128.591!3d35.868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDUyJzA0LjgiTiAxMjjCsDM1JzI3LjYiRQ!5e0!3m2!1sko!2skr!4v1234567890',
    'photos'    => [
      ['src'=>'images/dongseongro-1.jpg', 'alt'=>'동성로점 매장'],
      ['src'=>'images/dongseongro-2.jpg', 'alt'=>'동성로점 요리'],
      ['src'=>'images/dongseongro-3.jpg', 'alt'=>'동성로점 인테리어'],
    ],
  ],
  [
    'name'      => '에이바이트키친 경북대점',
    'address'   => '대구 북구 산격동 35-11층',
    'phone'     => '010-4333-0666',
    'hours'     => '',
    'subway'    => '경북대입구역에서 도보 약 190m',
    'map_src'   => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.234!2d128.591!3d35.868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDUyJzA0LjgiTiAxMjjCsDM1JzI3LjYiRQ!5e0!3m2!1sko!2skr!4v1234567890',
    'photos'    => [
      ['src'=>'images/kyungpook-1.jpg', 'alt'=>'경북대점 매장'],
      ['src'=>'images/kyungpook-2.jpg', 'alt'=>'경북대점 요리'],
      ['src'=>'images/kyungpook-3.jpg', 'alt'=>'경북대점 인테리어'],
    ],
  ],
  [
    'name'      => '에이바이트키친 영남대점',
    'address'   => '경산시 하양읍 11층',
    'phone'     => '010-4333-0666',
    'hours'     => '',
    'subway'    => '영남대역에서 도보 약 190m',
    'map_src'   => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.234!2d128.591!3d35.868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDUyJzA0LjgiTiAxMjjCsDM1JzI3LjYiRQ!5e0!3m2!1sko!2skr!4v1234567890',
    'photos'    => [
      ['src'=>'images/yeungnam-1.jpg', 'alt'=>'영남대점 매장'],
      ['src'=>'images/yeungnam-2.jpg', 'alt'=>'영남대점 요리'],
      ['src'=>'images/yeungnam-3.jpg', 'alt'=>'영남대점 인테리어'],
    ],
  ],
];