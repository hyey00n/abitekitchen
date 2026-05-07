export default function HeroSection({ title, bg = '/images/main-banner.jpg' }) {
  return (
    <section className="sub-hero" style={{ backgroundImage: `url('${bg}')` }}>
      <div className="hero-overlay" aria-hidden="true"></div>
      <div className="hero-content hero-content--center container">
        <h1 className="hero-title">{title}</h1>
      </div>
    </section>
  )
}
