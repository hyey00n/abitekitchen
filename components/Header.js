'use client'

import { useState, useEffect } from 'react'
import { usePathname } from 'next/navigation'
import Link from 'next/link'
import { SITE_NAME } from '@/data/config'

const navLinks = [
  { href: '/brand',       label: '브랜드스토리' },
  { href: '/menu',        label: '메뉴소개' },
  { href: '/location',    label: '지점소개' },
  { href: '/partnership', label: '창업문의' },
]

export default function Header() {
  const [isOpen, setIsOpen] = useState(false)
  const [scrolled, setScrolled] = useState(false)
  const pathname = usePathname()
  const close = () => setIsOpen(false)

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 80)
    window.addEventListener('scroll', onScroll, { passive: true })
    onScroll()
    return () => window.removeEventListener('scroll', onScroll)
  }, [])

  return (
    <header className={`site-header${scrolled ? ' scrolled' : ''}`}>
      <div className="header-inner container">
        <Link href="/" className="logo">
          <img src="/images/logo.svg" alt={SITE_NAME} />
        </Link>

        <button
          className={`nav-toggle${isOpen ? ' is-open' : ''}`}
          aria-label="메뉴 열기"
          aria-expanded={isOpen}
          aria-controls="mainNav"
          onClick={() => setIsOpen(o => !o)}
        >
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </button>

        <nav className={`nav${isOpen ? ' is-open' : ''}`} id="mainNav">
          {navLinks.map(({ href, label }) => (
            <Link
              key={href}
              href={href}
              className={pathname === href ? 'active' : undefined}
              onClick={close}
            >
              {label}
            </Link>
          ))}
        </nav>
      </div>
    </header>
  )
}
