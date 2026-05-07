'use client'

import Link from 'next/link'
import { Swiper, SwiperSlide } from 'swiper/react'
import { Autoplay, Pagination, EffectFade } from 'swiper/modules'
import 'swiper/css'
import 'swiper/css/pagination'
import 'swiper/css/effect-fade'

const slides = [
  { bg: '/images/food-spread.jpg' },
  { bg: '/images/restaurant-interior.jpg' },
  { bg: '/images/cream-pasta-stock.jpg' },
]

export default function HomeHero() {
  return (
    <section className="hero-section">
      <Swiper
        modules={[Autoplay, Pagination, EffectFade]}
        effect="fade"
        fadeEffect={{ crossFade: true }}
        autoplay={{ delay: 5000, disableOnInteraction: false }}
        pagination={{ clickable: true }}
        loop
        speed={1000}
        className="hero-swiper"
      >
        {slides.map((slide, i) => (
          <SwiperSlide key={i}>
            <div
              className="hero-slide"
              style={{ backgroundImage: `url('${slide.bg}')` }}
            >
              <div className="hero-overlay" aria-hidden="true"></div>
            </div>
          </SwiperSlide>
        ))}
      </Swiper>

      <div className="hero-content container">
        <h1 className="hero-title gowun-batang-regular hero-anim hero-anim--1">정직한 재료, 진짜 맛</h1>
        <p className="hero-subtitle hero-anim hero-anim--2">
          신선하고 프리미엄 재료를 사용한 것과 같다,<br />
          오늘도 에이바이트키친과 함께합니다
        </p>
        <div className="arrow-button hero-anim hero-anim--3">
          <Link href="/brand">브랜드스토리 <i aria-hidden="true"></i></Link>
        </div>
      </div>
    </section>
  )
}
