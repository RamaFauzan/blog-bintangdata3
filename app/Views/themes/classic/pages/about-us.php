<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
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

    .about-page {
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

    .gradient-text {
      background: linear-gradient(135deg, #ffffff 0%, #cffafe 34%, #22d3ee 58%, #a855f7 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
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

    .hero {
      display: grid;
      grid-template-columns: 1.02fr 0.98fr;
      gap: 42px;
      align-items: center;
      padding-bottom: 86px;
    }

    .hero h1 {
      max-width: 820px;
      font-size: clamp(42px, 6vw, 78px);
      line-height: 0.98;
      letter-spacing: -0.06em;
      margin-bottom: 24px;
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

    .hero-stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
      max-width: 690px;
    }

    .hero-stat {
      padding: 15px;
      border: 1px solid var(--line);
      border-radius: 16px;
      background: rgba(255, 255, 255, 0.055);
    }

    .hero-stat strong {
      display: block;
      font-size: 22px;
      line-height: 1.1;
      color: #ffffff;
      margin-bottom: 5px;
    }

    .hero-stat span {
      color: var(--muted);
      font-size: 13px;
      font-weight: 700;
    }

    .about-visual {
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

    .company-card {
      position: relative;
      z-index: 2;
      width: min(560px, 100%);
      border: 1px solid rgba(255, 255, 255, 0.16);
      border-radius: 30px;
      background: linear-gradient(145deg, rgba(255,255,255,0.14), rgba(255,255,255,0.045));
      box-shadow: var(--shadow);
      backdrop-filter: blur(22px);
      overflow: hidden;
    }

    .company-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 18px;
      border-bottom: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.055);
    }

    .company-dots {
      display: flex;
      gap: 8px;
    }

    .company-dots i {
      width: 11px;
      height: 11px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.32);
    }

    .company-status {
      padding: 7px 11px;
      border-radius: 999px;
      background: rgba(34, 197, 94, 0.16);
      color: #bbf7d0;
      font-size: 12px;
      font-weight: 900;
    }

    .company-body {
      padding: 26px;
    }

    .brand-panel {
      min-height: 190px;
      border-radius: 24px;
      padding: 24px;
      position: relative;
      overflow: hidden;
      background:
        radial-gradient(circle at 18% 22%, rgba(255,255,255,0.4), transparent 14%),
        linear-gradient(135deg, rgba(34,211,238,0.95), rgba(99,102,241,0.92), rgba(168,85,247,0.9));
      margin-bottom: 20px;
    }

    .brand-panel::after {
      content: "";
      position: absolute;
      inset: auto -40px -70px 24%;
      height: 150px;
      transform: rotate(-8deg);
      border-radius: 999px;
      background: rgba(255,255,255,0.22);
    }

    .brand-panel h3 {
      position: relative;
      z-index: 1;
      max-width: 330px;
      font-size: 31px;
      line-height: 1.05;
      letter-spacing: -0.04em;
    }

    .brand-panel p {
      position: relative;
      z-index: 1;
      max-width: 350px;
      color: rgba(255,255,255,0.84);
      font-size: 14px;
      margin-top: 12px;
    }

    .company-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 14px;
    }

    .company-item {
      padding: 17px;
      border: 1px solid var(--line);
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.06);
    }

    .company-item i {
      display: inline-grid;
      place-items: center;
      width: 38px;
      height: 38px;
      border-radius: 14px;
      background: rgba(255, 255, 255, 0.09);
      font-style: normal;
      margin-bottom: 12px;
    }

    .company-item strong {
      display: block;
      font-size: 15px;
      margin-bottom: 5px;
    }

    .company-item span {
      color: var(--muted);
      font-size: 13px;
      font-weight: 700;
    }

    .floating-card {
      position: absolute;
      z-index: 3;
      border: 1px solid rgba(255, 255, 255, 0.14);
      background: rgba(10, 17, 38, 0.72);
      backdrop-filter: blur(18px);
      box-shadow: 0 24px 70px rgba(0,0,0,0.32);
      border-radius: 20px;
      padding: 16px;
    }

    .floating-card.experience {
      left: -10px;
      bottom: 60px;
      width: 215px;
    }

    .floating-card.delivery {
      right: -10px;
      top: 86px;
      width: 215px;
    }

    .floating-card h4 {
      font-size: 13px;
      margin-bottom: 12px;
      color: #e0f2fe;
    }

    .mini-row {
      display: flex;
      justify-content: space-between;
      gap: 10px;
      color: var(--muted);
      font-size: 12px;
      font-weight: 800;
      margin-bottom: 9px;
    }

    .mini-row strong {
      color: #ffffff;
    }

    .progress {
      height: 8px;
      border-radius: 999px;
      overflow: hidden;
      background: rgba(255,255,255,0.08);
      margin-top: 8px;
    }

    .progress span {
      display: block;
      height: 100%;
      width: 88%;
      border-radius: inherit;
      background: linear-gradient(90deg, var(--primary), var(--accent));
    }

    .section-head {
      display: flex;
      justify-content: space-between;
      align-items: end;
      gap: 24px;
      margin-bottom: 34px;
    }

    .section-head.center {
      text-align: center;
      justify-content: center;
    }

    .section-head h2 {
      font-size: clamp(32px, 4vw, 54px);
      line-height: 1.02;
      letter-spacing: -0.05em;
      margin-bottom: 12px;
    }

    .section-head p {
      color: var(--muted);
      max-width: 650px;
      font-size: 17px;
    }

    .story-section {
      padding: 76px 0;
    }

    .story-card {
      display: grid;
      grid-template-columns: 0.9fr 1.1fr;
      gap: 28px;
      padding: 18px;
      border: 1px solid var(--line);
      border-radius: var(--radius-lg);
      background: linear-gradient(145deg, rgba(255,255,255,0.11), rgba(255,255,255,0.045));
      box-shadow: 0 28px 70px rgba(0,0,0,0.28);
      overflow: hidden;
    }

    .story-image {
      min-height: 430px;
      border-radius: 24px;
      position: relative;
      overflow: hidden;
      background:
        radial-gradient(circle at 18% 20%, rgba(255,255,255,0.42), transparent 13%),
        radial-gradient(circle at 86% 24%, rgba(255,255,255,0.28), transparent 16%),
        linear-gradient(135deg, rgba(34,211,238,0.95), rgba(99,102,241,0.92), rgba(168,85,247,0.9));
    }

    .story-image::before,
    .story-image::after {
      content: "";
      position: absolute;
      border-radius: 999px;
      background: rgba(255,255,255,0.22);
    }

    .story-image::before {
      width: 360px;
      height: 120px;
      left: -90px;
      bottom: 55px;
      transform: rotate(18deg);
    }

    .story-image::after {
      width: 260px;
      height: 260px;
      right: -110px;
      top: -70px;
    }

    .image-label {
      position: absolute;
      left: 22px;
      bottom: 22px;
      padding: 11px 14px;
      border-radius: 999px;
      color: #fff;
      background: rgba(5, 8, 22, 0.35);
      border: 1px solid rgba(255,255,255,0.22);
      backdrop-filter: blur(12px);
      font-size: 13px;
      font-weight: 900;
    }

    .story-content {
      padding: 28px 24px;
      align-self: center;
    }

    .story-content h2 {
      font-size: clamp(31px, 4vw, 52px);
      line-height: 1.04;
      letter-spacing: -0.05em;
      margin-bottom: 18px;
    }

    .story-content p {
      color: var(--muted);
      font-size: 16px;
      margin-bottom: 16px;
    }

    .story-list {
      display: grid;
      gap: 12px;
      margin-top: 22px;
    }

    .story-list li {
      list-style: none;
      display: flex;
      gap: 12px;
      padding: 14px;
      border-radius: 18px;
      border: 1px solid var(--line);
      background: rgba(255,255,255,0.045);
      color: #dbeafe;
      font-weight: 750;
    }

    .story-list li span {
      flex: 0 0 auto;
      width: 28px;
      height: 28px;
      display: grid;
      place-items: center;
      border-radius: 10px;
      background: linear-gradient(135deg, rgba(34,211,238,0.28), rgba(168,85,247,0.22));
      color: #cffafe;
      font-weight: 950;
    }

    .values-section {
      padding: 76px 0;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px;
    }

    .value-card {
      min-height: 250px;
      padding: 24px;
      border: 1px solid var(--line);
      border-radius: var(--radius-md);
      background: rgba(255,255,255,0.06);
      position: relative;
      overflow: hidden;
      transition: 0.25s ease;
    }

    .value-card::before {
      content: "";
      position: absolute;
      width: 170px;
      height: 170px;
      border-radius: 50%;
      right: -80px;
      top: -80px;
      background: radial-gradient(circle, rgba(34,211,238,0.22), transparent 70%);
    }

    .value-card:hover {
      transform: translateY(-6px);
      border-color: rgba(34,211,238,0.35);
      background: rgba(255,255,255,0.085);
    }

    .value-icon {
      width: 52px;
      height: 52px;
      display: grid;
      place-items: center;
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(34,211,238,0.22), rgba(168,85,247,0.2));
      margin-bottom: 20px;
      font-size: 22px;
    }

    .value-card h3 {
      font-size: 21px;
      letter-spacing: -0.03em;
      margin-bottom: 12px;
    }

    .value-card p {
      color: var(--muted);
      font-size: 14.5px;
    }

    .mission-section {
      padding: 76px 0;
    }

    .mission-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 22px;
    }

    .mission-card {
      padding: 30px;
      min-height: 320px;
      border: 1px solid var(--line);
      border-radius: var(--radius-lg);
      background: linear-gradient(145deg, rgba(255,255,255,0.11), rgba(255,255,255,0.045));
      box-shadow: 0 24px 58px rgba(0,0,0,0.22);
      position: relative;
      overflow: hidden;
    }

    .mission-card::after {
      content: "";
      position: absolute;
      inset: auto -70px -110px auto;
      width: 240px;
      height: 240px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(168,85,247,0.26), transparent 70%);
    }

    .mission-card .label {
      display: inline-flex;
      padding: 8px 12px;
      border-radius: 999px;
      background: rgba(34,211,238,0.12);
      border: 1px solid rgba(34,211,238,0.24);
      color: #cffafe;
      font-size: 13px;
      font-weight: 900;
      margin-bottom: 18px;
    }

    .mission-card h3 {
      position: relative;
      z-index: 1;
      font-size: clamp(28px, 3vw, 43px);
      line-height: 1.05;
      letter-spacing: -0.05em;
      margin-bottom: 16px;
    }

    .mission-card p {
      position: relative;
      z-index: 1;
      color: var(--muted);
      max-width: 520px;
      font-size: 16px;
    }

    .process-section {
      padding: 76px 0;
    }

    .process-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    .process-card {
      padding: 24px;
      border: 1px solid var(--line);
      border-radius: var(--radius-md);
      background: rgba(255,255,255,0.055);
      min-height: 230px;
    }

    .process-number {
      display: inline-grid;
      place-items: center;
      width: 48px;
      height: 48px;
      border-radius: 16px;
      background: linear-gradient(135deg, var(--primary), var(--secondary), var(--accent));
      font-weight: 950;
      margin-bottom: 18px;
    }

    .process-card h3 {
      font-size: 20px;
      margin-bottom: 10px;
      letter-spacing: -0.03em;
    }

    .process-card p {
      color: var(--muted);
      font-size: 14.5px;
    }

    .team-section {
      padding: 76px 0;
    }

    .team-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .team-card {
      padding: 20px;
      border: 1px solid var(--line);
      border-radius: var(--radius-md);
      background: rgba(255,255,255,0.06);
      transition: 0.25s ease;
    }

    .team-card:hover {
      transform: translateY(-6px);
      border-color: rgba(34,211,238,0.32);
    }

    .team-avatar {
      height: 190px;
      border-radius: 20px;
      background:
        radial-gradient(circle at 30% 25%, rgba(255,255,255,0.4), transparent 16%),
        linear-gradient(135deg, rgba(34,211,238,0.82), rgba(99,102,241,0.78), rgba(168,85,247,0.8));
      margin-bottom: 18px;
      position: relative;
      overflow: hidden;
    }

    .team-avatar::after {
      content: "";
      position: absolute;
      left: 50%;
      bottom: -44px;
      transform: translateX(-50%);
      width: 150px;
      height: 150px;
      border-radius: 50%;
      background: rgba(255,255,255,0.2);
    }

    .team-card h3 {
      font-size: 21px;
      margin-bottom: 4px;
      letter-spacing: -0.03em;
    }

    .team-card span {
      display: block;
      color: #cffafe;
      font-size: 13px;
      font-weight: 900;
      margin-bottom: 10px;
    }

    .team-card p {
      color: var(--muted);
      font-size: 14.5px;
    }

    .cta {
      margin-top: 76px;
      padding: 56px 24px;
      border: 1px solid rgba(255,255,255,0.14);
      border-radius: var(--radius-lg);
      background:
        radial-gradient(circle at 20% 20%, rgba(34,211,238,0.28), transparent 28%),
        radial-gradient(circle at 82% 24%, rgba(168,85,247,0.28), transparent 30%),
        linear-gradient(145deg, rgba(255,255,255,0.11), rgba(255,255,255,0.045));
      text-align: center;
      box-shadow: var(--shadow);
    }

    .cta h2 {
      max-width: 800px;
      margin: 0 auto 14px;
      font-size: clamp(32px, 4vw, 56px);
      line-height: 1.02;
      letter-spacing: -0.05em;
    }

    .cta p {
      color: var(--muted);
      max-width: 720px;
      margin: 0 auto 28px;
      font-size: 17px;
    }

    @media (max-width: 1050px) {
      .hero,
      .story-card {
        grid-template-columns: 1fr;
      }

      .about-visual {
        min-height: auto;
      }

      .floating-card {
        display: none;
      }

      .values-grid,
      .process-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 760px) {
      .about-page {
        padding: 50px 16px;
      }

      .hero {
        padding-bottom: 54px;
      }

      .hero-stats,
      .mission-grid,
      .team-grid,
      .values-grid,
      .process-grid,
      .company-grid {
        grid-template-columns: 1fr;
      }

      .section-head {
        display: block;
      }

      .story-section,
      .values-section,
      .mission-section,
      .process-section,
      .team-section {
        padding: 48px 0;
      }

      .story-content,
      .mission-card {
        padding: 24px 18px;
      }

      .story-image {
        min-height: 300px;
      }
    }
  </style>
