 <?php
// PSA OpenSTAT Website - PHP Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PSA OpenSTAT</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet"/>
  <style>
    body { font-family: 'Open Sans', sans-serif; }
    .hero-bg {
      background: linear-gradient(135deg, #0a1a6b 0%, #1a3a8f 40%, #0d2060 70%, #081545 100%);
      position: relative;
      overflow: hidden;
    }
    .hero-bg::before {
      content: '';
      position: absolute;
      inset: 0;
      background: 
        radial-gradient(ellipse at 70% 50%, rgba(0,120,255,0.18) 0%, transparent 60%),
        radial-gradient(ellipse at 20% 80%, rgba(0,200,255,0.10) 0%, transparent 50%);
      pointer-events: none;
    }
    .nav-link { transition: color 0.2s; }
    .nav-link:hover { color: #f59e0b; }
    .stat-card { transition: box-shadow 0.2s, transform 0.2s; }
    .stat-card:hover { box-shadow: 0 6px 24px rgba(0,0,0,0.13); transform: translateY(-2px); }
    .feature-img { object-fit: cover; width: 100%; height: 180px; border-radius: 0.5rem 0.5rem 0 0; }
  </style>
</head>
<body class="bg-gray-100 text-gray-800 text-sm">

<!-- Navigation -->
<nav class="bg-white border-b border-gray-200 px-6 py-2 flex items-center justify-between shadow-sm sticky top-0 z-50">
  <div class="flex items-center gap-3">
    <!-- Logo -->
    <div class="flex items-center gap-2">
      <div class="w-10 h-10 rounded-full border-2 border-blue-800 flex items-center justify-center bg-white overflow-hidden">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
          <circle cx="16" cy="16" r="15" fill="#fff" stroke="#1a3a8f" stroke-width="2"/>
          <text x="5" y="20" font-size="7" fill="#1a3a8f" font-weight="bold" font-family="Arial">PSA</text>
        </svg>
      </div>
      <div>
        <div class="text-xs text-blue-800 font-semibold leading-tight">Philippine Statistics Authority</div>
        <div class="flex items-center gap-1">
          <span class="text-blue-900 font-bold text-lg leading-tight">OpenSTAT</span>
          <svg width="22" height="16" viewBox="0 0 22 16" fill="none">
            <rect x="0" y="8" width="4" height="8" rx="1" fill="#e55"/>
            <rect x="6" y="4" width="4" height="12" rx="1" fill="#f90"/>
            <rect x="12" y="1" width="4" height="15" rx="1" fill="#1a3a8f"/>
            <polyline points="2,8 8,4 14,1 20,0" stroke="#f90" stroke-width="1.5" fill="none" stroke-linecap="round"/>
          </svg>
        </div>
      </div>
    </div>
  </div>
  <div class="flex items-center gap-1">
    <a href="#" class="bg-blue-800 text-white px-4 py-1.5 rounded font-semibold text-sm">Home</a>
    <a href="#" class="nav-link px-3 py-1.5 text-gray-700 font-medium">About</a>
    <a href="#" class="nav-link px-3 py-1.5 text-gray-700 font-medium">Database</a>
    <a href="#" class="nav-link px-3 py-1.5 text-gray-700 font-medium">Metadata</a>
    <a href="#" class="nav-link px-3 py-1.5 text-gray-700 font-medium">Featured</a>
    <a href="#" class="nav-link px-3 py-1.5 text-gray-700 font-medium">Contact Us</a>
    <button class="ml-2 text-gray-600 hover:text-blue-800">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>
      </svg>
    </button>
  </div>
</nav>

<!-- Hero Section -->
<div class="hero-bg py-10 px-4 text-center text-white relative">
  <h1 class="text-2xl md:text-3xl font-bold mb-3 drop-shadow">Welcome to PSA OpenSTAT Website</h1>
  <p class="text-sm md:text-base max-w-2xl mx-auto mb-6 text-blue-100 leading-relaxed">
    OpenSTAT is an open data platform powered by PC-Axis, a user-friendly application for presenting statistical data and metadata coupled with API and visualization features. This system allows the PSA to share data under an open data license where data can be freely used, re-using and redistributed by anyone without any restrictions other than proper source attribution.
  </p>
  <div class="flex justify-center">
    <div class="flex w-full max-w-xl shadow-lg rounded overflow-hidden">
      <input type="text" placeholder="Search for statistics" class="flex-1 px-4 py-2.5 text-gray-800 text-sm outline-none"/>
      <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 font-semibold transition-colors">Search</button>
    </div>
  </div>
</div>

<!-- Statistics Category Cards -->
<div class="max-w-5xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-2 gap-6">

  <!-- Demographic and Social Statistics -->
  <div class="stat-card bg-white rounded-lg shadow p-5">
    <div class="flex items-center gap-2 mb-4">
      <div class="bg-blue-700 rounded-full p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
          <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zm6-4a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zm6-3a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
        </svg>
      </div>
      <h2 class="font-bold text-blue-900 text-base">Demographic and Social Statistics</h2>
    </div>
    <div class="space-y-3">
      <?php
        $demo_stats = [
          ['icon' => '👥', 'label' => 'Population and Migration'],
          ['icon' => '💼', 'label' => 'Labor and Employment'],
          ['icon' => '💰', 'label' => 'Income and Consumption'],
        ];
        foreach($demo_stats as $stat): ?>
        <a href="#" class="flex items-center gap-3 hover:text-blue-700 transition-colors group">
          <span class="text-xl w-8 text-center"><?= $stat['icon'] ?></span>
          <span class="text-gray-700 group-hover:text-blue-700 text-sm"><?= $stat['label'] ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Environment and Multi-Domain Statistics -->
  <div class="stat-card bg-white rounded-lg shadow p-5">
    <div class="flex items-center gap-2 mb-4">
      <div class="bg-blue-700 rounded-full p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"/>
        </svg>
      </div>
      <h2 class="font-bold text-blue-900 text-base">Environment and Multi-Domain Statistics</h2>
    </div>
    <div class="grid grid-cols-2 gap-3">
      <?php
        $env_stats = [
          ['icon' => '🌿', 'label' => 'Environment'],
          ['icon' => '🎯', 'label' => 'Sustainable Development Goals'],
          ['icon' => '👶', 'label' => 'Child Poverty'],
          ['icon' => '💻', 'label' => 'Information Society'],
          ['icon' => '⚒️', 'label' => 'Decent Work'],
        ];
        foreach($env_stats as $stat): ?>
        <a href="#" class="flex items-center gap-2 hover:text-blue-700 transition-colors group">
          <span class="text-lg w-7 text-center"><?= $stat['icon'] ?></span>
          <span class="text-gray-700 group-hover:text-blue-700 text-sm leading-tight"><?= $stat['label'] ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Economic Statistics (full width) -->
  <div class="stat-card bg-white rounded-lg shadow p-5 md:col-span-2">
    <div class="flex items-center gap-2 mb-4">
      <div class="bg-blue-700 rounded-full p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
          <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zm6-4a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zm6-3a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
        </svg>
      </div>
      <h2 class="font-bold text-blue-900 text-base">Economic Statistics</h2>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
      <?php
        $eco_stats = [
          ['icon' => '📊', 'label' => 'Economic Accounts'],
          ['icon' => '✈️', 'label' => 'Tourism'],
          ['icon' => '🚢', 'label' => 'Trade: International Merchandise and Domestic'],
          ['icon' => '🏭', 'label' => 'Service Statistics'],
          ['icon' => '💲', 'label' => 'Prices'],
          ['icon' => '💵', 'label' => 'Labor Cost'],
          ['icon' => '🌾', 'label' => 'Agriculture, Forestry, Fisheries'],
          ['icon' => '⚡', 'label' => 'Energy'],
          ['icon' => '⛏️', 'label' => 'Mining, Manufacturing, Construction'],
        ];
        foreach($eco_stats as $stat): ?>
        <a href="#" class="flex items-center gap-2 hover:text-blue-700 transition-colors group">
          <span class="text-lg w-7 text-center"><?= $stat['icon'] ?></span>
          <span class="text-gray-700 group-hover:text-blue-700 text-sm leading-tight"><?= $stat['label'] ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- Featured Cards Section -->
<div class="max-w-5xl mx-auto px-4 pb-10">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <?php
      $features = [
        [
          'bg'    => 'bg-green-100',
          'emoji' => '🌾',
          'title' => 'CountrySTAT Philippines',
          'color' => 'text-green-700',
          'desc'  => 'CountrySTAT is a web-based information system which aims to improve access to food and agricultural statistics at regional, national and subnational levels.',
        ],
        [
          'bg'    => 'bg-orange-100',
          'emoji' => '⚒️',
          'title' => 'Decent Work Statistics',
          'color' => 'text-orange-700',
          'desc'  => 'Decent work is integral in efforts to reduce poverty and is a key mechanism for achieving equitable, inclusive and sustainable development.',
        ],
        [
          'bg'    => 'bg-blue-100',
          'emoji' => '🐟',
          'title' => 'Food Security Indicators',
          'color' => 'text-blue-700',
          'desc'  => 'Food security has become an essential objective in the Philippine agricultural system - a challenge to the statistical system to become an indispensable partner in attaining and maintaining food security.',
        ],
      ];
      foreach($features as $f): ?>
      <div class="bg-white rounded-lg shadow overflow-hidden stat-card flex flex-col">
        <div class="<?= $f['bg'] ?> h-44 flex items-center justify-center">
          <span class="text-7xl"><?= $f['emoji'] ?></span>
        </div>
        <div class="p-4 flex-1 flex flex-col">
          <h3 class="font-bold <?= $f['color'] ?> mb-2 text-sm"><?= $f['title'] ?></h3>
          <p class="text-gray-600 text-xs leading-relaxed"><?= $f['desc'] ?></p>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</div>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-300 text-xs py-4 px-6 flex flex-col md:flex-row items-center justify-between gap-2">
  <span>2026 Philippine Statistics Authority. All content is public domain unless otherwise stated.</span>
  <div class="flex gap-4">
    <a href="#" class="hover:text-white transition-colors">Terms Of Use</a>
    <span>|</span>
    <a href="#" class="hover:text-white transition-colors">Privacy Statement</a>
  </div>
</footer>

</body>
</html>