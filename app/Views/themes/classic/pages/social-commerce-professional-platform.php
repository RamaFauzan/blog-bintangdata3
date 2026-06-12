<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Social Commerce & Professional Platform Content</title>
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
      --purple: #8b5cf6;
      --green: #32d583;
      --yellow: #ffc400;
      --pink: #ff3d8b;
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

    .social-commerce-page {
      position: relative;
      min-height: 100vh;
      overflow: hidden;
      background:
        radial-gradient(circle at 12% 15%, rgba(36, 107, 255, 0.16), transparent 26%),
        radial-gradient(circle at 82% 18%, rgba(50, 213, 131, 0.14), transparent 28%),
        radial-gradient(circle at 50% 72%, rgba(255, 122, 24, 0.09), transparent 30%),
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
      border: 1px solid rgba(50, 213, 131, 0.3);
      border-radius: 999px;
      background: rgba(50, 213, 131, 0.08);
      color: #c9fbe0;
      font-size: 14px;
      font-weight: 800;
      letter-spacing: 0.2px;
    }

    .eyebrow-dot {
      width: 9px;
      height: 9px;
      border-radius: 50%;
      background: var(--green);
      box-shadow: 0 0 0 6px rgba(50, 213, 131, 0.16);
    }

    .hero-title {
      max-width: 650px;
      font-size: clamp(42px, 6vw, 82px);
      line-height: 0.98;
      letter-spacing: -3.4px;
      font-weight: 900;
      margin-bottom: 24px;
    }

    .hero-title span {
      color: var(--green);
    }

    .hero-description {
      max-width: 570px;
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
      border: 2px solid var(--green);
      color: var(--green);
      font-size: 11px;
      font-weight: 900;
    }

    .commerce-visual {
      position: relative;
      min-height: 620px;
      display: grid;
      place-items: center;
    }

    .platform-dashboard {
      width: min(660px, 100%);
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
      background: #ff5f57;
    }

    .window-dots span:nth-child(2) {
      background: #ffbd2e;
    }

    .window-dots span:nth-child(3) {
      background: #28c840;
    }

    .topbar-search {
      width: 250px;
      height: 34px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.08);
      display: flex;
      align-items: center;
      padding: 0 14px;
      color: #9da4b3;
      font-size: 13px;
      font-weight: 700;
    }

    .dashboard-body {
      display: grid;
      grid-template-columns: 160px 1fr;
      min-height: 430px;
    }

    .sidebar {
      padding: 20px 16px;
      border-right: 1px solid var(--border);
      background: rgba(255, 255, 255, 0.025);
    }

    .sidebar-logo {
      height: 42px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      gap: 10px;
      color: #fff;
      font-size: 14px;
      font-weight: 900;
      margin-bottom: 22px;
    }

    .sidebar-logo span {
      width: 32px;
      height: 32px;
      border-radius: 11px;
      display: grid;
      place-items: center;
      background: var(--green);
      color: #06140b;
    }

    .sidebar-menu {
      display: grid;
      gap: 10px;
    }

    .sidebar-menu div {
      height: 34px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      padding: 0 10px;
      color: #aab0be;
      font-size: 12px;
      font-weight: 700;
      background: rgba(255, 255, 255, 0.035);
    }

    .sidebar-menu div.active {
      color: #fff;
      background: rgba(36, 107, 255, 0.25);
      border: 1px solid rgba(36, 107, 255, 0.28);
    }

    .dashboard-main {
      padding: 22px;
      overflow: hidden;
    }

    .profile-card {
      position: relative;
      border-radius: 24px;
      overflow: hidden;
      background: linear-gradient(135deg, rgba(36, 107, 255, 0.28), rgba(50, 213, 131, 0.16));
      border: 1px solid rgba(255, 255, 255, 0.12);
      padding: 22px;
      margin-bottom: 16px;
    }

    .profile-top {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 16px;
    }

    .avatar {
      width: 56px;
      height: 56px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, #32d583, #246bff);
      font-size: 25px;
      box-shadow: 0 12px 26px rgba(0, 0, 0, 0.28);
    }

    .profile-top h3 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    .profile-top p {
      color: #d0d6e6;
      font-size: 13px;
      font-weight: 600;
    }

    .profile-stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
    }

    .stat-box {
      border-radius: 16px;
      padding: 13px;
      background: rgba(0, 0, 0, 0.22);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .stat-box strong {
      display: block;
      font-size: 20px;
      margin-bottom: 5px;
    }

    .stat-box span {
      color: #c2c9d7;
      font-size: 11px;
      font-weight: 700;
    }

    .feed-grid {
      display: grid;
      grid-template-columns: 1fr 0.82fr;
      gap: 16px;
    }

    .feed-card,
    .market-card {
      border-radius: 22px;
      background: rgba(255, 255, 255, 0.055);
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 16px;
    }

    .card-label {
      color: #ffffff;
      font-size: 13px;
      font-weight: 900;
      margin-bottom: 14px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .badge-live {
      padding: 5px 9px;
      border-radius: 999px;
      font-size: 10px;
      font-weight: 900;
      color: #06140b;
      background: var(--green);
    }

    .post-item {
      display: grid;
      gap: 9px;
      padding: 14px;
      border-radius: 16px;
      background: rgba(0, 0, 0, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.07);
      margin-bottom: 10px;
    }

    .post-line {
      height: 8px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.12);
    }

    .post-line:nth-child(1) {
      width: 78%;
    }

    .post-line:nth-child(2) {
      width: 92%;
    }

    .post-actions {
      display: flex;
      gap: 8px;
      margin-top: 4px;
    }

    .post-actions span {
      padding: 6px 9px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.08);
      color: #c8cfdd;
      font-size: 10px;
      font-weight: 800;
    }

    .product-card {
      position: relative;
      min-height: 180px;
      border-radius: 18px;
      padding: 16px;
      overflow: hidden;
      background:
        radial-gradient(circle at 70% 20%, rgba(255, 196, 0, 0.24), transparent 36%),
        linear-gradient(145deg, rgba(50, 213, 131, 0.22), rgba(36, 107, 255, 0.16));
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .product-image {
      width: 84px;
      height: 84px;
      margin-left: auto;
      border-radius: 24px;
      background: rgba(255, 255, 255, 0.14);
      display: grid;
      place-items: center;
      font-size: 38px;
      box-shadow: inset 0 0 40px rgba(255, 255, 255, 0.08);
    }

    .product-card h4 {
      font-size: 18px;
      margin: 12px 0 6px;
    }

    .product-card p {
      color: #cdd5e5;
      font-size: 12px;
      line-height: 1.5;
      margin-bottom: 14px;
    }

    .product-price {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
    }

    .product-price strong {
      color: #fff;
      font-size: 18px;
    }

    .product-price span {
      padding: 7px 10px;
      border-radius: 999px;
      background: var(--primary);
      color: #fff;
      font-size: 11px;
      font-weight: 900;
    }

    .floating-widget {
      position: absolute;
      z-index: 3;
      border-radius: 22px;
      background: rgba(22, 22, 22, 0.9);
      border: 1px solid rgba(255, 255, 255, 0.12);
      box-shadow: 0 18px 50px rgba(0, 0, 0, 0.35);
      backdrop-filter: blur(16px);
    }

    .order-widget {
      right: -12px;
      top: 64px;
      width: 210px;
      padding: 18px;
      transform: rotate(3deg);
    }

    .order-widget h4 {
      font-size: 14px;
      margin-bottom: 12px;
    }

    .order-progress {
      height: 9px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.1);
      overflow: hidden;
      margin-bottom: 12px;
    }

    .order-progress span {
      display: block;
      width: 76%;
      height: 100%;
      border-radius: inherit;
      background: linear-gradient(90deg, var(--green), var(--primary));
    }

    .order-widget p {
      color: #b9c0cd;
      font-size: 12px;
      line-height: 1.5;
    }

    .network-widget {
      left: -8px;
      bottom: 72px;
      width: 220px;
      padding: 18px;
      transform: rotate(-4deg);
    }

    .network-users {
      display: flex;
      margin-bottom: 14px;
    }

    .network-users span {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      margin-right: -8px;
      border: 3px solid #171717;
      background: linear-gradient(135deg, var(--primary), var(--green));
      font-size: 15px;
    }

    .network-widget strong {
      display: block;
      margin-bottom: 5px;
      font-size: 15px;
    }

    .network-widget p {
      color: #b9c0cd;
      font-size: 12px;
      line-height: 1.5;
    }

    .section {
      position: relative;
      padding: 96px 0;
      z-index: 2;
    }

    .section-heading {
      max-width: 760px;
      margin: 0 auto 48px;
      text-align: center;
    }

    .section-kicker {
      color: var(--green);
      font-size: 14px;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-bottom: 14px;
    }

    .section-title {
      font-size: clamp(34px, 4.5vw, 56px);
      line-height: 1.08;
      letter-spacing: -2px;
      font-weight: 900;
      margin-bottom: 18px;
    }

    .section-text {
      color: var(--muted);
      font-size: 18px;
      line-height: 1.75;
    }

    .module-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 22px;
    }

    .module-card {
      position: relative;
      min-height: 280px;
      padding: 28px;
      border-radius: var(--radius);
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.07), rgba(255, 255, 255, 0.035));
      border: 1px solid rgba(255, 255, 255, 0.1);
      overflow: hidden;
      transition: 0.28s ease;
    }

    .module-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at top right, rgba(50, 213, 131, 0.16), transparent 38%);
      opacity: 0;
      transition: 0.28s ease;
    }

    .module-card:hover {
      transform: translateY(-8px);
      border-color: rgba(50, 213, 131, 0.28);
    }

    .module-card:hover::before {
      opacity: 1;
    }

    .module-icon {
      position: relative;
      width: 56px;
      height: 56px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: rgba(36, 107, 255, 0.16);
      border: 1px solid rgba(36, 107, 255, 0.22);
      font-size: 24px;
      margin-bottom: 24px;
      z-index: 1;
    }

    .module-card h3 {
      position: relative;
      font-size: 22px;
      line-height: 1.25;
      margin-bottom: 14px;
      z-index: 1;
    }

    .module-card p {
      position: relative;
      color: var(--muted);
      font-size: 15px;
      line-height: 1.7;
      z-index: 1;
    }

    .workflow-section {
      background: linear-gradient(180deg, transparent, rgba(255, 255, 255, 0.025));
    }

    .workflow-grid {
      display: grid;
      grid-template-columns: 0.85fr 1.15fr;
      gap: 56px;
      align-items: start;
    }

    .workflow-list {
      display: grid;
      gap: 18px;
    }

    .workflow-item {
      display: grid;
      grid-template-columns: 76px 1fr;
      gap: 20px;
      padding: 22px;
      border-radius: 24px;
      background: rgba(255, 255, 255, 0.055);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .workflow-number {
      width: 58px;
      height: 58px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: rgba(50, 213, 131, 0.13);
      color: var(--green);
      font-weight: 900;
      border: 1px solid rgba(50, 213, 131, 0.24);
    }

    .workflow-item h3 {
      font-size: 20px;
      margin-bottom: 9px;
    }

    .workflow-item p {
      color: var(--muted);
      font-size: 15px;
      line-height: 1.7;
    }

    .feature-board {
      border-radius: 34px;
      padding: 42px;
      background:
        radial-gradient(circle at 20% 20%, rgba(36, 107, 255, 0.18), transparent 35%),
        radial-gradient(circle at 86% 14%, rgba(50, 213, 131, 0.18), transparent 32%),
        linear-gradient(145deg, rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0.035));
      border: 1px solid rgba(255, 255, 255, 0.12);
    }

    .feature-board h3 {
      max-width: 820px;
      font-size: clamp(28px, 4vw, 46px);
      line-height: 1.12;
      letter-spacing: -1.4px;
      margin-bottom: 30px;
    }

    .feature-list {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 14px;
    }

    .feature-pill {
      min-height: 74px;
      padding: 16px;
      border-radius: 18px;
      display: flex;
      align-items: center;
      gap: 12px;
      background: rgba(0, 0, 0, 0.22);
      border: 1px solid rgba(255, 255, 255, 0.1);
      color: #d7dce7;
      font-size: 14px;
      font-weight: 700;
    }

    .feature-pill span {
      width: 24px;
      height: 24px;
      flex: 0 0 24px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      background: var(--green);
      color: #06140b;
      font-size: 13px;
      font-weight: 900;
    }

    .cta-section {
      position: relative;
      padding: 90px 0 120px;
      z-index: 2;
    }

    .cta-box {
      position: relative;
      overflow: hidden;
      border-radius: 36px;
      padding: 58px;
      background:
        linear-gradient(135deg, rgba(36, 107, 255, 0.94), rgba(50, 213, 131, 0.88)),
        #246bff;
      box-shadow: 0 28px 90px rgba(36, 107, 255, 0.24);
    }

    .cta-box::before {
      content: "";
      position: absolute;
      width: 430px;
      height: 430px;
      right: -120px;
      top: -150px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.16);
    }

    .cta-content {
      position: relative;
      max-width: 730px;
      z-index: 1;
    }

    .cta-content h2 {
      font-size: clamp(34px, 5vw, 60px);
      line-height: 1.05;
      letter-spacing: -2px;
      margin-bottom: 18px;
    }

    .cta-content p {
      color: rgba(255, 255, 255, 0.86);
      font-size: 18px;
      line-height: 1.75;
      margin-bottom: 28px;
    }

    .cta-content .btn {
      background: #fff;
      color: #0f172a;
      box-shadow: 0 16px 38px rgba(0, 0, 0, 0.18);
    }

    @media (max-width: 1100px) {
      .hero-grid,
      .workflow-grid {
        grid-template-columns: 1fr;
      }

      .commerce-visual {
        min-height: 560px;
      }

      .module-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .feature-list {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 720px) {
      .container {
        width: min(100% - 28px, 1180px);
      }

      .hero-section {
        padding: 76px 0 64px;
      }

      .hero-title {
        letter-spacing: -2px;
      }

      .hero-description,
      .section-text,
      .cta-content p {
        font-size: 16px;
      }

      .commerce-visual {
        min-height: auto;
        padding: 20px 0 80px;
      }

      .platform-dashboard {
        transform: none;
      }

      .dashboard-body {
        grid-template-columns: 1fr;
      }

      .sidebar {
        display: none;
      }

      .topbar-search {
        display: none;
      }

      .feed-grid,
      .profile-stats,
      .module-grid,
      .feature-list {
        grid-template-columns: 1fr;
      }

      .floating-widget {
        position: relative;
        left: auto;
        right: auto;
        top: auto;
        bottom: auto;
        width: 100%;
        transform: none;
        margin-top: 16px;
      }

      .section {
        padding: 70px 0;
      }

      .workflow-item {
        grid-template-columns: 1fr;
      }

      .feature-board,
      .cta-box {
        padding: 28px;
        border-radius: 26px;
      }
    }
  </style>
</head>
<body>
  <main class="social-commerce-page">
    <section class="hero-section">
      <div class="container hero-grid">
        <div class="hero-content">
          <div class="eyebrow"><span class="eyebrow-dot"></span> Social Commerce & Professional Network</div>
          <h1 class="hero-title">Build a platform where people connect, sell, and grow <span>professionally.</span></h1>
          <p class="hero-description">
            Create a modern ecosystem that combines professional networking, social feeds, product discovery, service marketplace, creator storefronts, and secure commerce features in one scalable platform.
          </p>

          <div class="hero-actions">
            <a href="#modules" class="btn btn-primary">Explore Modules</a>
            <a href="#workflow" class="btn btn-outline">View Workflow</a>
          </div>

          <ul class="hero-checklist">
            <li><span class="check-icon">✓</span> Professional profiles, portfolios, company pages, and verified accounts</li>
            <li><span class="check-icon">✓</span> Social commerce feed with product tagging, orders, and seller tools</li>
            <li><span class="check-icon">✓</span> Networking, collaboration, messaging, analytics, and monetization support</li>
          </ul>
        </div>

        <div class="commerce-visual">
          <div class="platform-dashboard">
            <div class="dashboard-topbar">
              <div class="window-dots"><span></span><span></span><span></span></div>
              <div class="topbar-search">Search people, products, services...</div>
            </div>

            <div class="dashboard-body">
              <aside class="sidebar">
                <div class="sidebar-logo"><span>SC</span> ProMarket</div>
                <div class="sidebar-menu">
                  <div class="active">Dashboard</div>
                  <div>Social Feed</div>
                  <div>Marketplace</div>
                  <div>Connections</div>
                  <div>Campaigns</div>
                  <div>Analytics</div>
                </div>
              </aside>

              <div class="dashboard-main">
                <div class="profile-card">
                  <div class="profile-top">
                    <div class="avatar">👤</div>
                    <div>
                      <h3>Professional Seller Profile</h3>
                      <p>Digital Consultant • Product Creator • Verified Merchant</p>
                    </div>
                  </div>

                  <div class="profile-stats">
                    <div class="stat-box"><strong>24K</strong><span>Followers</span></div>
                    <div class="stat-box"><strong>1.8K</strong><span>Orders</span></div>
                    <div class="stat-box"><strong>4.9</strong><span>Rating</span></div>
                  </div>
                </div>

                <div class="feed-grid">
                  <div class="feed-card">
                    <div class="card-label">Professional Feed <span class="badge-live">ACTIVE</span></div>
                    <div class="post-item">
                      <div class="post-line"></div>
                      <div class="post-line"></div>
                      <div class="post-actions"><span>Like</span><span>Comment</span><span>Share</span></div>
                    </div>
                    <div class="post-item">
                      <div class="post-line"></div>
                      <div class="post-line"></div>
                      <div class="post-actions"><span>Connect</span><span>Save</span><span>Order</span></div>
                    </div>
                  </div>

                  <div class="market-card">
                    <div class="card-label">Featured Product</div>
                    <div class="product-card">
                      <div class="product-image">🛍️</div>
                      <h4>Business Growth Kit</h4>
                      <p>Digital product bundle for professional creators and online sellers.</p>
                      <div class="product-price"><strong>$49</strong><span>Buy Now</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="order-widget floating-widget">
            <h4>Sales Performance</h4>
            <div class="order-progress"><span></span></div>
            <p>Revenue increased 76% from product tags, profile visits, and marketplace discovery.</p>
          </div>

          <div class="network-widget floating-widget">
            <div class="network-users"><span>👩</span><span>👨</span><span>👤</span><span>+</span></div>
            <strong>New Collaboration</strong>
            <p>3 professionals joined your business network this week.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="modules" class="section">
      <div class="container">
        <div class="section-heading">
          <div class="section-kicker">Platform Modules</div>
          <h2 class="section-title">Everything needed for social selling and professional growth.</h2>
          <p class="section-text">
            Combine the power of a professional network, digital marketplace, social feed, and business dashboard to support creators, sellers, brands, service providers, and communities.
          </p>
        </div>

        <div class="module-grid">
          <article class="module-card">
            <div class="module-icon">👥</div>
            <h3>Professional Profiles</h3>
            <p>Create personal profiles, business pages, portfolios, experience sections, skill tags, verification badges, and public credibility indicators.</p>
          </article>

          <article class="module-card">
            <div class="module-icon">📲</div>
            <h3>Social Commerce Feed</h3>
            <p>Allow users to post updates, tag products, share services, promote offers, receive engagement, and convert social activity into sales.</p>
          </article>

          <article class="module-card">
            <div class="module-icon">🛒</div>
            <h3>Marketplace & Storefront</h3>
            <p>Support product listings, service packages, digital downloads, seller pages, inventory status, pricing, checkout, and order management.</p>
          </article>

          <article class="module-card">
            <div class="module-icon">💬</div>
            <h3>Messaging & Collaboration</h3>
            <p>Enable direct messages, inquiries, collaboration requests, group discussions, offer negotiation, and buyer-seller communication.</p>
          </article>

          <article class="module-card">
            <div class="module-icon">📣</div>
            <h3>Campaign & Promotion Tools</h3>
            <p>Provide promoted posts, campaign tracking, featured products, business announcements, affiliate links, and brand partnership tools.</p>
          </article>

          <article class="module-card">
            <div class="module-icon">📊</div>
            <h3>Business Analytics</h3>
            <p>Track profile visits, post reach, product clicks, conversion rate, order volume, customer behavior, and revenue performance.</p>
          </article>
        </div>
      </div>
    </section>

    <section id="workflow" class="section workflow-section">
      <div class="container workflow-grid">
        <div>
          <div class="section-kicker">User Journey</div>
          <h2 class="section-title">From professional discovery to trusted transaction.</h2>
          <p class="section-text">
            The platform is designed to help users build reputation, create content, discover opportunities, sell products or services, and maintain long-term professional relationships.
          </p>
        </div>

        <div class="workflow-list">
          <div class="workflow-item">
            <div class="workflow-number">01</div>
            <div>
              <h3>Create Professional Identity</h3>
              <p>Users build profiles, add skills, upload portfolios, connect business pages, and showcase products or services.</p>
            </div>
          </div>

          <div class="workflow-item">
            <div class="workflow-number">02</div>
            <div>
              <h3>Publish Social Commerce Content</h3>
              <p>Creators and sellers share posts, tag products, promote services, publish updates, and engage with their audience.</p>
            </div>
          </div>

          <div class="workflow-item">
            <div class="workflow-number">03</div>
            <div>
              <h3>Connect, Chat, and Collaborate</h3>
              <p>Professionals discover each other, send connection requests, discuss opportunities, and start business collaborations.</p>
            </div>
          </div>

          <div class="workflow-item">
            <div class="workflow-number">04</div>
            <div>
              <h3>Sell, Measure, and Scale</h3>
              <p>Users manage orders, monitor performance, optimize campaigns, and grow revenue through analytics and marketplace insights.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="feature-board">
          <h3>Designed for creators, professionals, sellers, agencies, brands, and business communities.</h3>
          <div class="feature-list">
            <div class="feature-pill"><span>✓</span> Personal and company profile management</div>
            <div class="feature-pill"><span>✓</span> Product tagging inside social posts</div>
            <div class="feature-pill"><span>✓</span> Marketplace listing and seller storefront</div>
            <div class="feature-pill"><span>✓</span> Buyer inquiry and direct messaging</div>
            <div class="feature-pill"><span>✓</span> Connection request and follow system</div>
            <div class="feature-pill"><span>✓</span> Reviews, ratings, and trust badges</div>
            <div class="feature-pill"><span>✓</span> Campaign promotion and sponsored content</div>
            <div class="feature-pill"><span>✓</span> Sales, engagement, and conversion dashboard</div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-section">
      <div class="container">
        <div class="cta-box">
          <div class="cta-content">
            <h2>Ready to build your social commerce professional platform?</h2>
            <p>
              Launch a platform that helps users grow their network, build authority, showcase products, sell services, collaborate with partners, and manage business performance from one connected ecosystem.
            </p>
            <a href="#modules" class="btn">Start Building Platform</a>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
