<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Android Application Development</title>
  <style>
    :root {
      --bg: #050816;
      --bg-soft: #0b1024;
      --card: rgba(255, 255, 255, 0.065);
      --card-strong: rgba(255, 255, 255, 0.1);
      --text: #f8fafc;
      --muted: #a7b0c4;
      --line: rgba(255, 255, 255, 0.12);
      --primary: #22c55e;
      --secondary: #06b6d4;
      --accent: #a3e635;
      --warning: #facc15;
      --radius-lg: 28px;
      --radius-md: 18px;
      --shadow: 0 30px 80px rgba(0, 0, 0, 0.35);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background:
        radial-gradient(circle at top left, rgba(34, 197, 94, 0.24), transparent 34%),
        radial-gradient(circle at 85% 15%, rgba(6, 182, 212, 0.2), transparent 28%),
        linear-gradient(180deg, #050816 0%, #071018 45%, #050816 100%);
      color: var(--text);
      min-height: 100vh;
      line-height: 1.6;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .android-page {
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
      color: #dcfce7;
      font-size: 14px;
      font-weight: 700;
      backdrop-filter: blur(14px);
      margin-bottom: 22px;
    }

    .badge span {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      box-shadow: 0 0 18px rgba(34, 197, 94, 0.85);
    }

    .hero {
      display: grid;
      grid-template-columns: 1.02fr 0.98fr;
      gap: 42px;
      align-items: center;
      padding-bottom: 80px;
    }

    .hero h1 {
      max-width: 720px;
      font-size: clamp(42px, 6vw, 78px);
      line-height: 0.98;
      letter-spacing: -0.06em;
      margin-bottom: 24px;
    }

    .gradient-text {
      background: linear-gradient(135deg, #ffffff 0%, #bbf7d0 36%, #22c55e 68%, #06b6d4 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .hero p {
      max-width: 630px;
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
      font-weight: 800;
      transition: 0.25s ease;
    }

    .btn-primary {
      border: 0;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      box-shadow: 0 18px 40px rgba(34, 197, 94, 0.28);
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
      max-width: 650px;
    }

    .hero-point {
      padding: 14px;
      border: 1px solid var(--line);
      border-radius: 16px;
      background: rgba(255, 255, 255, 0.055);
      color: #dcfce7;
      font-size: 14px;
      font-weight: 700;
    }

    .phone-area {
      position: relative;
      min-height: 560px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .glow-orb {
      position: absolute;
      width: 360px;
      height: 360px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(34, 197, 94, 0.38), transparent 70%);
      filter: blur(10px);
    }

    .phone-mockup {
      position: relative;
      z-index: 2;
      width: min(330px, 88vw);
      padding: 14px;
      border-radius: 44px;
      border: 1px solid rgba(255, 255, 255, 0.18);
      background: linear-gradient(145deg, rgba(255,255,255,0.16), rgba(255,255,255,0.05));
      box-shadow: var(--shadow);
      backdrop-filter: blur(22px);
    }

    .phone-inner {
      overflow: hidden;
      min-height: 610px;
      border-radius: 34px;
      border: 1px solid rgba(255, 255, 255, 0.12);
      background:
        radial-gradient(circle at top, rgba(34, 197, 94, 0.22), transparent 28%),
        linear-gradient(180deg, #09111f 0%, #070b18 100%);
    }

    .phone-notch {
      width: 96px;
      height: 24px;
      margin: 10px auto 0;
      border-radius: 0 0 18px 18px;
      background: #050816;
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
      letter-spacing: -0.02em;
    }

    .android-icon {
      width: 34px;
      height: 34px;
      display: grid;
      place-items: center;
      border-radius: 12px;
      background: linear-gradient(135deg, rgba(34,197,94,0.95), rgba(6,182,212,0.95));
      box-shadow: 0 12px 26px rgba(34, 197, 94, 0.28);
    }

    .status-pill {
      padding: 7px 10px;
      border-radius: 999px;
      color: #dcfce7;
      background: rgba(34, 197, 94, 0.13);
      border: 1px solid rgba(34, 197, 94, 0.24);
      font-size: 12px;
      font-weight: 800;
    }

    .app-card {
      margin: 0 18px 16px;
      padding: 18px;
      border-radius: 24px;
      border: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.065);
    }

    .app-card.main {
      background:
        linear-gradient(135deg, rgba(34, 197, 94, 0.25), rgba(6, 182, 212, 0.12)),
        rgba(255,255,255,0.06);
    }

    .small-label {
      color: #bbf7d0;
      font-size: 12px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      margin-bottom: 8px;
    }

    .app-card h3 {
      font-size: 24px;
      line-height: 1.1;
      letter-spacing: -0.04em;
      margin-bottom: 10px;
    }

    .app-card p {
      color: var(--muted);
      font-size: 13px;
    }

    .metric-row {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
      margin-top: 16px;
    }

    .metric {
      padding: 12px 8px;
      border-radius: 16px;
      background: rgba(5, 8, 22, 0.45);
      text-align: center;
    }

    .metric strong {
      display: block;
      font-size: 18px;
      color: #ffffff;
      line-height: 1;
    }

    .metric span {
      color: var(--muted);
      font-size: 11px;
    }

    .feature-list {
      display: grid;
      gap: 10px;
    }

    .feature-mini {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding: 12px;
      border-radius: 18px;
      background: rgba(255, 255, 255, 0.055);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .feature-mini-left {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .feature-dot {
      width: 34px;
      height: 34px;
      border-radius: 13px;
      display: grid;
      place-items: center;
      background: rgba(34, 197, 94, 0.15);
      border: 1px solid rgba(34, 197, 94, 0.24);
    }

    .feature-mini h4 {
      font-size: 13px;
      line-height: 1.2;
    }

    .feature-mini small {
      color: var(--muted);
      font-size: 11px;
    }

    .progress {
      width: 54px;
      height: 7px;
      border-radius: 99px;
      overflow: hidden;
      background: rgba(255,255,255,0.1);
    }

    .progress i {
      display: block;
      height: 100%;
      border-radius: inherit;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
    }

    .floating-card {
      position: absolute;
      z-index: 3;
      padding: 16px;
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.16);
      background: rgba(11, 16, 36, 0.74);
      backdrop-filter: blur(18px);
      box-shadow: 0 22px 45px rgba(0,0,0,0.28);
    }

    .floating-card.one {
      left: 0;
      top: 78px;
      width: 190px;
    }

    .floating-card.two {
      right: 2px;
      bottom: 70px;
      width: 210px;
    }

    .floating-card strong {
      display: block;
      font-size: 28px;
      line-height: 1;
      margin-bottom: 6px;
    }

    .floating-card span {
      color: var(--muted);
      font-size: 13px;
    }

    .section-head {
      text-align: center;
      max-width: 780px;
      margin: 0 auto 42px;
    }

    .section-head h2 {
      font-size: clamp(32px, 4vw, 54px);
      line-height: 1;
      letter-spacing: -0.055em;
      margin-bottom: 18px;
    }

    .section-head p {
      color: var(--muted);
      font-size: 17px;
    }

    .stats {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      margin-bottom: 88px;
    }

    .stat-card {
      padding: 26px;
      border-radius: var(--radius-md);
      border: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.055);
      backdrop-filter: blur(16px);
    }

    .stat-card strong {
      display: block;
      font-size: 34px;
      line-height: 1;
      margin-bottom: 10px;
      background: linear-gradient(135deg, #fff, #86efac);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .stat-card span {
      color: var(--muted);
      font-size: 14px;
    }

    .features {
      padding: 88px 0;
    }

    .feature-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .feature-card {
      min-height: 270px;
      padding: 26px;
      border-radius: var(--radius-lg);
      border: 1px solid var(--line);
      background:
        linear-gradient(180deg, rgba(255,255,255,0.08), rgba(255,255,255,0.035));
      backdrop-filter: blur(18px);
      position: relative;
      overflow: hidden;
      transition: 0.25s ease;
    }

    .feature-card::after {
      content: "";
      position: absolute;
      inset: auto -40px -70px auto;
      width: 170px;
      height: 170px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(34, 197, 94, 0.18), transparent 70%);
    }

    .feature-card:hover {
      transform: translateY(-7px);
      border-color: rgba(34, 197, 94, 0.42);
    }

    .icon-box {
      width: 54px;
      height: 54px;
      display: grid;
      place-items: center;
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(34, 197, 94, 0.95), rgba(6, 182, 212, 0.9));
      font-size: 24px;
      margin-bottom: 22px;
      box-shadow: 0 18px 38px rgba(34, 197, 94, 0.24);
    }

    .feature-card h3 {
      font-size: 23px;
      letter-spacing: -0.035em;
      margin-bottom: 12px;
    }

    .feature-card p {
      color: var(--muted);
      font-size: 15px;
    }

    .showcase {
      padding: 40px 0 88px;
    }

    .showcase-panel {
      display: grid;
      grid-template-columns: 0.95fr 1.05fr;
      gap: 28px;
      padding: 24px;
      border-radius: 34px;
      border: 1px solid var(--line);
      background:
        radial-gradient(circle at top left, rgba(34, 197, 94, 0.16), transparent 36%),
        rgba(255, 255, 255, 0.055);
      backdrop-filter: blur(20px);
      box-shadow: var(--shadow);
    }

    .showcase-copy {
      padding: 28px;
    }

    .showcase-copy h2 {
      font-size: clamp(30px, 4vw, 50px);
      line-height: 1.02;
      letter-spacing: -0.055em;
      margin-bottom: 18px;
    }

    .showcase-copy p {
      color: var(--muted);
      margin-bottom: 24px;
    }

    .check-list {
      display: grid;
      gap: 13px;
    }

    .check-item {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      color: #dbeafe;
      font-weight: 650;
    }

    .check-item i {
      flex: 0 0 26px;
      width: 26px;
      height: 26px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      background: rgba(34, 197, 94, 0.15);
      color: #86efac;
      font-style: normal;
      font-size: 14px;
    }

    .dashboard-preview {
      padding: 20px;
      border-radius: 28px;
      border: 1px solid var(--line);
      background: rgba(5, 8, 22, 0.52);
      overflow: hidden;
    }

    .preview-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 18px;
    }

    .preview-title strong {
      display: block;
      font-size: 18px;
    }

    .preview-title span {
      color: var(--muted);
      font-size: 13px;
    }

    .sync-pill {
      padding: 8px 12px;
      border-radius: 99px;
      background: rgba(34, 197, 94, 0.13);
      border: 1px solid rgba(34, 197, 94, 0.24);
      color: #bbf7d0;
      font-size: 12px;
      font-weight: 800;
    }

    .preview-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 14px;
    }

    .preview-box {
      padding: 18px;
      min-height: 150px;
      border-radius: 22px;
      border: 1px solid rgba(255,255,255,0.08);
      background: rgba(255, 255, 255, 0.055);
    }

    .preview-box.wide {
      grid-column: 1 / -1;
      min-height: 120px;
    }

    .preview-box small {
      display: block;
      color: var(--muted);
      margin-bottom: 12px;
      font-weight: 700;
    }

    .bar-list {
      display: grid;
      gap: 10px;
    }

    .bar {
      height: 12px;
      border-radius: 99px;
      overflow: hidden;
      background: rgba(255, 255, 255, 0.1);
    }

    .bar i {
      display: block;
      height: 100%;
      border-radius: inherit;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
    }

    .circle-chart {
      width: 88px;
      height: 88px;
      margin: 12px auto 0;
      border-radius: 50%;
      display: grid;
      place-items: center;
      background: conic-gradient(var(--primary) 0 72%, rgba(255,255,255,0.12) 72% 100%);
    }

    .circle-chart span {
      width: 58px;
      height: 58px;
      display: grid;
      place-items: center;
      border-radius: 50%;
      background: #070b18;
      font-weight: 900;
    }

    .stack-row {
      display: flex;
      flex-wrap: wrap;
      gap: 9px;
    }

    .stack-tag {
      padding: 8px 11px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.065);
      border: 1px solid rgba(255, 255, 255, 0.09);
      color: #dbeafe;
      font-size: 12px;
      font-weight: 800;
    }

    .process {
      padding: 82px 0;
    }

    .process-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    .process-card {
      padding: 24px;
      border-radius: 24px;
      border: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.055);
      position: relative;
      overflow: hidden;
    }

    .process-number {
      width: 42px;
      height: 42px;
      display: grid;
      place-items: center;
      border-radius: 15px;
      background: rgba(34, 197, 94, 0.14);
      border: 1px solid rgba(34, 197, 94, 0.24);
      color: #bbf7d0;
      font-weight: 900;
      margin-bottom: 20px;
    }

    .process-card h3 {
      font-size: 20px;
      margin-bottom: 10px;
      letter-spacing: -0.03em;
    }

    .process-card p {
      color: var(--muted);
      font-size: 14px;
    }

    .cta {
      padding: 74px 20px;
      border-radius: 38px;
      text-align: center;
      border: 1px solid rgba(255, 255, 255, 0.14);
      background:
        radial-gradient(circle at 50% 0%, rgba(34, 197, 94, 0.28), transparent 36%),
        linear-gradient(135deg, rgba(34, 197, 94, 0.14), rgba(6, 182, 212, 0.12));
      box-shadow: var(--shadow);
    }

    .cta h2 {
      max-width: 820px;
      margin: 0 auto 18px;
      font-size: clamp(34px, 5vw, 62px);
      line-height: 1;
      letter-spacing: -0.06em;
    }

    .cta p {
      color: var(--muted);
      max-width: 680px;
      margin: 0 auto 28px;
      font-size: 17px;
    }

    @media (max-width: 980px) {
      .hero,
      .showcase-panel {
        grid-template-columns: 1fr;
      }

      .phone-area {
        min-height: 620px;
      }

      .floating-card.one {
        left: 6%;
      }

      .floating-card.two {
        right: 6%;
      }

      .stats,
      .process-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .feature-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 640px) {
      .android-page {
        padding: 48px 16px;
      }

      .hero {
        padding-bottom: 56px;
      }

      .hero-points,
      .stats,
      .feature-grid,
      .process-grid,
      .preview-grid {
        grid-template-columns: 1fr;
      }

      .floating-card {
        display: none;
      }

      .phone-area {
        min-height: 560px;
      }

      .phone-inner {
        min-height: 580px;
      }

      .showcase-panel {
        padding: 14px;
      }

      .showcase-copy {
        padding: 18px;
      }

      .preview-box.wide {
        grid-column: auto;
      }
    }
  </style>
