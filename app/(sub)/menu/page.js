import HeroSection from '@/components/HeroSection'
import CtaPartnership from '@/components/CtaPartnership'
import MenuTabs from '@/components/MenuTabs'
import { categories, menuAll } from '@/data/menuData'

export const metadata = { title: '메뉴소개' }

export default function MenuPage() {
  return (
    <>
      <HeroSection title="메뉴소개" />

      <main>
        <section className="menu-page-section">
          <div className="container" data-reveal>
            <MenuTabs categories={categories} items={menuAll} />
          </div>
        </section>

        <CtaPartnership />
      </main>
    </>
  )
}
