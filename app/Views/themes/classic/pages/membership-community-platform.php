<style>
  :root {
    --bg: #101010;
    --bg-soft: #151515;
    --navy: #0d1525;
    --card: #1c1c1c;
    --text: #ffffff;
    --muted: #a7a7a7;
    --primary: #246bff;
    --orange: #ff7a18;
    --cyan: #23bfff;
    --yellow: #ffc400;
    --pink: #ff3d8b;
    --green: #32d583;
    --border: rgba(255, 255, 255, 0.1);
    --shadow: 0 24px 80px rgba(0, 0, 0, 0.45);
    --radius: 28px;
  }

  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  html {
    scroll-behavior: smooth;
  }

  body {
    font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    background: var(--bg);
    color: var(--text);
    overflow-x: hidden;
  }

  a {
    color: inherit;
    text-decoration: none;
  }

  .container {
    width: min(1180px, calc(100% - 40px));
    margin: 0 auto;
  }

  .navbar {
    position: fixed;
    inset: 0 0 auto 0;
    width: 100%;
    z-index: 50;
    background: rgba(16, 16, 16, 0.84);
    backdrop-filter: blur(18px);
    border-bottom: 1px solid var(--border);
  }

  .nav-inner {
    height: 84px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
  }

  .logo {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 30px;
    font-weight: 800;
    color: var(--orange);
    letter-spacing: -1.2px;
  }

  .logo-mark {
    width: 34px;
    height: 34px;
    border: 3px solid var(--orange);
    border-radius: 50%;
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .logo-mark::before,
  .logo-mark::after {
    content: "";
    position: absolute;
    width: 46px;
    height: 12px;
    border: 3px solid var(--orange);
    border-radius: 50%;
    transform: rotate(35deg);
  }

  .logo-mark::after {
    transform: rotate(-35deg);
  }

  .logo-dot {
    width: 8px;
    height: 8px;
    background: var(--orange);
    border-radius: 999px;
    z-index: 1;
  }

  .nav-menu {
    display: flex;
    align-items: center;
    gap: 34px;
    color: #f0f0f0;
    font-size: 15px;
    font-weight: 600;
  }

  .nav-menu a,
  .nav-menu button {
    color: #f0f0f0;
    opacity: 0.9;
    background: transparent;
    border: 0;
    font: inherit;
    cursor: pointer;
  }

  .nav-menu a:hover,
  .nav-menu button:hover {
    opacity: 1;
    color: var(--orange);
  }

  .nav-actions {
    display: flex;
    align-items: center;
    gap: 24px;
    font-weight: 600;
  }

  .theme-icon {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    border: 1px solid var(--border);
    display: grid;
    place-items: center;
    color: #fff;
  }

  .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 52px;
    padding: 0 28px;
    border-radius: 8px;
    font-weight: 700;
    transition: 0.25s ease;
    border: 1px solid transparent;
    cursor: pointer;
  }

  .btn-primary {
    background: var(--primary);
    color: #fff;
    box-shadow: 0 14px 32px rgba(36, 107, 255, 0.28);
  }

  .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 18px 40px rgba(36, 107, 255, 0.42);
  }

  .btn-outline {
    border-color: var(--border);
    color: #fff;
    background: rgba(255, 255, 255, 0.04);
  }

  .btn-outline:hover {
    border-color: rgba(255, 255, 255, 0.28);
    background: rgba(255, 255, 255, 0.08);
  }

  .dropdown {
    position: relative;
  }

  .dropdown-menu {
    position: absolute;
    top: 44px;
    left: 50%;
    transform: translateX(-50%) translateY(14px);
    width: min(820px, calc(100vw - 40px));
    background: #070500;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 14px;
    box-shadow: var(--shadow);
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transition: 0.25s ease;
    overflow: hidden;
  }

  .dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transform: translateX(-50%) translateY(0);
  }

  .dropdown-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 290px;
    gap: 32px;
    padding: 28px 32px;
  }

  .dropdown h4 {
    margin-bottom: 16px;
    font-size: 17px;
  }

  .dropdown-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    color: var(--muted) !important;
    padding: 10px 0;
    line-height: 1.45;
  }

  .dropdown-item.active,
  .dropdown-item:hover {
    color: #fff !important;
  }

  .dropdown-preview {
    min-height: 260px;
    border-radius: 18px;
    background:
      linear-gradient(160deg, rgba(36, 107, 255, 0.45), rgba(18, 18, 18, 0.6)),
      radial-gradient(circle at 90% 10%, rgba(35, 191, 255, 0.8), transparent 30%),
      linear-gradient(135deg, #0d244d, #08081a 48%, #2c0f5a);
    padding: 22px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden;
    position: relative;
  }

  .dropdown-preview::after {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    right: -70px;
    bottom: -70px;
    background: rgba(255, 122, 24, 0.42);
    border-radius: 50%;
    filter: blur(6px);
  }

  .preview-card {
    position: relative;
    z-index: 1;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 14px;
    padding: 16px;
    backdrop-filter: blur(10px);
  }

  .preview-card strong {
    display: block;
    margin-bottom: 8px;
  }

  .preview-card span {
    color: rgba(255, 255, 255, 0.72);
    font-size: 13px;
    line-height: 1.5;
  }

  .mobile-toggle {
    display: none;
    background: transparent;
    color: #fff;
    border: 1px solid var(--border);
    width: 44px;
    height: 44px;
    border-radius: 12px;
    font-size: 22px;
  }

  .hero {
    position: relative;
    min-height: 100vh;
    padding: 150px 0 100px;
    background:
      radial-gradient(circle at 83% 17%, rgba(35, 191, 255, 0.08), transparent 25%),
      radial-gradient(circle at 8% 98%, rgba(255, 196, 0, 0.18), transparent 22%),
      linear-gradient(180deg, #151515 0%, #121212 70%, var(--navy) 70%, var(--navy) 100%);
    overflow: hidden;
  }

  .hero::before {
    content: "";
    position: absolute;
    right: 7%;
    top: 130px;
    width: 135px;
    height: 135px;
    border: 28px solid var(--cyan);
    border-radius: 34px;
    transform: rotate(-17deg);
    opacity: 0.96;
  }

  .hero::after {
    content: "";
    position: absolute;
    left: 5%;
    bottom: 55px;
    width: 290px;
    height: 290px;
    background: var(--yellow);
    border-radius: 50%;
    transform: translateY(48%);
  }

  .shape-orange {
    position: absolute;
    width: 82px;
    height: 82px;
    border: 20px solid var(--orange);
    border-radius: 24px;
    transform: rotate(-22deg);
    right: 44%;
    top: 52%;
    opacity: 0.96;
  }

  .shape-dot {
    position: absolute;
    right: 24%;
    top: 20%;
    width: 38px;
    height: 38px;
    background: #ff9c22;
    border-radius: 50%;
    transform: rotate(20deg);
  }

  .wave {
    position: absolute;
    left: 18%;
    right: 0;
    bottom: 78px;
    height: 110px;
    border-top: 2px dashed rgba(86, 79, 255, 0.55);
    border-radius: 50% 50% 0 0;
    transform: rotate(4deg);
    opacity: 0.75;
  }

  .hero-grid {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: 0.93fr 1.07fr;
    align-items: center;
    gap: 42px;
  }

  .eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    color: var(--cyan);
    font-weight: 800;
    font-size: 14px;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    margin-bottom: 20px;
  }

  .eyebrow::before {
    content: "";
    width: 34px;
    height: 2px;
    background: var(--cyan);
  }

  .hero h1 {
    font-size: clamp(46px, 5.2vw, 82px);
    line-height: 0.98;
    letter-spacing: -3px;
    max-width: 650px;
    margin-bottom: 26px;
  }

  .hero h1 span {
    color: var(--orange);
  }

  .hero p {
    max-width: 560px;
    color: var(--muted);
    font-size: 19px;
    line-height: 1.75;
    margin-bottom: 34px;
  }

  .hero-buttons {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 14px;
    margin-bottom: 44px;
  }

  .hero-points {
    display: grid;
    gap: 13px;
    color: #b8b8b8;
    font-size: 15px;
  }

  .hero-points li {
    list-style: none;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .check {
    width: 19px;
    height: 19px;
    border-radius: 50%;
    border: 2px solid var(--primary);
    display: inline-grid;
    place-items: center;
    color: var(--primary);
    font-size: 11px;
    font-weight: 900;
    flex: 0 0 auto;
  }

  .mockup-area {
    position: relative;
    min-height: 590px;
  }

  .laptop {
    position: absolute;
    right: 0;
    top: 74px;
    width: min(650px, 100%);
    filter: drop-shadow(0 40px 60px rgba(0, 0, 0, 0.55));
  }

  .laptop-screen {
    border: 4px solid rgba(255, 255, 255, 0.56);
    background: #080a14;
    border-radius: 22px 22px 10px 10px;
    padding: 18px;
    aspect-ratio: 16 / 9;
    overflow: hidden;
  }

  .app-topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 16px;
    color: #686d8d;
    font-size: 12px;
  }

  .searchbar {
    width: 180px;
    height: 24px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.06);
  }

  .social-layout {
    display: grid;
    grid-template-columns: 0.72fr 1.18fr 0.72fr;
    gap: 14px;
    height: calc(100% - 40px);
  }

  .left-panel,
  .right-panel,
  .feed-panel {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.07);
    border-radius: 18px;
    padding: 14px;
    overflow: hidden;
  }

  .profile-mini {
    padding: 14px;
    border-radius: 16px;
    background:
      radial-gradient(circle at 85% 0%, rgba(255, 61, 139, 0.35), transparent 32%),
      linear-gradient(135deg, rgba(36, 107, 255, 0.26), rgba(255, 122, 24, 0.12));
    margin-bottom: 12px;
  }

  .avatar-row {
    display: flex;
    align-items: center;
    gap: 9px;
    margin-bottom: 11px;
  }

  .avatar {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--cyan), var(--primary));
    border: 2px solid rgba(255, 255, 255, 0.25);
    flex: 0 0 auto;
  }

  .avatar.small {
    width: 30px;
    height: 30px;
  }

  .avatar.orange {
    background: linear-gradient(135deg, var(--orange), var(--pink));
  }

  .avatar.green {
    background: linear-gradient(135deg, var(--green), var(--cyan));
  }

  .avatar.purple {
    background: linear-gradient(135deg, #7c3aed, #ec4899);
  }

  .profile-mini strong,
  .suggestion strong,
  .post strong {
    display: block;
    font-size: 12px;
  }

  .profile-mini span,
  .suggestion span,
  .post span {
    color: rgba(255, 255, 255, 0.58);
    font-size: 10px;
  }

  .menu-line {
    height: 28px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.06);
    margin-bottom: 9px;
  }

  .menu-line:nth-child(3) {
    width: 82%;
  }

  .menu-line:nth-child(4) {
    width: 72%;
  }

  .story-list {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 8px;
    margin-bottom: 12px;
  }

  .story {
    min-height: 80px;
    border-radius: 14px;
    padding: 8px;
    display: flex;
    align-items: flex-end;
    font-size: 9px;
    font-weight: 800;
    background: linear-gradient(145deg, #246bff, #ff3d8b);
  }

  .story:nth-child(2) {
    background: linear-gradient(145deg, #23bfff, #7c3aed);
  }

  .story:nth-child(3) {
    background: linear-gradient(145deg, #ff7a18, #ffc400);
  }

  .story:nth-child(4) {
    background: linear-gradient(145deg, #32d583, #246bff);
  }

  .composer {
    padding: 12px;
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.055);
    margin-bottom: 12px;
  }

  .composer-bar {
    height: 32px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.07);
    margin-bottom: 10px;
  }

  .composer-actions {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px;
  }

  .composer-actions span {
    height: 24px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.055);
  }

  .post {
    padding: 13px;
    border-radius: 17px;
    background: rgba(255, 255, 255, 0.055);
    margin-bottom: 12px;
  }

  .post-media {
    height: 104px;
    border-radius: 14px;
    margin: 12px 0;
    background:
      radial-gradient(circle at 28% 24%, rgba(255, 255, 255, 0.36), transparent 12%),
      linear-gradient(135deg, #152b65, #7828ff 50%, #ff7a18);
  }

  .reaction-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px;
  }

  .reaction-row span {
    height: 22px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.06);
  }

  .panel-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 14px;
    font-size: 13px;
    font-weight: 800;
  }

  .create-btn {
    background: #7828ff;
    color: #fff;
    border-radius: 999px;
    padding: 7px 12px;
    font-size: 11px;
  }

  .suggestion-list {
    display: grid;
    gap: 11px;
  }

  .suggestion {
    display: grid;
    grid-template-columns: 32px 1fr;
    gap: 9px;
    align-items: center;
    background: rgba(255, 255, 255, 0.045);
    border-radius: 14px;
    padding: 8px;
  }

  .laptop-base {
    width: 110%;
    height: 22px;
    margin-left: -5%;
    background: linear-gradient(180deg, #c5c8ce, #4b4f58);
    border-radius: 0 0 50% 50%;
  }

  .phone {
    position: absolute;
    left: 26px;
    bottom: 35px;
    width: 160px;
    background: #050607;
    border: 3px solid rgba(255, 255, 255, 0.65);
    border-radius: 34px;
    padding: 10px;
    box-shadow: 0 30px 70px rgba(0, 0, 0, 0.65);
  }

  .phone-screen {
    min-height: 310px;
    border-radius: 25px;
    background: #0b0d18;
    padding: 12px 10px;
    display: grid;
    gap: 9px;
  }

  .phone-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: rgba(255, 255, 255, 0.68);
    font-size: 10px;
    font-weight: 800;
  }

  .phone-story-row {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 6px;
  }

  .phone-story {
    height: 45px;
    border-radius: 12px;
    background: linear-gradient(145deg, #246bff, #ff3d8b);
  }

  .phone-card {
    border-radius: 18px;
    padding: 10px;
    background: rgba(255, 255, 255, 0.06);
  }

  .phone-media {
    height: 88px;
    border-radius: 14px;
    background: linear-gradient(135deg, #23bfff, #7828ff 55%, #ff7a18);
    margin-bottom: 8px;
  }

  .phone-row {
    height: 30px;
    border-radius: 11px;
    background: rgba(255, 255, 255, 0.07);
  }

  section {
    padding: 95px 0;
    background: var(--navy);
  }

  .section-header {
    max-width: 720px;
    margin-bottom: 44px;
  }

  .section-header.center {
    text-align: center;
    margin-left: auto;
    margin-right: auto;
  }

  .section-kicker {
    color: var(--orange);
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.14em;
    font-size: 13px;
    margin-bottom: 14px;
  }

  .section-title {
    font-size: clamp(34px, 4vw, 56px);
    line-height: 1.05;
    letter-spacing: -1.8px;
    margin-bottom: 18px;
  }

  .section-desc {
    color: #aeb6c8;
    line-height: 1.8;
    font-size: 17px;
  }

  .feature-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
  }

  .feature-card {
    background: rgba(255, 255, 255, 0.045);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: var(--radius);
    padding: 30px;
    min-height: 245px;
    transition: 0.25s ease;
  }

  .feature-card:hover {
    transform: translateY(-6px);
    background: rgba(255, 255, 255, 0.07);
  }

  .feature-icon {
    width: 58px;
    height: 58px;
    border-radius: 18px;
    background: rgba(36, 107, 255, 0.16);
    display: grid;
    place-items: center;
    font-size: 28px;
    margin-bottom: 24px;
  }

  .feature-card:nth-child(2) .feature-icon,
  .feature-card:nth-child(5) .feature-icon {
    background: rgba(255, 122, 24, 0.18);
  }

  .feature-card:nth-child(3) .feature-icon,
  .feature-card:nth-child(6) .feature-icon {
    background: rgba(35, 191, 255, 0.16);
  }

  .feature-card h3 {
    font-size: 21px;
    margin-bottom: 13px;
  }

  .feature-card p {
    color: #aeb6c8;
    line-height: 1.7;
  }

  .split-section {
    background: #101010;
  }

  .split-grid {
    display: grid;
    grid-template-columns: 0.9fr 1.1fr;
    gap: 54px;
    align-items: center;
  }

  .stat-card {
    background:
      radial-gradient(circle at 85% 10%, rgba(35, 191, 255, 0.16), transparent 28%),
      linear-gradient(145deg, rgba(36, 107, 255, 0.16), rgba(255, 122, 24, 0.06));
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 34px;
    padding: 34px;
    box-shadow: var(--shadow);
  }

  .stat-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
  }

  .stat-item {
    min-height: 135px;
    border-radius: 22px;
    padding: 22px;
    background: rgba(255, 255, 255, 0.055);
    border: 1px solid rgba(255, 255, 255, 0.08);
  }

  .stat-item strong {
    display: block;
    font-size: 34px;
    margin-bottom: 7px;
  }

  .stat-item span {
    color: #aeb6c8;
    font-size: 14px;
    line-height: 1.5;
  }

  .module-list {
    display: grid;
    gap: 16px;
  }

  .module-item {
    display: grid;
    grid-template-columns: 46px 1fr;
    gap: 16px;
    align-items: flex-start;
    padding: 20px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.07);
  }

  .module-number {
    width: 46px;
    height: 46px;
    border-radius: 16px;
    background: var(--primary);
    display: grid;
    place-items: center;
    font-weight: 900;
  }

  .module-item h4 {
    font-size: 18px;
    margin-bottom: 7px;
  }

  .module-item p {
    color: #aeb6c8;
    line-height: 1.65;
  }

  .pricing {
    background: var(--navy);
  }

  .cta-box {
    position: relative;
    overflow: hidden;
    text-align: center;
    border-radius: 38px;
    padding: 70px 30px;
    background:
      radial-gradient(circle at 20% 15%, rgba(255, 122, 24, 0.24), transparent 28%),
      radial-gradient(circle at 80% 20%, rgba(35, 191, 255, 0.20), transparent 28%),
      linear-gradient(145deg, rgba(36, 107, 255, 0.20), rgba(255, 255, 255, 0.05));
    border: 1px solid rgba(255, 255, 255, 0.1);
  }

  .cta-box h2 {
    font-size: clamp(34px, 4vw, 58px);
    letter-spacing: -1.7px;
    margin-bottom: 18px;
  }

  .cta-box p {
    max-width: 650px;
    margin: 0 auto 32px;
    color: #c2cadb;
    line-height: 1.8;
    font-size: 17px;
  }

  footer {
    background: #080808;
    color: #a6a6a6;
    padding: 34px 0;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
  }

  .footer-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
    font-size: 14px;
  }

  @media (max-width: 1024px) {

    .nav-menu,
    .nav-actions {
      display: none;
    }

    .mobile-toggle {
      display: inline-grid;
      place-items: center;
    }

    .hero-grid,
    .split-grid {
      grid-template-columns: 1fr;
    }

    .mockup-area {
      min-height: 560px;
    }

    .feature-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 720px) {
    .container {
      width: min(100% - 28px, 1180px);
    }

    .logo {
      font-size: 24px;
    }

    .hero {
      padding-top: 122px;
    }

    .hero h1 {
      letter-spacing: -1.8px;
    }

    .feature-grid,
    .stat-grid {
      grid-template-columns: 1fr;
    }

    .mockup-area {
      min-height: 440px;
    }

    .laptop {
      top: 20px;
    }

    .laptop-screen {
      padding: 12px;
    }

    .social-layout {
      grid-template-columns: 1fr;
    }

    .left-panel,
    .right-panel {
      display: none;
    }

    .phone {
      width: 125px;
      left: 0;
      bottom: 35px;
    }

    .phone-screen {
      min-height: 230px;
    }

    .hero::before {
      width: 82px;
      height: 82px;
      border-width: 18px;
      right: -28px;
    }

    .hero::after {
      width: 180px;
      height: 180px;
    }
  }
