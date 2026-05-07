'use client'

import { useEffect } from 'react'
import { usePathname } from 'next/navigation'

export default function ScrollReveal() {
  const pathname = usePathname()

  useEffect(() => {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('in-view')
            io.unobserve(entry.target)
          }
        })
      },
      { threshold: 0.08, rootMargin: '0px 0px -40px 0px' }
    )

    // rAF으로 DOM 렌더 완료 후 관찰 시작
    const raf = requestAnimationFrame(() => {
      document.querySelectorAll('[data-reveal]').forEach((el) => io.observe(el))
    })

    return () => {
      cancelAnimationFrame(raf)
      io.disconnect()
    }
  }, [pathname])

  return null
}
