import HeroSection from '@/components/HeroSection'
import CtaPartnership from '@/components/CtaPartnership'
import LocationTabs from '@/components/LocationTabs'
import { branches } from '@/data/locationData'

export const metadata = { title: '지점안내' }

export default function LocationPage() {
  return (
    <>
      <HeroSection title="지점안내" />

      <main>
        <section className="branch-section">
          <LocationTabs branches={branches} />
        </section>

        <CtaPartnership />
      </main>
    </>
  )
}
