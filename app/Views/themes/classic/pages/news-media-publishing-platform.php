<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>News & Media Publishing Platform Content</title>
  <style>
    :root {
      --bg: #101010;
      --bg-soft: #151515;
      --navy: #0d1525;
      --card: #1b1b1b;
      --card-2: #202020;
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

    .news-media-page {
      position: relative;
      min-height: 100vh;
      overflow: hidden;
      background:
        radial-gradient(circle at 15% 15%, rgba(255, 122, 24, 0.12), transparent 26%),
        radial-gradient(circle at 82% 18%, rgba(35, 191, 255, 0.15), transparent 26%),
        linear-gradient(180deg, #101010 0%, #101010 56%, #0d1525 56%, #0d1525 100%);
    }

    .hero-section {
      position: relative;
      padding: 120px 0 92px;
      z-index: 2;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 0.95fr 1.05fr;
      gap: 64px;
      align-items: center;
    }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 24px;
      padding: 9px 16px;
      border: 1px solid rgba(255, 122, 24, 0.3);
      border-radius: 999px;
      background: rgba(255, 122, 24, 0.08);
      color: #ffd7bd;
      font-size: 14px;
      font-weight: 700;
      letter-spacing: 0.2px;
    }

    .eyebrow-dot {
      width: 9px;
      height: 9px;
      border-radius: 50%;
      background: var(--orange);
      box-shadow: 0 0 0 6px rgba(255, 122, 24, 0.16);
    }

    .hero-title {
      max-width: 640px;
      font-size: clamp(42px, 6vw, 82px);
      line-height: 0.98;
      letter-spacing: -3.4px;
      font-weight: 900;
      margin-bottom: 24px;
    }

    .hero-title span {
      color: var(--orange);
    }

    .hero-description {
      max-width: 560px;
      color: var(--muted);
      font-size: 19px;
      line-height: 1.75;
      margin-bottom: 34px;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      margin-bottom: 40px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 52px;
      padding: 0 28px;
      border-radius: 10px;
      font-weight: 800;
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

    .hero-checklist {
      display: grid;
      gap: 13px;
      color: #c9c9c9;
      font-size: 15px;
    }

    .hero-checklist li {
      list-style: none;
      display: flex;
      align-items: center;
      gap: 11px;
    }

    .check-icon {
      width: 18px;
      height: 18px;
      flex: 0 0 18px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      border: 2px solid var(--primary);
      color: var(--primary);
      font-size: 11px;
      font-weight: 900;
    }

    .media-visual {
      position: relative;
      min-height: 620px;
      display: grid;
      place-items: center;
    }

    .editor-dashboard {
      width: min(650px, 100%);
      border: 1px solid rgba(255, 255, 255, 0.14);
      border-radius: 28px;
      background: linear-gradient(145deg, #181818, #0b0b0f 55%, #111a2d);
      box-shadow: var(--shadow);
      overflow: hidden;
      transform: rotate(-1deg);
    }

    .dashboard-topbar {
      height: 58px;
      padding: 0 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid var(--border);
      background: rgba(255, 255, 255, 0.04);
    }

    .window-dots {
      display: flex;
      gap: 8px;
    }

    .window-dots span {
      width: 11px;
      height: 11px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.22);
    }

    .window-dots span:nth-child(1) {
      background: var(--orange);
    }

    .window-dots span:nth-child(2) {
      background: var(--yellow);
    }

    .window-dots span:nth-child(3) {
      background: var(--green);
    }

    .dashboard-label {
      font-size: 13px;
      color: #d7d7d7;
      font-weight: 800;
    }

    .dashboard-body {
      display: grid;
      grid-template-columns: 180px 1fr;
      min-height: 430px;
    }

    .sidebar-panel {
      padding: 20px;
      border-right: 1px solid var(--border);
      background: rgba(0, 0, 0, 0.2);
    }

    .sidebar-title {
      margin-bottom: 18px;
      color: #fff;
      font-weight: 900;
      font-size: 15px;
    }

    .sidebar-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 11px 10px;
      margin-bottom: 8px;
      border-radius: 12px;
      color: #bdbdbd;
      font-size: 13px;
      font-weight: 700;
    }

    .sidebar-item.active {
      background: rgba(36, 107, 255, 0.16);
      color: #fff;
    }

    .sidebar-icon {
      width: 24px;
      height: 24px;
      display: grid;
      place-items: center;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.08);
      color: var(--orange);
    }

    .content-panel {
      padding: 22px;
    }

    .breaking-card {
      padding: 18px;
      border-radius: 20px;
      background: linear-gradient(135deg, rgba(255, 122, 24, 0.28), rgba(255, 61, 139, 0.12));
      border: 1px solid rgba(255, 122, 24, 0.24);
      margin-bottom: 18px;
    }

    .breaking-label {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 7px 10px;
      border-radius: 999px;
      background: rgba(0, 0, 0, 0.28);
      color: #ffd7bd;
      font-size: 11px;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: 0.6px;
      margin-bottom: 12px;
    }

    .pulse {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--orange);
      box-shadow: 0 0 0 0 rgba(255, 122, 24, 0.7);
      animation: pulse 1.4s infinite;
    }

    @keyframes pulse {
      70% { box-shadow: 0 0 0 10px rgba(255, 122, 24, 0); }
      100% { box-shadow: 0 0 0 0 rgba(255, 122, 24, 0); }
    }

    .breaking-title {
      font-size: 22px;
      line-height: 1.22;
      letter-spacing: -0.6px;
      margin-bottom: 10px;
    }

    .breaking-meta {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      color: #d6d6d6;
      font-size: 12px;
      font-weight: 700;
    }

    .article-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
      margin-bottom: 14px;
    }

    .article-card {
      padding: 14px;
      border-radius: 18px;
      border: 1px solid var(--border);
      background: rgba(255, 255, 255, 0.05);
    }

    .article-thumb {
      height: 78px;
      border-radius: 14px;
      margin-bottom: 12px;
      background:
        linear-gradient(135deg, rgba(36, 107, 255, 0.7), rgba(35, 191, 255, 0.2)),
        radial-gradient(circle at 74% 20%, rgba(255, 255, 255, 0.35), transparent 18%);
    }

    .article-card:nth-child(2) .article-thumb {
      background:
        linear-gradient(135deg, rgba(255, 122, 24, 0.72), rgba(255, 196, 0, 0.18)),
        radial-gradient(circle at 68% 26%, rgba(255, 255, 255, 0.28), transparent 18%);
    }

    .article-card h4 {
      font-size: 14px;
      line-height: 1.35;
      margin-bottom: 8px;
    }

    .status-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #a9a9a9;
      font-size: 11px;
      font-weight: 700;
    }

    .status-badge {
      padding: 4px 8px;
      border-radius: 999px;
      background: rgba(50, 213, 131, 0.14);
      color: #8bffc0;
    }

    .analytics-strip {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
    }

    .analytics-box {
      padding: 14px;
      border-radius: 16px;
      background: rgba(255, 255, 255, 0.055);
      border: 1px solid var(--border);
    }

    .analytics-box strong {
      display: block;
      font-size: 20px;
      margin-bottom: 5px;
    }

    .analytics-box span {
      color: #a8a8a8;
      font-size: 11px;
      font-weight: 700;
    }

    .floating-widget {
      position: absolute;
      border-radius: 22px;
      border: 1px solid rgba(255, 255, 255, 0.14);
      background: rgba(25, 25, 25, 0.88);
      backdrop-filter: blur(20px);
      box-shadow: var(--shadow);
    }

    .live-widget {
      right: -16px;
      bottom: 58px;
      width: 230px;
      padding: 18px;
      transform: rotate(4deg);
    }

    .live-screen {
      height: 110px;
      border-radius: 16px;
      margin-bottom: 14px;
      background:
        linear-gradient(145deg, rgba(255, 61, 139, 0.42), rgba(36, 107, 255, 0.28)),
        repeating-linear-gradient(90deg, rgba(255,255,255,0.08) 0 1px, transparent 1px 10px);
      display: grid;
      place-items: center;
      color: #fff;
      font-weight: 900;
      letter-spacing: -0.3px;
    }

    .live-info {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-size: 12px;
      color: #cfcfcf;
      font-weight: 800;
    }

    .editor-widget {
      left: -8px;
      top: 70px;
      width: 220px;
      padding: 18px;
      transform: rotate(-5deg);
    }

    .editor-widget h4 {
      font-size: 14px;
      margin-bottom: 12px;
    }

    .progress-line {
      height: 9px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.1);
      overflow: hidden;
      margin-bottom: 10px;
    }

    .progress-line span {
      display: block;
      height: 100%;
      border-radius: inherit;
      background: linear-gradient(90deg, var(--orange), var(--yellow));
    }

    .shape {
      position: absolute;
      z-index: 1;
      pointer-events: none;
    }

    .shape-circle-yellow {
      width: 260px;
      height: 260px;
      border-radius: 50%;
      background: var(--yellow);
      left: -80px;
      bottom: -120px;
    }

    .shape-ring-cyan {
      width: 190px;
      height: 190px;
      border: 28px solid var(--cyan);
      border-radius: 50%;
      right: 8%;
      bottom: 38px;
      opacity: 0.95;
    }

    .shape-plus {
      width: 110px;
      height: 110px;
      right: 10%;
      top: 70px;
      transform: rotate(-18deg);
    }

    .shape-plus::before,
    .shape-plus::after {
      content: "";
      position: absolute;
      border-radius: 14px;
      background: var(--cyan);
    }

    .shape-plus::before {
      width: 100%;
      height: 24px;
      top: 43px;
      left: 0;
    }

    .shape-plus::after {
      width: 24px;
      height: 100%;
      left: 43px;
      top: 0;
    }

    .shape-dot-orange {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: var(--orange);
      right: 24%;
      top: 160px;
    }

    .section {
      position: relative;
      z-index: 3;
      padding: 92px 0;
    }

    .section-heading {
      text-align: center;
      max-width: 760px;
      margin: 0 auto 52px;
    }

    .section-kicker {
      color: var(--orange);
      font-size: 14px;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: 1.8px;
      margin-bottom: 14px;
    }

    .section-title {
      font-size: clamp(34px, 4vw, 56px);
      line-height: 1.05;
      letter-spacing: -2px;
      margin-bottom: 16px;
    }

    .section-text {
      color: var(--muted);
      font-size: 18px;
      line-height: 1.7;
    }

    .module-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 22px;
    }

    .module-card {
      position: relative;
      min-height: 260px;
      padding: 28px;
      border: 1px solid var(--border);
      border-radius: 26px;
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.07), rgba(255, 255, 255, 0.03));
      overflow: hidden;
      transition: 0.25s ease;
    }

    .module-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 25% 0%, rgba(36, 107, 255, 0.18), transparent 34%);
      opacity: 0;
      transition: 0.25s ease;
    }

    .module-card:hover {
      transform: translateY(-8px);
      border-color: rgba(255, 255, 255, 0.2);
    }

    .module-card:hover::before {
      opacity: 1;
    }

    .module-icon {
      position: relative;
      width: 58px;
      height: 58px;
      display: grid;
      place-items: center;
      border-radius: 18px;
      background: rgba(36, 107, 255, 0.16);
      color: var(--cyan);
      font-size: 25px;
      margin-bottom: 22px;
    }

    .module-card:nth-child(2) .module-icon,
    .module-card:nth-child(5) .module-icon {
      background: rgba(255, 122, 24, 0.14);
      color: var(--orange);
    }

    .module-card:nth-child(3) .module-icon,
    .module-card:nth-child(6) .module-icon {
      background: rgba(255, 196, 0, 0.12);
      color: var(--yellow);
    }

    .module-card h3 {
      position: relative;
      font-size: 22px;
      line-height: 1.25;
      margin-bottom: 14px;
      letter-spacing: -0.7px;
    }

    .module-card p {
      position: relative;
      color: var(--muted);
      line-height: 1.7;
      font-size: 15px;
    }

    .workflow-section {
      background: var(--navy);
    }

    .workflow-grid {
      display: grid;
      grid-template-columns: 0.85fr 1.15fr;
      gap: 60px;
      align-items: center;
    }

    .workflow-list {
      display: grid;
      gap: 18px;
    }

    .workflow-item {
      display: grid;
      grid-template-columns: 54px 1fr;
      gap: 18px;
      align-items: start;
      padding: 20px;
      border-radius: 22px;
      border: 1px solid rgba(255, 255, 255, 0.09);
      background: rgba(255, 255, 255, 0.045);
    }

    .workflow-number {
      width: 54px;
      height: 54px;
      border-radius: 17px;
      display: grid;
      place-items: center;
      background: var(--primary);
      color: #fff;
      font-weight: 900;
      box-shadow: 0 12px 28px rgba(36, 107, 255, 0.25);
    }

    .workflow-item h3 {
      font-size: 19px;
      margin-bottom: 8px;
      letter-spacing: -0.4px;
    }

    .workflow-item p {
      color: var(--muted);
      line-height: 1.65;
      font-size: 15px;
    }

    .feature-board {
      position: relative;
      border-radius: 32px;
      padding: 34px;
      border: 1px solid rgba(255, 255, 255, 0.12);
      background:
        linear-gradient(145deg, rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0.035)),
        radial-gradient(circle at 80% 15%, rgba(35, 191, 255, 0.18), transparent 28%);
      box-shadow: var(--shadow);
      overflow: hidden;
    }

    .feature-board h3 {
      max-width: 460px;
      font-size: 36px;
      line-height: 1.12;
      letter-spacing: -1.2px;
      margin-bottom: 26px;
    }

    .feature-list {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
    }

    .feature-pill {
      display: flex;
      align-items: center;
      gap: 10px;
      min-height: 58px;
      padding: 14px 16px;
      border-radius: 16px;
      background: rgba(0, 0, 0, 0.22);
      border: 1px solid rgba(255, 255, 255, 0.08);
      color: #d7d7d7;
      font-weight: 800;
      font-size: 14px;
    }

    .feature-pill span {
      width: 24px;
      height: 24px;
      flex: 0 0 24px;
      display: grid;
      place-items: center;
      border-radius: 9px;
      background: rgba(255, 122, 24, 0.14);
      color: var(--orange);
    }

    .cta-section {
      padding: 94px 0 120px;
      background: linear-gradient(180deg, var(--navy), #101010);
    }

    .cta-box {
      position: relative;
      overflow: hidden;
      border-radius: 34px;
      padding: 58px;
      background:
        linear-gradient(135deg, rgba(36, 107, 255, 0.95), rgba(20, 60, 160, 0.92)),
        radial-gradient(circle at 85% 20%, rgba(255, 255, 255, 0.18), transparent 30%);
      box-shadow: var(--shadow);
    }

    .cta-box::after {
      content: "";
      position: absolute;
      width: 220px;
      height: 220px;
      border: 34px solid rgba(255, 255, 255, 0.18);
      border-radius: 50%;
      right: -50px;
      bottom: -80px;
    }

    .cta-content {
      position: relative;
      z-index: 2;
      max-width: 720px;
    }

    .cta-content h2 {
      font-size: clamp(34px, 4vw, 58px);
      line-height: 1.06;
      letter-spacing: -2px;
      margin-bottom: 18px;
    }

    .cta-content p {
      color: rgba(255, 255, 255, 0.82);
      font-size: 18px;
      line-height: 1.7;
      margin-bottom: 30px;
    }

    .cta-content .btn {
      background: #fff;
      color: #111;
    }

    @media (max-width: 1024px) {
      .hero-grid,
      .workflow-grid {
        grid-template-columns: 1fr;
      }

      .media-visual {
        min-height: 560px;
      }

      .module-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 720px) {
      .container {
        width: min(100% - 28px, 1180px);
      }

      .hero-section {
        padding: 78px 0 70px;
      }

      .hero-title {
        letter-spacing: -2px;
      }

      .hero-description,
      .section-text {
        font-size: 16px;
      }

      .media-visual {
        min-height: auto;
        padding: 30px 0 60px;
      }

      .editor-dashboard {
        transform: none;
      }

      .dashboard-body {
        grid-template-columns: 1fr;
      }

      .sidebar-panel {
        display: none;
      }

      .article-grid,
      .analytics-strip,
      .module-grid,
      .feature-list {
        grid-template-columns: 1fr;
      }

      .floating-widget,
      .shape-plus,
      .shape-dot-orange,
      .shape-ring-cyan {
        display: none;
      }

      .section {
        padding: 70px 0;
      }

      .cta-box {
        padding: 36px 24px;
      }
    }
  </style>
</head>
<body>
  <main class="news-media-page">
    <span class="shape shape-circle-yellow"></span>
    <span class="shape shape-ring-cyan"></span>
    <span class="shape shape-plus"></span>
    <span class="shape shape-dot-orange"></span>

    <section class="hero-section">
      <div class="container hero-grid">
        <div class="hero-content">
          <div class="eyebrow">
            <span class="eyebrow-dot"></span>
            News & Media Publishing Platform
          </div>
          <h1 class="hero-title">Build a powerful <span>digital newsroom</span> for modern media.</h1>
          <p class="hero-description">
            Launch a scalable news portal with article publishing, editorial workflow, breaking news, video coverage, reader engagement, and real-time analytics in one integrated platform.
          </p>
          <div class="hero-actions">
            <a href="#modules" class="btn btn-primary">Explore Features</a>
            <a href="#workflow" class="btn btn-outline">View Workflow</a>
          </div>
          <ul class="hero-checklist">
            <li><span class="check-icon">✓</span> Multi-author CMS for news, articles, videos, and reports</li>
            <li><span class="check-icon">✓</span> Editorial approval flow for writers, editors, and publishers</li>
            <li><span class="check-icon">✓</span> SEO-ready publishing with categories, tags, and analytics</li>
          </ul>
        </div>

        <div class="media-visual">
          <div class="editor-widget floating-widget">
            <h4>Editorial Progress</h4>
            <div class="progress-line"><span style="width: 86%;"></span></div>
            <div class="progress-line"><span style="width: 64%;"></span></div>
            <div class="progress-line"><span style="width: 72%;"></span></div>
          </div>

          <div class="editor-dashboard">
            <div class="dashboard-topbar">
              <div class="window-dots"><span></span><span></span><span></span></div>
              <div class="dashboard-label">Editorial Command Center</div>
            </div>
            <div class="dashboard-body">
              <aside class="sidebar-panel">
                <div class="sidebar-title">Publishing Menu</div>
                <div class="sidebar-item active"><span class="sidebar-icon">📰</span> Headlines</div>
                <div class="sidebar-item"><span class="sidebar-icon">✍️</span> Articles</div>
                <div class="sidebar-item"><span class="sidebar-icon">🎥</span> Video News</div>
                <div class="sidebar-item"><span class="sidebar-icon">📊</span> Analytics</div>
                <div class="sidebar-item"><span class="sidebar-icon">💬</span> Comments</div>
              </aside>

              <div class="content-panel">
                <div class="breaking-card">
                  <div class="breaking-label"><span class="pulse"></span> Breaking News</div>
                  <h3 class="breaking-title">National economic update gains strong audience attention today</h3>
                  <div class="breaking-meta">
                    <span>Politics</span>
                    <span>8 min ago</span>
                    <span>24.8K reads</span>
                  </div>
                </div>

                <div class="article-grid">
                  <article class="article-card">
                    <div class="article-thumb"></div>
                    <h4>New technology trend changes the future of digital media</h4>
                    <div class="status-row"><span>Editor Review</span><span class="status-badge">Ready</span></div>
                  </article>
                  <article class="article-card">
                    <div class="article-thumb"></div>
                    <h4>Live coverage preparation for tonight's public event</h4>
                    <div class="status-row"><span>Live Desk</span><span class="status-badge">Scheduled</span></div>
                  </article>
                </div>

                <div class="analytics-strip">
                  <div class="analytics-box"><strong>1.2M</strong><span>Monthly Readers</span></div>
                  <div class="analytics-box"><strong>348</strong><span>Published Posts</span></div>
                  <div class="analytics-box"><strong>72%</strong><span>Engagement Rate</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="live-widget floating-widget">
            <div class="live-screen">LIVE NEWS</div>
            <div class="live-info"><span>12.4K watching</span><span>● Live</span></div>
          </div>
        </div>
      </div>
    </section>

    <section id="modules" class="section">
      <div class="container">
        <div class="section-heading">
          <div class="section-kicker">Platform Modules</div>
          <h2 class="section-title">Everything needed to run a professional digital publication.</h2>
          <p class="section-text">
            From daily news publishing to premium media content, the platform supports newsroom operations, audience growth, and monetization.
          </p>
        </div>

        <div class="module-grid">
          <article class="module-card">
            <div class="module-icon">📰</div>
            <h3>News Portal & Article CMS</h3>
            <p>Create, edit, schedule, and publish news articles with category management, tags, thumbnails, author profiles, and rich content layouts.</p>
          </article>
          <article class="module-card">
            <div class="module-icon">✅</div>
            <h3>Editorial Workflow</h3>
            <p>Manage content approval from writer to editor to publisher with draft, review, revision, scheduled, and published status tracking.</p>
          </article>
          <article class="module-card">
            <div class="module-icon">🚨</div>
            <h3>Breaking News System</h3>
            <p>Highlight urgent news with breaking labels, priority placement, push-ready content, and fast homepage visibility controls.</p>
          </article>
          <article class="module-card">
            <div class="module-icon">🎥</div>
            <h3>Video News & Live Coverage</h3>
            <p>Publish video reports, live streams, interviews, and event coverage with responsive media display for web and mobile users.</p>
          </article>
          <article class="module-card">
            <div class="module-icon">💬</div>
            <h3>Reader Engagement</h3>
            <p>Enable comments, reactions, sharing, bookmarks, newsletters, polls, and community interaction around published content.</p>
          </article>
          <article class="module-card">
            <div class="module-icon">📈</div>
            <h3>Analytics & Monetization</h3>
            <p>Track page views, popular topics, reading behavior, ad performance, subscriptions, and content performance from one dashboard.</p>
          </article>
        </div>
      </div>
    </section>

    <section id="workflow" class="section workflow-section">
      <div class="container workflow-grid">
        <div>
          <div class="section-kicker">Publishing Workflow</div>
          <h2 class="section-title">A faster way to plan, produce, publish, and measure news.</h2>
          <p class="section-text">
            Keep your media team organized with a clear publishing pipeline that supports writers, editors, reporters, admins, and business teams.
          </p>
        </div>

        <div class="workflow-list">
          <div class="workflow-item">
            <div class="workflow-number">01</div>
            <div>
              <h3>Plan Content</h3>
              <p>Create topic ideas, assign writers, define categories, and prepare editorial calendars for daily publication.</p>
            </div>
          </div>
          <div class="workflow-item">
            <div class="workflow-number">02</div>
            <div>
              <h3>Write & Review</h3>
              <p>Writers create drafts, editors review content, and publishers approve final articles before they go live.</p>
            </div>
          </div>
          <div class="workflow-item">
            <div class="workflow-number">03</div>
            <div>
              <h3>Publish Everywhere</h3>
              <p>Release articles, breaking news, video content, and live coverage across web, mobile, and social distribution channels.</p>
            </div>
          </div>
          <div class="workflow-item">
            <div class="workflow-number">04</div>
            <div>
              <h3>Analyze Performance</h3>
              <p>Monitor traffic, engagement, trending categories, top authors, and monetization results with real-time reporting.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="feature-board">
          <h3>Designed for online news portals, media companies, publishers, and digital magazines.</h3>
          <div class="feature-list">
            <div class="feature-pill"><span>✓</span> Homepage headline management</div>
            <div class="feature-pill"><span>✓</span> Article category and tag system</div>
            <div class="feature-pill"><span>✓</span> Multi-author and role permission</div>
            <div class="feature-pill"><span>✓</span> SEO metadata and friendly URLs</div>
            <div class="feature-pill"><span>✓</span> Media library and image gallery</div>
            <div class="feature-pill"><span>✓</span> Ads placement and subscription support</div>
            <div class="feature-pill"><span>✓</span> Comment moderation and reporting</div>
            <div class="feature-pill"><span>✓</span> Real-time reader analytics dashboard</div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-section">
      <div class="container">
        <div class="cta-box">
          <div class="cta-content">
            <h2>Ready to launch your own news and media platform?</h2>
            <p>
              Build a modern publishing ecosystem that helps your team publish faster, manage content better, and grow your audience with professional digital media tools.
            </p>
            <a href="#modules" class="btn">Start Building Platform</a>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
