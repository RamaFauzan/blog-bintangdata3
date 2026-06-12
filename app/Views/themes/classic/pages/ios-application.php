<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>iOS Application Development</title>
  <style>
    :root {
      --bg: #050816;
      --bg-soft: #0b1024;
      --card: rgba(255, 255, 255, 0.07);
      --card-strong: rgba(255, 255, 255, 0.11);
      --text: #f8fafc;
      --muted: #a8b3cf;
      --line: rgba(255, 255, 255, 0.13);
      --primary: #60a5fa;
      --secondary: #a78bfa;
      --accent: #22d3ee;
      --pink: #f472b6;
      --radius-lg: 30px;
      --radius-md: 18px;
      --shadow: 0 34px 90px rgba(0, 0, 0, 0.38);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background:
        radial-gradient(circle at top left, rgba(96, 165, 250, 0.24), transparent 34%),
        radial-gradient(circle at 86% 12%, rgba(167, 139, 250, 0.22), transparent 28%),
        radial-gradient(circle at 55% 86%, rgba(34, 211, 238, 0.12), transparent 34%),
        linear-gradient(180deg, #050816 0%, #071224 48%, #050816 100%);
      color: var(--text);
      min-height: 100vh;
      line-height: 1.6;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .ios-page {
      overflow: hidden;
      padding: 72px 20px;
    }

    .container {
      width: min(1180px, 100%);
      margin: 0 auto;
    }

    .badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 9px 14px;
      border: 1px solid var(--line);
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.06);
      color: #dbeafe;
      font-size: 14px;
      font-weight: 750;
      backdrop-filter: blur(14px);
      margin-bottom: 22px;
    }

    .badge span {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      box-shadow: 0 0 20px rgba(96, 165, 250, 0.9);
    }

    .hero {
      display: grid;
      grid-template-columns: 1.02fr 0.98fr;
      gap: 42px;
      align-items: center;
      padding-bottom: 84px;
    }

    .hero h1 {
      max-width: 740px;
      font-size: clamp(42px, 6vw, 78px);
      line-height: 0.98;
      letter-spacing: -0.06em;
      margin-bottom: 24px;
    }

    .gradient-text {
      background: linear-gradient(135deg, #ffffff 0%, #dbeafe 34%, #60a5fa 62%, #a78bfa 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .hero p {
      max-width: 650px;
      color: var(--muted);
      font-size: 18px;
      margin-bottom: 32px;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      margin-bottom: 34px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      min-height: 52px;
      padding: 0 22px;
      border-radius: 999px;
      border: 1px solid var(--line);
      font-weight: 850;
      transition: 0.25s ease;
    }

    .btn-primary {
      border: 0;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      box-shadow: 0 18px 40px rgba(96, 165, 250, 0.28);
    }

    .btn-secondary {
      background: rgba(255, 255, 255, 0.06);
      color: #eef4ff;
    }

    .btn:hover {
      transform: translateY(-3px);
    }

    .hero-points {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
      max-width: 660px;
    }

    .hero-point {
      padding: 14px;
      border: 1px solid var(--line);
      border-radius: 16px;
      background: rgba(255, 255, 255, 0.055);
      color: #dbeafe;
      font-size: 14px;
      font-weight: 750;
    }

    .phone-area {
      position: relative;
      min-height: 575px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .glow-orb {
      position: absolute;
      width: 380px;
      height: 380px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(96, 165, 250, 0.34), rgba(167, 139, 250, 0.18), transparent 70%);
      filter: blur(10px);
    }

    .phone-mockup {
      position: relative;
      z-index: 2;
      width: min(332px, 88vw);
      padding: 14px;
      border-radius: 48px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      background: linear-gradient(145deg, rgba(255,255,255,0.18), rgba(255,255,255,0.045));
      box-shadow: var(--shadow);
      backdrop-filter: blur(22px);
    }

    .phone-inner {
      overflow: hidden;
      min-height: 620px;
      border-radius: 38px;
      border: 1px solid rgba(255, 255, 255, 0.13);
      background:
        radial-gradient(circle at top, rgba(96, 165, 250, 0.26), transparent 31%),
        linear-gradient(180deg, #08111f 0%, #070a16 100%);
    }

    .dynamic-island {
      width: 108px;
      height: 30px;
      margin: 12px auto 0;
      border-radius: 999px;
      background: #030712;
      box-shadow: inset 0 0 0 1px rgba(255,255,255,0.06);
    }

    .app-top {
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .app-brand {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: 900;
    }

    .app-icon {
      width: 38px;
      height: 38px;
      border-radius: 13px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      display: grid;
      place-items: center;
      box-shadow: 0 12px 24px rgba(96, 165, 250, 0.3);
    }

    .app-menu {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: rgba(255,255,255,0.08);
      display: grid;
      place-items: center;
      color: #dbeafe;
    }

    .app-card {
      margin: 0 20px 14px;
      padding: 18px;
      border-radius: 24px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255,255,255,0.12);
    }

    .app-card.main {
      background:
        linear-gradient(135deg, rgba(96, 165, 250, 0.9), rgba(167, 139, 250, 0.88)),
        linear-gradient(180deg, rgba(255,255,255,0.1), transparent);
      color: white;
      min-height: 168px;
      position: relative;
      overflow: hidden;
    }

    .app-card.main::after {
      content: "";
      position: absolute;
      width: 125px;
      height: 125px;
      border-radius: 34px;
      background: rgba(255,255,255,0.18);
      right: -35px;
      bottom: -35px;
      transform: rotate(18deg);
    }

    .app-label {
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      opacity: 0.78;
      font-weight: 850;
      margin-bottom: 8px;
    }

    .app-title {
      position: relative;
      z-index: 1;
      font-size: 24px;
      line-height: 1.1;
      font-weight: 950;
      letter-spacing: -0.04em;
      max-width: 220px;
      margin-bottom: 16px;
    }

    .app-progress {
      position: relative;
      z-index: 1;
      height: 8px;
      border-radius: 999px;
      background: rgba(255,255,255,0.26);
      overflow: hidden;
    }

    .app-progress span {
      display: block;
      width: 72%;
      height: 100%;
      border-radius: inherit;
      background: #fff;
    }

    .app-list {
      display: grid;
      gap: 10px;
      margin: 0 20px 18px;
    }

    .app-row {
      padding: 14px;
      border-radius: 18px;
      display: flex;
      align-items: center;
      gap: 12px;
      background: rgba(255, 255, 255, 0.065);
      border: 1px solid rgba(255,255,255,0.1);
    }

    .row-icon {
      width: 38px;
      height: 38px;
      border-radius: 13px;
      display: grid;
      place-items: center;
      background: rgba(96,165,250,0.18);
      color: #bfdbfe;
      flex: 0 0 auto;
    }

    .row-text strong {
      display: block;
      font-size: 13px;
      margin-bottom: 2px;
    }

    .row-text span {
      display: block;
      color: var(--muted);
      font-size: 12px;
    }

    .floating-card {
      position: absolute;
      z-index: 3;
      border: 1px solid rgba(255,255,255,0.16);
      background: rgba(8, 14, 32, 0.72);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      box-shadow: var(--shadow);
      padding: 16px;
    }

    .floating-card.one {
      left: 0;
      top: 88px;
      width: 180px;
    }

    .floating-card.two {
      right: 4px;
      bottom: 94px;
      width: 194px;
    }

    .floating-card .mini-title {
      color: #dbeafe;
      font-size: 13px;
      font-weight: 900;
      margin-bottom: 8px;
    }

    .mini-bars {
      display: grid;
      gap: 8px;
    }

    .mini-bars span {
      height: 8px;
      border-radius: 999px;
      background: rgba(255,255,255,0.12);
      overflow: hidden;
    }

    .mini-bars i {
      display: block;
      height: 100%;
      border-radius: inherit;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
    }

    .metric-line {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      font-size: 13px;
      color: var(--muted);
    }

    .metric-line strong {
      color: #fff;
      font-size: 22px;
    }

    .section {
      padding: 78px 0;
    }

    .section-heading {
      max-width: 760px;
      margin-bottom: 36px;
    }

    .section-heading.center {
      margin-inline: auto;
      text-align: center;
    }

    .eyebrow {
      display: inline-flex;
      margin-bottom: 14px;
      color: #bfdbfe;
      font-weight: 900;
      font-size: 13px;
      letter-spacing: 0.12em;
      text-transform: uppercase;
    }

    .section h2 {
      font-size: clamp(32px, 4vw, 54px);
      line-height: 1.05;
      letter-spacing: -0.05em;
      margin-bottom: 16px;
    }

    .section-heading p {
      color: var(--muted);
      font-size: 17px;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    .stat-card {
      padding: 24px;
      border-radius: var(--radius-md);
      background: var(--card);
      border: 1px solid var(--line);
      backdrop-filter: blur(18px);
    }

    .stat-card strong {
      display: block;
      font-size: 34px;
      line-height: 1;
      letter-spacing: -0.04em;
      margin-bottom: 10px;
      background: linear-gradient(135deg, #fff, #bfdbfe, #a78bfa);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .stat-card span {
      color: var(--muted);
      font-size: 14px;
    }

    .feature-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .feature-card {
      position: relative;
      overflow: hidden;
      min-height: 250px;
      padding: 26px;
      border-radius: var(--radius-lg);
      border: 1px solid var(--line);
      background: linear-gradient(180deg, rgba(255,255,255,0.085), rgba(255,255,255,0.045));
      backdrop-filter: blur(18px);
    }

    .feature-card::after {
      content: "";
      position: absolute;
      inset: auto -40px -60px auto;
      width: 160px;
      height: 160px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(96,165,250,0.25), transparent 68%);
    }

    .feature-icon {
      width: 52px;
      height: 52px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, rgba(96,165,250,0.25), rgba(167,139,250,0.18));
      border: 1px solid rgba(255,255,255,0.12);
      margin-bottom: 22px;
      font-size: 24px;
    }

    .feature-card h3 {
      font-size: 21px;
      letter-spacing: -0.03em;
      margin-bottom: 12px;
    }

    .feature-card p {
      color: var(--muted);
      font-size: 15px;
    }

    .split-section {
      display: grid;
      grid-template-columns: 0.92fr 1.08fr;
      gap: 32px;
      align-items: stretch;
    }

    .glass-panel {
      border-radius: var(--radius-lg);
      border: 1px solid var(--line);
      background: rgba(255,255,255,0.065);
      backdrop-filter: blur(18px);
      padding: 32px;
      box-shadow: 0 22px 70px rgba(0,0,0,0.2);
    }

    .glass-panel h3 {
      font-size: 28px;
      line-height: 1.1;
      letter-spacing: -0.04em;
      margin-bottom: 16px;
    }

    .glass-panel p {
      color: var(--muted);
      margin-bottom: 22px;
    }

    .check-list {
      display: grid;
      gap: 14px;
      list-style: none;
    }

    .check-list li {
      display: flex;
      gap: 12px;
      color: #dce7fb;
      align-items: flex-start;
    }

    .check-list li::before {
      content: "✓";
      width: 24px;
      height: 24px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: white;
      font-size: 13px;
      font-weight: 900;
      flex: 0 0 auto;
      margin-top: 1px;
    }

    .timeline {
      display: grid;
      gap: 14px;
    }

    .timeline-item {
      display: grid;
      grid-template-columns: 58px 1fr;
      gap: 16px;
      padding: 18px;
      border-radius: 22px;
      background: rgba(255,255,255,0.055);
      border: 1px solid rgba(255,255,255,0.1);
    }

    .timeline-number {
      width: 48px;
      height: 48px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      font-weight: 950;
      background: rgba(96,165,250,0.16);
      border: 1px solid rgba(255,255,255,0.13);
      color: #bfdbfe;
    }

    .timeline-content h4 {
      font-size: 18px;
      margin-bottom: 4px;
    }

    .timeline-content p {
      color: var(--muted);
      font-size: 14px;
    }

    .stack-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 14px;
    }

    .stack-item {
      padding: 20px;
      min-height: 132px;
      border-radius: 22px;
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.11);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: 0.25s ease;
    }

    .stack-item:hover {
      transform: translateY(-4px);
      background: rgba(255,255,255,0.09);
    }

    .stack-icon {
      width: 42px;
      height: 42px;
      border-radius: 15px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, rgba(96,165,250,0.22), rgba(167,139,250,0.16));
      margin-bottom: 18px;
    }

    .stack-item strong {
      font-size: 16px;
      display: block;
      margin-bottom: 4px;
    }

    .stack-item span {
      color: var(--muted);
      font-size: 13px;
    }

    .showcase {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .showcase-card {
      overflow: hidden;
      border-radius: var(--radius-lg);
      border: 1px solid var(--line);
      background: rgba(255,255,255,0.06);
    }

    .showcase-visual {
      min-height: 210px;
      padding: 18px;
      background:
        radial-gradient(circle at 30% 20%, rgba(96,165,250,0.24), transparent 34%),
        linear-gradient(135deg, rgba(255,255,255,0.08), rgba(255,255,255,0.025));
      display: grid;
      align-items: end;
    }

    .mini-screen {
      border-radius: 22px;
      border: 1px solid rgba(255,255,255,0.12);
      background: rgba(5,8,22,0.74);
      padding: 14px;
      box-shadow: 0 18px 50px rgba(0,0,0,0.25);
    }

    .mini-screen .line {
      height: 10px;
      border-radius: 999px;
      background: rgba(255,255,255,0.13);
      margin-bottom: 10px;
    }

    .mini-screen .line:nth-child(2) { width: 70%; }
    .mini-screen .line:nth-child(3) { width: 86%; }
    .mini-screen .line:nth-child(4) { width: 56%; }

    .showcase-content {
      padding: 24px;
    }

    .showcase-content h3 {
      font-size: 20px;
      margin-bottom: 10px;
      letter-spacing: -0.03em;
    }

    .showcase-content p {
      color: var(--muted);
      font-size: 14px;
    }

    .cta-box {
      position: relative;
      overflow: hidden;
      border-radius: 36px;
      border: 1px solid rgba(255,255,255,0.14);
      background:
        radial-gradient(circle at top left, rgba(96,165,250,0.32), transparent 35%),
        linear-gradient(135deg, rgba(255,255,255,0.1), rgba(255,255,255,0.045));
      padding: 54px;
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: center;
      gap: 28px;
      box-shadow: var(--shadow);
    }

    .cta-box::after {
      content: "";
      position: absolute;
      width: 260px;
      height: 260px;
      border-radius: 50%;
      right: -80px;
      bottom: -100px;
      background: radial-gradient(circle, rgba(167,139,250,0.28), transparent 68%);
    }

    .cta-box h2 {
      font-size: clamp(32px, 4vw, 52px);
      line-height: 1.02;
      letter-spacing: -0.05em;
      margin-bottom: 14px;
    }

    .cta-box p {
      color: var(--muted);
      max-width: 650px;
    }

    @media (max-width: 1024px) {
      .hero,
      .split-section,
      .cta-box {
        grid-template-columns: 1fr;
      }

      .phone-area {
        min-height: 660px;
      }

      .stats-grid,
      .stack-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .feature-grid,
      .showcase {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 700px) {
      .ios-page {
        padding: 48px 16px;
      }

      .hero {
        padding-bottom: 48px;
      }

      .hero h1 {
        font-size: clamp(38px, 13vw, 58px);
      }

      .hero-points,
      .stats-grid,
      .feature-grid,
      .stack-grid,
      .showcase {
        grid-template-columns: 1fr;
      }

      .floating-card {
        display: none;
      }

      .phone-area {
        min-height: auto;
        padding: 24px 0;
      }

      .phone-inner {
        min-height: 590px;
      }

      .glass-panel,
      .cta-box {
        padding: 26px;
        border-radius: 26px;
      }

      .timeline-item {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <main class="ios-page">
    <section class="hero container">
      <div class="hero-content">
        <div class="badge"><span></span> iOS Application Development</div>
        <h1>Build premium <span class="gradient-text">iOS apps</span> with smooth, secure, and scalable experiences.</h1>
        <p>
          We design and develop iPhone and iPad applications that feel native, perform fast, and are ready for App Store release. From MVP to enterprise mobile systems, every screen is built with clean UI, stable architecture, and user-focused experience.
        </p>

        <div class="hero-actions">
          <a href="#consultation" class="btn btn-primary">Start iOS Project →</a>
          <a href="#features" class="btn btn-secondary">Explore Features</a>
        </div>

        <div class="hero-points">
          <div class="hero-point">Native iOS UI</div>
          <div class="hero-point">App Store Ready</div>
          <div class="hero-point">Secure API Integration</div>
        </div>
      </div>

      <div class="phone-area" aria-label="iOS application preview">
        <div class="glow-orb"></div>

        <div class="floating-card one">
          <div class="mini-title">Build Quality</div>
          <div class="mini-bars">
            <span><i style="width: 92%;"></i></span>
            <span><i style="width: 78%;"></i></span>
            <span><i style="width: 86%;"></i></span>
          </div>
        </div>

        <div class="phone-mockup">
          <div class="phone-inner">
            <div class="dynamic-island"></div>

            <div class="app-top">
              <div class="app-brand">
                <div class="app-icon">⌁</div>
                <span>iNova</span>
              </div>
              <div class="app-menu">••</div>
            </div>

            <div class="app-card main">
              <div class="app-label">Current Sprint</div>
              <div class="app-title">Native mobile experience for iPhone users</div>
              <div class="app-progress"><span></span></div>
            </div>

            <div class="app-list">
              <div class="app-row">
                <div class="row-icon">⚡</div>
                <div class="row-text">
                  <strong>Fast Performance</strong>
                  <span>Optimized launch time and smooth navigation</span>
                </div>
              </div>
              <div class="app-row">
                <div class="row-icon">🔐</div>
                <div class="row-text">
                  <strong>Secure Access</strong>
                  <span>Authentication, token, and privacy protection</span>
                </div>
              </div>
              <div class="app-row">
                <div class="row-icon">☁</div>
                <div class="row-text">
                  <strong>Cloud Sync</strong>
                  <span>Real-time data connected to your backend</span>
                </div>
              </div>
            </div>

            <div class="app-card">
              <div class="metric-line">
                <span>Release Readiness</span>
                <strong>96%</strong>
              </div>
            </div>
          </div>
        </div>

        <div class="floating-card two">
          <div class="mini-title">App Metrics</div>
          <div class="metric-line">
            <span>Crash-free</span>
            <strong>99%</strong>
          </div>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="stats-grid">
        <div class="stat-card">
          <strong>01</strong>
          <span>Native and cross-platform development options.</span>
        </div>
        <div class="stat-card">
          <strong>02</strong>
          <span>Clean UI based on Apple-style interaction patterns.</span>
        </div>
        <div class="stat-card">
          <strong>03</strong>
          <span>Backend, payment, notification, and map integration.</span>
        </div>
        <div class="stat-card">
          <strong>04</strong>
          <span>Testing, deployment, and App Store submission support.</span>
        </div>
      </div>
    </section>

    <section class="section container" id="features">
      <div class="section-heading center">
        <span class="eyebrow">Core Capabilities</span>
        <h2>Everything needed to launch a polished iOS application.</h2>
        <p>
          We help you transform business ideas into reliable mobile products with elegant interface, strong architecture, and production-ready integrations.
        </p>
      </div>

      <div class="feature-grid">
        <article class="feature-card">
          <div class="feature-icon">📱</div>
          <h3>Native iOS Experience</h3>
          <p>Responsive layouts, smooth animations, intuitive gestures, and mobile-first screens designed for iPhone and iPad users.</p>
        </article>

        <article class="feature-card">
          <div class="feature-icon">🔔</div>
          <h3>Push Notifications</h3>
          <p>Real-time notifications for reminders, orders, chats, updates, activity alerts, and personalized user engagement.</p>
        </article>

        <article class="feature-card">
          <div class="feature-icon">🔐</div>
          <h3>Secure Authentication</h3>
          <p>Login, register, OTP, social sign-in, biometric flow, role-based access, and secure session management.</p>
        </article>

        <article class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>Payment Integration</h3>
          <p>Subscription, checkout, in-app purchase planning, wallet flow, and transaction history for business apps.</p>
        </article>

        <article class="feature-card">
          <div class="feature-icon">🧭</div>
          <h3>Maps & Location</h3>
          <p>Location tracking, nearby services, route direction, delivery status, branch locator, and geolocation-based features.</p>
        </article>

        <article class="feature-card">
          <div class="feature-icon">☁</div>
          <h3>Backend Integration</h3>
          <p>API integration, file upload, real-time socket, cloud storage, admin dashboard connection, and scalable data flow.</p>
        </article>
      </div>
    </section>

    <section class="section container">
      <div class="split-section">
        <div class="glass-panel">
          <span class="eyebrow">Why Choose iOS</span>
          <h3>Premium mobile product for loyal and high-value users.</h3>
          <p>
            iOS applications are ideal for businesses that want a refined user experience, strong brand impression, and reliable performance across Apple devices.
          </p>
          <ul class="check-list">
            <li>Elegant interface with consistent user journey.</li>
            <li>High performance for daily usage and complex workflows.</li>
            <li>Secure architecture for accounts, payments, and private data.</li>
            <li>Scalable foundation for future feature expansion.</li>
          </ul>
        </div>

        <div class="glass-panel">
          <span class="eyebrow">Development Flow</span>
          <div class="timeline">
            <div class="timeline-item">
              <div class="timeline-number">01</div>
              <div class="timeline-content">
                <h4>Requirement & Product Mapping</h4>
                <p>Define business goals, user roles, main features, app structure, and integration needs.</p>
              </div>
            </div>

            <div class="timeline-item">
              <div class="timeline-number">02</div>
              <div class="timeline-content">
                <h4>UI/UX Design</h4>
                <p>Create clean mobile screens, user flow, design system, prototype, and responsive layout behavior.</p>
              </div>
            </div>

            <div class="timeline-item">
              <div class="timeline-number">03</div>
              <div class="timeline-content">
                <h4>Development & Integration</h4>
                <p>Build app features, connect API, configure auth, upload media, notification, payment, and real-time data.</p>
              </div>
            </div>

            <div class="timeline-item">
              <div class="timeline-number">04</div>
              <div class="timeline-content">
                <h4>Testing & App Store Release</h4>
                <p>Test performance, fix bugs, prepare build, configure certificates, and support App Store submission.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="section-heading center">
        <span class="eyebrow">Technology Stack</span>
        <h2>Flexible stack for native or cross-platform iOS apps.</h2>
        <p>
          Choose the right technology based on your budget, timeline, performance needs, and long-term product roadmap.
        </p>
      </div>

      <div class="stack-grid">
        <div class="stack-item">
          <div>
            <div class="stack-icon">🍎</div>
            <strong>Swift</strong>
            <span>Native iOS development</span>
          </div>
        </div>
        <div class="stack-item">
          <div>
            <div class="stack-icon">⚛</div>
            <strong>React Native</strong>
            <span>Cross-platform mobile app</span>
          </div>
        </div>
        <div class="stack-item">
          <div>
            <div class="stack-icon">🎯</div>
            <strong>Flutter</strong>
            <span>High-quality UI app</span>
          </div>
        </div>
        <div class="stack-item">
          <div>
            <div class="stack-icon">🧩</div>
            <strong>API Integration</strong>
            <span>REST, GraphQL, Socket</span>
          </div>
        </div>
        <div class="stack-item">
          <div>
            <div class="stack-icon">🔥</div>
            <strong>Firebase</strong>
            <span>Auth, push, analytics</span>
          </div>
        </div>
        <div class="stack-item">
          <div>
            <div class="stack-icon">🗄</div>
            <strong>Backend</strong>
            <span>NestJS, Node.js, Laravel</span>
          </div>
        </div>
        <div class="stack-item">
          <div>
            <div class="stack-icon">🧪</div>
            <strong>Testing</strong>
            <span>QA, device, release test</span>
          </div>
        </div>
        <div class="stack-item">
          <div>
            <div class="stack-icon">🚀</div>
            <strong>Deployment</strong>
            <span>TestFlight and App Store</span>
          </div>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="section-heading center">
        <span class="eyebrow">Use Cases</span>
        <h2>iOS apps for different business models.</h2>
        <p>
          Build a mobile app that fits your service, workflow, community, marketplace, or digital product ecosystem.
        </p>
      </div>

      <div class="showcase">
        <article class="showcase-card">
          <div class="showcase-visual">
            <div class="mini-screen">
              <div class="line" style="width: 48%;"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
          </div>
          <div class="showcase-content">
            <h3>Business & Service Apps</h3>
            <p>Booking, service request, CRM, internal operations, employee apps, and customer support platforms.</p>
          </div>
        </article>

        <article class="showcase-card">
          <div class="showcase-visual">
            <div class="mini-screen">
              <div class="line" style="width: 38%;"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
          </div>
          <div class="showcase-content">
            <h3>E-Commerce & Marketplace</h3>
            <p>Product catalog, cart, checkout, payment, order tracking, seller panel, and promotion system.</p>
          </div>
        </article>

        <article class="showcase-card">
          <div class="showcase-visual">
            <div class="mini-screen">
              <div class="line" style="width: 56%;"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
          </div>
          <div class="showcase-content">
            <h3>Community & Media Apps</h3>
            <p>Content feed, live streaming, membership, private chat, notification, creator tools, and analytics.</p>
          </div>
        </article>
      </div>
    </section>

    <section class="section container" id="consultation">
      <div class="cta-box">
        <div>
          <h2>Ready to build your iOS application?</h2>
          <p>
            Create a premium mobile experience for your users with strong design, scalable features, and App Store-ready implementation.
          </p>
        </div>
        <a href="#" class="btn btn-primary">Discuss Project →</a>
      </div>
    </section>
  </main>
</body>
</html>
