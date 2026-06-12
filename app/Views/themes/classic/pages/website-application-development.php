<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website Application Development</title>
  <style>
    :root {
      --bg: #050816;
      --bg-soft: #0b1024;
      --card: rgba(255, 255, 255, 0.07);
      --card-strong: rgba(255, 255, 255, 0.11);
      --text: #f8fafc;
      --muted: #a8b3cf;
      --line: rgba(255, 255, 255, 0.12);
      --primary: #38bdf8;
      --secondary: #6366f1;
      --accent: #a855f7;
      --success: #22c55e;
      --warning: #f59e0b;
      --danger: #fb7185;
      --radius-lg: 30px;
      --radius-md: 20px;
      --shadow: 0 30px 90px rgba(0, 0, 0, 0.42);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background:
        radial-gradient(circle at top left, rgba(56, 189, 248, 0.22), transparent 34%),
        radial-gradient(circle at 85% 8%, rgba(168, 85, 247, 0.22), transparent 28%),
        radial-gradient(circle at 50% 100%, rgba(99, 102, 241, 0.14), transparent 35%),
        linear-gradient(180deg, #050816 0%, #081121 48%, #050816 100%);
      color: var(--text);
      min-height: 100vh;
      line-height: 1.65;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .website-app-page {
      overflow: hidden;
      padding: 76px 20px;
    }

    .container {
      width: min(1180px, 100%);
      margin: 0 auto;
    }

    .badge {
      display: inline-flex;
      align-items: center;
      gap: 9px;
      padding: 9px 15px;
      border: 1px solid var(--line);
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.06);
      color: #dbeafe;
      font-size: 14px;
      font-weight: 800;
      backdrop-filter: blur(14px);
      margin-bottom: 22px;
    }

    .badge span {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary), var(--accent));
      box-shadow: 0 0 20px rgba(56, 189, 248, 0.8);
    }

    .hero {
      display: grid;
      grid-template-columns: 1.02fr 0.98fr;
      gap: 42px;
      align-items: center;
      padding-bottom: 84px;
    }

    .hero h1 {
      max-width: 760px;
      font-size: clamp(42px, 6vw, 78px);
      line-height: 0.98;
      letter-spacing: -0.06em;
      margin-bottom: 24px;
    }

    .gradient-text {
      background: linear-gradient(135deg, #ffffff 0%, #bae6fd 34%, #38bdf8 58%, #a855f7 100%);
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
      font-weight: 900;
      transition: 0.25s ease;
    }

    .btn-primary {
      border: 0;
      background: linear-gradient(135deg, var(--primary), var(--secondary), var(--accent));
      box-shadow: 0 18px 42px rgba(56, 189, 248, 0.28);
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
      max-width: 690px;
    }

    .hero-point {
      padding: 14px;
      border: 1px solid var(--line);
      border-radius: 16px;
      background: rgba(255, 255, 255, 0.055);
      color: #dbeafe;
      font-size: 14px;
      font-weight: 800;
    }

    .browser-area {
      position: relative;
      min-height: 540px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .glow-orb {
      position: absolute;
      width: 420px;
      height: 420px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(56, 189, 248, 0.3), transparent 68%);
      filter: blur(10px);
    }

    .browser-mockup {
      position: relative;
      z-index: 2;
      width: min(560px, 100%);
      border: 1px solid rgba(255, 255, 255, 0.16);
      border-radius: 28px;
      background: linear-gradient(145deg, rgba(255,255,255,0.14), rgba(255,255,255,0.045));
      box-shadow: var(--shadow);
      backdrop-filter: blur(22px);
      overflow: hidden;
    }

    .browser-top {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 16px 18px;
      border-bottom: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.055);
    }

    .dots {
      display: flex;
      gap: 7px;
    }

    .dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.28);
    }

    .url-bar {
      flex: 1;
      height: 34px;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.1);
      background: rgba(5, 8, 22, 0.48);
      color: #c7d2fe;
      display: flex;
      align-items: center;
      padding: 0 14px;
      font-size: 13px;
      font-weight: 700;
    }

    .browser-content {
      padding: 22px;
      background:
        radial-gradient(circle at top right, rgba(168, 85, 247, 0.22), transparent 34%),
        linear-gradient(180deg, rgba(8, 13, 29, 0.96), rgba(5, 8, 22, 0.96));
    }

    .mock-hero {
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: 18px;
      margin-bottom: 18px;
    }

    .mock-title-card,
    .mock-preview-card,
    .mock-card {
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 22px;
      background: rgba(255, 255, 255, 0.065);
      box-shadow: 0 18px 40px rgba(0,0,0,0.22);
    }

    .mock-title-card {
      padding: 20px;
    }

    .mock-pill {
      width: 96px;
      height: 28px;
      border-radius: 999px;
      background: linear-gradient(135deg, var(--primary), var(--accent));
      margin-bottom: 18px;
    }

    .mock-line {
      height: 12px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.18);
      margin-bottom: 10px;
    }

    .mock-line.big {
      height: 20px;
      width: 88%;
    }

    .mock-line.short {
      width: 58%;
    }

    .mock-buttons {
      display: flex;
      gap: 8px;
      margin-top: 20px;
    }

    .mock-button {
      height: 32px;
      width: 92px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.16);
    }

    .mock-button.primary {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
    }

    .mock-preview-card {
      padding: 14px;
      min-height: 190px;
      position: relative;
      overflow: hidden;
    }

    .preview-window {
      height: 160px;
      border-radius: 18px;
      background:
        radial-gradient(circle at 72% 20%, rgba(56, 189, 248, 0.45), transparent 22%),
        linear-gradient(135deg, rgba(99, 102, 241, 0.75), rgba(168, 85, 247, 0.52));
      position: relative;
      overflow: hidden;
    }

    .preview-window::after {
      content: "";
      position: absolute;
      width: 180px;
      height: 80px;
      border-radius: 999px 999px 0 0;
      left: -20px;
      bottom: -20px;
      background: rgba(255,255,255,0.18);
    }

    .mock-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
    }

    .mock-card {
      padding: 14px;
      min-height: 120px;
    }

    .mock-icon {
      width: 40px;
      height: 40px;
      border-radius: 14px;
      background: linear-gradient(135deg, rgba(56,189,248,0.9), rgba(168,85,247,0.9));
      margin-bottom: 14px;
    }

    .floating-panel {
      position: absolute;
      z-index: 4;
      right: -16px;
      bottom: 32px;
      width: 220px;
      padding: 16px;
      border-radius: 22px;
      border: 1px solid rgba(255, 255, 255, 0.18);
      background: rgba(8, 13, 29, 0.78);
      backdrop-filter: blur(18px);
      box-shadow: 0 18px 42px rgba(0,0,0,0.35);
    }

    .panel-title {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 14px;
      font-weight: 900;
      font-size: 14px;
    }

    .panel-badge {
      padding: 4px 8px;
      border-radius: 999px;
      background: rgba(34, 197, 94, 0.16);
      color: #bbf7d0;
      font-size: 11px;
    }

    .bar-row {
      display: grid;
      grid-template-columns: 58px 1fr;
      align-items: center;
      gap: 10px;
      color: var(--muted);
      font-size: 12px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .bar-track {
      height: 8px;
      border-radius: 999px;
      background: rgba(255,255,255,0.12);
      overflow: hidden;
    }

    .bar-fill {
      height: 100%;
      border-radius: inherit;
      background: linear-gradient(90deg, var(--primary), var(--accent));
    }

    .section-head {
      text-align: center;
      max-width: 780px;
      margin: 0 auto 44px;
    }

    .section-head .badge {
      margin-bottom: 18px;
    }

    .section-head h2 {
      font-size: clamp(32px, 4vw, 54px);
      line-height: 1.05;
      letter-spacing: -0.045em;
      margin-bottom: 16px;
    }

    .section-head p {
      color: var(--muted);
      font-size: 17px;
    }

    .stats {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      padding-bottom: 88px;
    }

    .stat-card {
      padding: 24px;
      border: 1px solid var(--line);
      border-radius: var(--radius-md);
      background: rgba(255, 255, 255, 0.055);
      position: relative;
      overflow: hidden;
    }

    .stat-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at top right, rgba(56, 189, 248, 0.18), transparent 42%);
      pointer-events: none;
    }

    .stat-number {
      position: relative;
      font-size: 34px;
      font-weight: 950;
      letter-spacing: -0.04em;
      margin-bottom: 4px;
    }

    .stat-label {
      position: relative;
      color: var(--muted);
      font-weight: 700;
      font-size: 14px;
    }

    .features {
      padding-bottom: 88px;
    }

    .feature-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .feature-card {
      min-height: 250px;
      padding: 26px;
      border: 1px solid var(--line);
      border-radius: var(--radius-lg);
      background: linear-gradient(180deg, rgba(255,255,255,0.08), rgba(255,255,255,0.045));
      position: relative;
      overflow: hidden;
      transition: 0.25s ease;
    }

    .feature-card:hover {
      transform: translateY(-6px);
      border-color: rgba(56, 189, 248, 0.42);
    }

    .feature-card::after {
      content: "";
      position: absolute;
      width: 150px;
      height: 150px;
      right: -60px;
      top: -60px;
      border-radius: 50%;
      background: rgba(56, 189, 248, 0.12);
    }

    .feature-icon {
      width: 54px;
      height: 54px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, rgba(56, 189, 248, 0.26), rgba(168, 85, 247, 0.22));
      border: 1px solid rgba(255, 255, 255, 0.12);
      margin-bottom: 22px;
      font-size: 24px;
    }

    .feature-card h3 {
      font-size: 21px;
      letter-spacing: -0.025em;
      margin-bottom: 12px;
    }

    .feature-card p {
      color: var(--muted);
      font-size: 15px;
    }

    .showcase {
      display: grid;
      grid-template-columns: 0.92fr 1.08fr;
      gap: 26px;
      align-items: stretch;
      padding-bottom: 88px;
    }

    .showcase-content {
      padding: 34px;
      border: 1px solid var(--line);
      border-radius: var(--radius-lg);
      background: linear-gradient(180deg, rgba(255,255,255,0.08), rgba(255,255,255,0.04));
    }

    .showcase-content h2 {
      font-size: clamp(30px, 4vw, 48px);
      line-height: 1.08;
      letter-spacing: -0.045em;
      margin-bottom: 18px;
    }

    .showcase-content p {
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
      padding: 14px;
      border: 1px solid var(--line);
      border-radius: 16px;
      background: rgba(255,255,255,0.045);
      color: #e5edff;
      font-weight: 700;
    }

    .check-item span {
      flex: 0 0 26px;
      width: 26px;
      height: 26px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: #fff;
      font-size: 13px;
    }

    .dashboard-preview {
      border: 1px solid var(--line);
      border-radius: var(--radius-lg);
      background: rgba(255,255,255,0.055);
      padding: 20px;
      overflow: hidden;
      min-height: 520px;
      position: relative;
    }

    .dashboard-preview::before {
      content: "";
      position: absolute;
      width: 330px;
      height: 330px;
      border-radius: 50%;
      background: rgba(168, 85, 247, 0.18);
      right: -110px;
      top: -110px;
      filter: blur(4px);
    }

    .dashboard-shell {
      position: relative;
      z-index: 1;
      display: grid;
      grid-template-columns: 160px 1fr;
      min-height: 480px;
      overflow: hidden;
      border-radius: 24px;
      border: 1px solid rgba(255,255,255,0.12);
      background: rgba(5,8,22,0.68);
    }

    .sidebar {
      padding: 18px;
      border-right: 1px solid var(--line);
      background: rgba(255,255,255,0.035);
    }

    .brand-mini {
      width: 46px;
      height: 46px;
      border-radius: 16px;
      background: linear-gradient(135deg, var(--primary), var(--accent));
      margin-bottom: 26px;
    }

    .side-line {
      height: 32px;
      border-radius: 12px;
      background: rgba(255,255,255,0.09);
      margin-bottom: 10px;
    }

    .side-line.active {
      background: rgba(56, 189, 248, 0.23);
      border: 1px solid rgba(56,189,248,0.24);
    }

    .main-panel {
      padding: 20px;
    }

    .panel-header {
      display: flex;
      justify-content: space-between;
      gap: 14px;
      margin-bottom: 18px;
    }

    .search-bar {
      height: 42px;
      flex: 1;
      border-radius: 14px;
      background: rgba(255,255,255,0.08);
    }

    .profile-chip {
      width: 120px;
      height: 42px;
      border-radius: 14px;
      background: rgba(255,255,255,0.1);
    }

    .metric-row {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
      margin-bottom: 14px;
    }

    .metric-box {
      min-height: 100px;
      border-radius: 18px;
      padding: 14px;
      background: rgba(255,255,255,0.075);
      border: 1px solid rgba(255,255,255,0.1);
    }

    .metric-value {
      height: 24px;
      width: 70%;
      border-radius: 999px;
      background: linear-gradient(90deg, rgba(56,189,248,0.85), rgba(168,85,247,0.75));
      margin-bottom: 22px;
    }

    .metric-small {
      height: 10px;
      border-radius: 999px;
      background: rgba(255,255,255,0.15);
      margin-bottom: 8px;
    }

    .chart-box {
      height: 188px;
      border-radius: 20px;
      border: 1px solid rgba(255,255,255,0.1);
      background: rgba(255,255,255,0.06);
      display: flex;
      align-items: end;
      gap: 12px;
      padding: 18px;
      margin-bottom: 14px;
    }

    .chart-bar {
      flex: 1;
      border-radius: 999px 999px 6px 6px;
      background: linear-gradient(180deg, var(--primary), var(--secondary));
      min-height: 42px;
    }

    .data-row {
      display: grid;
      grid-template-columns: 40px 1fr 80px;
      gap: 12px;
      align-items: center;
      padding: 12px;
      border-radius: 16px;
      background: rgba(255,255,255,0.055);
      margin-bottom: 10px;
    }

    .avatar-placeholder {
      width: 38px;
      height: 38px;
      border-radius: 14px;
      background: rgba(255,255,255,0.12);
    }

    .row-line {
      height: 10px;
      border-radius: 999px;
      background: rgba(255,255,255,0.16);
    }

    .row-button {
      height: 28px;
      border-radius: 999px;
      background: rgba(34,197,94,0.18);
      border: 1px solid rgba(34,197,94,0.22);
    }

    .process {
      padding-bottom: 88px;
    }

    .process-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    .process-card {
      padding: 24px;
      border-radius: var(--radius-md);
      border: 1px solid var(--line);
      background: rgba(255,255,255,0.055);
      min-height: 210px;
      position: relative;
      overflow: hidden;
    }

    .process-number {
      width: 44px;
      height: 44px;
      border-radius: 15px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, var(--primary), var(--accent));
      font-weight: 950;
      margin-bottom: 20px;
    }

    .process-card h3 {
      font-size: 19px;
      margin-bottom: 10px;
    }

    .process-card p {
      color: var(--muted);
      font-size: 14px;
    }

    .tech-stack {
      padding-bottom: 88px;
    }

    .tech-wrap {
      display: grid;
      grid-template-columns: 0.85fr 1.15fr;
      gap: 22px;
      align-items: start;
    }

    .tech-copy {
      padding: 32px;
      border-radius: var(--radius-lg);
      border: 1px solid var(--line);
      background: linear-gradient(180deg, rgba(255,255,255,0.075), rgba(255,255,255,0.04));
    }

    .tech-copy h2 {
      font-size: clamp(30px, 4vw, 48px);
      line-height: 1.08;
      letter-spacing: -0.045em;
      margin-bottom: 16px;
    }

    .tech-copy p {
      color: var(--muted);
      margin-bottom: 24px;
    }

    .tech-note {
      padding: 16px;
      border-radius: 18px;
      border: 1px solid rgba(56,189,248,0.22);
      background: rgba(56,189,248,0.09);
      color: #dbeafe;
      font-weight: 750;
    }

    .tech-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 14px;
    }

    .tech-card {
      padding: 20px;
      border: 1px solid var(--line);
      border-radius: 20px;
      background: rgba(255,255,255,0.055);
      min-height: 150px;
    }

    .tech-card strong {
      display: block;
      font-size: 18px;
      margin-bottom: 8px;
    }

    .tech-card span {
      color: var(--muted);
      font-size: 14px;
    }

    .cta {
      border: 1px solid rgba(255, 255, 255, 0.14);
      border-radius: 34px;
      padding: 42px;
      background:
        radial-gradient(circle at 20% 10%, rgba(56, 189, 248, 0.22), transparent 30%),
        radial-gradient(circle at 90% 20%, rgba(168, 85, 247, 0.22), transparent 26%),
        linear-gradient(135deg, rgba(255,255,255,0.09), rgba(255,255,255,0.045));
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 24px;
      align-items: center;
      box-shadow: var(--shadow);
    }

    .cta h2 {
      max-width: 720px;
      font-size: clamp(32px, 4vw, 52px);
      line-height: 1.04;
      letter-spacing: -0.05em;
      margin-bottom: 14px;
    }

    .cta p {
      color: var(--muted);
      max-width: 720px;
    }

    @media (max-width: 980px) {
      .hero,
      .showcase,
      .tech-wrap,
      .cta {
        grid-template-columns: 1fr;
      }

      .browser-area {
        min-height: auto;
      }

      .floating-panel {
        right: 12px;
        bottom: -20px;
      }

      .stats,
      .process-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .feature-grid,
      .tech-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 640px) {
      .website-app-page {
        padding: 54px 16px;
      }

      .hero {
        padding-bottom: 60px;
      }

      .hero-actions,
      .hero-points,
      .stats,
      .feature-grid,
      .showcase,
      .process-grid,
      .tech-grid {
        grid-template-columns: 1fr;
      }

      .btn {
        width: 100%;
      }

      .mock-hero,
      .mock-grid,
      .metric-row,
      .dashboard-shell {
        grid-template-columns: 1fr;
      }

      .sidebar {
        display: none;
      }

      .browser-content,
      .showcase-content,
      .dashboard-preview,
      .tech-copy,
      .cta {
        padding: 22px;
      }

      .floating-panel {
        position: relative;
        right: auto;
        bottom: auto;
        width: 100%;
        margin-top: 16px;
      }
    }
  </style>
