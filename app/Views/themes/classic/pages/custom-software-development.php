<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Custom Software Development</title>
  <style>
    :root {
      --bg: #050816;
      --bg-soft: #0b1024;
      --card: rgba(255, 255, 255, 0.07);
      --card-strong: rgba(255, 255, 255, 0.11);
      --text: #f8fafc;
      --muted: #a8b3cf;
      --line: rgba(255, 255, 255, 0.12);
      --primary: #22d3ee;
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
        radial-gradient(circle at top left, rgba(34, 211, 238, 0.22), transparent 34%),
        radial-gradient(circle at 86% 8%, rgba(168, 85, 247, 0.23), transparent 29%),
        radial-gradient(circle at 50% 100%, rgba(99, 102, 241, 0.16), transparent 35%),
        linear-gradient(180deg, #050816 0%, #081121 48%, #050816 100%);
      color: var(--text);
      min-height: 100vh;
      line-height: 1.65;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .custom-software-page {
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
      color: #cffafe;
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
      box-shadow: 0 0 20px rgba(34, 211, 238, 0.8);
    }

    .hero {
      display: grid;
      grid-template-columns: 1.02fr 0.98fr;
      gap: 42px;
      align-items: center;
      padding-bottom: 84px;
    }

    .hero h1 {
      max-width: 780px;
      font-size: clamp(42px, 6vw, 78px);
      line-height: 0.98;
      letter-spacing: -0.06em;
      margin-bottom: 24px;
    }

    .gradient-text {
      background: linear-gradient(135deg, #ffffff 0%, #cffafe 34%, #22d3ee 58%, #a855f7 100%);
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
      box-shadow: 0 18px 42px rgba(34, 211, 238, 0.28);
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
      color: #cffafe;
      font-size: 14px;
      font-weight: 800;
    }

    .software-visual {
      position: relative;
      min-height: 560px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .glow-orb {
      position: absolute;
      width: 430px;
      height: 430px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(34, 211, 238, 0.3), transparent 68%);
      filter: blur(10px);
    }

    .dashboard-mockup {
      position: relative;
      z-index: 2;
      width: min(570px, 100%);
      border: 1px solid rgba(255, 255, 255, 0.16);
      border-radius: 30px;
      background: linear-gradient(145deg, rgba(255,255,255,0.14), rgba(255,255,255,0.045));
      box-shadow: var(--shadow);
      backdrop-filter: blur(22px);
      overflow: hidden;
    }

    .mockup-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 18px;
      border-bottom: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.055);
    }

    .mockup-dots {
      display: flex;
      gap: 8px;
    }

    .mockup-dots i {
      width: 11px;
      height: 11px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.32);
    }

    .mockup-url {
      width: 58%;
      height: 28px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.09);
      border: 1px solid rgba(255, 255, 255, 0.1);
      color: #cbd5e1;
      font-size: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .mockup-body {
      display: grid;
      grid-template-columns: 160px 1fr;
      min-height: 420px;
    }

    .sidebar {
      padding: 18px;
      border-right: 1px solid var(--line);
      background: rgba(5, 8, 22, 0.38);
    }

    .brand-chip {
      height: 44px;
      border-radius: 16px;
      background: linear-gradient(135deg, rgba(34, 211, 238, 0.24), rgba(168, 85, 247, 0.2));
      border: 1px solid rgba(255, 255, 255, 0.11);
      margin-bottom: 22px;
      display: flex;
      align-items: center;
      gap: 9px;
      padding: 0 12px;
      font-weight: 900;
      font-size: 13px;
    }

    .brand-chip b {
      width: 20px;
      height: 20px;
      border-radius: 8px;
      background: linear-gradient(135deg, var(--primary), var(--accent));
      display: inline-flex;
    }

    .side-line {
      height: 38px;
      border-radius: 14px;
      margin-bottom: 11px;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .side-line.active {
      background: linear-gradient(135deg, rgba(34, 211, 238, 0.28), rgba(99, 102, 241, 0.18));
    }

    .workspace {
      padding: 20px;
    }

    .workspace-head {
      display: flex;
      justify-content: space-between;
      gap: 15px;
      align-items: center;
      margin-bottom: 18px;
    }

    .workspace-head h3 {
      font-size: 21px;
      letter-spacing: -0.03em;
    }

    .status-pill {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      padding: 8px 12px;
      border-radius: 999px;
      background: rgba(34, 197, 94, 0.13);
      border: 1px solid rgba(34, 197, 94, 0.24);
      color: #bbf7d0;
      font-size: 12px;
      font-weight: 900;
      white-space: nowrap;
    }

    .status-pill span {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: var(--success);
      box-shadow: 0 0 18px rgba(34, 197, 94, 0.75);
    }

    .metric-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
      margin-bottom: 16px;
    }

    .metric-card {
      min-height: 98px;
      padding: 14px;
      border-radius: 18px;
      background: rgba(255, 255, 255, 0.07);
      border: 1px solid var(--line);
    }

    .metric-card small {
      display: block;
      color: var(--muted);
      font-size: 12px;
      margin-bottom: 8px;
      font-weight: 700;
    }

    .metric-card strong {
      font-size: 26px;
      letter-spacing: -0.04em;
    }

    .metric-card em {
      display: block;
      color: #67e8f9;
      font-size: 12px;
      font-style: normal;
      font-weight: 900;
      margin-top: 3px;
    }

    .workflow-card {
      padding: 16px;
      border-radius: 22px;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid var(--line);
      margin-bottom: 14px;
    }

    .workflow-title {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 14px;
      font-weight: 900;
    }

    .workflow-title span {
      color: #67e8f9;
      font-size: 12px;
    }

    .flow-row {
      display: grid;
      grid-template-columns: 34px 1fr 66px;
      gap: 10px;
      align-items: center;
      margin-bottom: 10px;
    }

    .flow-icon {
      width: 34px;
      height: 34px;
      border-radius: 12px;
      background: rgba(34, 211, 238, 0.14);
      border: 1px solid rgba(34, 211, 238, 0.2);
      display: grid;
      place-items: center;
      color: #67e8f9;
      font-weight: 900;
    }

    .bar-wrap {
      height: 9px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.08);
      overflow: hidden;
    }

    .bar {
      height: 100%;
      border-radius: inherit;
      background: linear-gradient(90deg, var(--primary), var(--accent));
    }

    .flow-row small {
      color: var(--muted);
      text-align: right;
      font-weight: 800;
    }

    .code-card {
      border-radius: 22px;
      background: rgba(2, 6, 23, 0.62);
      border: 1px solid rgba(255, 255, 255, 0.11);
      padding: 16px;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
      font-size: 12px;
      color: #c4b5fd;
    }

    .code-card p {
      margin-bottom: 7px;
    }

    .code-card .cyan {
      color: #67e8f9;
    }

    .code-card .green {
      color: #86efac;
    }

    .floating-card {
      position: absolute;
      z-index: 5;
      border: 1px solid rgba(255, 255, 255, 0.16);
      border-radius: 20px;
      background: rgba(15, 23, 42, 0.82);
      backdrop-filter: blur(18px);
      box-shadow: 0 22px 50px rgba(0, 0, 0, 0.35);
      padding: 15px;
    }

    .floating-card.integration {
      top: 64px;
      right: -10px;
      width: 210px;
    }

    .floating-card.security {
      bottom: 48px;
      left: -14px;
      width: 220px;
    }

    .floating-card h4 {
      font-size: 14px;
      margin-bottom: 10px;
    }

    .mini-list {
      display: grid;
      gap: 8px;
    }

    .mini-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      color: #dbeafe;
      font-size: 12px;
      font-weight: 800;
    }

    .mini-item b {
      width: 36px;
      height: 7px;
      border-radius: 999px;
      background: linear-gradient(90deg, var(--primary), var(--accent));
    }

    .section {
      padding: 78px 0;
    }

    .section-heading {
      display: flex;
      align-items: end;
      justify-content: space-between;
      gap: 30px;
      margin-bottom: 34px;
    }

    .section-kicker {
      color: #67e8f9;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: 0.14em;
      font-size: 13px;
      margin-bottom: 11px;
    }

    .section h2 {
      max-width: 760px;
      font-size: clamp(32px, 4vw, 54px);
      line-height: 1.05;
      letter-spacing: -0.045em;
    }

    .section-heading p {
      max-width: 430px;
      color: var(--muted);
      font-size: 16px;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    .stat-card {
      padding: 26px;
      border-radius: var(--radius-md);
      border: 1px solid var(--line);
      background: linear-gradient(145deg, rgba(255,255,255,0.095), rgba(255,255,255,0.04));
      min-height: 148px;
    }

    .stat-card strong {
      display: block;
      font-size: 34px;
      line-height: 1;
      letter-spacing: -0.05em;
      margin-bottom: 11px;
    }

    .stat-card span {
      color: var(--muted);
      font-size: 14px;
      font-weight: 700;
    }

    .feature-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .feature-card {
      min-height: 265px;
      padding: 26px;
      border-radius: var(--radius-md);
      border: 1px solid var(--line);
      background: linear-gradient(145deg, rgba(255,255,255,0.09), rgba(255,255,255,0.035));
      position: relative;
      overflow: hidden;
      transition: 0.28s ease;
    }

    .feature-card::before {
      content: "";
      position: absolute;
      inset: -120px auto auto -120px;
      width: 220px;
      height: 220px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(34, 211, 238, 0.24), transparent 70%);
      opacity: 0;
      transition: 0.28s ease;
    }

    .feature-card:hover {
      transform: translateY(-7px);
      border-color: rgba(34, 211, 238, 0.38);
    }

    .feature-card:hover::before {
      opacity: 1;
    }

    .icon-box {
      width: 54px;
      height: 54px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, rgba(34, 211, 238, 0.24), rgba(168, 85, 247, 0.22));
      color: #ffffff;
      font-weight: 900;
      font-size: 20px;
      margin-bottom: 20px;
      position: relative;
      z-index: 1;
    }

    .feature-card h3 {
      font-size: 22px;
      margin-bottom: 10px;
      letter-spacing: -0.025em;
      position: relative;
      z-index: 1;
    }

    .feature-card p {
      color: var(--muted);
      font-size: 15px;
      position: relative;
      z-index: 1;
    }

    .split-section {
      display: grid;
      grid-template-columns: 0.95fr 1.05fr;
      gap: 26px;
      align-items: stretch;
    }

    .large-card {
      padding: 32px;
      border-radius: var(--radius-lg);
      border: 1px solid var(--line);
      background: linear-gradient(145deg, rgba(255,255,255,0.095), rgba(255,255,255,0.035));
      min-height: 520px;
    }

    .large-card h3 {
      font-size: 31px;
      line-height: 1.12;
      letter-spacing: -0.045em;
      margin-bottom: 16px;
    }

    .large-card > p {
      color: var(--muted);
      margin-bottom: 25px;
    }

    .architecture-map {
      display: grid;
      gap: 13px;
    }

    .arch-layer {
      padding: 18px;
      border-radius: 18px;
      border: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.055);
    }

    .arch-layer strong {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 8px;
      font-size: 16px;
    }

    .arch-layer strong span {
      width: 30px;
      height: 30px;
      border-radius: 12px;
      display: grid;
      place-items: center;
      background: rgba(34, 211, 238, 0.15);
      color: #67e8f9;
    }

    .arch-layer p {
      color: var(--muted);
      font-size: 14px;
    }

    .process-list {
      display: grid;
      gap: 14px;
    }

    .process-item {
      display: grid;
      grid-template-columns: 52px 1fr;
      gap: 16px;
      padding: 18px;
      border-radius: 18px;
      border: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.055);
    }

    .process-number {
      width: 52px;
      height: 52px;
      border-radius: 18px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      display: grid;
      place-items: center;
      font-weight: 950;
      box-shadow: 0 16px 34px rgba(34, 211, 238, 0.2);
    }

    .process-item h4 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    .process-item p {
      color: var(--muted);
      font-size: 14px;
    }

    .modules-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    .module-card {
      border: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.06);
      border-radius: 22px;
      padding: 22px;
      min-height: 188px;
    }

    .module-card span {
      display: inline-flex;
      width: 38px;
      height: 38px;
      border-radius: 14px;
      align-items: center;
      justify-content: center;
      background: rgba(34, 211, 238, 0.14);
      color: #67e8f9;
      font-weight: 950;
      margin-bottom: 16px;
    }

    .module-card h3 {
      font-size: 18px;
      margin-bottom: 8px;
      letter-spacing: -0.02em;
    }

    .module-card p {
      color: var(--muted);
      font-size: 14px;
    }

    .industry-wrap {
      border-radius: var(--radius-lg);
      border: 1px solid var(--line);
      background:
        radial-gradient(circle at top right, rgba(168, 85, 247, 0.19), transparent 40%),
        linear-gradient(145deg, rgba(255,255,255,0.09), rgba(255,255,255,0.035));
      overflow: hidden;
    }

    .industry-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
    }

    .industry-card {
      min-height: 210px;
      padding: 28px;
      border-right: 1px solid var(--line);
      border-bottom: 1px solid var(--line);
    }

    .industry-card:nth-child(3n) {
      border-right: 0;
    }

    .industry-card:nth-child(n + 4) {
      border-bottom: 0;
    }

    .industry-card h3 {
      font-size: 21px;
      margin-bottom: 10px;
    }

    .industry-card p {
      color: var(--muted);
      font-size: 15px;
    }

    .tech-stack {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
    }

    .tech-stack span {
      padding: 12px 16px;
      border-radius: 999px;
      border: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.06);
      color: #e0f2fe;
      font-weight: 800;
      font-size: 14px;
    }

    .cta-card {
      position: relative;
      overflow: hidden;
      padding: 54px;
      border-radius: 36px;
      border: 1px solid rgba(255, 255, 255, 0.16);
      background:
        radial-gradient(circle at 15% 20%, rgba(34, 211, 238, 0.28), transparent 34%),
        radial-gradient(circle at 85% 45%, rgba(168, 85, 247, 0.26), transparent 34%),
        linear-gradient(145deg, rgba(255,255,255,0.12), rgba(255,255,255,0.045));
      box-shadow: var(--shadow);
      text-align: center;
    }

    .cta-card h2 {
      max-width: 820px;
      margin: 0 auto 16px;
      font-size: clamp(34px, 5vw, 62px);
      line-height: 1.03;
      letter-spacing: -0.055em;
    }

    .cta-card p {
      max-width: 690px;
      margin: 0 auto 30px;
      color: var(--muted);
      font-size: 17px;
    }

    @media (max-width: 1024px) {
      .hero,
      .split-section {
        grid-template-columns: 1fr;
      }

      .hero {
        padding-bottom: 46px;
      }

      .software-visual {
        min-height: auto;
        padding: 30px 0;
      }

      .floating-card {
        display: none;
      }

      .stats-grid,
      .modules-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .feature-grid,
      .industry-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .industry-card:nth-child(3n) {
        border-right: 1px solid var(--line);
      }

      .industry-card:nth-child(2n) {
        border-right: 0;
      }

      .industry-card:nth-child(n + 4) {
        border-bottom: 1px solid var(--line);
      }

      .industry-card:nth-child(n + 5) {
        border-bottom: 0;
      }
    }

    @media (max-width: 720px) {
      .custom-software-page {
        padding: 48px 16px;
      }

      .hero-points,
      .stats-grid,
      .feature-grid,
      .modules-grid,
      .industry-grid,
      .metric-grid {
        grid-template-columns: 1fr;
      }

      .section-heading {
        display: block;
      }

      .section-heading p {
        margin-top: 14px;
      }

      .mockup-body {
        grid-template-columns: 1fr;
      }

      .sidebar {
        display: none;
      }

      .mockup-url {
        display: none;
      }

      .large-card,
      .cta-card {
        padding: 26px;
        border-radius: 26px;
      }

      .process-item {
        grid-template-columns: 1fr;
      }

      .industry-card,
      .industry-card:nth-child(n) {
        border-right: 0;
        border-bottom: 1px solid var(--line);
      }

      .industry-card:last-child {
        border-bottom: 0;
      }
    }
  </style>
