'use client'

import { useState } from 'react'

// Google Apps Script 배포 URL을 입력하세요
const SCRIPT_URL = 'https://script.google.com/macros/s/여기에_배포_URL_붙여넣기/exec'

const inquiryTypes = ['가맹점 창업', '납품 제안', '협업 문의', '기타']

export default function PartnershipForm() {
  const [status, setStatus] = useState('idle')
  const [type, setType] = useState('')

  async function handleSubmit(e) {
    e.preventDefault()
    setStatus('loading')
    const data = Object.fromEntries(new FormData(e.target).entries())
    try {
      await fetch(SCRIPT_URL, {
        method: 'POST',
        mode: 'no-cors',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data),
      })
      setStatus('success')
      e.target.reset()
      setType('')
    } catch {
      setStatus('error')
    }
  }

  if (status === 'success') {
    return (
      <div className="partner-success">
        <p>문의가 접수되었습니다. 빠른 시일 내에 연락드리겠습니다.</p>
        <button className="partner-btn" onClick={() => setStatus('idle')}>다시 문의하기</button>
      </div>
    )
  }

  return (
    <form onSubmit={handleSubmit} noValidate>
      <fieldset className="pform-group">
        <legend>문의 유형 *</legend>
        <div className="pform-radio-group">
          {inquiryTypes.map(t => (
            <label key={t} className="pform-radio">
              <input
                type="radio"
                name="type"
                value={t}
                checked={type === t}
                onChange={() => setType(t)}
                required
              />
              <span className="pform-radio__dot" aria-hidden="true"></span>
              <span>{t}</span>
            </label>
          ))}
        </div>
      </fieldset>

      <div className="pform-row">
        <div className="pform-group">
          <label htmlFor="name">이름 *</label>
          <input type="text" id="name" name="name" placeholder="홍길동" required />
        </div>
        <div className="pform-group">
          <label htmlFor="phone">연락처 *</label>
          <input type="tel" id="phone" name="phone" placeholder="010-0000-0000" required />
        </div>
      </div>

      <div className="pform-row">
        <div className="pform-group">
          <label htmlFor="email">이메일</label>
          <input type="email" id="email" name="email" placeholder="선택사항" />
        </div>
        <div className="pform-group">
          <label htmlFor="region">희망 지역</label>
          <input type="text" id="region" name="region" placeholder="예: 대구 수성구" />
        </div>
      </div>

      <div className="pform-group">
        <label htmlFor="message">문의 내용</label>
        <textarea id="message" name="message" rows="5" placeholder="궁금하신 점이나 제안 내용을 자유롭게 적어주세요." />
      </div>

      {status === 'error' && (
        <p role="alert" className="pform-error">전송 중 오류가 발생했습니다. 잠시 후 다시 시도해주세요.</p>
      )}

      <button type="submit" className="partner-btn" disabled={status === 'loading'}>
        {status === 'loading' ? '전송 중…' : '문의 보내기 →'}
      </button>
    </form>
  )
}
