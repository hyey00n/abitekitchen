'use client'

export default function CtaPartnership() {
  function handleClick() {
    window.gtag?.('event', 'partnership_inquiry', {
      event_category: 'conversion',
      event_label: 'form_click',
    })
  }

  return (
    <section className="cta-section" data-reveal>
      <div className="cta-inner container">
        <h2 className="cta-title">함께 만들어갈 파트너를 찾습니다</h2>
        <p className="cta-desc">
          가맹점 창업, 납품 제안, 협업 사항,<br />
          편하게 문의해주세요
        </p>
        <div className="arrow-button">
          <a href="/partnership" onClick={handleClick}>
            문의하기 <i aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </section>
  )
}