</head>
<body>
  <main class="custom-software-page">
    <section class="hero container">
      <div class="hero-content">
        <div class="badge"><span></span> Custom Software Development</div>
        <h1>Build software that fits your <span class="gradient-text">business workflow.</span></h1>
        <p>
          We design and develop custom software solutions for internal operations, automation, dashboards,
          business management systems, integrations, and scalable digital products tailored to your company needs.
        </p>

        <div class="hero-actions">
          <a href="#consultation" class="btn btn-primary">Start Your Project →</a>
          <a href="#solutions" class="btn btn-secondary">View Solutions</a>
        </div>

        <div class="hero-points">
          <div class="hero-point">Business Workflow System</div>
          <div class="hero-point">Custom Dashboard</div>
          <div class="hero-point">Automation & Integration</div>
        </div>
      </div>

      <div class="software-visual">
        <div class="glow-orb"></div>

        <div class="floating-card integration">
          <h4>API Integrations</h4>
          <div class="mini-list">
            <div class="mini-item"><span>Payment</span><b></b></div>
            <div class="mini-item"><span>ERP</span><b></b></div>
            <div class="mini-item"><span>CRM</span><b></b></div>
            <div class="mini-item"><span>Analytics</span><b></b></div>
          </div>
        </div>

        <div class="floating-card security">
          <h4>Secure Access</h4>
          <div class="mini-list">
            <div class="mini-item"><span>Role Permission</span><b></b></div>
            <div class="mini-item"><span>Audit Logs</span><b></b></div>
            <div class="mini-item"><span>Data Backup</span><b></b></div>
          </div>
        </div>

        <div class="dashboard-mockup">
          <div class="mockup-top">
            <div class="mockup-dots"><i></i><i></i><i></i></div>
            <div class="mockup-url">custom-software.app</div>
          </div>

          <div class="mockup-body">
            <aside class="sidebar">
              <div class="brand-chip"><b></b> CoreApp</div>
              <div class="side-line active"></div>
              <div class="side-line"></div>
              <div class="side-line"></div>
              <div class="side-line"></div>
              <div class="side-line"></div>
            </aside>

            <div class="workspace">
              <div class="workspace-head">
                <h3>Operations Dashboard</h3>
                <div class="status-pill"><span></span> Live System</div>
              </div>

              <div class="metric-grid">
                <div class="metric-card">
                  <small>Tasks</small>
                  <strong>1.2K</strong>
                  <em>+18%</em>
                </div>
                <div class="metric-card">
                  <small>Automation</small>
                  <strong>86%</strong>
                  <em>Active</em>
                </div>
                <div class="metric-card">
                  <small>Users</small>
                  <strong>428</strong>
                  <em>Team</em>
                </div>
              </div>

              <div class="workflow-card">
                <div class="workflow-title">Workflow Performance <span>Today</span></div>
                <div class="flow-row">
                  <div class="flow-icon">A</div>
                  <div class="bar-wrap"><div class="bar" style="width: 88%;"></div></div>
                  <small>88%</small>
                </div>
                <div class="flow-row">
                  <div class="flow-icon">B</div>
                  <div class="bar-wrap"><div class="bar" style="width: 72%;"></div></div>
                  <small>72%</small>
                </div>
                <div class="flow-row">
                  <div class="flow-icon">C</div>
                  <div class="bar-wrap"><div class="bar" style="width: 64%;"></div></div>
                  <small>64%</small>
                </div>
              </div>

              <div class="code-card">
                <p><span class="cyan">system</span>.createWorkflow({</p>
                <p>&nbsp;&nbsp;module: <span class="green">"operations"</span>,</p>
                <p>&nbsp;&nbsp;automation: <span class="green">true</span>,</p>
                <p>&nbsp;&nbsp;status: <span class="green">"deployed"</span></p>
                <p>});</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="stats-grid">
        <div class="stat-card">
          <strong>100%</strong>
          <span>Custom system based on your business process.</span>
        </div>
        <div class="stat-card">
          <strong>24/7</strong>
          <span>Reliable system monitoring and performance support.</span>
        </div>
        <div class="stat-card">
          <strong>API</strong>
          <span>Ready for third-party integration and automation.</span>
        </div>
        <div class="stat-card">
          <strong>Scale</strong>
          <span>Built to grow with users, data, and business needs.</span>
        </div>
      </div>
    </section>

    <section class="section container" id="solutions">
      <div class="section-heading">
        <div>
          <div class="section-kicker">What We Build</div>
          <h2>Powerful custom software for modern business operations.</h2>
        </div>
        <p>
          From internal tools to enterprise platforms, we create software that improves speed,
          accuracy, collaboration, and decision making.
        </p>
      </div>

      <div class="feature-grid">
        <div class="feature-card">
          <div class="icon-box">01</div>
          <h3>Business Management System</h3>
          <p>Custom platforms for managing operations, staff, customers, inventory, finance, reports, and approvals in one place.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">02</div>
          <h3>Workflow Automation</h3>
          <p>Automate repetitive tasks, document flows, notifications, approvals, scheduling, and data synchronization.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">03</div>
          <h3>Dashboard & Analytics</h3>
          <p>Interactive dashboards with real-time metrics, reports, charts, filters, export tools, and performance insights.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">04</div>
          <h3>CRM & Customer Portal</h3>
          <p>Manage leads, customers, tickets, communication history, transactions, and self-service customer access.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">05</div>
          <h3>ERP & Internal Tools</h3>
          <p>Build internal systems for HR, procurement, stock, operations, logistics, administration, and branch management.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">06</div>
          <h3>API & System Integration</h3>
          <p>Connect your software with payment gateways, accounting tools, ERP, CRM, mobile apps, websites, and external services.</p>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="split-section">
        <div class="large-card">
          <div class="section-kicker">System Architecture</div>
          <h3>Designed with a scalable and maintainable structure.</h3>
          <p>
            Every software project is planned with clear modules, secure access, database structure,
            API documentation, and deployment strategy.
          </p>

          <div class="architecture-map">
            <div class="arch-layer">
              <strong><span>1</span> Frontend Application</strong>
              <p>Clean user interface, responsive layout, role-based pages, forms, dashboards, and data tables.</p>
            </div>
            <div class="arch-layer">
              <strong><span>2</span> Backend API</strong>
              <p>Business logic, authentication, permissions, validations, notifications, and integration services.</p>
            </div>
            <div class="arch-layer">
              <strong><span>3</span> Database Layer</strong>
              <p>Structured data modeling, relations, indexing, backups, reporting queries, and data security.</p>
            </div>
            <div class="arch-layer">
              <strong><span>4</span> Deployment & Monitoring</strong>
              <p>Cloud hosting, CI/CD workflow, logging, performance monitoring, and production support.</p>
            </div>
          </div>
        </div>

        <div class="large-card">
          <div class="section-kicker">Development Process</div>
          <h3>From idea to production-ready software.</h3>
          <p>
            We follow a structured process to make sure the software matches your requirements,
            business rules, and long-term goals.
          </p>

          <div class="process-list">
            <div class="process-item">
              <div class="process-number">01</div>
              <div>
                <h4>Discovery & Requirement Analysis</h4>
                <p>Understand business process, users, pain points, goals, modules, and technical requirements.</p>
              </div>
            </div>
            <div class="process-item">
              <div class="process-number">02</div>
              <div>
                <h4>UI/UX & System Planning</h4>
                <p>Create wireframes, user flows, database structure, API planning, and system architecture.</p>
              </div>
            </div>
            <div class="process-item">
              <div class="process-number">03</div>
              <div>
                <h4>Development & Integration</h4>
                <p>Build frontend, backend, database, authentication, business logic, and third-party integrations.</p>
              </div>
            </div>
            <div class="process-item">
              <div class="process-number">04</div>
              <div>
                <h4>Testing, Deployment & Support</h4>
                <p>Perform QA testing, bug fixing, deployment, documentation, user training, and maintenance.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="section-heading">
        <div>
          <div class="section-kicker">Core Modules</div>
          <h2>Essential modules for custom business software.</h2>
        </div>
        <p>
          Choose the modules you need, then expand the system anytime as your business grows.
        </p>
      </div>

      <div class="modules-grid">
        <div class="module-card">
          <span>U</span>
          <h3>User Management</h3>
          <p>Admin, staff, customers, teams, branch users, and role-based access control.</p>
        </div>
        <div class="module-card">
          <span>R</span>
          <h3>Reporting</h3>
          <p>Daily, weekly, monthly, custom reports, filters, charts, and export data.</p>
        </div>
        <div class="module-card">
          <span>A</span>
          <h3>Approval Flow</h3>
          <p>Multi-level approval, status tracking, comments, notifications, and audit history.</p>
        </div>
        <div class="module-card">
          <span>N</span>
          <h3>Notification</h3>
          <p>Email, in-app alert, WhatsApp-ready flow, reminder, and real-time updates.</p>
        </div>
        <div class="module-card">
          <span>D</span>
          <h3>Document Control</h3>
          <p>Upload files, manage documents, version control, access rights, and validation.</p>
        </div>
        <div class="module-card">
          <span>P</span>
          <h3>Payment & Billing</h3>
          <p>Invoices, payment gateway, subscriptions, billing status, and transaction logs.</p>
        </div>
        <div class="module-card">
          <span>I</span>
          <h3>Inventory System</h3>
          <p>Stock tracking, warehouse, product movement, minimum stock, and procurement.</p>
        </div>
        <div class="module-card">
          <span>L</span>
          <h3>Logs & Audit Trail</h3>
          <p>Activity logs, data changes, security monitoring, and operational transparency.</p>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="section-heading">
        <div>
          <div class="section-kicker">Industry Use Cases</div>
          <h2>Flexible solutions for different business sectors.</h2>
        </div>
        <p>
          Custom software can be adapted for small teams, growing startups, and enterprise operations.
        </p>
      </div>

      <div class="industry-wrap">
        <div class="industry-grid">
          <div class="industry-card">
            <h3>Education</h3>
            <p>Student management, learning progress, attendance, reports, tutor dashboard, and parent portal.</p>
          </div>
          <div class="industry-card">
            <h3>Healthcare</h3>
            <p>Patient records, appointment system, medical reports, staff scheduling, and clinic operations.</p>
          </div>
          <div class="industry-card">
            <h3>Retail & Commerce</h3>
            <p>Inventory, orders, POS integration, customer database, loyalty system, and sales analytics.</p>
          </div>
          <div class="industry-card">
            <h3>Logistics</h3>
            <p>Shipment tracking, driver management, route planning, delivery status, and warehouse dashboard.</p>
          </div>
          <div class="industry-card">
            <h3>Finance</h3>
            <p>Transaction dashboard, approval workflow, invoice management, reporting, and audit trail.</p>
          </div>
          <div class="industry-card">
            <h3>Government & Public Service</h3>
            <p>Complaint system, case tracking, public dashboard, staff assignment, and digital reporting.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="section-heading">
        <div>
          <div class="section-kicker">Technology Stack</div>
          <h2>Modern technology for reliable software delivery.</h2>
        </div>
        <p>
          We use proven technologies to build fast, secure, maintainable, and scalable applications.
        </p>
      </div>

      <div class="tech-stack">
        <span>React.js</span>
        <span>Next.js</span>
        <span>Node.js</span>
        <span>NestJS</span>
        <span>Express.js</span>
        <span>PostgreSQL</span>
        <span>MySQL</span>
        <span>MongoDB</span>
        <span>REST API</span>
        <span>GraphQL</span>
        <span>Docker</span>
        <span>AWS</span>
        <span>Google Cloud</span>
        <span>Firebase</span>
        <span>CI/CD</span>
        <span>WebSocket</span>
      </div>
    </section>

    <section class="section container" id="consultation">
      <div class="cta-card">
        <h2>Ready to build custom software for your business?</h2>
        <p>
          Transform your manual workflow into a secure, automated, and scalable digital system.
          Start with consultation, requirement mapping, and a clear development roadmap.
        </p>
        <div class="hero-actions" style="justify-content: center; margin-bottom: 0;">
          <a href="#" class="btn btn-primary">Request Consultation →</a>
          <a href="#solutions" class="btn btn-secondary">Explore Features</a>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
