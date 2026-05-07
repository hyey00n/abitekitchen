import Script from 'next/script'
import Header from '@/components/Header'
import Footer from '@/components/Footer'
import ScrollReveal from '@/components/ScrollReveal'
import { GA4_ID } from '@/data/config'

export const metadata = {
  title: {
    template: '%s - 에이바이트키친',
    default: '에이바이트키친 - A bite kitchen',
  },
  description: '정직한 재료, 진짜 맛 — 신선하고 프리미엄 재료를 사용한 대구 퓨전 양식 레스토랑',
}

export default function RootLayout({ children }) {
  return (
    <html lang="ko">
      <head>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="" />
        <link
          href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;600;700&display=swap"
          rel="stylesheet"
        />
        <link
          href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap"
          rel="stylesheet"
        />
        <link rel="stylesheet" href="/css/reset.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/custom.css" />
      </head>
      <body>
        <Header />
        <Script
          src={`https://www.googletagmanager.com/gtag/js?id=${GA4_ID}`}
          strategy="afterInteractive"
        />
        <Script id="gtag-init" strategy="afterInteractive">{`
          window.dataLayer = window.dataLayer || [];
          function gtag(){ dataLayer.push(arguments); }
          gtag('js', new Date());
          gtag('config', '${GA4_ID}');
          if (window.location.search.includes('utm_source=qr')) {
            gtag('event', 'qr_scan', { event_category: 'engagement', event_label: 'business_card' });
          }
        `}</Script>

        {children}

        <ScrollReveal />
        <Footer />

      </body>
    </html>
  )
}
