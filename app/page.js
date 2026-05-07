import Image from 'next/image'
import Link from 'next/link'
import HomeHero from '@/components/HomeHero'
import CtaPartnership from '@/components/CtaPartnership'
import { menuItems, homeBranches } from '@/data/config'

export default function HomePage() {
  const sliderItems = [...menuItems, ...menuItems]

  return (
    <>
      <HomeHero />

      <main>
        <section className="menu-content">
          <div className="signature-menu container" id="menu" data-reveal>
            <p className="section-label">시그니처 메뉴</p>
            <h2 className="section-title">10년간 사랑받은 시그니처</h2>
            <p className="section-description">
              2016년 대구 동성로에서 시작해 10년,<br />
              동성로·경북대·영남대 3개 지점으로 성장한<br />
              대구를 대표하는 퓨전 양식 레스토랑입니다
            </p>
            <div className="arrow-button">
              <Link href="/menu">메뉴 보러가기 <i aria-hidden="true"></i></Link>
            </div>
          </div>

          <div className="slider-container" aria-label="시그니처 메뉴 슬라이더">
            <ul className="slider-track">
              {sliderItems.map((item, i) => (
                <li key={i} className="menu-item">
                  <Image src={item.img} alt={item.alt} width={200} height={200} />
                  <p className="menu-name">{item.name}</p>
                </li>
              ))}
            </ul>
          </div>
        </section>

        <CtaPartnership />

        <section className="location-section" id="location">
          <div className="location-inner container" data-reveal>
            <p className="section-label">지점안내</p>
            <h2 className="section-title">가장 가까운 에이바이트키친</h2>
            <p className="section-description">
              가까운 지점을 찾아 오늘의 맛있는 한 끼를 즐기세요
            </p>
            <ul className="location-grid">
              {homeBranches.map((branch, i) => (
                <li key={i} className="location-card" data-reveal data-delay={String(i + 1)}>
                  <Link href="/location">
                    <Image src={branch.img} alt={branch.name} fill style={{ objectFit: 'cover' }} />
                  </Link>
                </li>
              ))}
            </ul>
          </div>
        </section>
      </main>
    </>
  )
}