</head>
<body>
  <main class="website-app-page">
    <section class="hero container">
      <div>
        <div class="badge"><span></span> Website Application Development</div>
        <h1>Build scalable, fast, and modern <span class="gradient-text">website applications</span>.</h1>
        <p>
          We develop responsive website applications for business operations, digital platforms, dashboards,
          customer portals, landing pages, and web-based systems with secure architecture and smooth user experience.
        </p>
        <div class="hero-actions">
          <a href="#contact" class="btn btn-primary">Start Your Web Project →</a>
          <a href="#features" class="btn btn-secondary">Explore Features</a>
        </div>
        <div class="hero-points">
          <div class="hero-point">Responsive UI</div>
          <div class="hero-point">Admin Dashboard</div>
          <div class="hero-point">API Integration</div>
        </div>
      </div>

      <div class="browser-area">
        <div class="glow-orb"></div>
        <div class="browser-mockup">
          <div class="browser-top">
            <div class="dots">
              <div class="dot"></div>
              <div class="dot"></div>
              <div class="dot"></div>
            </div>
            <div class="url-bar">https://yourwebapp.com/dashboard</div>
          </div>
          <div class="browser-content">
            <div class="mock-hero">
              <div class="mock-title-card">
                <div class="mock-pill"></div>
                <div class="mock-line big"></div>
                <div class="mock-line big"></div>
                <div class="mock-line short"></div>
                <div class="mock-buttons">
                  <div class="mock-button primary"></div>
                  <div class="mock-button"></div>
                </div>
              </div>
              <div class="mock-preview-card">
                <div class="preview-window"></div>
              </div>
            </div>
            <div class="mock-grid">
              <div class="mock-card">
                <div class="mock-icon"></div>
                <div class="mock-line"></div>
                <div class="mock-line short"></div>
              </div>
              <div class="mock-card">
                <div class="mock-icon"></div>
                <div class="mock-line"></div>
                <div class="mock-line short"></div>
              </div>
              <div class="mock-card">
                <div class="mock-icon"></div>
                <div class="mock-line"></div>
                <div class="mock-line short"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="floating-panel">
          <div class="panel-title">
            <span>Performance</span>
            <span class="panel-badge">Live</span>
          </div>
          <div class="bar-row">
            <span>Speed</span>
            <div class="bar-track"><div class="bar-fill" style="width: 92%"></div></div>
          </div>
          <div class="bar-row">
            <span>SEO</span>
            <div class="bar-track"><div class="bar-fill" style="width: 86%"></div></div>
          </div>
          <div class="bar-row">
            <span>Secure</span>
            <div class="bar-track"><div class="bar-fill" style="width: 95%"></div></div>
          </div>
        </div>
      </div>
    </section>

    <section class="stats container">
      <div class="stat-card">
        <div class="stat-number">100%</div>
        <div class="stat-label">Responsive Layout</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">SEO</div>
        <div class="stat-label">Friendly Structure</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">API</div>
        <div class="stat-label">Ready Integration</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">CMS</div>
        <div class="stat-label">Manageable Content</div>
      </div>
    </section>

    <section class="features container" id="features">
      <div class="section-head">
        <div class="badge"><span></span> Core Capabilities</div>
        <h2>Everything you need to launch a professional web application.</h2>
        <p>
          From frontend interface to backend integration, we build website applications that are easy to use,
          easy to manage, and ready to grow with your business.
        </p>
      </div>

      <div class="feature-grid">
        <div class="feature-card">
          <div class="feature-icon">⚡</div>
          <h3>High Performance Website</h3>
          <p>Optimized page structure, clean assets, fast loading interface, and responsive performance across devices.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">🧩</div>
          <h3>Custom Feature Development</h3>
          <p>Build specific features such as booking, marketplace, dashboard, content management, user portal, and more.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">🔐</div>
          <h3>Authentication & Security</h3>
          <p>Login system, role access, protected pages, secure forms, validation, and safer data handling.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">📊</div>
          <h3>Admin Dashboard</h3>
          <p>Manage users, content, transactions, reports, analytics, and operational data from one control panel.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">🔗</div>
          <h3>Third-Party Integration</h3>
          <p>Connect payment gateway, maps, email, chat, notification, analytics, CRM, ERP, or other business tools.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">🚀</div>
          <h3>Deployment Ready</h3>
          <p>Prepared for production deployment with domain setup, hosting configuration, and scalable architecture.</p>
        </div>
      </div>
    </section>

    <section class="showcase container">
      <div class="showcase-content">
        <div class="badge"><span></span> Web System Preview</div>
        <h2>Designed for business websites, portals, and internal web systems.</h2>
        <p>
          Whether you need a company profile, SaaS platform, e-commerce website, management dashboard,
          or customer portal, the system can be customized based on your workflow.
        </p>
        <div class="check-list">
          <div class="check-item"><span>✓</span> Clean landing page with strong conversion flow</div>
          <div class="check-item"><span>✓</span> Dynamic pages connected to database and API</div>
          <div class="check-item"><span>✓</span> Admin panel for content and user management</div>
          <div class="check-item"><span>✓</span> Mobile-friendly design for every screen size</div>
        </div>
      </div>

      <div class="dashboard-preview">
        <div class="dashboard-shell">
          <div class="sidebar">
            <div class="brand-mini"></div>
            <div class="side-line active"></div>
            <div class="side-line"></div>
            <div class="side-line"></div>
            <div class="side-line"></div>
            <div class="side-line"></div>
          </div>
          <div class="main-panel">
            <div class="panel-header">
              <div class="search-bar"></div>
              <div class="profile-chip"></div>
            </div>
            <div class="metric-row">
              <div class="metric-box">
                <div class="metric-value"></div>
                <div class="metric-small"></div>
                <div class="metric-small" style="width: 70%"></div>
              </div>
              <div class="metric-box">
                <div class="metric-value"></div>
                <div class="metric-small"></div>
                <div class="metric-small" style="width: 64%"></div>
              </div>
              <div class="metric-box">
                <div class="metric-value"></div>
                <div class="metric-small"></div>
                <div class="metric-small" style="width: 78%"></div>
              </div>
            </div>
            <div class="chart-box">
              <div class="chart-bar" style="height: 48%"></div>
              <div class="chart-bar" style="height: 72%"></div>
              <div class="chart-bar" style="height: 56%"></div>
              <div class="chart-bar" style="height: 86%"></div>
              <div class="chart-bar" style="height: 64%"></div>
              <div class="chart-bar" style="height: 78%"></div>
            </div>
            <div class="data-row">
              <div class="avatar-placeholder"></div>
              <div class="row-line"></div>
              <div class="row-button"></div>
            </div>
            <div class="data-row">
              <div class="avatar-placeholder"></div>
              <div class="row-line"></div>
              <div class="row-button"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="process container">
      <div class="section-head">
        <div class="badge"><span></span> Development Flow</div>
        <h2>Clear process from idea to production.</h2>
        <p>Every project is built through structured stages so the result is easier to control, test, and maintain.</p>
      </div>

      <div class="process-grid">
        <div class="process-card">
          <div class="process-number">01</div>
          <h3>Requirement Analysis</h3>
          <p>Define goals, user roles, main pages, features, data structure, and technical direction.</p>
        </div>
        <div class="process-card">
          <div class="process-number">02</div>
          <h3>UI/UX & Prototype</h3>
          <p>Create layout, user flow, interface components, and responsive experience before development.</p>
        </div>
        <div class="process-card">
          <div class="process-number">03</div>
          <h3>Development</h3>
          <p>Build frontend, backend, database, API integration, dashboard, and required business features.</p>
        </div>
        <div class="process-card">
          <div class="process-number">04</div>
          <h3>Testing & Launch</h3>
          <p>Run testing, fix issues, optimize performance, deploy to hosting, and prepare production release.</p>
        </div>
      </div>
    </section>

    <section class="tech-stack container">
      <div class="tech-wrap">
        <div class="tech-copy">
          <div class="badge"><span></span> Technology Stack</div>
          <h2>Flexible stack for modern website applications.</h2>
          <p>
            The technology can be adjusted based on project needs, whether you need a simple company website,
            content platform, business dashboard, or scalable web application.
          </p>
          <div class="tech-note">Built with maintainable code structure, reusable components, and production-ready setup.</div>
        </div>

        <div class="tech-grid">
          <div class="tech-card">
            <strong>Frontend</strong>
            <span>React, Next.js, Vue, HTML, CSS, Tailwind, responsive UI components.</span>
          </div>
          <div class="tech-card">
            <strong>Backend</strong>
            <span>Node.js, NestJS, Express, REST API, authentication, role-based access.</span>
          </div>
          <div class="tech-card">
            <strong>Database</strong>
            <span>PostgreSQL, MySQL, MongoDB, Prisma ORM, migration and data modeling.</span>
          </div>
          <div class="tech-card">
            <strong>CMS</strong>
            <span>Custom admin panel, content manager, media manager, category manager.</span>
          </div>
          <div class="tech-card">
            <strong>Integration</strong>
            <span>Payment, email, notification, maps, analytics, file upload, and third-party API.</span>
          </div>
          <div class="tech-card">
            <strong>Deployment</strong>
            <span>Vercel, Railway, VPS, Docker, domain setup, SSL, and production configuration.</span>
          </div>
        </div>
      </div>
    </section>

    <section class="cta container" id="contact">
      <div>
        <h2>Ready to build your website application?</h2>
        <p>
          Start from a landing page, company profile, dashboard, customer portal, e-commerce system,
          or fully custom web application tailored to your business needs.
        </p>
      </div>
      <a href="#" class="btn btn-primary">Discuss Project →</a>
    </section>
  </main>
</body>
</html>
