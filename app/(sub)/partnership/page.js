import HeroSection from '@/components/HeroSection'
import PartnershipForm from '@/components/PartnershipForm'
import { HOURS_WEEKDAY, PHONE_CS } from '@/data/config'

export const metadata = { title: '창업문의' }

export default function PartnershipPage() {
  return (
    <>
      <HeroSection title="창업문의" />

      <main>
        <section className="partner-form-section">
          <div className="partner-form-inner">
            <header className="partner-form-header" data-reveal>
              <h2>편하게 연락주세요</h2>
              <p className="partner-form-sub">평일 {HOURS_WEEKDAY} 운영 | {PHONE_CS}</p>
            </header>
            <PartnershipForm />
          </div>
        </section>
      </main>
    </>
  )
}
