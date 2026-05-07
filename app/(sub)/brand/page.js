import Image from 'next/image'
import HeroSection from '@/components/HeroSection'
import CtaPartnership from '@/components/CtaPartnership'
import { stories } from '@/data/brandData'

export const metadata = { title: '브랜드스토리' }

export default function BrandPage() {
  return (
    <>
      <HeroSection title="브랜드 스토리" />

      <main>
        <section className="brand-stories">
          {stories.map((story, i) => (
            <article
              key={story.no}
              className={`brand-story${story.imgRight ? ' reverse' : ''}`}
              data-reveal
              data-delay={String((i % 2) + 1)}
            >
              <div className="brand-story__text">
                <p className="brand-story__no">{story.no}</p>
                <h2 className="brand-story__title">{story.title}</h2>
                <div className="brand-story__body">
                  {story.body.map((para, j) => <p key={j}>{para}</p>)}
                </div>
              </div>
              <figure className="brand-story__img">
                <Image
                  src={story.img}
                  alt={story.imgAlt}
                  fill
                  sizes="(max-width: 768px) 100vw, 50vw"
                  style={{ objectFit: 'cover' }}
                />
              </figure>
            </article>
          ))}
        </section>

        <CtaPartnership />
      </main>
    </>
  )
}