</style>

<main>
  <section class="hero" id="home">
    <span class="shape-orange"></span>
    <span class="shape-dot"></span>
    <span class="wave"></span>

    <div class="container hero-grid">
      <div>
        <div class="eyebrow">Membership Community Platform Development</div>
        <h1>Create Premium <span>Member Communities</span>.</h1>
        <p>
          We develop membership community platforms for creators, organizations, education businesses, and brands that
          need private access, premium content, subscriptions, and member engagement tools.
        </p>

        <div class="hero-buttons">
          <a href="#features" class="btn btn-primary">Explore Features</a>
          <a href="#modules" class="btn btn-outline">View Modules</a>
        </div>

        <ul class="hero-points">
          <li><span class="check">✓</span> Membership Levels, Profiles & Member Directory</li>
          <li><span class="check">✓</span> Private Community, Events & Discussion Spaces</li>
          <li><span class="check">✓</span> Subscription Management, Admin Dashboard & Analytics</li>
        </ul>
      </div>

      <div class="mockup-area" aria-label="Membership community platform interface preview">
        <div class="laptop">
          <div class="laptop-screen">
            <div class="app-topbar">
              <span>⌘ MemberSpace</span>
              <span class="searchbar"></span>
              <span>● ● ●</span>
            </div>

            <div class="social-layout">
              <aside class="left-panel">
                <div class="profile-mini">
                  <div class="avatar-row">
                    <span class="avatar orange"></span>
                    <div>
                      <strong>Bintang Academy</strong>
                      <span>Membership Admin</span>
                    </div>
                  </div>
                  <div class="menu-line"></div>
                  <div class="menu-line"></div>
                  <div class="menu-line"></div>
                </div>
                <div class="menu-line"></div>
                <div class="menu-line"></div>
                <div class="menu-line"></div>
                <div class="menu-line"></div>
              </aside>

              <section class="feed-panel" aria-label="Social feed preview">
                <div class="story-list">
                  <div class="story">Free</div>
                  <div class="story">Pro</div>
                  <div class="story">VIP</div>
                  <div class="story">Elite</div>
                </div>

                <div class="composer">
                  <div class="avatar-row">
                    <span class="avatar small"></span>
                    <div class="composer-bar"></div>
                  </div>
                  <div class="composer-actions"><span></span><span></span><span></span></div>
                </div>

                <article class="post">
                  <div class="avatar-row">
                    <span class="avatar green"></span>
                    <div>
                      <strong>Premium Member Hub</strong>
                      <span>Published a member-only lesson</span>
                    </div>
                  </div>
                  <div class="post-media"></div>
                  <div class="reaction-row"><span></span><span></span><span></span></div>
                </article>
              </section>

              <aside class="right-panel">
                <div class="panel-head">
                  <span>Active Members</span>
                  <span class="create-btn">+ Add</span>
                </div>
                <div class="suggestion-list">
                  <div class="suggestion"><span class="avatar small purple"></span>
                    <div><strong>Nadia Creative</strong><span>VIP Member</span></div>
                  </div>
                  <div class="suggestion"><span class="avatar small orange"></span>
                    <div><strong>Raka Digital</strong><span>Pro Member</span></div>
                  </div>
                  <div class="suggestion"><span class="avatar small green"></span>
                    <div><strong>Maya Growth</strong><span>Elite Member</span></div>
                  </div>
                  <div class="suggestion"><span class="avatar small"></span>
                    <div><strong>Dimas Learn</strong><span>New Member</span></div>
                  </div>
                </div>
              </aside>
            </div>
          </div>
          <div class="laptop-base"></div>
        </div>

        <div class="phone">
          <div class="phone-screen">
            <div class="phone-header"><span>Member</span><span>● ●</span></div>
            <div class="phone-story-row">
              <span class="phone-story"></span>
              <span class="phone-story"></span>
              <span class="phone-story"></span>
              <span class="phone-story"></span>
            </div>
            <div class="phone-card">
              <div class="phone-media"></div>
              <div class="phone-row"></div>
            </div>
            <div class="phone-row"></div>
            <div class="phone-row"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div class="section-header center">
        <div class="section-kicker">Core Features</div>
        <h2 class="section-title">Everything needed to manage a paid or private community.</h2>
        <p class="section-desc">
          From member onboarding to gated content, recurring subscriptions, events, and community engagement, the
          platform can be customized for education, creators, brands, or professional organizations.
        </p>
      </div>

      <div class="feature-grid">
        <article class="feature-card">
          <div class="feature-icon">🔐</div>
          <h3>Gated Content</h3>
          <p>Publish premium articles, videos, files, courses, and community posts with access based on membership
            level.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>Membership Plans</h3>
          <p>Create free, monthly, yearly, or custom subscription tiers with role-based access and plan benefits.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">👥</div>
          <h3>Member Community</h3>
          <p>Build private discussion spaces, member directories, announcements, groups, events, and engagement
            channels.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">🎟</div>
          <h3>Events & Webinars</h3>
          <p>Manage member-only events, webinars, schedules, RSVPs, reminders, and exclusive community sessions.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">🔔</div>
          <h3>Notifications</h3>
          <p>Send updates for new content, expiring memberships, events, announcements, payments, and community
            activity.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">📊</div>
          <h3>Admin & Analytics</h3>
          <p>Monitor active members, revenue, retention, content performance, user reports, and community growth from
            one dashboard.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="split-section" id="modules">
    <div class="container split-grid">
      <div class="stat-card">
        <div class="stat-grid">
          <div class="stat-item"><strong>Plans</strong><span>Free, Pro, VIP, and custom tiers</span></div>
          <div class="stat-item"><strong>Access</strong><span>Role-based gated content</span></div>
          <div class="stat-item"><strong>Events</strong><span>Member-only sessions and webinars</span></div>
          <div class="stat-item"><strong>Revenue</strong><span>Subscription and member analytics</span></div>
        </div>
      </div>

      <div>
        <div class="section-header">
          <div class="section-kicker">Platform Modules</div>
          <h2 class="section-title">Flexible modules for membership, content, payment, and community.</h2>
          <p class="section-desc">
            The platform can be developed as a complete membership product or module-by-module based on your business
            model, access rules, and community workflow.
          </p>
        </div>

        <div class="module-list">
          <div class="module-item">
            <div class="module-number">01</div>
            <div>
              <h4>Member & Profile Management</h4>
              <p>Registration, login, member profiles, directories, roles, status, verification, and access permissions.
              </p>
            </div>
          </div>
          <div class="module-item">
            <div class="module-number">02</div>
            <div>
              <h4>Membership Plan & Subscription</h4>
              <p>Manage free or paid tiers, recurring subscriptions, payment status, invoices, access rules, and member
                benefits.</p>
            </div>
          </div>
          <div class="module-item">
            <div class="module-number">03</div>
            <div>
              <h4>Premium Content & Community</h4>
              <p>Publish gated content, courses, resources, private discussions, announcements, comments, and
                member-only updates.</p>
            </div>
          </div>
          <div class="module-item">
            <div class="module-number">04</div>
            <div>
              <h4>Admin Dashboard & Growth Analytics</h4>
              <p>Track member growth, active subscriptions, retention, engagement, revenue, event attendance, and
                content performance.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pricing" id="contact">
    <div class="container">
      <div class="cta-box">
        <h2>Ready to launch your membership community?</h2>
        <p>
          Build a custom membership community platform with secure access, premium content, subscription tools,
          engagement features, and business-ready admin dashboard.
        </p>
        <a href="mailto:hello@bintangdata.co.id" class="btn btn-primary">Start Consultation</a>
      </div>
    </div>
  </section>
</main>