<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Careers</title>
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

    .careers-page {
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

    .gradient-text {
      background: linear-gradient(135deg, #ffffff 0%, #67e8f9 38%, #a78bfa 72%, #f0abfc 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .hero {
      display: grid;
      grid-template-columns: minmax(0, 1.02fr) minmax(360px, 0.98fr);
      gap: 42px;
      align-items: center;
      margin-bottom: 70px;
    }

    .hero h1 {
      font-size: clamp(42px, 7vw, 82px);
      line-height: 0.98;
      letter-spacing: -0.07em;
      max-width: 780px;
      margin-bottom: 24px;
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

    .career-board {
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

    .dot {
      width: 11px;
      height: 11px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.28);
    }

    .dot:nth-child(1) { background: var(--danger); }
    .dot:nth-child(2) { background: var(--warning); }
    .dot:nth-child(3) { background: var(--success); }

    .window-label {
      color: var(--muted);
      font-size: 13px;
      font-weight: 700;
    }

    .career-highlight {
      display: grid;
      grid-template-columns: 1fr 0.8fr;
      gap: 16px;
      margin-bottom: 16px;
    }

    .profile-card,
    .hiring-card,
    .job-mini-card {
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 22px;
      background: rgba(255, 255, 255, 0.06);
      box-shadow: 0 18px 50px rgba(0, 0, 0, 0.16);
    }

    .profile-card {
      padding: 18px;
    }

    .profile-row {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 16px;
    }

    .avatar-stack {
      display: flex;
      align-items: center;
      padding-left: 12px;
    }

    .avatar {
      width: 44px;
      height: 44px;
      display: grid;
      place-items: center;
      border-radius: 50%;
      margin-left: -12px;
      border: 2px solid rgba(5, 8, 22, 0.95);
      background: linear-gradient(135deg, rgba(34, 211, 238, 0.95), rgba(99, 102, 241, 0.95));
      font-weight: 900;
      color: #020617;
    }

    .avatar:nth-child(2) {
      background: linear-gradient(135deg, rgba(168, 85, 247, 0.95), rgba(244, 114, 182, 0.95));
      color: #fff;
    }

    .avatar:nth-child(3) {
      background: linear-gradient(135deg, rgba(34, 197, 94, 0.95), rgba(34, 211, 238, 0.95));
      color: #02111a;
    }

    .profile-title h3,
    .hiring-card h3 {
      font-size: 18px;
      line-height: 1.2;
      margin-bottom: 4px;
    }

    .profile-title span,
    .hiring-card p,
    .job-mini-card p {
      color: var(--muted);
      font-size: 13px;
    }

    .progress-list {
      display: grid;
      gap: 12px;
    }

    .progress-item {
      display: grid;
      gap: 6px;
    }

    .progress-head {
      display: flex;
      justify-content: space-between;
      color: var(--muted);
      font-size: 12px;
      font-weight: 700;
    }

    .bar {
      height: 9px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.08);
      overflow: hidden;
    }

    .bar span {
      display: block;
      height: 100%;
      border-radius: inherit;
      background: linear-gradient(135deg, var(--primary), var(--accent));
    }

    .hiring-card {
      padding: 18px;
      position: relative;
      overflow: hidden;
    }

    .hiring-card::after {
      content: "";
      position: absolute;
      width: 120px;
      height: 120px;
      border-radius: 50%;
      right: -55px;
      bottom: -55px;
      background: rgba(34, 211, 238, 0.16);
      filter: blur(3px);
    }

    .hiring-number {
      font-size: 48px;
      line-height: 1;
      font-weight: 950;
      letter-spacing: -0.08em;
      margin: 18px 0 8px;
    }

    .job-mini-grid {
      display: grid;
      gap: 12px;
    }

    .job-mini-card {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      padding: 15px;
    }

    .job-mini-card strong {
      display: block;
      font-size: 14px;
    }

    .job-tag {
      flex: 0 0 auto;
      padding: 6px 10px;
      border-radius: 999px;
      background: rgba(34, 211, 238, 0.1);
      color: #cffafe;
      font-size: 12px;
      font-weight: 800;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      margin-bottom: 70px;
    }

    .stat-card {
      padding: 24px;
      border: 1px solid var(--line);
      border-radius: var(--radius-md);
      background: rgba(255, 255, 255, 0.055);
      box-shadow: 0 20px 54px rgba(0, 0, 0, 0.18);
    }

    .stat-card h3 {
      font-size: 34px;
      letter-spacing: -0.04em;
      margin-bottom: 4px;
    }

    .stat-card p {
      color: var(--muted);
      font-size: 14px;
    }

    .section-head {
      display: flex;
      justify-content: space-between;
      gap: 24px;
      align-items: end;
      margin-bottom: 28px;
    }

    .section-head.center {
      display: block;
      text-align: center;
      max-width: 800px;
      margin: 0 auto 32px;
    }

    .section-kicker {
      color: var(--primary);
      text-transform: uppercase;
      letter-spacing: 0.14em;
      font-size: 13px;
      font-weight: 900;
      margin-bottom: 10px;
    }

    .section-title {
      font-size: clamp(30px, 4.5vw, 54px);
      line-height: 1.04;
      letter-spacing: -0.055em;
    }

    .section-desc {
      max-width: 500px;
      color: var(--muted);
      font-size: 16px;
    }

    .jobs-section,
    .culture-section,
    .process-section,
    .benefit-section,
    .cta {
      margin-bottom: 70px;
    }

    .jobs-filter {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 22px;
    }

    .filter-pill {
      padding: 10px 14px;
      border: 1px solid var(--line);
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.055);
      color: var(--muted);
      font-size: 13px;
      font-weight: 800;
    }

    .filter-pill.active {
      border-color: rgba(34, 211, 238, 0.45);
      background: rgba(34, 211, 238, 0.1);
      color: #cffafe;
    }

    .jobs-grid {
      display: grid;
      gap: 16px;
    }

    .job-card {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 22px;
      align-items: center;
      padding: 24px;
      border: 1px solid var(--line);
      border-radius: var(--radius-md);
      background:
        linear-gradient(135deg, rgba(255, 255, 255, 0.09), rgba(255, 255, 255, 0.035)),
        rgba(255, 255, 255, 0.05);
      transition: 0.25s ease;
    }

    .job-card:hover {
      transform: translateY(-4px);
      border-color: rgba(34, 211, 238, 0.38);
      box-shadow: 0 22px 60px rgba(34, 211, 238, 0.08);
    }

    .job-card h3 {
      font-size: 22px;
      letter-spacing: -0.03em;
      margin-bottom: 8px;
    }

    .job-card p {
      color: var(--muted);
      max-width: 700px;
      margin-bottom: 14px;
    }

    .meta-list {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .meta-list span {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 10px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.06);
      color: #dbeafe;
      font-size: 12px;
      font-weight: 800;
    }

    .job-apply {
      white-space: nowrap;
      padding: 12px 17px;
      border-radius: 999px;
      background: rgba(34, 211, 238, 0.1);
      color: #cffafe;
      border: 1px solid rgba(34, 211, 238, 0.35);
      font-weight: 900;
    }

    .culture-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .culture-card,
    .benefit-card,
    .process-card {
      border: 1px solid var(--line);
      border-radius: var(--radius-md);
      background: rgba(255, 255, 255, 0.055);
      padding: 24px;
      transition: 0.25s ease;
    }

    .culture-card:hover,
    .benefit-card:hover,
    .process-card:hover {
      transform: translateY(-4px);
      border-color: rgba(34, 211, 238, 0.32);
      background: rgba(255, 255, 255, 0.075);
    }

    .icon-box {
      width: 48px;
      height: 48px;
      display: grid;
      place-items: center;
      border-radius: 16px;
      margin-bottom: 18px;
      background: linear-gradient(135deg, rgba(34, 211, 238, 0.22), rgba(168, 85, 247, 0.22));
      border: 1px solid rgba(255, 255, 255, 0.12);
      font-size: 22px;
    }

    .culture-card h3,
    .benefit-card h3,
    .process-card h3 {
      font-size: 20px;
      letter-spacing: -0.03em;
      margin-bottom: 10px;
    }

    .culture-card p,
    .benefit-card p,
    .process-card p {
      color: var(--muted);
      font-size: 15px;
    }

    .benefit-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    .process-grid {
      position: relative;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    .process-card {
      position: relative;
    }

    .step-number {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: #020617;
      font-weight: 950;
      margin-bottom: 18px;
    }

    .cta {
      position: relative;
      overflow: hidden;
      text-align: center;
      padding: 58px 24px;
      border: 1px solid rgba(34, 211, 238, 0.24);
      border-radius: var(--radius-lg);
      background:
        radial-gradient(circle at 15% 10%, rgba(34, 211, 238, 0.18), transparent 28%),
        radial-gradient(circle at 85% 0%, rgba(168, 85, 247, 0.2), transparent 30%),
        rgba(255, 255, 255, 0.055);
      box-shadow: var(--shadow);
    }

    .cta h2 {
      font-size: clamp(32px, 4.8vw, 58px);
      line-height: 1.05;
      letter-spacing: -0.06em;
      max-width: 780px;
      margin: 0 auto 18px;
    }

    .cta p {
      color: var(--muted);
      max-width: 660px;
      margin: 0 auto 28px;
      font-size: 17px;
    }

    @media (max-width: 980px) {
      .hero,
      .career-highlight {
        grid-template-columns: 1fr;
      }

      .hero-panel {
        min-height: 560px;
      }

      .stats-grid,
      .benefit-grid,
      .process-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .culture-grid {
        grid-template-columns: 1fr;
      }

      .section-head {
        display: block;
      }

      .section-desc {
        margin-top: 12px;
      }
    }

    @media (max-width: 680px) {
      .careers-page {
        padding: 52px 16px;
      }

      .hero-panel {
        min-height: 640px;
      }

      .career-board {
        inset: 14px;
        padding: 16px;
      }

      .stats-grid,
      .benefit-grid,
      .process-grid {
        grid-template-columns: 1fr;
      }

      .job-card {
        grid-template-columns: 1fr;
      }

      .job-apply {
        width: fit-content;
      }

      .hero h1 {
        letter-spacing: -0.055em;
      }
    }
  </style>
</head>
<body>
  <main class="careers-page">
    <section class="hero container">
      <div>
        <div class="badge"><span></span> Careers</div>
        <h1>Build your future with a <span class="gradient-text">team that ships impact.</span></h1>
        <p>
          Join a product-focused technology team where designers, engineers, marketers, and strategists collaborate to build scalable digital platforms for modern businesses.
        </p>
        <div class="hero-actions">
          <a href="#open-roles" class="btn btn-primary">View Open Roles</a>
          <a href="#culture" class="btn btn-outline">Explore Our Culture</a>
        </div>
      </div>

      <div class="hero-panel" aria-label="Careers dashboard preview">
        <div class="career-board">
          <div class="window-top">
            <div class="dots">
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
            </div>
            <div class="window-label">Talent Dashboard</div>
          </div>

          <div class="career-highlight">
            <div class="profile-card">
              <div class="profile-row">
                <div class="avatar-stack">
                  <div class="avatar">UI</div>
                  <div class="avatar">FE</div>
                  <div class="avatar">BE</div>
                </div>
                <div class="profile-title">
                  <h3>Cross-functional Squad</h3>
                  <span>Product, Design, Engineering</span>
                </div>
              </div>

              <div class="progress-list">
                <div class="progress-item">
                  <div class="progress-head">
                    <span>Product Delivery</span>
                    <span>92%</span>
                  </div>
                  <div class="bar"><span style="width: 92%;"></span></div>
                </div>
                <div class="progress-item">
                  <div class="progress-head">
                    <span>Team Collaboration</span>
                    <span>88%</span>
                  </div>
                  <div class="bar"><span style="width: 88%;"></span></div>
                </div>
                <div class="progress-item">
                  <div class="progress-head">
                    <span>Learning Growth</span>
                    <span>96%</span>
                  </div>
                  <div class="bar"><span style="width: 96%;"></span></div>
                </div>
              </div>
            </div>

            <div class="hiring-card">
              <h3>Now Hiring</h3>
              <p>Open opportunities across product development, design, and growth.</p>
              <div class="hiring-number gradient-text">08</div>
              <p>Active positions</p>
            </div>
          </div>

          <div class="job-mini-grid">
            <div class="job-mini-card">
              <div>
                <strong>Frontend Developer</strong>
                <p>React, Next.js, TypeScript</p>
              </div>
              <span class="job-tag">Remote</span>
            </div>
            <div class="job-mini-card">
              <div>
                <strong>UI/UX Designer</strong>
                <p>Product design & design system</p>
              </div>
              <span class="job-tag">Hybrid</span>
            </div>
            <div class="job-mini-card">
              <div>
                <strong>Backend Developer</strong>
                <p>API, database, cloud infrastructure</p>
              </div>
              <span class="job-tag">Full Time</span>
            </div>
            <div class="job-mini-card">
              <div>
                <strong>Project Manager</strong>
                <p>Delivery, roadmap, stakeholder management</p>
              </div>
              <span class="job-tag">On Site</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container stats-grid">
      <div class="stat-card">
        <h3>20+</h3>
        <p>Digital products launched with clients and partners.</p>
      </div>
      <div class="stat-card">
        <h3>4</h3>
        <p>Main squads covering product, design, engineering, and growth.</p>
      </div>
      <div class="stat-card">
        <h3>100%</h3>
        <p>Collaborative workflow with transparent communication.</p>
      </div>
      <div class="stat-card">
        <h3>∞</h3>
        <p>Room to learn, experiment, and grow your career path.</p>
      </div>
    </section>

    <section class="container jobs-section" id="open-roles">
      <div class="section-head">
        <div>
          <div class="section-kicker">Open Positions</div>
          <h2 class="section-title">Find the role that matches your next step.</h2>
        </div>
        <p class="section-desc">
          Explore opportunities to work on real products, solve real business problems, and grow with a team that values ownership and quality.
        </p>
      </div>

      <div class="jobs-filter">
        <span class="filter-pill active">All Roles</span>
        <span class="filter-pill">Engineering</span>
        <span class="filter-pill">Design</span>
        <span class="filter-pill">Product</span>
        <span class="filter-pill">Marketing</span>
      </div>

      <div class="jobs-grid">
        <article class="job-card">
          <div>
            <h3>Frontend Developer</h3>
            <p>Build responsive web interfaces, reusable components, dashboards, and customer-facing pages using modern frontend technologies.</p>
            <div class="meta-list">
              <span>Engineering</span>
              <span>Full Time</span>
              <span>Remote / Hybrid</span>
            </div>
          </div>
          <a href="#apply" class="job-apply">Apply Now</a>
        </article>

        <article class="job-card">
          <div>
            <h3>Backend Developer</h3>
            <p>Develop secure APIs, database structures, authentication flows, integrations, and scalable backend systems for digital platforms.</p>
            <div class="meta-list">
              <span>Engineering</span>
              <span>Full Time</span>
              <span>On Site / Hybrid</span>
            </div>
          </div>
          <a href="#apply" class="job-apply">Apply Now</a>
        </article>

        <article class="job-card">
          <div>
            <h3>UI/UX Designer</h3>
            <p>Create user journeys, wireframes, prototypes, design systems, and polished interfaces for websites, mobile apps, and dashboards.</p>
            <div class="meta-list">
              <span>Design</span>
              <span>Full Time</span>
              <span>Remote / Hybrid</span>
            </div>
          </div>
          <a href="#apply" class="job-apply">Apply Now</a>
        </article>

        <article class="job-card">
          <div>
            <h3>Project Manager</h3>
            <p>Coordinate project timelines, client communication, sprint planning, documentation, and product delivery from concept to launch.</p>
            <div class="meta-list">
              <span>Product</span>
              <span>Full Time</span>
              <span>Hybrid</span>
            </div>
          </div>
          <a href="#apply" class="job-apply">Apply Now</a>
        </article>
      </div>
    </section>

    <section class="container culture-section" id="culture">
      <div class="section-head center">
        <div class="section-kicker">Our Culture</div>
        <h2 class="section-title">A workplace built around ownership, learning, and teamwork.</h2>
      </div>

      <div class="culture-grid">
        <div class="culture-card">
          <div class="icon-box">🚀</div>
          <h3>Product Mindset</h3>
          <p>We focus on solving the right problems, building useful features, and improving products based on real user needs.</p>
        </div>
        <div class="culture-card">
          <div class="icon-box">🤝</div>
          <h3>Collaborative Team</h3>
          <p>We value open discussion, clear communication, and shared responsibility across design, development, and delivery.</p>
        </div>
        <div class="culture-card">
          <div class="icon-box">📈</div>
          <h3>Continuous Growth</h3>
          <p>We encourage learning, experimentation, code reviews, design reviews, and personal development for every team member.</p>
        </div>
      </div>
    </section>

    <section class="container benefit-section">
      <div class="section-head">
        <div>
          <div class="section-kicker">Benefits</div>
          <h2 class="section-title">Support that helps you do your best work.</h2>
        </div>
        <p class="section-desc">
          We create an environment where people can stay productive, motivated, and confident while growing their skills.
        </p>
      </div>

      <div class="benefit-grid">
        <div class="benefit-card">
          <div class="icon-box">⏱️</div>
          <h3>Flexible Workflow</h3>
          <p>Clear priorities, focused sprints, and flexible collaboration style.</p>
        </div>
        <div class="benefit-card">
          <div class="icon-box">💻</div>
          <h3>Modern Tools</h3>
          <p>Work with modern design, development, and project management tools.</p>
        </div>
        <div class="benefit-card">
          <div class="icon-box">🎯</div>
          <h3>Real Projects</h3>
          <p>Contribute to real applications used by businesses and communities.</p>
        </div>
        <div class="benefit-card">
          <div class="icon-box">🌱</div>
          <h3>Career Growth</h3>
          <p>Learn through mentoring, feedback, review sessions, and hands-on tasks.</p>
        </div>
      </div>
    </section>

    <section class="container process-section">
      <div class="section-head center">
        <div class="section-kicker">Hiring Process</div>
        <h2 class="section-title">Simple, transparent, and focused on fit.</h2>
      </div>

      <div class="process-grid">
        <div class="process-card">
          <div class="step-number">1</div>
          <h3>Submit Application</h3>
          <p>Send your profile, portfolio, GitHub, CV, or previous work samples.</p>
        </div>
        <div class="process-card">
          <div class="step-number">2</div>
          <h3>Initial Review</h3>
          <p>Our team reviews your experience, skills, and role compatibility.</p>
        </div>
        <div class="process-card">
          <div class="step-number">3</div>
          <h3>Interview Session</h3>
          <p>Discuss your background, workflow, communication style, and goals.</p>
        </div>
        <div class="process-card">
          <div class="step-number">4</div>
          <h3>Final Decision</h3>
          <p>Receive feedback, next steps, and onboarding details if selected.</p>
        </div>
      </div>
    </section>

    <section class="container cta" id="apply">
      <h2>Ready to grow with us?</h2>
      <p>
        Send your application and tell us what role you are interested in. We are always open to meeting people who love building useful digital products.
      </p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="mailto:careers@example.com" class="btn btn-primary">Send Application</a>
        <a href="#open-roles" class="btn btn-outline">Back to Open Roles</a>
      </div>
    </section>
  </main>
</body>
</html>