</head>
<body>
  <main class="android-page">
    <section class="hero container">
      <div class="hero-copy">
        <div class="badge"><span></span> Android Application Development</div>
        <h1>Build fast, scalable, and modern <span class="gradient-text">Android apps</span>.</h1>
        <p>
          We create Android applications with clean UI, smooth performance, secure API integration, push notifications,
          real-time features, and production-ready architecture for business growth.
        </p>

        <div class="hero-actions">
          <a href="#features" class="btn btn-primary">Explore Features →</a>
          <a href="#process" class="btn btn-secondary">Development Flow</a>
        </div>

        <div class="hero-points">
          <div class="hero-point">Native Android Experience</div>
          <div class="hero-point">API & Backend Integration</div>
          <div class="hero-point">Play Store Ready</div>
        </div>
      </div>

      <div class="phone-area">
        <div class="glow-orb"></div>

        <div class="floating-card one">
          <strong>99%</strong>
          <span>Optimized mobile performance with responsive UI flow.</span>
        </div>

        <div class="phone-mockup">
          <div class="phone-inner">
            <div class="phone-notch"></div>
            <div class="app-top">
              <div class="app-brand">
                <div class="android-icon">🤖</div>
                <span>AndroidPro</span>
              </div>
              <div class="status-pill">Live</div>
            </div>

            <div class="app-card main">
              <div class="small-label">Mobile Dashboard</div>
              <h3>Business app control in your hand.</h3>
              <p>Monitor activity, users, orders, chats, reports, and notifications from one Android interface.</p>

              <div class="metric-row">
                <div class="metric">
                  <strong>24k</strong>
                  <span>Users</span>
                </div>
                <div class="metric">
                  <strong>4.9</strong>
                  <span>Rating</span>
                </div>
                <div class="metric">
                  <strong>1.2s</strong>
                  <span>Load</span>
                </div>
              </div>
            </div>

            <div class="app-card">
              <div class="feature-list">
                <div class="feature-mini">
                  <div class="feature-mini-left">
                    <div class="feature-dot">🔔</div>
                    <div>
                      <h4>Push Notification</h4>
                      <small>Real-time alerts</small>
                    </div>
                  </div>
                  <div class="progress"><i style="width: 88%"></i></div>
                </div>

                <div class="feature-mini">
                  <div class="feature-mini-left">
                    <div class="feature-dot">🔐</div>
                    <div>
                      <h4>Secure Login</h4>
                      <small>JWT / OAuth ready</small>
                    </div>
                  </div>
                  <div class="progress"><i style="width: 76%"></i></div>
                </div>

                <div class="feature-mini">
                  <div class="feature-mini-left">
                    <div class="feature-dot">⚡</div>
                    <div>
                      <h4>Fast API Sync</h4>
                      <small>Reliable data flow</small>
                    </div>
                  </div>
                  <div class="progress"><i style="width: 92%"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="floating-card two">
          <strong>Play</strong>
          <span>Prepared for Android release, testing, and store deployment.</span>
        </div>
      </div>
    </section>

    <section class="container stats">
      <div class="stat-card">
        <strong>4+</strong>
        <span>Android app categories supported</span>
      </div>
      <div class="stat-card">
        <strong>API</strong>
        <span>Backend-ready integration flow</span>
      </div>
      <div class="stat-card">
        <strong>UI/UX</strong>
        <span>Clean mobile-first interface</span>
      </div>
      <div class="stat-card">
        <strong>Store</strong>
        <span>Release-ready application build</span>
      </div>
    </section>

    <section class="features container" id="features">
      <div class="section-head">
        <h2>Everything your Android application needs.</h2>
        <p>
          From user authentication to real-time updates, we develop Android apps with features that are ready for daily business operations.
        </p>
      </div>

      <div class="feature-grid">
        <div class="feature-card">
          <div class="icon-box">📱</div>
          <h3>Modern Mobile UI</h3>
          <p>Clean, responsive, and user-friendly Android interface designed for smooth navigation and better user experience.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">🔐</div>
          <h3>Authentication System</h3>
          <p>Secure login, registration, forgot password, OTP verification, role access, and token-based authentication.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">🔌</div>
          <h3>API Integration</h3>
          <p>Connect your Android app with backend services, payment gateways, maps, file uploads, and third-party platforms.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">🔔</div>
          <h3>Push Notifications</h3>
          <p>Send real-time notifications for orders, messages, reminders, activities, approvals, and important updates.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">💬</div>
          <h3>Real-Time Features</h3>
          <p>Support for chat, live tracking, status updates, online presence, and instant data refresh using socket technology.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">🚀</div>
          <h3>Play Store Deployment</h3>
          <p>Prepare app build, signing configuration, release assets, testing flow, and deployment package for Google Play.</p>
        </div>
      </div>
    </section>

    <section class="showcase container">
      <div class="showcase-panel">
        <div class="showcase-copy">
          <div class="badge"><span></span> App Architecture</div>
          <h2>Built with a scalable mobile architecture.</h2>
          <p>
            Your Android application can be developed for customer apps, admin apps, operational tools, marketplace platforms,
            booking systems, delivery apps, education apps, and internal company systems.
          </p>

          <div class="check-list">
            <div class="check-item"><i>✓</i> Clean code structure for easier maintenance and future updates.</div>
            <div class="check-item"><i>✓</i> Secure communication between mobile app and backend API.</div>
            <div class="check-item"><i>✓</i> Support for offline states, loading states, error handling, and empty states.</div>
            <div class="check-item"><i>✓</i> Flexible feature modules based on your business workflow.</div>
          </div>
        </div>

        <div class="dashboard-preview">
          <div class="preview-top">
            <div class="preview-title">
              <strong>Android App Preview</strong>
              <span>Performance, modules, and integration overview</span>
            </div>
            <div class="sync-pill">Synced</div>
          </div>

          <div class="preview-grid">
            <div class="preview-box">
              <small>App Performance</small>
              <div class="bar-list">
                <div class="bar"><i style="width: 92%"></i></div>
                <div class="bar"><i style="width: 76%"></i></div>
                <div class="bar"><i style="width: 84%"></i></div>
                <div class="bar"><i style="width: 68%"></i></div>
              </div>
            </div>

            <div class="preview-box">
              <small>User Activity</small>
              <div class="circle-chart"><span>72%</span></div>
            </div>

            <div class="preview-box wide">
              <small>Technology Stack</small>
              <div class="stack-row">
                <span class="stack-tag">Kotlin</span>
                <span class="stack-tag">Java</span>
                <span class="stack-tag">Flutter</span>
                <span class="stack-tag">React Native</span>
                <span class="stack-tag">Firebase</span>
                <span class="stack-tag">REST API</span>
                <span class="stack-tag">Socket</span>
                <span class="stack-tag">Google Play</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="process container" id="process">
      <div class="section-head">
        <h2>Simple development process.</h2>
        <p>We turn your idea into a usable Android application through a clear and structured development flow.</p>
      </div>

      <div class="process-grid">
        <div class="process-card">
          <div class="process-number">01</div>
          <h3>Requirement</h3>
          <p>Understand business goals, user roles, app flow, feature list, and technical requirements.</p>
        </div>

        <div class="process-card">
          <div class="process-number">02</div>
          <h3>UI Design</h3>
          <p>Create mobile layouts, user journey, component structure, and interface direction.</p>
        </div>

        <div class="process-card">
          <div class="process-number">03</div>
          <h3>Development</h3>
          <p>Build Android features, connect API, handle data, authentication, notifications, and testing.</p>
        </div>

        <div class="process-card">
          <div class="process-number">04</div>
          <h3>Release</h3>
          <p>Prepare production build, fix issues, configure signing, and publish the app to users.</p>
        </div>
      </div>
    </section>

    <section class="container">
      <div class="cta">
        <h2>Ready to launch your Android application?</h2>
        <p>
          Build a powerful Android app for your business, startup, marketplace, community, school, company operation,
          or digital platform with a clean and scalable mobile experience.
        </p>
        <a href="#features" class="btn btn-primary">Start Android Project →</a>
      </div>
    </section>
  </main>
</body>
</html>
