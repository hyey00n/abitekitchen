'use client'

import { useState, useRef, useEffect } from 'react'
import Image from 'next/image'

export default function LocationTabs({ branches }) {
  const [activeId, setActiveId] = useState(branches[0]?.id)

  return (
    <div className="branch-inner">
      <ul className="menu-tabs" id="branchTabs" role="tablist">
        {branches.map(branch => (
          <li key={branch.id} role="presentation">
            <button
              className={`tab-item${branch.id === activeId ? ' active' : ''}`}
              role="tab"
              aria-selected={branch.id === activeId}
              aria-controls={`branch-${branch.id}`}
              onClick={() => setActiveId(branch.id)}
            >
              {branch.label}
            </button>
          </li>
        ))}
      </ul>

      {branches.map(branch => (
        <article
          key={branch.id}
          className={`branch-panel${branch.id === activeId ? ' active' : ''}`}
          id={`branch-${branch.id}`}
          role="tabpanel"
          hidden={branch.id !== activeId}
        >
          <header className="branch-intro">
            <h2 className="branch-title">{branch.title}</h2>
            <p className="branch-desc">{branch.desc}</p>
          </header>

          <figure className="branch-map">
            <iframe
              src={branch.mapSrc}
              allowFullScreen
              loading="lazy"
              referrerPolicy="no-referrer-when-downgrade"
              title={`${branch.label} 지도`}
            />
          </figure>

          <address className="branch-info">
            <span className="branch-addr">{branch.address}</span>
            <span className="branch-meta">
              {branch.tel} <span aria-hidden="true">|</span>{' '}
              {branch.mobile} <span aria-hidden="true">|</span>{' '}
              {branch.hours} <span aria-hidden="true">|</span>{' '}
              {branch.cafe}
            </span>
            <span className="branch-btns">
              <a href={branch.naver} target="_blank" rel="noopener noreferrer" className="map-btn btn-naver">
                네이버 지도
              </a>
              <a href={branch.kakao} target="_blank" rel="noopener noreferrer" className="map-btn btn-kakao">
                카카오 지도
              </a>
            </span>
          </address>

          {branch.photos?.length > 0 && (
            <BranchSlider id={branch.id} photos={branch.photos} label={branch.label} />
          )}
        </article>
      ))}
    </div>
  )
}

function BranchSlider({ id, photos, label }) {
  const [current, setCurrent] = useState(0)
  const listRef = useRef(null)

  function visibleCount() {
    if (typeof window === 'undefined') return 3
    if (window.innerWidth <= 420) return 1
    if (window.innerWidth <= 640) return 2
    return 3
  }

  function move(dir) {
    const max = Math.max(0, photos.length - visibleCount())
    setCurrent(prev => Math.min(Math.max(prev + dir, 0), max))
  }

  useEffect(() => {
    const list = listRef.current
    if (!list) return
    const firstItem = list.querySelector('.slider-item')
    if (!firstItem) return
    const itemWidth = firstItem.getBoundingClientRect().width + 12
    list.style.transform = `translateX(-${current * itemWidth}px)`
  }, [current])

  return (
    <div className="branch-slider" id={`slider-${id}`}>
      <button className="slider-btn prev" aria-label="이전" onClick={() => move(-1)}>&#8249;</button>
      <div className="slider-wrap">
        <ul className="slider-list" ref={listRef}>
          {photos.map((photo, i) => (
            <li key={i} className="slider-item">
              <Image src={photo} alt={`${label} ${i + 1}번 사진`} fill style={{ objectFit: 'cover' }} />
            </li>
          ))}
        </ul>
      </div>
      <button className="slider-btn next" aria-label="다음" onClick={() => move(+1)}>&#8250;</button>
    </div>
  )
}
