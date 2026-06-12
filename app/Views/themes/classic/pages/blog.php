<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog</title>
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

    .blog-page {
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
      padding-bottom: 82px;
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

    .blog-visual {
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

    .editor-mockup {
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
    }

    .mockup-status {
      padding: 7px 11px;
      border-radius: 999px;
      background: rgba(34, 197, 94, 0.16);
      color: #bbf7d0;
      font-size: 12px;
      font-weight: 900;
    }

    .editor-body {
      display: grid;
      grid-template-columns: 0.7fr 1.3fr;
      min-height: 420px;
    }

    .editor-sidebar {
      border-right: 1px solid var(--line);
      background: rgba(3, 7, 18, 0.3);
      padding: 18px;
    }

    .side-title {
      color: #cffafe;
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      font-weight: 900;
      margin-bottom: 14px;
    }

    .side-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px;
      border-radius: 15px;
      color: var(--muted);
      font-size: 13px;
      font-weight: 800;
      margin-bottom: 9px;
      background: rgba(255, 255, 255, 0.035);
      border: 1px solid transparent;
    }

    .side-item.active {
      color: #ffffff;
      border-color: rgba(34, 211, 238, 0.28);
      background: linear-gradient(135deg, rgba(34,211,238,0.16), rgba(168,85,247,0.12));
    }

    .side-item i {
      width: 28px;
      height: 28px;
      display: inline-grid;
      place-items: center;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.08);
      font-style: normal;
    }

    .editor-content {
      padding: 22px;
    }

    .post-preview {
      border: 1px solid var(--line);
      border-radius: 22px;
      padding: 18px;
      background: rgba(255, 255, 255, 0.06);
      margin-bottom: 18px;
    }

    .post-cover {
      height: 132px;
      border-radius: 18px;
      background:
        radial-gradient(circle at 20% 24%, rgba(255,255,255,0.42), transparent 18%),
        linear-gradient(135deg, rgba(34,211,238,0.95), rgba(99,102,241,0.9), rgba(168,85,247,0.92));
      margin-bottom: 16px;
      position: relative;
      overflow: hidden;
    }

    .post-cover::after {
      content: "";
      position: absolute;
      inset: auto -20px -45px 25%;
      height: 120px;
      transform: rotate(-8deg);
      border-radius: 999px;
      background: rgba(255,255,255,0.24);
    }

    .post-meta {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 12px;
    }

    .pill {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 6px 10px;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,0.12);
      background: rgba(255,255,255,0.07);
      color: #dbeafe;
      font-size: 12px;
      font-weight: 850;
    }

    .post-preview h3 {
      font-size: 23px;
      line-height: 1.15;
      letter-spacing: -0.04em;
      margin-bottom: 10px;
    }

    .post-preview p {
      color: var(--muted);
      font-size: 14px;
      line-height: 1.55;
    }

    .content-lines {
      display: grid;
      gap: 8px;
    }

    .content-lines i {
      height: 10px;
      border-radius: 999px;
      background: rgba(255,255,255,0.12);
    }

    .content-lines i:nth-child(1) { width: 94%; }
    .content-lines i:nth-child(2) { width: 84%; }
    .content-lines i:nth-child(3) { width: 68%; }

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

    .floating-card.analytics {
      left: -10px;
      bottom: 54px;
      width: 220px;
    }

    .floating-card.publish {
      right: -10px;
      top: 80px;
      width: 210px;
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
      width: 76%;
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

    .category-filter {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 36px;
    }

    .category-filter a {
      display: inline-flex;
      padding: 10px 15px;
      border-radius: 999px;
      border: 1px solid var(--line);
      background: rgba(255,255,255,0.055);
      color: #dbeafe;
      font-size: 14px;
      font-weight: 850;
      transition: 0.25s ease;
    }

    .category-filter a.active,
    .category-filter a:hover {
      border-color: rgba(34, 211, 238, 0.38);
      background: linear-gradient(135deg, rgba(34,211,238,0.18), rgba(168,85,247,0.14));
      transform: translateY(-2px);
    }

    .featured-post {
      display: grid;
      grid-template-columns: 1.05fr 0.95fr;
      gap: 28px;
      padding: 18px;
      border: 1px solid var(--line);
      border-radius: var(--radius-lg);
      background: linear-gradient(145deg, rgba(255,255,255,0.11), rgba(255,255,255,0.045));
      box-shadow: 0 28px 70px rgba(0,0,0,0.28);
      margin-bottom: 72px;
      overflow: hidden;
    }

    .featured-image {
      min-height: 390px;
      border-radius: 24px;
      position: relative;
      overflow: hidden;
      background:
        radial-gradient(circle at 18% 20%, rgba(255,255,255,0.42), transparent 13%),
        radial-gradient(circle at 86% 24%, rgba(255,255,255,0.28), transparent 16%),
        linear-gradient(135deg, rgba(34,211,238,0.95), rgba(99,102,241,0.92), rgba(168,85,247,0.9));
    }

    .featured-image::before,
    .featured-image::after {
      content: "";
      position: absolute;
      border-radius: 999px;
      background: rgba(255,255,255,0.22);
    }

    .featured-image::before {
      width: 360px;
      height: 120px;
      left: -60px;
      bottom: 42px;
      transform: rotate(-14deg);
    }

    .featured-image::after {
      width: 260px;
      height: 260px;
      right: -80px;
      bottom: -80px;
      background: rgba(255,255,255,0.13);
    }

    .image-label {
      position: absolute;
      left: 22px;
      top: 22px;
      z-index: 1;
      padding: 9px 13px;
      border-radius: 999px;
      background: rgba(3,7,18,0.28);
      border: 1px solid rgba(255,255,255,0.22);
      backdrop-filter: blur(12px);
      font-size: 13px;
      font-weight: 900;
    }

    .featured-content {
      padding: 24px 18px 24px 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .featured-content h2 {
      font-size: clamp(32px, 4vw, 52px);
      line-height: 1.02;
      letter-spacing: -0.055em;
      margin: 16px 0 18px;
    }

    .featured-content p {
      color: var(--muted);
      font-size: 17px;
      margin-bottom: 28px;
    }

    .author-row {
      display: flex;
      align-items: center;
      gap: 13px;
      margin-bottom: 10px;
    }

    .avatar {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      font-weight: 950;
      background: linear-gradient(135deg, var(--primary), var(--accent));
      box-shadow: 0 12px 28px rgba(34,211,238,0.22);
    }

    .author-row strong {
      display: block;
      line-height: 1.1;
    }

    .author-row span {
      color: var(--muted);
      font-size: 13px;
      font-weight: 750;
    }

    .blog-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-bottom: 78px;
    }

    .blog-card {
      position: relative;
      overflow: hidden;
      border: 1px solid var(--line);
      border-radius: var(--radius-md);
      background: linear-gradient(145deg, rgba(255,255,255,0.09), rgba(255,255,255,0.04));
      transition: 0.25s ease;
    }

    .blog-card:hover {
      transform: translateY(-6px);
      border-color: rgba(34, 211, 238, 0.35);
      box-shadow: 0 24px 62px rgba(0,0,0,0.28);
    }

    .card-image {
      height: 190px;
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, rgba(34,211,238,0.85), rgba(99,102,241,0.86), rgba(168,85,247,0.85));
    }

    .blog-card:nth-child(2) .card-image { background: linear-gradient(135deg, rgba(34,197,94,0.85), rgba(34,211,238,0.82), rgba(99,102,241,0.82)); }
    .blog-card:nth-child(3) .card-image { background: linear-gradient(135deg, rgba(245,158,11,0.84), rgba(251,113,133,0.82), rgba(168,85,247,0.82)); }
    .blog-card:nth-child(4) .card-image { background: linear-gradient(135deg, rgba(99,102,241,0.86), rgba(168,85,247,0.84), rgba(34,211,238,0.78)); }
    .blog-card:nth-child(5) .card-image { background: linear-gradient(135deg, rgba(14,165,233,0.88), rgba(34,197,94,0.82), rgba(99,102,241,0.8)); }
    .blog-card:nth-child(6) .card-image { background: linear-gradient(135deg, rgba(251,113,133,0.86), rgba(245,158,11,0.82), rgba(34,211,238,0.78)); }

    .card-image::before {
      content: "";
      position: absolute;
      width: 240px;
      height: 90px;
      left: -40px;
      bottom: 22px;
      border-radius: 999px;
      transform: rotate(-12deg);
      background: rgba(255,255,255,0.22);
    }

    .card-image::after {
      content: "";
      position: absolute;
      width: 130px;
      height: 130px;
      right: -44px;
      top: -28px;
      border-radius: 50%;
      background: rgba(255,255,255,0.16);
    }

    .card-content {
      padding: 20px;
    }

    .card-content h3 {
      font-size: 22px;
      line-height: 1.2;
      letter-spacing: -0.04em;
      margin: 14px 0 10px;
    }

    .card-content p {
      color: var(--muted);
      font-size: 15px;
      margin-bottom: 18px;
    }

    .read-more {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      color: #cffafe;
      font-weight: 900;
      font-size: 14px;
    }

    .insight-section {
      display: grid;
      grid-template-columns: 0.9fr 1.1fr;
      gap: 22px;
      align-items: stretch;
      margin-bottom: 78px;
    }

    .newsletter-card,
    .trending-card {
      border: 1px solid var(--line);
      border-radius: var(--radius-lg);
      background: rgba(255,255,255,0.065);
      padding: 30px;
      box-shadow: 0 22px 56px rgba(0,0,0,0.2);
    }

    .newsletter-card {
      background:
        radial-gradient(circle at 20% 0%, rgba(34,211,238,0.18), transparent 40%),
        linear-gradient(145deg, rgba(255,255,255,0.1), rgba(255,255,255,0.04));
    }

    .newsletter-card h2,
    .trending-card h2 {
      font-size: 34px;
      line-height: 1.05;
      letter-spacing: -0.05em;
      margin-bottom: 14px;
    }

    .newsletter-card p {
      color: var(--muted);
      margin-bottom: 22px;
    }

    .subscribe-form {
      display: flex;
      gap: 10px;
      padding: 8px;
      border: 1px solid var(--line);
      border-radius: 999px;
      background: rgba(3,7,18,0.35);
    }

    .subscribe-form input {
      min-width: 0;
      flex: 1;
      border: 0;
      outline: 0;
      background: transparent;
      color: #ffffff;
      padding: 0 14px;
      font: inherit;
    }

    .subscribe-form input::placeholder {
      color: rgba(168,179,207,0.8);
    }

    .subscribe-form button {
      border: 0;
      cursor: pointer;
      border-radius: 999px;
      color: #ffffff;
      padding: 12px 16px;
      font-weight: 900;
      background: linear-gradient(135deg, var(--primary), var(--secondary), var(--accent));
    }

    .trending-list {
      display: grid;
      gap: 13px;
      margin-top: 20px;
    }

    .trending-item {
      display: grid;
      grid-template-columns: auto 1fr auto;
      gap: 14px;
      align-items: center;
      padding: 15px;
      border-radius: 18px;
      border: 1px solid rgba(255,255,255,0.09);
      background: rgba(255,255,255,0.045);
    }

    .trend-number {
      width: 38px;
      height: 38px;
      border-radius: 13px;
      display: grid;
      place-items: center;
      color: #ffffff;
      font-weight: 950;
      background: rgba(255,255,255,0.09);
      border: 1px solid rgba(255,255,255,0.11);
    }

    .trending-item h3 {
      font-size: 16px;
      line-height: 1.25;
      margin-bottom: 4px;
    }

    .trending-item p {
      color: var(--muted);
      font-size: 13px;
      font-weight: 700;
    }

    .trend-arrow {
      color: #cffafe;
      font-weight: 950;
    }

    .cta {
      position: relative;
      overflow: hidden;
      text-align: center;
      border: 1px solid var(--line);
      border-radius: var(--radius-lg);
      background:
        radial-gradient(circle at 20% 0%, rgba(34,211,238,0.2), transparent 38%),
        radial-gradient(circle at 80% 100%, rgba(168,85,247,0.22), transparent 35%),
        rgba(255,255,255,0.065);
      padding: 62px 28px;
      box-shadow: var(--shadow);
    }

    .cta h2 {
      font-size: clamp(34px, 5vw, 58px);
      line-height: 1.03;
      letter-spacing: -0.055em;
      max-width: 850px;
      margin: 0 auto 18px;
    }

    .cta p {
      color: var(--muted);
      max-width: 650px;
      margin: 0 auto 30px;
      font-size: 17px;
    }

    @media (max-width: 980px) {
      .hero,
      .featured-post,
      .insight-section {
        grid-template-columns: 1fr;
      }

      .blog-visual {
        min-height: auto;
      }

      .featured-content {
        padding: 8px 6px 12px;
      }

      .blog-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .floating-card {
        display: none;
      }
    }

    @media (max-width: 720px) {
      .blog-page {
        padding: 52px 16px;
      }

      .hero {
        padding-bottom: 60px;
      }

      .hero-stats,
      .blog-grid {
        grid-template-columns: 1fr;
      }

      .editor-body {
        grid-template-columns: 1fr;
      }

      .editor-sidebar {
        border-right: 0;
        border-bottom: 1px solid var(--line);
      }

      .section-head {
        display: block;
      }

      .featured-image {
        min-height: 260px;
      }

      .subscribe-form {
        border-radius: 22px;
        flex-direction: column;
      }

      .subscribe-form input {
        min-height: 46px;
      }

      .trending-item {
        grid-template-columns: auto 1fr;
      }

      .trend-arrow {
        display: none;
      }
    }
  </style>
