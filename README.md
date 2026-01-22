# 에이바이트키친 웹사이트

## 📁 파일 구조

```
/public_html/
  ├── index.html              # 메인 페이지
  ├── location.html           # 매장 찾기 페이지
  ├── about.html              # About 페이지 (작성 필요)
  ├── menu.html               # Menu 페이지 (작성 필요)
  ├── contact.html            # Contact 페이지 (작성 필요)
  ├── privacy.html            # 개인정보처리방침 (노션 연결)
  ├── terms.html              # 이용약관 (노션 연결)
  │
  ├── css/
  │   ├── style.css           # 메인 스타일시트
  │   └── location.css        # Location 페이지 전용 CSS
  │
  ├── js/
  │   └── main.js             # 메인 JavaScript
  │
  └── images/
      ├── hero-bg.jpg         # 히어로 배경 이미지
      ├── pasta-dish.jpg      # 베스트 메뉴 이미지
      ├── insta-1.jpg         # 인스타그램 그리드 1
      ├── insta-2.jpg         # 인스타그램 그리드 2
      ├── insta-3.jpg         # 인스타그램 그리드 3
      ├── value-1.jpg         # 가치 섹션 이미지 1
      ├── value-2.jpg         # 가치 섹션 이미지 2
      ├── value-3.jpg         # 가치 섹션 이미지 3
      ├── value-4.jpg         # 가치 섹션 이미지 4
      ├── franchise-bg.jpg    # 가맹 섹션 배경
      ├── location-food-1.jpg # Location 페이지 음식 1
      ├── location-food-2.jpg # Location 페이지 음식 2
      ├── dongseongro-1.jpg   # 동성로점 사진 1
      ├── dongseongro-2.jpg   # 동성로점 사진 2
      ├── dongseongro-3.jpg   # 동성로점 사진 3
      ├── kyungpook-1.jpg     # 경북대점 사진 1
      ├── kyungpook-2.jpg     # 경북대점 사진 2
      ├── kyungpook-3.jpg     # 경북대점 사진 3
      ├── yeungnam-1.jpg      # 영남대점 사진 1
      ├── yeungnam-2.jpg      # 영남대점 사진 2
      └── yeungnam-3.jpg      # 영남대점 사진 3
```

---

## 🚀 설치 방법

### 1. 파일 준비
1. 모든 HTML, CSS, JS 파일을 다운로드
2. 이미지를 `/images/` 폴더에 준비
3. 폴더 구조 확인

### 2. FTP 업로드
```
호스트: ftp.your-domain.dothome.co.kr
사용자명: 닷홈 ID
비밀번호: 닷홈 PW
경로: /public_html/
```

### 3. Google Analytics 설정
1. https://analytics.google.com 접속
2. 계정 생성 및 측정 ID 발급 (G-XXXXXXXXXX)
3. 모든 HTML 파일에서 `G-XXXXXXXXXX`를 실제 ID로 교체

### 4. 구글폼 연결
1. Google Forms에서 제휴문의 폼 생성
2. 폼 링크 복사
3. `index.html`에서 `https://forms.gle/xxxxx`를 실제 링크로 교체

### 5. 지도 임베드
1. Google Maps에서 각 지점 검색
2. "공유" → "지도 퍼가기" 클릭
3. iframe 코드 복사
4. `location.html`의 각 지점 iframe src 교체

---

## ✏️ 수정 필요한 부분

### 모든 HTML 파일:
```html
<!-- Google Analytics -->
G-XXXXXXXXXX → 실제 측정 ID

<!-- 전화번호 -->
070-XXXX-XXXX → 실제 전화번호
010-XXXX-XXXX → 실제 휴대폰 번호

<!-- 이메일 -->
contact@abitekitchen.com → 실제 이메일

<!-- 사업자정보 -->
000-00-00000 → 실제 사업자등록번호
OOO → 실제 대표자명
```

### index.html:
```html
<!-- 가맹문의 버튼 -->
onclick="trackPartnershipClick(); window.open('https://forms.gle/xxxxx', '_blank')"
→ 실제 구글폼 링크로 교체
```

### location.html:
```html
<!-- 각 지점 Google Maps iframe -->
src="https://www.google.com/maps/embed?pb=..."
→ 실제 지점 지도로 교체
```

---

## 🎨 이미지 최적화

### 권장 사양:
```
히어로 배경: 1920 x 1080px (WebP 포맷)
메뉴 사진: 1200 x 800px
인스타그램 그리드: 800 x 800px (정사각형)
가치 섹션: 1000 x 800px
매장 사진: 800 x 600px
```

### 최적화 도구:
- https://tinypng.com/ (PNG/JPG 압축)
- https://squoosh.app/ (WebP 변환)

---

## 📱 모바일 반응형

현재 코드는 모바일 최적화가 완료되어 있습니다:
- 768px 이하: 태블릿
- 480px 이하: 모바일

추가 테스트:
- Chrome DevTools (F12 → Device Toolbar)
- 실제 스마트폰으로 QR 코드 스캔 테스트

---

## 🔗 UTM 파라미터 설정

### 명함 QR 코드:
```
https://abitekitchen.com/?utm_source=qr&utm_medium=business_card&utm_campaign=2026_branding
```

### 인스타그램 프로필:
```
https://abitekitchen.com/?utm_source=instagram&utm_medium=bio_link&utm_campaign=social_organic
```

QR 코드 생성: https://www.qr-code-generator.com/

---

## 🎯 체크리스트

### 런칭 전:
- [ ] 모든 이미지 업로드 완료
- [ ] Google Analytics ID 교체
- [ ] 전화번호/이메일 교체
- [ ] 사업자정보 입력
- [ ] 구글폼 링크 연결
- [ ] Google Maps 임베드
- [ ] SSL 인증서 설치
- [ ] 모바일 테스트
- [ ] 데스크톱 테스트
- [ ] 모든 링크 작동 확인

### 런칭 후:
- [ ] Google Search Console 등록
- [ ] 네이버 웹마스터 도구 등록
- [ ] 인스타그램 프로필에 링크
- [ ] 명함 QR 코드 제작
- [ ] GA4 실시간 데이터 확인

---

## 🆘 문제 해결

### 이미지가 안 보여요
→ 파일 경로 확인: `/images/파일명.jpg`
→ 파일명 대소문자 확인 (Linux는 대소문자 구분)

### 모바일 메뉴가 안 열려요
→ `js/main.js` 파일 업로드 확인
→ 브라우저 콘솔(F12)에서 오류 확인

### Google Maps가 안 보여요
→ iframe src에 올바른 임베드 코드 입력
→ Google Maps API 키 필요 여부 확인

### SSL 인증서 오류
→ 닷홈 관리자 → SSL 인증서 → Let's Encrypt 신청
→ 24시간 대기 후 확인

---

## 📞 지원

제작자: [이름]
이메일: [이메일]
문의: [전화번호]

---

**Since 2016, Daegu**
COPYRIGHT © 2016 A-BITE KITCHEN. ALL RIGHTS RESERVED.