</head>
<body>
  <main class="about-page">
    <section class="hero container">
      <div>
        <div class="badge"><span></span> About Us</div>
        <h1>We build digital products that help businesses <span class="gradient-text">grow faster.</span></h1>
        <p>
          We are a technology-driven team focused on creating modern websites, mobile applications, custom software,
          and scalable digital platforms with strong design, clean development, and reliable delivery.
        </p>

        <div class="hero-actions">
          <a href="#story" class="btn btn-primary">Discover Our Story</a>
          <a href="#process" class="btn btn-secondary">See How We Work</a>
        </div>

        <div class="hero-stats">
          <div class="hero-stat">
            <strong>50+</strong>
            <span>Projects Delivered</span>
          </div>
          <div class="hero-stat">
            <strong>5+</strong>
            <span>Core Services</span>
          </div>
          <div class="hero-stat">
            <strong>End-to-End</strong>
            <span>Product Development</span>
          </div>
        </div>
      </div>

      <div class="about-visual">
        <div class="glow-orb"></div>
        <div class="company-card">
          <div class="company-top">
            <div class="company-dots"><i></i><i></i><i></i></div>
            <div class="company-status">Trusted Partner</div>
          </div>

          <div class="company-body">
            <div class="brand-panel">
              <h3>Digital solutions designed for real business impact.</h3>
              <p>From planning to launch, every product is built with usability, performance, and growth in mind.</p>
            </div>

            <div class="company-grid">
              <div class="company-item">
                <i>✦</i>
                <strong>Product Strategy</strong>
                <span>Clear roadmap before development</span>
              </div>
              <div class="company-item">
                <i>◈</i>
                <strong>UI/UX Design</strong>
                <span>Simple interface, strong experience</span>
              </div>
              <div class="company-item">
                <i>⌁</i>
                <strong>Development</strong>
                <span>Scalable web, mobile, and software</span>
              </div>
              <div class="company-item">
                <i>◎</i>
                <strong>Support</strong>
                <span>Maintenance and improvement</span>
              </div>
            </div>
          </div>
        </div>

        <div class="floating-card experience">
          <h4>Project Quality</h4>
          <div class="mini-row"><span>Planning</span><strong>95%</strong></div>
          <div class="mini-row"><span>Design</span><strong>92%</strong></div>
          <div class="progress"><span></span></div>
        </div>

        <div class="floating-card delivery">
          <h4>Delivery Focus</h4>
          <div class="mini-row"><span>Research</span><strong>Done</strong></div>
          <div class="mini-row"><span>Build</span><strong>Active</strong></div>
          <div class="mini-row"><span>Launch</span><strong>Ready</strong></div>
        </div>
      </div>
    </section>

    <section class="container story-section" id="story">
      <div class="story-card">
        <div class="story-image">
          <div class="image-label">Our Journey</div>
        </div>
        <div class="story-content">
          <div class="badge"><span></span> Who We Are</div>
          <h2>A team that combines technology, design, and business thinking</h2>
          <p>
            We help companies turn ideas into digital products that are easier to use, easier to manage,
            and ready to scale. Our work covers website development, mobile applications, desktop software,
            custom systems, and platform-based solutions.
          </p>
          <p>
            Every project starts with understanding the business goal. From there, we design the user flow,
            build the technical structure, develop the product, test the experience, and support continuous improvement.
          </p>

          <ul class="story-list">
            <li><span>1</span> We focus on solving real operational and business problems.</li>
            <li><span>2</span> We build clean, maintainable, and scalable digital systems.</li>
            <li><span>3</span> We prioritize communication, transparency, and long-term collaboration.</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="container values-section" id="values">
      <div class="section-head center">
        <div>
          <div class="badge"><span></span> Our Values</div>
          <h2>The principles behind every product we build</h2>
          <p>
            Our values guide how we plan, design, develop, and deliver digital products for every client and project.
          </p>
        </div>
      </div>

      <div class="values-grid">
        <div class="value-card">
          <div class="value-icon">✦</div>
          <h3>Clarity First</h3>
          <p>We make requirements, goals, and product direction clear before moving into development.</p>
        </div>
        <div class="value-card">
          <div class="value-icon">◈</div>
          <h3>User Focused</h3>
          <p>We design experiences that are easy to understand, efficient to use, and aligned with user needs.</p>
        </div>
        <div class="value-card">
          <div class="value-icon">⌁</div>
          <h3>Scalable Build</h3>
          <p>We create systems with clean structure so they can grow with new features and business needs.</p>
        </div>
        <div class="value-card">
          <div class="value-icon">◎</div>
          <h3>Long-Term Support</h3>
          <p>We care about performance, maintenance, security, and continuous improvement after launch.</p>
        </div>
      </div>
    </section>

    <section class="container mission-section">
      <div class="mission-grid">
        <div class="mission-card">
          <div class="label">Our Mission</div>
          <h3>Deliver digital solutions that make businesses more efficient and competitive.</h3>
          <p>
            We aim to help organizations simplify workflows, improve customer experience, and unlock new growth through reliable digital products.
          </p>
        </div>
        <div class="mission-card">
          <div class="label">Our Vision</div>
          <h3>Become a trusted technology partner for modern business transformation.</h3>
          <p>
            We want to support businesses with platforms that are not only visually strong, but also useful, scalable, and ready for the future.
          </p>
        </div>
      </div>
    </section>

    <section class="container process-section" id="process">
      <div class="section-head">
        <div>
          <div class="badge"><span></span> How We Work</div>
          <h2>A clear process from idea to launch</h2>
          <p>
            We follow a structured workflow to make development more focused, transparent, and easier to manage.
          </p>
        </div>
      </div>

      <div class="process-grid">
        <div class="process-card">
          <div class="process-number">01</div>
          <h3>Discovery</h3>
          <p>We understand your goals, users, problems, features, and technical requirements.</p>
        </div>
        <div class="process-card">
          <div class="process-number">02</div>
          <h3>Design</h3>
          <p>We create wireframes, user flows, interface direction, and product experience planning.</p>
        </div>
        <div class="process-card">
          <div class="process-number">03</div>
          <h3>Development</h3>
          <p>We build the platform using clean code, scalable architecture, and reliable integration.</p>
        </div>
        <div class="process-card">
          <div class="process-number">04</div>
          <h3>Launch & Support</h3>
          <p>We test, deploy, monitor, maintain, and improve the product after release.</p>
        </div>
      </div>
    </section>

    <section class="container team-section">
      <div class="section-head center">
        <div>
          <div class="badge"><span></span> Our Team</div>
          <h2>Built by people who care about product quality</h2>
          <p>
            Our team brings together strategy, design, engineering, and support to deliver complete digital solutions.
          </p>
        </div>
      </div>

      <div class="team-grid">
        <div class="team-card">
          <div class="team-avatar"></div>
          <h3>Product Strategist</h3>
          <span>Planning & Direction</span>
          <p>Transforms business goals into clear features, roadmap, and measurable product priorities.</p>
        </div>
        <div class="team-card">
          <div class="team-avatar"></div>
          <h3>UI/UX Designer</h3>
          <span>Experience & Interface</span>
          <p>Creates clean, modern, and user-friendly interfaces for web, mobile, and software platforms.</p>
        </div>
        <div class="team-card">
          <div class="team-avatar"></div>
          <h3>Software Engineer</h3>
          <span>Development & Integration</span>
          <p>Builds scalable frontend, backend, database, API, and deployment structure for each product.</p>
        </div>
      </div>
    </section>

    <section class="container cta">
      <div class="badge"><span></span> Work With Us</div>
      <h2>Ready to build your next digital product?</h2>
      <p>
        Let’s turn your business idea into a modern website, mobile application, custom software,
        or complete digital platform that is ready to grow.
      </p>
      <a href="#" class="btn btn-primary">Start a Project</a>
    </section>
  </main>
</body>
</html>