</head>
<body>
  <main class="blog-page">
    <section class="hero container">
      <div>
        <div class="badge"><span></span> Blog & Insights</div>
        <h1>Stories, ideas, and updates for <span class="gradient-text">digital growth.</span></h1>
        <p>
          Explore practical articles about software development, product strategy, UI/UX design, technology trends,
          and digital transformation to help your business build better products.
        </p>

        <div class="hero-actions">
          <a href="#latest" class="btn btn-primary">Read Latest Articles</a>
          <a href="#newsletter" class="btn btn-secondary">Subscribe Updates</a>
        </div>

        <div class="hero-stats">
          <div class="hero-stat">
            <strong>120+</strong>
            <span>Published Articles</span>
          </div>
          <div class="hero-stat">
            <strong>8</strong>
            <span>Main Categories</span>
          </div>
          <div class="hero-stat">
            <strong>Weekly</strong>
            <span>Fresh Insights</span>
          </div>
        </div>
      </div>

      <div class="blog-visual">
        <div class="glow-orb"></div>
        <div class="editor-mockup">
          <div class="mockup-top">
            <div class="mockup-dots"><i></i><i></i><i></i></div>
            <div class="mockup-url"></div>
            <div class="mockup-status">Live</div>
          </div>

          <div class="editor-body">
            <div class="editor-sidebar">
              <div class="side-title">Content Hub</div>
              <div class="side-item active"><i>✦</i> Featured</div>
              <div class="side-item"><i>⌁</i> Development</div>
              <div class="side-item"><i>◈</i> Design</div>
              <div class="side-item"><i>◎</i> Business</div>
              <div class="side-item"><i>▣</i> Case Study</div>
            </div>

            <div class="editor-content">
              <div class="post-preview">
                <div class="post-cover"></div>
                <div class="post-meta">
                  <span class="pill">Technology</span>
                  <span class="pill">5 min read</span>
                </div>
                <h3>How modern platforms scale from idea to production</h3>
                <p>Build reliable digital products with clean architecture, strong UX, and measurable growth strategy.</p>
              </div>
              <div class="content-lines"><i></i><i></i><i></i></div>
            </div>
          </div>
        </div>

        <div class="floating-card analytics">
          <h4>Reader Analytics</h4>
          <div class="mini-row"><span>Views</span><strong>48.2K</strong></div>
          <div class="mini-row"><span>Shares</span><strong>3.8K</strong></div>
          <div class="progress"><span></span></div>
        </div>

        <div class="floating-card publish">
          <h4>Publishing Flow</h4>
          <div class="mini-row"><span>Draft</span><strong>12</strong></div>
          <div class="mini-row"><span>Scheduled</span><strong>6</strong></div>
          <div class="mini-row"><span>Published</span><strong>94</strong></div>
        </div>
      </div>
    </section>

    <section class="container" id="latest">
      <div class="section-head">
        <div>
          <div class="badge"><span></span> Latest Articles</div>
          <h2>Explore our newest insights</h2>
          <p>Curated articles about product development, engineering, design systems, marketing technology, and business growth.</p>
        </div>
      </div>

      <div class="category-filter">
        <a href="#" class="active">All</a>
        <a href="#">Technology</a>
        <a href="#">Web Development</a>
        <a href="#">Mobile App</a>
        <a href="#">UI/UX Design</a>
        <a href="#">Business</a>
        <a href="#">Case Study</a>
      </div>

      <article class="featured-post">
        <div class="featured-image">
          <div class="image-label">Featured Article</div>
        </div>
        <div class="featured-content">
          <div class="post-meta">
            <span class="pill">Product Strategy</span>
            <span class="pill">10 min read</span>
            <span class="pill">June 12, 2026</span>
          </div>
          <h2>Building digital products that users actually want to use</h2>
          <p>
            A practical guide to turning ideas into scalable platforms through research, strong technical planning,
            clean interface design, and continuous product improvement.
          </p>
          <div class="author-row">
            <div class="avatar">A</div>
            <div>
              <strong>Admin Team</strong>
              <span>Product & Technology Writer</span>
            </div>
          </div>
          <a href="#" class="btn btn-primary" style="width:max-content; margin-top:18px;">Read Featured Article</a>
        </div>
      </article>

      <div class="blog-grid">
        <article class="blog-card">
          <div class="card-image"></div>
          <div class="card-content">
            <div class="post-meta">
              <span class="pill">Development</span>
              <span class="pill">6 min read</span>
            </div>
            <h3>Why clean architecture matters for long-term software projects</h3>
            <p>Learn how structured code, modular services, and scalable databases help applications grow without becoming hard to maintain.</p>
            <a href="#" class="read-more">Read More →</a>
          </div>
        </article>

        <article class="blog-card">
          <div class="card-image"></div>
          <div class="card-content">
            <div class="post-meta">
              <span class="pill">Mobile App</span>
              <span class="pill">7 min read</span>
            </div>
            <h3>Android and iOS app features users expect today</h3>
            <p>From smooth onboarding to push notifications, mobile applications need features that improve retention and daily engagement.</p>
            <a href="#" class="read-more">Read More →</a>
          </div>
        </article>

        <article class="blog-card">
          <div class="card-image"></div>
          <div class="card-content">
            <div class="post-meta">
              <span class="pill">UI/UX Design</span>
              <span class="pill">5 min read</span>
            </div>
            <h3>Designing interfaces that feel simple but work powerfully</h3>
            <p>Good interface design balances visual clarity, user behavior, accessibility, and conversion-focused interaction flows.</p>
            <a href="#" class="read-more">Read More →</a>
          </div>
        </article>

        <article class="blog-card">
          <div class="card-image"></div>
          <div class="card-content">
            <div class="post-meta">
              <span class="pill">Web Platform</span>
              <span class="pill">8 min read</span>
            </div>
            <h3>How to prepare your website application for high traffic</h3>
            <p>Improve performance with caching, optimized assets, API pagination, monitoring, and infrastructure planning.</p>
            <a href="#" class="read-more">Read More →</a>
          </div>
        </article>

        <article class="blog-card">
          <div class="card-image"></div>
          <div class="card-content">
            <div class="post-meta">
              <span class="pill">Business</span>
              <span class="pill">4 min read</span>
            </div>
            <h3>Choosing between custom software and ready-made tools</h3>
            <p>Understand when your company should build a custom solution and when existing SaaS tools are enough.</p>
            <a href="#" class="read-more">Read More →</a>
          </div>
        </article>

        <article class="blog-card">
          <div class="card-image"></div>
          <div class="card-content">
            <div class="post-meta">
              <span class="pill">Case Study</span>
              <span class="pill">9 min read</span>
            </div>
            <h3>From manual operations to automated digital workflow</h3>
            <p>A look at how dashboards, reporting tools, and integrated systems can reduce repetitive work and improve decision-making.</p>
            <a href="#" class="read-more">Read More →</a>
          </div>
        </article>
      </div>
    </section>

    <section class="container insight-section" id="newsletter">
      <div class="newsletter-card">
        <div class="badge"><span></span> Newsletter</div>
        <h2>Get useful digital insights every week</h2>
        <p>
          Subscribe to receive new articles, product tips, development notes, and technology updates directly in your inbox.
        </p>
        <form class="subscribe-form">
          <input type="email" placeholder="Enter your email address" />
          <button type="button">Subscribe</button>
        </form>
      </div>

      <div class="trending-card">
        <div class="badge"><span></span> Trending Topics</div>
        <h2>Popular reads this month</h2>
        <div class="trending-list">
          <a href="#" class="trending-item">
            <div class="trend-number">01</div>
            <div>
              <h3>How to validate your app idea before development</h3>
              <p>Product Strategy • 12.5K views</p>
            </div>
            <div class="trend-arrow">→</div>
          </a>
          <a href="#" class="trending-item">
            <div class="trend-number">02</div>
            <div>
              <h3>Backend API structure for scalable platforms</h3>
              <p>Development • 9.8K views</p>
            </div>
            <div class="trend-arrow">→</div>
          </a>
          <a href="#" class="trending-item">
            <div class="trend-number">03</div>
            <div>
              <h3>Important UI sections for landing pages</h3>
              <p>UI/UX Design • 7.4K views</p>
            </div>
            <div class="trend-arrow">→</div>
          </a>
        </div>
      </div>
    </section>

    <section class="container cta">
      <div class="badge"><span></span> Start Reading</div>
      <h2>Stay updated with technology, product, and digital business insights</h2>
      <p>
        Discover practical ideas that help you plan, build, launch, and grow better digital platforms for your business.
      </p>
      <a href="#latest" class="btn btn-primary">Browse Articles</a>
    </section>
  </main>
</body>
</html>
