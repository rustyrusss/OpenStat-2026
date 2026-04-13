<?php
// PSA OpenSTAT - Dashboard
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PSA OpenSTAT - Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Open Sans', sans-serif; background: #dfdfdf; }

    /* ── NAVBAR ── */
    .navbar {
      background: #fff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.10);
      padding: 0 160px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 75px;
    }
    .nav-links { display: flex; align-items: center; gap: 2px; }

    .nav-link {
      color: #374151;
      font-size: 15px;
      font-weight: 500;
      text-decoration: none;
      padding: 8px 20px;
      border-radius: 6px;
      transition: color 0.15s, background 0.15s;
      white-space: nowrap;
    }
    .nav-link:hover {
      color: #1a3269;
      background: #eff6ff;
    }

    .nav-home {
      background: #1a3269;
      color: #fff;
      padding: 9px 26px;
      border-radius: 6px;
      font-size: 15px;
      font-weight: 600;
      text-decoration: none;
      white-space: nowrap;
      transition: background 0.15s;
    }
    .nav-home:hover { background: #142a56; }

    /* ── SEARCH PILL ── */
    .search-pill {
      display: flex;
      align-items: center;
      margin-left: 6px;
      background: #fff;
      border: 2px solid #d1d5db;
      border-radius: 24px;
      height: 38px;
      overflow: hidden;
      transition: border-color 0.25s, width 0.35s cubic-bezier(.4,0,.2,1), box-shadow 0.25s;
      width: 38px;
    }
    .search-pill.open {
      width: 220px;
      border-color: #1a3269;
      box-shadow: 0 0 0 3px rgba(26,50,105,0.12);
    }
    .search-pill-btn {
      flex-shrink: 0;
      width: 34px; height: 34px;
      display: flex; align-items: center; justify-content: center;
      cursor: pointer;
      background: transparent;
      border: none;
      border-radius: 50%;
      transition: background 0.15s;
    }
    .search-pill-btn:hover { background: #eff6ff; }
    .search-pill-input {
      flex: 1;
      min-width: 0;
      padding: 0 10px 0 2px;
      font-size: 14px;
      color: #374151;
      background: transparent;
      border: none;
      outline: none;
      font-family: 'Open Sans', sans-serif;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.2s 0.1s;
    }
    .search-pill.open .search-pill-input {
      opacity: 1;
      pointer-events: auto;
    }

    /* ── HERO ── */
    .hero-bg {
      position: relative;
      overflow: hidden;
      min-height: 280px;
      background:
        linear-gradient(
          to bottom,
          rgba(10, 26, 110, 0.95) 0%,
          rgba(14, 40, 120, 0.85) 40%,
          rgba(255, 255, 255, 0.6) 80%,
          rgba(255, 255, 255, 1.00) 90%
        ),
        #0a1a6e;
    }
    .hero-bg img.hero-backdrop {
      position: absolute;
      inset: 0;
      width: 100%; height: 100%;
      object-fit: cover;
      opacity: 0.45;
      mix-blend-mode: luminosity;
    }
    .hero-content {
      position: relative;
      z-index: 2;
      padding: 50px 24px 54px;
      text-align: center;
      color: #fff;
      animation: heroFadeIn 0.7s cubic-bezier(.22,1,.36,1) both;
    }
    .hero-title {
      font-size: 30px;
      font-weight: 700;
      margin-bottom: 16px;
      text-shadow: 0 2px 12px rgba(0,0,0,0.45);
      letter-spacing: 0.2px;
    }
    .hero-desc {
      font-size: 14px;
      line-height: 1.9;
      color: #dbeafe;
      max-width: 640px;
      margin: 0 auto 32px;
      text-shadow: 0 1px 4px rgba(0,0,0,0.3);
    }
    .search-bar-wrap {
      display: flex;
      justify-content: center;
    }
    .search-bar {
      display: flex;
      width: 100%;
      max-width: 620px;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 4px 18px rgba(0,0,0,0.35);
      transition: box-shadow 0.3s, transform 0.3s;
    }
    .search-bar:focus-within {
      box-shadow: 0 10px 36px rgba(0,0,0,0.45);
      transform: translateY(-2px);
    }
    .search-bar-icon {
      background: #fff;
      display: flex;
      align-items: center;
      padding: 0 14px;
    }
    .search-bar input {
      flex: 1;
      padding: 13px 6px;
      font-size: 14px;
      color: #374151;
      background: #fff;
      border: none;
      outline: none;
      font-family: 'Open Sans', sans-serif;
    }
    .search-bar button {
      background: #1a3269;
      color: #fff;
      padding: 13px 34px;
      font-size: 14px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      font-family: 'Open Sans', sans-serif;
      transition: background 0.2s;
    }
    .search-bar button:hover { background: #142a56; }

    /* ── MAIN LAYOUT ── */
    .main-content {
      max-width: 980px;
      margin: 0 auto;
      padding: 0px 20px 50px;
    }
    .row-two-col {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      margin-bottom: 20px;
    }

    /* ── STAT CARDS ── */
    .stat-card {
      background: #fafafa;
      border-radius: 10px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.10);
      transition: box-shadow 0.25s, transform 0.25s;
    }
    .stat-card:hover {
      box-shadow: 0 10px 32px rgba(0, 0, 0, 0.39);
      transform: translateY(-3px);
    }
    .card-inner { padding: 26px 28px; }

    /* ── SECTION HEADER ── */
    .card-header {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 22px;
    }
    .sec-icon {
      width: 60px; height: 60px;
      background: #fff;
      border: 6px solid #1a3269;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }
    .sec-icon img {
      width: 65px; height: 65px;
      object-fit: contain;
    }
    .card-title {
      font-size: 16px;
      font-weight: 700;
      color: #1a3269;
      line-height: 1.35;
    }

    /* ── STAT ITEMS ── */
    .stat-item {
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 10px 8px;
      border-radius: 6px;
      text-decoration: none;
      position: relative;
      overflow: hidden;
      transition: background 0.15s;
    }
    .stat-item::before {
      content: '';
      position: absolute;
      inset: 0;
      background: #eff6ff;
      border-radius: 6px;
      transform: translateX(-100%);
      transition: transform 0.25s cubic-bezier(.22,1,.36,1);
    }
    .stat-item:hover::before { transform: translateX(0); }
    .stat-item:hover { background: transparent; }
    .row-icon {
      width: 52px; height: 52px;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      position: relative; z-index: 1;
    }
    .row-icon img { width: 50px; height: 50px; object-fit: contain; }
    .stat-item span {
      font-size: 14px;
      font-weight: 600;
      color: #1f2937;
      line-height: 1.35;
      position: relative; z-index: 1;
    }
    .stat-item span.sm { font-size: 13px; }

    /* ── 2-COL GRID INSIDE CARD ── */
    .grid-2col {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4px 12px;
    }
    /* ── 3-COL GRID INSIDE CARD ── */
    .grid-3col {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 4px 16px;
    }

    /* ── FEATURED CARDS ── */
    .feat-grid {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 20px;
    }
    .feat-card {
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }
    .feat-img {
      height: 185px;
      overflow: hidden;
    }
    .feat-img img {
      width: 100%; height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s cubic-bezier(.22,1,.36,1);
    }
    .feat-card:hover .feat-img img {
      transform: scale(1.06);
    }
    .feat-body { padding: 16px 18px; flex: 1; }
    .feat-title {
      font-size: 14px;
      font-weight: 700;
      margin-bottom: 8px;
    }
    .feat-desc {
      font-size: 12px;
      color: #4b5563;
      line-height: 1.7;
    }

    /* ── ANIMATIONS ── */
    @keyframes heroFadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(22px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .animate-card {
      opacity: 0;
      animation: fadeUp 0.55s cubic-bezier(.22,1,.36,1) forwards;
      animation-play-state: paused;
    }

    /* ── FOOTER ── */
    footer {
      background: #1f2937;
      color: #9ca3af;
      font-size: 12px;
      padding: 16px 36px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 8px;
    }
    footer a { color: #9ca3af; text-decoration: none; }
    footer a:hover { color: #fff; text-decoration: underline; }
  </style>
</head>
<body>

<!-- ══════════════════ NAVBAR ══════════════════ -->
<nav class="navbar">
  <div>
    <img src="Img/OpenStat-Logo.png" alt="PSA OpenSTAT" style="height:58px; width:auto; object-fit:contain;"/>
  </div>
  <div class="nav-links">
    <a href="#" class="nav-home">Home</a>
    <a href="#" class="nav-link">About</a>
    <a href="#" class="nav-link">Database</a>
    <a href="#" class="nav-link">Metadata</a>
    <a href="#" class="nav-link">Featured</a>
    <a href="#" class="nav-link">Contact Us</a>

    <div class="search-pill" id="searchPill">
      <button class="search-pill-btn" id="searchBtn" title="Search" aria-label="Toggle search">
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 24 24" stroke="#374151" stroke-width="2.3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>
        </svg>
      </button>
      <input class="search-pill-input" id="searchInput" type="text" placeholder="Search for statistics…" aria-label="Search"/>
    </div>
  </div>
</nav>

<!-- ══════════════════ HERO ══════════════════ -->
<div class="hero-bg">
  <img src="Img/Backdrop.png" alt="" class="hero-backdrop"/>
  <div class="hero-content">
    <h1 class="hero-title">Welcome to PSA OpenSTAT Website</h1>
    <p class="hero-desc">
      OpenSTAT is an open data platform powered by PC-Axis, a user-friendly application<br/>
      for presenting statistical data and metadata coupled with API and visualization features.<br/>
      This system allows the PSA to share data under an open data license where data can be freely used,re-used and redistributed by anyone without any restrictions other than proper source attribution.
    </p>
    <div class="search-bar-wrap">
      <div class="search-bar">
        <div class="search-bar-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="#9ca3af" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>
          </svg>
        </div>
        <input type="text" placeholder="Search for statistics"/>
        <button>Search</button>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════ MAIN CONTENT ══════════════════ -->
<div class="main-content">

  <!-- ── ROW 1: Demographic + Environment ── -->
  <div class="row-two-col">

    <!-- Demographic and Social Statistics -->
    <div class="stat-card animate-card" style="animation-delay: 0.1s;">
      <div class="card-inner">
        <div class="card-header">
          <div class="sec-icon">
            <img src="Img/Icons/Demographic/Demographic-and-Social-Statistics.png" alt="Demographic"/>
          </div>
          <h2 class="card-title">Demographic and Social Statistics</h2>
        </div>
        <?php
          $demographic = [
            ['icon' => 'Img/Icons/Demographic/Population-and-Migration.png', 'label' => 'Population and Migration'],
            ['icon' => 'Img/Icons/Demographic/Labor-and-Employment.png',     'label' => 'Labor and Employment'],
            ['icon' => 'Img/Icons/Demographic/Prices.png',                   'label' => 'Income and Consumption'],
          ];
          foreach($demographic as $item): ?>
          <a href="#" class="stat-item">
            <div class="row-icon"><img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/></div>
            <span><?= htmlspecialchars($item['label']) ?></span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Environment and Multi-Domain Statistics -->
    <div class="stat-card animate-card" style="animation-delay: 0.2s;">
      <div class="card-inner">
        <div class="card-header">
          <div class="sec-icon">
            <img src="Img/Icons/Environment/Environment-and-Multi-Domain-Statistics.png" alt="Environment"/>
          </div>
          <h2 class="card-title">Environment and Multi-Domain Statistics</h2>
        </div>
        <div class="grid-2col">
          <?php
            $environment = [
              ['icon' => 'Img/Icons/Environment/Environment.png',            'label' => 'Environment'],
              ['icon' => 'Img/Icons/Environment/Sustainable-Development.png','label' => 'Sustainable Development Goals'],
              ['icon' => 'Img/Icons/Environment/Child-poverty.png',          'label' => 'Child Poverty'],
              ['icon' => 'Img/Icons/Environment/Information-society.png',    'label' => 'Information Society'],
              ['icon' => 'Img/Icons/Environment/Decent-work.png',            'label' => 'Decent Work'],
            ];
            foreach($environment as $item): ?>
            <a href="#" class="stat-item">
              <div class="row-icon"><img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/></div>
              <span class="sm"><?= htmlspecialchars($item['label']) ?></span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- ── ROW 2: Economic Statistics (full width) ── -->
  <div class="stat-card animate-card" style="margin-bottom:20px; animation-delay: 0.3s;">
    <div class="card-inner">
      <div class="card-header">
        <div class="sec-icon">
          <img src="Img/Icons/Economic Statistics/Economic-Statistics.png" alt="Economic"/>
        </div>
        <h2 class="card-title">Economic Statistics</h2>
      </div>
      <div class="grid-3col">
        <?php
          $economic = [
            ['icon' => 'Img/Icons/Economic Statistics/Economic Accounts.png',                     'label' => 'Economic Accounts'],
            ['icon' => 'Img/Icons/Economic Statistics/Tourism.png',                                'label' => 'Tourism'],
            ['icon' => 'Img/Icons/Economic Statistics/Trade-International.png',                    'label' => 'Trade: International Merchandise and Domestic'],
            ['icon' => 'Img/Icons/Economic Statistics/Service Statistics.png',                     'label' => 'Service Statistics'],
            ['icon' => 'Img/Icons/Economic Statistics/Prices of Goods.png',                       'label' => 'Prices'],
            ['icon' => 'Img/Icons/Economic Statistics/Labor Cost.png',                             'label' => 'Labor Cost'],
            ['icon' => 'Img/Icons/Economic Statistics/agriculture.png',                            'label' => 'Agriculture, Forestry, Fisheries'],
            ['icon' => 'Img/Icons/Economic Statistics/energy.png',                                 'label' => 'Energy'],
            ['icon' => 'Img/Icons/Economic Statistics/Mining, Manufacturing and Construction.png', 'label' => 'Mining, Manufacturing, Construction'],
          ];
          foreach($economic as $item): ?>
          <a href="#" class="stat-item">
            <div class="row-icon"><img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/></div>
            <span class="sm"><?= htmlspecialchars($item['label']) ?></span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- ── ROW 3: Featured Cards ── -->
  <div class="feat-grid">
    <?php
      $features = [
        [
          'img'         => 'Img/stat.png',
          'title'       => 'CountrySTAT Philippines',
          'title_color' => '#0d7a6b',
          'desc'        => 'CountrySTAT is a web-based information system which aims to improve access to food and agricultural statistics at regional, national and subnational levels.',
          'delay'       => '0.4s',
        ],
        [
          'img'         => 'Img/work (2).png',
          'title'       => 'Decent Work Statistics',
          'title_color' => '#92400e',
          'desc'        => 'Decent work is integral in efforts to reduce poverty and is a key mechanism for achieving equitable, inclusive and sustainable development.',
          'delay'       => '0.5s',
        ],
        [
          'img'         => 'Img/food.png',
          'title'       => 'Food Security Indicators',
          'title_color' => '#1e40af',
          'desc'        => 'Food security has become an essential objective in the Philippine agricultural system - a challenge to the statistical system to become an indispensable partner in attaining and maintaining food security.',
          'delay'       => '0.6s',
        ],
      ];
      foreach($features as $feat): ?>
      <div class="stat-card feat-card animate-card" style="animation-delay: <?= $feat['delay'] ?>;">
        <div class="feat-img">
          <img src="<?= htmlspecialchars($feat['img']) ?>" alt="<?= htmlspecialchars($feat['title']) ?>"/>
        </div>
        <div class="feat-body">
          <h3 class="feat-title" style="color:<?= $feat['title_color'] ?>;">
            <?= htmlspecialchars($feat['title']) ?>
          </h3>
          <p class="feat-desc"><?= htmlspecialchars($feat['desc']) ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>

<!-- ══════════════════ FOOTER ══════════════════ -->
<footer>
  <span>2026 Philippine Statistics Authority. All content is public domain unless otherwise stated.</span>
  <div style="display:flex; align-items:center; gap:12px;">
    <a href="#">Terms Of Use</a>
    <span style="color:#4b5563;">|</span>
    <a href="#">Privacy Statement</a>
  </div>
</footer>

<script>
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.animationPlayState = 'running';
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.animate-card').forEach(el => observer.observe(el));

  // ── SEARCH PILL ──
  const pill = document.getElementById('searchPill');
  const btn  = document.getElementById('searchBtn');
  const inp  = document.getElementById('searchInput');

  btn.addEventListener('click', (e) => {
    e.stopPropagation();
    const isOpen = pill.classList.toggle('open');
    if (isOpen) { setTimeout(() => inp.focus(), 350); }
    else { inp.value = ''; inp.blur(); }
  });

  document.addEventListener('click', (e) => {
    if (!pill.contains(e.target)) {
      pill.classList.remove('open');
      inp.value = '';
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      pill.classList.remove('open');
      inp.value = '';
      inp.blur();
    }
  });
</script>

</body>
</html>