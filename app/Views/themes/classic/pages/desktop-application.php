<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Desktop Application Development</title>
  <style>
    :root {
      --bg: #050816;
      --bg-soft: #0b1024;
      --card: rgba(255, 255, 255, 0.065);
      --card-strong: rgba(255, 255, 255, 0.1);
      --text: #f8fafc;
      --muted: #a7b0c4;
      --line: rgba(255, 255, 255, 0.12);
      --primary: #7c3aed;
      --secondary: #06b6d4;
      --accent: #f97316;
      --success: #22c55e;
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
        radial-gradient(circle at top left, rgba(124, 58, 237, 0.28), transparent 34%),
        radial-gradient(circle at 85% 15%, rgba(6, 182, 212, 0.2), transparent 28%),
        linear-gradient(180deg, #050816 0%, #070b18 45%, #050816 100%);
      color: var(--text);
      min-height: 100vh;
      line-height: 1.6;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .desktop-page {
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
      color: #dce4ff;
      font-size: 14px;
      font-weight: 600;
      backdrop-filter: blur(14px);
      margin-bottom: 22px;
    }

    .badge span {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--secondary), var(--primary));
      box-shadow: 0 0 18px rgba(6, 182, 212, 0.8);
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
      background: linear-gradient(135deg, #ffffff 0%, #b8ccff 35%, #8b5cf6 68%, #06b6d4 100%);
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
      font-weight: 700;
      transition: 0.25s ease;
    }

    .btn-primary {
      border: 0;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      box-shadow: 0 18px 40px rgba(124, 58, 237, 0.34);
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
      color: #dbeafe;
      font-size: 14px;
      font-weight: 600;
    }

    .device-wrap {
      position: relative;
      min-height: 530px;
    }

    .glow-orb {
      position: absolute;
      inset: 9% 4% auto auto;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(6, 182, 212, 0.38), transparent 70%);
      filter: blur(12px);
    }

    .desktop-mockup {
      position: relative;
      z-index: 2;
      margin-top: 18px;
      padding: 15px;
      border-radius: 30px;
      border: 1px solid rgba(255, 255, 255, 0.16);
      background: linear-gradient(145deg, rgba(255,255,255,0.16), rgba(255,255,255,0.05));
      box-shadow: var(--shadow);
      backdrop-filter: blur(22px);
    }

    .window-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 13px 15px;
      border-bottom: 1px solid var(--line);
    }

    .dots {
      display: flex;
      gap: 8px;
    }

    .dots i {
      width: 11px;
      height: 11px;
      border-radius: 50%;
      display: block;
    }

    .dots i:nth-child(1) { background: #fb7185; }
    .dots i:nth-child(2) { background: #facc15; }
    .dots i:nth-child(3) { background: #22c55e; }

    .window-title {
      color: #cbd5e1;
      font-size: 13px;
      font-weight: 700;
    }

    .app-screen {
      display: grid;
      grid-template-columns: 82px 1fr;
      min-height: 385px;
      border-radius: 22px;
      overflow: hidden;
      background: #080d1c;
    }

    .sidebar {
      padding: 20px 14px;
      border-right: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.04);
    }

    .side-logo {
      width: 44px;
      height: 44px;
      border-radius: 15px;
      margin: 0 auto 22px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      display: grid;
      place-items: center;
      font-weight: 900;
      box-shadow: 0 15px 30px rgba(6, 182, 212, 0.2);
    }

    .side-menu {
      display: grid;
      gap: 14px;
    }

    .side-menu span {
      width: 42px;
      height: 10px;
      border-radius: 99px;
      background: rgba(255, 255, 255, 0.17);
    }

    .side-menu span:nth-child(1),
    .side-menu span:nth-child(4) {
      background: linear-gradient(90deg, var(--secondary), var(--primary));
    }

    .app-content {
      padding: 22px;
    }

    .top-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      margin-bottom: 18px;
    }

    .search-bar {
      height: 40px;
      flex: 1;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid var(--line);
    }

    .status-pill {
      padding: 10px 13px;
      border-radius: 999px;
      background: rgba(34, 197, 94, 0.12);
      color: #86efac;
      font-size: 12px;
      font-weight: 800;
      border: 1px solid rgba(34, 197, 94, 0.24);
      white-space: nowrap;
    }

    .dashboard-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
      margin-bottom: 16px;
    }

    .metric-card {
      padding: 16px;
      border-radius: 18px;
      background: rgba(255, 255, 255, 0.075);
      border: 1px solid var(--line);
    }

    .metric-card small {
      color: var(--muted);
      font-weight: 700;
    }

    .metric-card strong {
      display: block;
      font-size: 24px;
      margin-top: 8px;
    }

    .chart-card {
      min-height: 170px;
      border-radius: 22px;
      background:
        linear-gradient(180deg, rgba(255,255,255,0.09), rgba(255,255,255,0.04)),
        repeating-linear-gradient(90deg, transparent 0 46px, rgba(255,255,255,0.045) 46px 47px);
      border: 1px solid var(--line);
      padding: 18px;
      display: flex;
      align-items: flex-end;
      gap: 10px;
    }

    .bar {
      flex: 1;
      border-radius: 999px 999px 6px 6px;
      background: linear-gradient(180deg, var(--secondary), var(--primary));
      min-height: 35px;
      opacity: 0.92;
    }

    .bar:nth-child(1) { height: 78px; }
    .bar:nth-child(2) { height: 126px; }
    .bar:nth-child(3) { height: 95px; }
    .bar:nth-child(4) { height: 144px; }
    .bar:nth-child(5) { height: 70px; }
    .bar:nth-child(6) { height: 112px; }

    .floating-card {
      position: absolute;
      z-index: 4;
      right: -6px;
      bottom: 44px;
      width: 245px;
      padding: 18px;
      border-radius: 22px;
      background: rgba(10, 16, 38, 0.88);
      border: 1px solid rgba(255, 255, 255, 0.16);
      backdrop-filter: blur(20px);
      box-shadow: var(--shadow);
    }

    .floating-card h4 {
      margin-bottom: 10px;
      font-size: 15px;
    }

    .sync-list {
      display: grid;
      gap: 10px;
    }

    .sync-item {
      display: flex;
      align-items: center;
      gap: 9px;
      color: var(--muted);
      font-size: 13px;
    }

    .sync-item i {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: var(--success);
      box-shadow: 0 0 12px rgba(34, 197, 94, 0.7);
    }

    .section-head {
      max-width: 760px;
      margin-bottom: 32px;
    }

    .section-head.center {
      text-align: center;
      margin: 0 auto 38px;
    }

    .section-label {
      color: var(--secondary);
      font-size: 14px;
      font-weight: 800;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .section-title {
      font-size: clamp(32px, 4vw, 52px);
      line-height: 1.05;
      letter-spacing: -0.04em;
      margin-bottom: 16px;
    }

    .section-desc {
      color: var(--muted);
      font-size: 17px;
    }

    .feature-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
      margin-bottom: 84px;
    }

    .feature-card {
      position: relative;
      min-height: 245px;
      padding: 26px;
      border: 1px solid var(--line);
      border-radius: var(--radius-lg);
      background: linear-gradient(180deg, rgba(255,255,255,0.09), rgba(255,255,255,0.045));
      overflow: hidden;
      transition: 0.25s ease;
    }

    .feature-card:hover {
      transform: translateY(-6px);
      border-color: rgba(6, 182, 212, 0.38);
      background: linear-gradient(180deg, rgba(255,255,255,0.12), rgba(255,255,255,0.055));
    }

    .feature-card::after {
      content: "";
      position: absolute;
      right: -40px;
      bottom: -40px;
      width: 150px;
      height: 150px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(124, 58, 237, 0.22), transparent 70%);
    }

    .icon-box {
      width: 56px;
      height: 56px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, rgba(124,58,237,0.28), rgba(6,182,212,0.22));
      border: 1px solid rgba(255, 255, 255, 0.12);
      font-size: 24px;
      margin-bottom: 22px;
    }

    .feature-card h3 {
      font-size: 21px;
      margin-bottom: 12px;
    }

    .feature-card p {
      color: var(--muted);
      font-size: 15px;
    }

    .platform-types {
      margin-bottom: 84px;
      padding: 34px;
      border-radius: 34px;
      border: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.055);
      backdrop-filter: blur(20px);
    }

    .type-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 14px;
    }

    .type-card {
      padding: 22px;
      border-radius: 22px;
      background: rgba(255, 255, 255, 0.065);
      border: 1px solid var(--line);
    }

    .type-card h4 {
      font-size: 17px;
      margin-bottom: 8px;
    }

    .type-card p {
      color: var(--muted);
      font-size: 14px;
    }

    .process-section {
      display: grid;
      grid-template-columns: 0.9fr 1.1fr;
      gap: 34px;
      align-items: start;
      margin-bottom: 84px;
    }

    .process-list {
      display: grid;
      gap: 14px;
    }

    .process-item {
      display: grid;
      grid-template-columns: 58px 1fr;
      gap: 16px;
      padding: 20px;
      border-radius: 24px;
      border: 1px solid var(--line);
      background: rgba(255,255,255,0.06);
    }

    .process-number {
      width: 52px;
      height: 52px;
      border-radius: 17px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      font-weight: 900;
    }

    .process-item h4 {
      margin-bottom: 6px;
      font-size: 18px;
    }

    .process-item p {
      color: var(--muted);
      font-size: 14px;
    }

    .tech-stack {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 24px;
    }

    .tech-stack span {
      padding: 10px 14px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.075);
      border: 1px solid var(--line);
      color: #dbeafe;
      font-size: 14px;
      font-weight: 700;
    }

    .cta-box {
      position: relative;
      padding: 46px;
      border-radius: 34px;
      overflow: hidden;
      border: 1px solid rgba(255, 255, 255, 0.14);
      background:
        radial-gradient(circle at 25% 30%, rgba(6,182,212,0.28), transparent 34%),
        linear-gradient(135deg, rgba(124,58,237,0.28), rgba(255,255,255,0.06));
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 28px;
      align-items: center;
    }

    .cta-box h2 {
      max-width: 720px;
      font-size: clamp(30px, 4vw, 48px);
      line-height: 1.05;
      letter-spacing: -0.04em;
      margin-bottom: 14px;
    }

    .cta-box p {
      max-width: 660px;
      color: #dbe3f5;
    }

    @media (max-width: 980px) {
      .hero,
      .process-section,
      .cta-box {
        grid-template-columns: 1fr;
      }

      .device-wrap {
        min-height: auto;
      }

      .floating-card {
        position: relative;
        right: auto;
        bottom: auto;
        width: 100%;
        margin-top: 16px;
      }

      .feature-grid,
      .type-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 640px) {
      .desktop-page {
        padding: 48px 16px;
      }

      .hero-points,
      .dashboard-grid,
      .feature-grid,
      .type-grid {
        grid-template-columns: 1fr;
      }

      .app-screen {
        grid-template-columns: 1fr;
      }

      .sidebar {
        display: none;
      }

      .platform-types,
      .cta-box {
        padding: 24px;
      }

      .process-item {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <main class="desktop-page">
    <section class="hero container">
      <div class="hero-content">
        <div class="badge"><span></span> Desktop Application Development</div>
        <h1>Build powerful <span class="gradient-text">desktop apps</span> for business operations.</h1>
        <p>
          Create secure, fast, and reliable desktop applications for Windows, macOS, or Linux.
          Perfect for internal tools, cashier systems, inventory software, reporting dashboards,
          and offline-first business workflows.
        </p>

        <div class="hero-actions">
          <a href="#features" class="btn btn-primary">Explore Features →</a>
          <a href="#process" class="btn btn-secondary">View Development Flow</a>
        </div>

        <div class="hero-points">
          <div class="hero-point">Offline-first support</div>
          <div class="hero-point">Secure local storage</div>
          <div class="hero-point">Cross-platform build</div>
        </div>
      </div>

      <div class="device-wrap">
        <div class="glow-orb"></div>
        <div class="desktop-mockup">
          <div class="window-bar">
            <div class="dots"><i></i><i></i><i></i></div>
            <div class="window-title">Business Desktop Suite</div>
          </div>

          <div class="app-screen">
            <aside class="sidebar">
              <div class="side-logo">D</div>
              <div class="side-menu">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </aside>

            <div class="app-content">
              <div class="top-row">
                <div class="search-bar"></div>
                <div class="status-pill">Online Sync</div>
              </div>

              <div class="dashboard-grid">
                <div class="metric-card">
                  <small>Transactions</small>
                  <strong>12.8K</strong>
                </div>
                <div class="metric-card">
                  <small>Inventory</small>
                  <strong>4.2K</strong>
                </div>
                <div class="metric-card">
                  <small>Reports</small>
                  <strong>98%</strong>
                </div>
              </div>

              <div class="chart-card">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="floating-card">
          <h4>System Capability</h4>
          <div class="sync-list">
            <div class="sync-item"><i></i> Offline data processing</div>
            <div class="sync-item"><i></i> Auto backup and sync</div>
            <div class="sync-item"><i></i> Multi-user access control</div>
          </div>
        </div>
      </div>
    </section>

    <section id="features" class="container">
      <div class="section-head center">
        <div class="section-label">Core Features</div>
        <h2 class="section-title">Everything your desktop application needs.</h2>
        <p class="section-desc">
          From local database management to cloud synchronization, desktop applications can be built
          to match your exact business process and operational needs.
        </p>
      </div>

      <div class="feature-grid">
        <div class="feature-card">
          <div class="icon-box">⚡</div>
          <h3>High Performance</h3>
          <p>Fast app response, optimized data processing, and smooth user experience for daily business operations.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">🔐</div>
          <h3>Secure Access</h3>
          <p>Role-based login, encrypted data storage, activity logs, and controlled access for every user.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">📦</div>
          <h3>Offline Database</h3>
          <p>Use local storage or local database so the application can keep running even without internet.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">☁️</div>
          <h3>Cloud Sync</h3>
          <p>Synchronize local data with cloud servers for backup, multi-branch access, and centralized reporting.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">🧩</div>
          <h3>Custom Modules</h3>
          <p>Build modules such as POS, inventory, finance, HR, reporting, CRM, or admin management.</p>
        </div>

        <div class="feature-card">
          <div class="icon-box">🖥️</div>
          <h3>Cross-Platform</h3>
          <p>Deploy your desktop application to Windows, macOS, or Linux using modern desktop technologies.</p>
        </div>
      </div>
    </section>

    <section class="platform-types container">
      <div class="section-head">
        <div class="section-label">Application Types</div>
        <h2 class="section-title">Desktop solutions for many business cases.</h2>
        <p class="section-desc">
          Desktop applications are ideal for businesses that need stable tools, local access,
          device integration, and faster data input workflows.
        </p>
      </div>

      <div class="type-grid">
        <div class="type-card">
          <h4>POS Application</h4>
          <p>Cashier, receipt printing, product catalog, payment record, and daily sales report.</p>
        </div>
        <div class="type-card">
          <h4>Inventory System</h4>
          <p>Stock management, barcode scanning, warehouse tracking, and reorder alert.</p>
        </div>
        <div class="type-card">
          <h4>Internal Dashboard</h4>
          <p>Admin tools, operational monitoring, user management, and report generation.</p>
        </div>
        <div class="type-card">
          <h4>Finance Software</h4>
          <p>Invoices, expenses, cash flow, accounting report, and transaction history.</p>
        </div>
      </div>
    </section>

    <section id="process" class="process-section container">
      <div class="section-head">
        <div class="section-label">Development Flow</div>
        <h2 class="section-title">From business process to ready-to-use desktop app.</h2>
        <p class="section-desc">
          The development process focuses on understanding your workflow first, then converting it into
          a clean, efficient, and scalable desktop application.
        </p>

        <div class="tech-stack">
          <span>Electron</span>
          <span>Tauri</span>
          <span>React</span>
          <span>Node.js</span>
          <span>SQLite</span>
          <span>PostgreSQL</span>
          <span>REST API</span>
          <span>Auto Update</span>
        </div>
      </div>

      <div class="process-list">
        <div class="process-item">
          <div class="process-number">01</div>
          <div>
            <h4>Requirement Analysis</h4>
            <p>Map user roles, business flow, required modules, data structure, and device integration needs.</p>
          </div>
        </div>

        <div class="process-item">
          <div class="process-number">02</div>
          <div>
            <h4>UI/UX & System Design</h4>
            <p>Create desktop-friendly layouts, navigation flow, database schema, and application architecture.</p>
          </div>
        </div>

        <div class="process-item">
          <div class="process-number">03</div>
          <div>
            <h4>Development & Integration</h4>
            <p>Build the desktop app, connect APIs, implement local storage, reporting, sync, and security.</p>
          </div>
        </div>

        <div class="process-item">
          <div class="process-number">04</div>
          <div>
            <h4>Testing & Deployment</h4>
            <p>Package the app installer, test performance, prepare documentation, and release to users.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-box container">
      <div>
        <h2>Need a custom desktop application for your business?</h2>
        <p>
          Build a secure, scalable, and easy-to-use desktop app that fits your daily operations,
          from internal dashboards to full business management systems.
        </p>
      </div>
      <a href="#" class="btn btn-primary">Start Desktop Project</a>
    </section>
  </main>
</body>
</html>
