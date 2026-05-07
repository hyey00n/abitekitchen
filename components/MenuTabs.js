'use client'

import { useState } from 'react'
import Image from 'next/image'

export default function MenuTabs({ categories, items }) {
  const [active, setActive] = useState('전체')
  const tabs = ['전체', ...categories]

  return (
    <>
      <ul className="menu-tabs" id="menuTabs" role="tablist">
        {tabs.map(cat => (
          <li key={cat} role="presentation">
            <button
              className={`tab-item${active === cat ? ' active' : ''}`}
              role="tab"
              aria-selected={active === cat}
              onClick={() => setActive(cat)}
            >
              {cat}
            </button>
          </li>
        ))}
      </ul>

      <ul className="menu-grid" id="menuGrid">
        {items.map((item, i) => (
          <li
            key={i}
            className={`menu-grid-item${active !== '전체' && item.cat !== active ? ' hidden' : ''}`}
            data-cat={item.cat}
          >
            <figure className="menu-grid-img">
              <Image src={item.img} alt={item.name} fill sizes="(max-width: 640px) 50vw, 25vw" style={{ objectFit: 'cover' }} />
            </figure>
            <div className="menu-grid-info">
              <p className="menu-grid-name">{item.name}</p>
              <p className="menu-grid-desc">{item.desc}</p>
            </div>
          </li>
        ))}
      </ul>
    </>
  )
}
