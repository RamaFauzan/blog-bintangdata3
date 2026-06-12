<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Services</title>
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

    .services-page {
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
      gap: 10px;
      padding: 9px 14px;
      border: 1px solid rgba(34, 211, 238, 0.34);
      border-radius: 999px;
      background: rgba(34, 211, 238, 0.08);
      color: #cffafe;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      margin-bottom: 22px;
    }

    .badge span {
      width: 8px;
      height: 8px;
      border-radius: 999px;
      background: linear-gradient(135deg, var(--primary), var(--accent));
      box-shadow: 0 0 20px rgba(34, 211, 238, 0.75);
    }

    .hero {
      display: grid;
      grid-template-columns: minmax(0, 1.04fr) minmax(360px, 0.96fr);
      gap: 42px;
      align-items: center;
      margin-bottom: 70px;
    }

    .hero h1 {
      font-size: clamp(42px, 7vw, 82px);
      line-height: 0.98;
      letter-spacing: -0.07em;
      max-width: 760px;
      margin-bottom: 24px;
    }

    .gradient-text {
      background: linear-gradient(135deg, #ffffff 0%, #67e8f9 38%, #a78bfa 72%, #f0abfc 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .hero p {
      max-width: 690px;
      color: var(--muted);
      font-size: 18px;
      margin-bottom: 32px;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      align-items: center;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 15px 22px;
      border-radius: 999px;
      border: 1px solid transparent;
      font-weight: 800;
      transition: 0.25s ease;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: #020617;
      box-shadow: 0 18px 46px rgba(34, 211, 238, 0.23);
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 22px 60px rgba(34, 211, 238, 0.34);
    }

    .btn-outline {
      border-color: var(--line);
      background: rgba(255, 255, 255, 0.05);
      color: var(--text);
    }

    .btn-outline:hover {
      border-color: rgba(34, 211, 238, 0.5);
      background: rgba(34, 211, 238, 0.09);
      transform: translateY(-3px);
    }

    .hero-panel {
      position: relative;
      min-height: 520px;
      border: 1px solid var(--line);
      border-radius: var(--radius-lg);
      background:
        linear-gradient(145deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.035)),
        radial-gradient(circle at 10% 10%, rgba(34, 211, 238, 0.24), transparent 35%),
        rgba(255, 255, 255, 0.055);
      box-shadow: var(--shadow);
      overflow: hidden;
      isolation: isolate;
    }

    .hero-panel::before {
      content: "";
      position: absolute;
      width: 290px;
      height: 290px;
      border-radius: 999px;
      background: rgba(168, 85, 247, 0.22);
      filter: blur(10px);
      right: -105px;
      top: -75px;
      z-index: -1;
    }

    .hero-panel::after {
      content: "";
      position: absolute;
      width: 260px;
      height: 260px;
      border-radius: 999px;
      background: rgba(34, 211, 238, 0.16);
      filter: blur(8px);
      left: -85px;
      bottom: -85px;
      z-index: -1;
    }

    .dashboard-card {
      position: absolute;
      inset: 26px;
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 24px;
      background: rgba(5, 8, 22, 0.72);
      backdrop-filter: blur(18px);
      padding: 22px;
      overflow: hidden;
    }

    .window-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-bottom: 18px;
      border-bottom: 1px solid var(--line);
      margin-bottom: 18px;
    }

    .dots {
      display: flex;
      gap: 8px;
    }

    .dots i {
      width: 11px;
      height: 11px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.28);
    }

    .window-top strong {
      font-size: 13px;
      color: #dbeafe;
    }

    .metric-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 14px;
      margin-bottom: 18px;
    }

    .metric {
      padding: 16px;
      border-radius: 18px;
      background: rgba(255, 255, 255, 0.07);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .metric span {
      color: var(--muted);
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      font-weight: 800;
    }

    .metric h3 {
      font-size: 28px;
      margin-top: 8px;
      letter-spacing: -0.04em;
    }

    .service-preview-list {
      display: grid;
      gap: 12px;
    }

    .preview-item {
      display: grid;
      grid-template-columns: auto 1fr auto;
      gap: 12px;
      align-items: center;
      padding: 13px;
      border: 1px solid rgba(255, 255, 255, 0.11);
      border-radius: 18px;
      background: rgba(255, 255, 255, 0.055);
    }

    .preview-icon {
      width: 42px;
      height: 42px;
      border-radius: 14px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, rgba(34, 211, 238, 0.22), rgba(99, 102, 241, 0.2));
      border: 1px solid rgba(255, 255, 255, 0.12);
      font-size: 20px;
    }

    .preview-item h4 {
      font-size: 14px;
      margin-bottom: 2px;
    }

    .preview-item p {
      margin: 0;
      font-size: 12px;
      color: var(--muted);
    }

    .status-pill {
      padding: 7px 10px;
      border-radius: 999px;
      background: rgba(34, 197, 94, 0.11);
      color: #bbf7d0;
      font-size: 11px;
      font-weight: 800;
      border: 1px solid rgba(34, 197, 94, 0.24);
    }

    .section-head {
      display: flex;
      justify-content: space-between;
      gap: 24px;
      align-items: end;
      margin-bottom: 28px;
    }

    .section-head.center {
      text-align: center;
      display: block;
      max-width: 760px;
      margin: 0 auto 34px;
    }

    .section-kicker {
      color: var(--primary);
      font-size: 13px;
      font-weight: 900;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .section-title {
      font-size: clamp(32px, 4.4vw, 54px);
      line-height: 1.05;
      letter-spacing: -0.055em;
      max-width: 710px;
    }

    .section-head.center .section-title {
      max-width: none;
    }

    .section-desc {
      color: var(--muted);
      max-width: 480px;
      font-size: 16px;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
      margin-bottom: 76px;
    }

    .service-card {
      position: relative;
      min-height: 310px;
      padding: 24px;
      border: 1px solid var(--line);
      border-radius: var(--radius-md);
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.085), rgba(255, 255, 255, 0.04));
      overflow: hidden;
      transition: 0.28s ease;
    }

    .service-card:hover {
      transform: translateY(-8px);
      border-color: rgba(34, 211, 238, 0.38);
      box-shadow: 0 24px 70px rgba(0, 0, 0, 0.32);
    }

    .service-card::before {
      content: "";
      position: absolute;
      width: 170px;
      height: 170px;
      border-radius: 999px;
      background: rgba(34, 211, 238, 0.12);
      filter: blur(8px);
      top: -80px;
      right: -70px;
      transition: 0.28s ease;
    }

    .service-card:hover::before {
      background: rgba(168, 85, 247, 0.18);
      transform: scale(1.18);
    }

    .service-icon {
      width: 58px;
      height: 58px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      font-size: 28px;
      background: linear-gradient(135deg, rgba(34, 211, 238, 0.22), rgba(99, 102, 241, 0.22));
      border: 1px solid rgba(255, 255, 255, 0.12);
      margin-bottom: 20px;
    }

    .service-card h3 {
      font-size: 22px;
      line-height: 1.2;
      letter-spacing: -0.035em;
      margin-bottom: 12px;
    }

    .service-card p {
      color: var(--muted);
      margin-bottom: 20px;
    }

    .feature-list {
      display: grid;
      gap: 10px;
      list-style: none;
      margin-top: auto;
    }

    .feature-list li {
      display: flex;
      gap: 10px;
      color: #dbeafe;
      font-size: 14px;
    }

    .feature-list li::before {
      content: "✓";
      flex: 0 0 auto;
      width: 21px;
      height: 21px;
      display: grid;
      place-items: center;
      border-radius: 999px;
      background: rgba(34, 211, 238, 0.13);
      color: var(--primary);
      font-size: 12px;
      font-weight: 900;
    }

    .split-section {
      display: grid;
      grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
      gap: 24px;
      align-items: stretch;
      margin-bottom: 76px;
    }

    .glass-box {
      border: 1px solid var(--line);
      border-radius: var(--radius-lg);
      background: rgba(255, 255, 255, 0.06);
      box-shadow: var(--shadow);
      padding: 30px;
      overflow: hidden;
    }

    .process-card {
      position: relative;
      min-height: 100%;
      background:
        radial-gradient(circle at 80% 20%, rgba(34, 211, 238, 0.16), transparent 34%),
        rgba(255, 255, 255, 0.06);
    }

    .process-card h2 {
      font-size: clamp(30px, 4vw, 48px);
      letter-spacing: -0.055em;
      line-height: 1.05;
      margin-bottom: 18px;
    }

    .process-card p {
      color: var(--muted);
      margin-bottom: 24px;
    }

    .mini-stats {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 12px;
      margin-top: 26px;
    }

    .mini-stat {
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 18px;
      padding: 16px;
      background: rgba(5, 8, 22, 0.38);
    }

    .mini-stat strong {
      display: block;
      font-size: 27px;
      line-height: 1;
      letter-spacing: -0.04em;
      margin-bottom: 6px;
    }

    .mini-stat span {
      color: var(--muted);
      font-size: 13px;
    }

    .timeline {
      display: grid;
      gap: 15px;
    }

    .timeline-item {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 15px;
      padding: 18px;
      border: 1px solid rgba(255, 255, 255, 0.11);
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.045);
    }

    .timeline-number {
      width: 42px;
      height: 42px;
      border-radius: 15px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: #020617;
      font-weight: 950;
    }

    .timeline-item h3 {
      font-size: 18px;
      letter-spacing: -0.025em;
      margin-bottom: 5px;
    }

    .timeline-item p {
      color: var(--muted);
      margin: 0;
      font-size: 14px;
    }

    .industries {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 14px;
      margin-bottom: 76px;
    }

    .industry-card {
      min-height: 160px;
      padding: 20px;
      border-radius: 22px;
      border: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.055);
      transition: 0.25s ease;
    }

    .industry-card:hover {
      transform: translateY(-5px);
      background: rgba(255, 255, 255, 0.085);
      border-color: rgba(168, 85, 247, 0.32);
    }

    .industry-card span {
      display: inline-grid;
      place-items: center;
      width: 42px;
      height: 42px;
      border-radius: 15px;
      background: rgba(255, 255, 255, 0.08);
      margin-bottom: 14px;
      font-size: 21px;
    }

    .industry-card h3 {
      font-size: 17px;
      margin-bottom: 8px;
      letter-spacing: -0.02em;
    }

    .industry-card p {
      color: var(--muted);
      font-size: 13px;
      margin: 0;
    }

    .tech-section {
      margin-bottom: 76px;
    }

    .tech-wrap {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      justify-content: center;
      max-width: 920px;
      margin: 0 auto;
    }

    .tech-pill {
      padding: 12px 16px;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.12);
      background: rgba(255, 255, 255, 0.06);
      color: #dbeafe;
      font-weight: 750;
      font-size: 14px;
    }

    .cta {
      position: relative;
      border-radius: 34px;
      border: 1px solid rgba(255, 255, 255, 0.14);
      background:
        radial-gradient(circle at 20% 20%, rgba(34, 211, 238, 0.26), transparent 32%),
        radial-gradient(circle at 88% 20%, rgba(168, 85, 247, 0.22), transparent 30%),
        linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.045));
      box-shadow: var(--shadow);
      padding: clamp(32px, 6vw, 62px);
      text-align: center;
      overflow: hidden;
    }

    .cta h2 {
      font-size: clamp(34px, 5vw, 58px);
      line-height: 1.03;
      letter-spacing: -0.06em;
      max-width: 830px;
      margin: 0 auto 16px;
    }

    .cta p {
      color: var(--muted);
      max-width: 680px;
      margin: 0 auto 28px;
      font-size: 17px;
    }

    @media (max-width: 980px) {
      .hero,
      .split-section {
        grid-template-columns: 1fr;
      }

      .hero-panel {
        min-height: 480px;
      }

      .services-grid,
      .industries {
        grid-template-columns: repeat(2, 1fr);
      }

      .section-head {
        display: block;
      }

      .section-desc {
        margin-top: 14px;
      }
    }

    @media (max-width: 620px) {
      .services-page {
        padding: 52px 16px;
      }

      .hero {
        gap: 28px;
        margin-bottom: 50px;
      }

      .hero p {
        font-size: 16px;
      }

      .hero-actions,
      .btn {
        width: 100%;
      }

      .hero-panel {
        min-height: 560px;
      }

      .dashboard-card {
        inset: 14px;
        padding: 16px;
      }

      .metric-grid,
      .services-grid,
      .industries,
      .mini-stats {
        grid-template-columns: 1fr;
      }

      .preview-item {
        grid-template-columns: auto 1fr;
      }

      .status-pill {
        grid-column: 1 / -1;
        justify-self: start;
      }

      .glass-box {
        padding: 22px;
      }
    }
  </style>
