import {
  COMPANY_NAME,
  COMPANY_ADDR,
  CEO_NAME,
  BIZ_REG_NO,
  MAIL_ORDER_NO,
  EMAIL_MASTER,
  HOURS_WEEKDAY,
  PHONE_CS,
  COPYRIGHT_YEAR,
} from '@/data/config'

export default function Footer() {
  return (
    <footer className="site-footer">
      <div className="footer-inner container">
        <dl className="footer-hours">
          <div className="footer-hours__row">
            <dt>평일(월~금)</dt>
            <dd>{HOURS_WEEKDAY}</dd>
          </div>
          <div className="footer-hours__row">
            <dt>창업문의</dt>
            <dd>{PHONE_CS}</dd>
          </div>
        </dl>

        <nav className="footer-nav">
          <a href="#">개인정보처리방침</a>
          <a href="#">이용약관</a>
        </nav>

        <address className="footer-copy">
          {COMPANY_NAME} {COMPANY_ADDR} |{' '}
          대표자명 : {CEO_NAME} |{' '}
          사업자등록번호 {BIZ_REG_NO} |{' '}
          통신판매신고번호 : {MAIL_ORDER_NO} |{' '}
          문의 : <a href={`mailto:${EMAIL_MASTER}`}>{EMAIL_MASTER}</a>
          <br />
          <small>copyright {COPYRIGHT_YEAR} bonif co.ltd. all rights reserved.</small>
        </address>
      </div>
    </footer>
  )
}