</head>
<body>
  <main class="services-page">
    <section class="hero container">
      <div>
        <div class="badge"><span></span>Our Services</div>
        <h1>Digital solutions for modern <span class="gradient-text">business growth.</span></h1>
        <p>
          We help brands, startups, and organizations build reliable digital products, from website applications,
          mobile apps, desktop systems, custom platforms, to scalable cloud-based software.
        </p>
        <div class="hero-actions">
          <a href="#services" class="btn btn-primary">Explore Services →</a>
          <a href="#process" class="btn btn-outline">View Our Process</a>
        </div>
      </div>

      <div class="hero-panel" aria-label="Services dashboard preview">
        <div class="dashboard-card">
          <div class="window-top">
            <div class="dots"><i></i><i></i><i></i></div>
            <strong>Service Control Center</strong>
          </div>

          <div class="metric-grid">
            <div class="metric">
              <span>Platforms</span>
              <h3>6+</h3>
            </div>
            <div class="metric">
              <span>Workflow</span>
              <h3>Agile</h3>
            </div>
            <div class="metric">
              <span>Support</span>
              <h3>Full</h3>
            </div>
            <div class="metric">
              <span>Scale</span>
              <h3>Cloud</h3>
            </div>
          </div>

          <div class="service-preview-list">
            <div class="preview-item">
              <div class="preview-icon">🌐</div>
              <div>
                <h4>Website Application</h4>
                <p>Responsive, SEO-friendly, and scalable web platforms.</p>
              </div>
              <span class="status-pill">Active</span>
            </div>
            <div class="preview-item">
              <div class="preview-icon">📱</div>
              <div>
                <h4>Mobile Application</h4>
                <p>Android and iOS apps with clean user experience.</p>
              </div>
              <span class="status-pill">Ready</span>
            </div>
            <div class="preview-item">
              <div class="preview-icon">🧩</div>
              <div>
                <h4>Custom Software</h4>
                <p>Tailored systems for operations, automation, and reporting.</p>
              </div>
              <span class="status-pill">Built</span>
            </div>
            <div class="preview-item">
              <div class="preview-icon">🖥️</div>
              <div>
                <h4>Desktop Application</h4>
                <p>Secure desktop tools for internal business workflows.</p>
              </div>
              <span class="status-pill">Stable</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="container">
      <div class="section-head">
        <div>
          <div class="section-kicker">What We Build</div>
          <h2 class="section-title">End-to-end services for every stage of your product.</h2>
        </div>
        <p class="section-desc">
          From concept validation to deployment, our service stack is designed to help you launch faster,
          manage easier, and scale with confidence.
        </p>
      </div>

      <div class="services-grid">
        <article class="service-card">
          <div class="service-icon">🌐</div>
          <h3>Website Application Development</h3>
          <p>Custom web apps, company profiles, dashboards, portals, and landing pages built with modern technologies.</p>
          <ul class="feature-list">
            <li>Responsive UI design</li>
            <li>Admin dashboard</li>
            <li>API integration</li>
          </ul>
        </article>

        <article class="service-card">
          <div class="service-icon">📱</div>
          <h3>Android Application</h3>
          <p>Android apps for customer platforms, internal tools, marketplaces, social apps, and operational systems.</p>
          <ul class="feature-list">
            <li>Native-like experience</li>
            <li>Push notification</li>
            <li>Secure authentication</li>
          </ul>
        </article>

        <article class="service-card">
          <div class="service-icon">🍎</div>
          <h3>iOS Application</h3>
          <p>Elegant iOS applications with smooth performance, clean navigation, and App Store-ready structure.</p>
          <ul class="feature-list">
            <li>Modern mobile UI</li>
            <li>Payment integration</li>
            <li>App Store preparation</li>
          </ul>
        </article>

        <article class="service-card">
          <div class="service-icon">🖥️</div>
          <h3>Desktop Application</h3>
          <p>Desktop software for offline-first workflows, internal operations, file processing, and business automation.</p>
          <ul class="feature-list">
            <li>Windows/macOS support</li>
            <li>Offline capability</li>
            <li>Local data handling</li>
          </ul>
        </article>

        <article class="service-card">
          <div class="service-icon">🧩</div>
          <h3>Custom Software Development</h3>
          <p>Tailor-made software solutions that match your business process instead of forcing you into rigid tools.</p>
          <ul class="feature-list">
            <li>Business workflow system</li>
            <li>Automation tools</li>
            <li>Reporting modules</li>
          </ul>
        </article>

        <article class="service-card">
          <div class="service-icon">☁️</div>
          <h3>Cloud & API Integration</h3>
          <p>Backend systems, REST APIs, database architecture, third-party integrations, and deployment support.</p>
          <ul class="feature-list">
            <li>Scalable backend</li>
            <li>Database design</li>
            <li>Cloud deployment</li>
          </ul>
        </article>
      </div>
    </section>

    <section id="process" class="container split-section">
      <div class="glass-box process-card">
        <div class="section-kicker">Our Process</div>
        <h2>From idea to launch with a clear development flow.</h2>
        <p>
          We combine product strategy, UI/UX planning, development, testing, and deployment into one structured process.
          Every step is made to keep your project clear, measurable, and ready to grow.
        </p>
        <div class="mini-stats">
          <div class="mini-stat">
            <strong>01</strong>
            <span>Discovery first</span>
          </div>
          <div class="mini-stat">
            <strong>02</strong>
            <span>Design-driven build</span>
          </div>
          <div class="mini-stat">
            <strong>03</strong>
            <span>Secure development</span>
          </div>
          <div class="mini-stat">
            <strong>04</strong>
            <span>Launch support</span>
          </div>
        </div>
      </div>

      <div class="glass-box">
        <div class="timeline">
          <div class="timeline-item">
            <div class="timeline-number">1</div>
            <div>
              <h3>Requirement & Planning</h3>
              <p>We define goals, features, user roles, business flow, timeline, and technical direction.</p>
            </div>
          </div>
          <div class="timeline-item">
            <div class="timeline-number">2</div>
            <div>
              <h3>UI/UX & System Design</h3>
              <p>We prepare interface structure, user flow, database planning, and application architecture.</p>
            </div>
          </div>
          <div class="timeline-item">
            <div class="timeline-number">3</div>
            <div>
              <h3>Development & Integration</h3>
              <p>We build frontend, backend, API, database, authentication, dashboard, and core features.</p>
            </div>
          </div>
          <div class="timeline-item">
            <div class="timeline-number">4</div>
            <div>
              <h3>Testing & Deployment</h3>
              <p>We test functionality, responsiveness, performance, security, and deploy the final product.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container">
      <div class="section-head center">
        <div class="section-kicker">Industries</div>
        <h2 class="section-title">Flexible solutions for multiple business needs.</h2>
      </div>
      <div class="industries">
        <div class="industry-card">
          <span>🛒</span>
          <h3>E-Commerce</h3>
          <p>Online store, product catalog, checkout, order management, and seller dashboards.</p>
        </div>
        <div class="industry-card">
          <span>🎬</span>
          <h3>Media Platform</h3>
          <p>Video sharing, live streaming, news publishing, creator tools, and content management.</p>
        </div>
        <div class="industry-card">
          <span>👥</span>
          <h3>Community</h3>
          <p>Membership, social networking, professional networking, discussion, and event platforms.</p>
        </div>
        <div class="industry-card">
          <span>📊</span>
          <h3>Business System</h3>
          <p>ERP-lite, CRM, reporting dashboard, internal operation tools, and automation systems.</p>
        </div>
      </div>
    </section>

    <section class="container tech-section">
      <div class="section-head center">
        <div class="section-kicker">Technology Stack</div>
        <h2 class="section-title">Built with reliable and scalable technologies.</h2>
      </div>
      <div class="tech-wrap">
        <span class="tech-pill">React</span>
        <span class="tech-pill">Next.js</span>
        <span class="tech-pill">Node.js</span>
        <span class="tech-pill">NestJS</span>
        <span class="tech-pill">Express.js</span>
        <span class="tech-pill">PostgreSQL</span>
        <span class="tech-pill">MySQL</span>
        <span class="tech-pill">MongoDB</span>
        <span class="tech-pill">REST API</span>
        <span class="tech-pill">Firebase</span>
        <span class="tech-pill">Cloud Hosting</span>
        <span class="tech-pill">Mobile App</span>
      </div>
    </section>

    <section class="container">
      <div class="cta">
        <h2>Have a product idea or need a business system?</h2>
        <p>
          Let’s transform your idea into a clean, scalable, and user-friendly digital product that fits your goals.
        </p>
        <div class="hero-actions" style="justify-content: center;">
          <a href="#" class="btn btn-primary">Start a Project →</a>
          <a href="#services" class="btn btn-outline">See Service Details</a>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
