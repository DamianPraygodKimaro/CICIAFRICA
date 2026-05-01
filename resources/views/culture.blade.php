<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Culture Feed — Cici Africa</title>
  <meta name="description" content="Cici Africa Culture Feed — movies, music, podcasts and documentaries curated by the community." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&family=Bebas+Neue&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <style>
    /* ── CULTURE PAGE EXTRAS ── */
    .jams-week-block { margin-bottom: 3rem; }
    .jams-list { display: flex; flex-direction: column; gap: 0.85rem; margin-top: 1rem; }

    .popcorn-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1.5rem; }

    .doc-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1.5rem; }

    .podcast-list { display: flex; flex-direction: column; gap: 1.75rem; }

    /* thumb gradients */
    .thumb-1 { background: linear-gradient(135deg,#1a0a00,var(--orange)); }
    .thumb-2 { background: linear-gradient(135deg,var(--gold),#1a0a00); }
    .thumb-3 { background: linear-gradient(135deg,var(--orange),var(--brown)); }
    .thumb-4 { background: linear-gradient(135deg,#2d1a00,var(--gold)); }

    @media (max-width: 900px) {
      .popcorn-grid, .doc-grid { grid-template-columns: repeat(2,1fr); }
    }
    @media (max-width: 580px) {
      .popcorn-grid, .doc-grid { grid-template-columns: 1fr; }
    }
  </style>
   @vite('resources/css/app.css')

  @vite('resources/js/app.js')
</head>
<body>

<!-- ═══════ NAVBAR ═══════ -->
<nav class="navbar" role="navigation" aria-label="Main navigation">
  <div class="navbar__inner">
    <a href="index.html" class="navbar__logo" aria-label="Cici Africa Home">
      <svg class="navbar__logo-icon" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M40 10 L50 20 L60 32 L64 50 L54 66 L40 72 L28 62 L24 44 L30 26 Z" stroke="#b07d2e" stroke-width="3" fill="none"/>
        <path d="M40 72 L36 78 M40 72 L44 78" stroke="#b07d2e" stroke-width="2.5" stroke-linecap="round"/>
        <circle cx="40" cy="34" r="5" fill="#c2410f"/>
      </svg>
      <div class="navbar__logo-text">
        <span class="cici">Cici</span>
        <span class="africa">Africa</span>
      </div>
    </a>
    <div class="navbar__links">
      <a href="index.html"   class="navbar__link"><i class="fa-solid fa-house"></i> Home</a>
      <a href="services.html" class="navbar__link"><i class="fa-solid fa-video"></i> Services</a>
      <a href="culture.html"  class="navbar__link active"><i class="fa-solid fa-fire"></i> Culture Feed</a>
      <a href="talents.html"  class="navbar__link"><i class="fa-solid fa-star"></i> Talents</a>
      <a href="events.html"   class="navbar__link"><i class="fa-solid fa-calendar-days"></i> Events</a>
    </div>
    <a href="services.html#booking" class="navbar__cta">Let's Create →</a>
    <button class="navbar__hamburger" aria-label="Toggle menu" aria-expanded="false">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>
  <div class="mobile-menu" id="mobile-menu">
    <a href="index.html"    class="mobile-menu__link">🏠 Home</a>
    <a href="services.html" class="mobile-menu__link">🎥 Services</a>
    <a href="culture.html"  class="mobile-menu__link">🔥 Culture Feed</a>
    <a href="talents.html"  class="mobile-menu__link">⭐ Talents</a>
    <a href="events.html"   class="mobile-menu__link" style="border-bottom:none">📅 Events</a>
    <a href="services.html#booking" class="btn btn--primary btn--block" style="margin-top:1rem">Let's Create →</a>
  </div>
</nav>

<!-- ═══════ PAGE HERO ═══════ -->
<section class="page-hero">
  <div class="page-hero__pattern" aria-hidden="true"></div>
  <div class="container page-hero__content">
    <span class="section-label section-label--light fade-up">Stay Connected</span>
    <h1 class="section-title section-title--light fade-up delay-1">The Culture <span class="gold">Feed</span></h1>
    <p class="section-desc section-desc--light fade-up delay-2">Films, music, podcasts, and documentaries — curated by the Cici Africa community and updated every week.</p>
  </div>
</section>

<!-- ═══════ TABS ═══════ -->
<section class="section" id="culture-tabs-section">
  <div class="container">

    <div class="inner-tabs" role="tablist" aria-label="Culture Feed sections">
      <button class="inner-tab active" role="tab" data-tab="cf-popcorn"  id="tab-cf-popcorn"  aria-selected="true"  aria-controls="cf-popcorn">
        🍿 Popcorn Time
      </button>
      <button class="inner-tab" role="tab" data-tab="cf-jams"     id="tab-cf-jams"     aria-selected="false" aria-controls="cf-jams">
        🎵 Cici Jams
      </button>
      <button class="inner-tab" role="tab" data-tab="cf-podcast"  id="tab-cf-podcast"  aria-selected="false" aria-controls="cf-podcast">
        🎙️ Podcasts
      </button>
      <button class="inner-tab" role="tab" data-tab="cf-docs"     id="tab-cf-docs"     aria-selected="false" aria-controls="cf-docs">
        📽️ Documentaries
      </button>
    </div>

    <!-- ── POPCORN TIME ── -->
    <div class="tab-panel active" id="cf-popcorn" role="tabpanel" aria-labelledby="tab-cf-popcorn">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:2.5rem">
        <div>
          <h2 class="section-title" style="margin-bottom:0.25rem">🍿 Popcorn Time</h2>
          <p style="color:var(--text-muted);font-size:0.9rem">Community-suggested movies &amp; series — click to watch on available streaming sites.</p>
        </div>
        <span class="badge badge--orange">Updated weekly</span>
      </div>
      <div class="popcorn-grid">

        <div class="feed-card fade-up delay-1">
          <div class="feed-card__header">
            <span class="badge">Film</span>
            <span style="font-size:0.78rem;color:var(--text-muted)">Suggested by community</span>
          </div>
          <div class="feed-card__body">
            <div class="feed-card__thumb thumb-1">🎬</div>
            <div class="feed-card__title">The Outfit</div>
            <p class="feed-card__meta">Thriller · 2022 · 105 min</p>
            <p class="feed-card__desc">A masterful slow-burn thriller set in a tailor's shop with unexpected twists.</p>
            <div style="display:flex;gap:1rem;flex-wrap:wrap">
              <a href="https://netflix.com" target="_blank" rel="noopener" class="feed-link">
                Netflix <i class="fa-solid fa-arrow-right"></i>
              </a>
              <a href="https://youtube.com" target="_blank" rel="noopener" class="feed-link">
                YouTube <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="feed-card fade-up delay-2">
          <div class="feed-card__header">
            <span class="badge">Series</span>
            <span style="font-size:0.78rem;color:var(--text-muted)">Cici Africa Pick</span>
          </div>
          <div class="feed-card__body">
            <div class="feed-card__thumb thumb-2">📺</div>
            <div class="feed-card__title">Queen Sono</div>
            <p class="feed-card__meta">Action · African Series · Netflix</p>
            <p class="feed-card__desc">Africa's first Netflix original spy series — action-packed and unapologetically African.</p>
            <a href="https://netflix.com" target="_blank" rel="noopener" class="feed-link">
              Watch on Netflix <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="feed-card fade-up delay-3">
          <div class="feed-card__header">
            <span class="badge badge--orange">Cici Africa+</span>
            <span style="font-size:0.78rem;color:var(--text-muted)">Original</span>
          </div>
          <div class="feed-card__body">
            <div class="feed-card__thumb thumb-3">🌍</div>
            <div class="feed-card__title">Africa's Wild Horizons</div>
            <p class="feed-card__meta">Documentary · Cici Africa Original</p>
            <p class="feed-card__desc">A breathtaking journey through Africa's most stunning landscapes and wildlife.</p>
            <a href="#" class="feed-link">
              Watch on Cici Africa+ <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="feed-card fade-up delay-1">
          <div class="feed-card__header">
            <span class="badge">Film</span>
            <span style="font-size:0.78rem;color:var(--text-muted)">Suggested by @dsr_vibes</span>
          </div>
          <div class="feed-card__body">
            <div class="feed-card__thumb thumb-4">🎭</div>
            <div class="feed-card__title">Lionheart</div>
            <p class="feed-card__meta">Drama · Nigeria · 2018 · 95 min</p>
            <p class="feed-card__desc">A woman navigates the male-dominated business world in Nigeria after her father falls ill.</p>
            <a href="https://netflix.com" target="_blank" rel="noopener" class="feed-link">
              Watch on Netflix <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="feed-card fade-up delay-2">
          <div class="feed-card__header">
            <span class="badge">Series</span>
            <span style="font-size:0.78rem;color:var(--text-muted)">Suggested by @mwasiti</span>
          </div>
          <div class="feed-card__body">
            <div class="feed-card__thumb thumb-1">🔮</div>
            <div class="feed-card__title">Blood &amp; Water</div>
            <p class="feed-card__meta">Thriller · South Africa · Netflix</p>
            <p class="feed-card__desc">Cape Town thriller following a teen who suspects her classmate is her long-lost sister.</p>
            <a href="https://netflix.com" target="_blank" rel="noopener" class="feed-link">
              Watch on Netflix <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="feed-card fade-up delay-3">
          <div class="feed-card__header">
            <span class="badge badge--gold">Coming Soon</span>
          </div>
          <div class="feed-card__body">
            <div class="feed-card__thumb thumb-2" style="opacity:0.5">❓</div>
            <div class="feed-card__title" style="color:var(--text-muted)">Community Pick — Coming Next Week</div>
            <p class="feed-card__meta">Vote in our Instagram stories every Sunday</p>
            <p class="feed-card__desc">Follow us on Instagram to vote for the next Popcorn Time pick!</p>
            <a href="https://www.instagram.com/ciciafrica_creatives" target="_blank" rel="noopener" class="feed-link">
              Vote on Instagram <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

      </div>
    </div>

    <!-- ── CICI JAMS ── -->
    <div class="tab-panel" id="cf-jams" role="tabpanel" aria-labelledby="tab-cf-jams">
      <div style="margin-bottom:2.5rem">
        <h2 class="section-title" style="margin-bottom:0.25rem">🎵 Cici Jams</h2>
        <p style="color:var(--text-muted);font-size:0.9rem">Community-suggested songs organised by day. Click to stream on Spotify or YouTube.</p>
      </div>

      <!-- THIS WEEK -->
      <div class="jams-week-block fade-up">
        <div class="jam-section-label" style="color:var(--orange)">THIS WEEK</div>
        <div class="jams-list">

          <div class="jam-row">
            <span class="day-badge day-badge--monday">Mon Jams</span>
            <div class="jam-info">
              <div class="jam-title">Wazo — Nandy</div>
              <div class="jam-meta">Bongo Flava · Suggested by @tz_vibes</div>
            </div>
            <div class="jam-stream-links">
              <a href="https://open.spotify.com" target="_blank" rel="noopener" class="stream-link stream-link--sp" aria-label="Listen on Spotify">
                <i class="fa-brands fa-spotify"></i> Spotify
              </a>
              <a href="https://youtube.com" target="_blank" rel="noopener" class="stream-link stream-link--yt" aria-label="Watch on YouTube">
                <i class="fa-brands fa-youtube"></i>
              </a>
            </div>
          </div>

          <div class="jam-row">
            <span class="day-badge day-badge--thursday">TBT Jams</span>
            <div class="jam-info">
              <div class="jam-title">Nakupenda — Diamond Platnumz</div>
              <div class="jam-meta">Throwback Thursday · Suggested by @mwasiti</div>
            </div>
            <div class="jam-stream-links">
              <a href="https://open.spotify.com" target="_blank" rel="noopener" class="stream-link stream-link--sp">
                <i class="fa-brands fa-spotify"></i> Spotify
              </a>
            </div>
          </div>

          <div class="jam-row">
            <span class="day-badge day-badge--weekend">Weekend Vibe</span>
            <div class="jam-info">
              <div class="jam-title">Mwana — Ali Kiba</div>
              <div class="jam-meta">Weekend Vibes · Suggested by @darvibes</div>
            </div>
            <div class="jam-stream-links">
              <a href="https://youtube.com" target="_blank" rel="noopener" class="stream-link stream-link--yt">
                <i class="fa-brands fa-youtube"></i> YouTube
              </a>
            </div>
          </div>

          <div class="jam-row">
            <span class="day-badge day-badge--monday">Mon Jams</span>
            <div class="jam-info">
              <div class="jam-title">Sukari — Lava Lava</div>
              <div class="jam-meta">Bongo Flava · Suggested by @citylights_tz</div>
            </div>
            <div class="jam-stream-links">
              <a href="https://open.spotify.com" target="_blank" rel="noopener" class="stream-link stream-link--sp">
                <i class="fa-brands fa-spotify"></i> Spotify
              </a>
            </div>
          </div>

        </div>
      </div>

      <!-- LAST WEEK -->
      <div class="jams-week-block fade-up delay-2">
        <div class="jam-section-label" style="color:var(--text-muted)">LAST WEEK</div>
        <div class="jams-list">

          <div class="jam-row past">
            <span class="day-badge day-badge--monday">Mon Jams</span>
            <div class="jam-info">
              <div class="jam-title" style="color:var(--text-muted)">Mshumaa — Zuchu</div>
              <div class="jam-meta">Bongo Flava</div>
            </div>
            <div class="jam-stream-links">
              <a href="https://open.spotify.com" target="_blank" rel="noopener" class="stream-link stream-link--sp">
                <i class="fa-brands fa-spotify"></i>
              </a>
            </div>
          </div>

          <div class="jam-row past">
            <span class="day-badge day-badge--thursday">TBT Jams</span>
            <div class="jam-info">
              <div class="jam-title" style="color:var(--text-muted)">Ninogeshe — Harmonize</div>
              <div class="jam-meta">Throwback Thursday</div>
            </div>
            <div class="jam-stream-links">
              <a href="https://open.spotify.com" target="_blank" rel="noopener" class="stream-link stream-link--sp">
                <i class="fa-brands fa-spotify"></i>
              </a>
            </div>
          </div>

          <div class="jam-row past">
            <span class="day-badge day-badge--weekend">Weekend Vibe</span>
            <div class="jam-info">
              <div class="jam-title" style="color:var(--text-muted)">Utanipenda — Harmonize</div>
              <div class="jam-meta">Weekend Vibes</div>
            </div>
            <div class="jam-stream-links">
              <a href="https://youtube.com" target="_blank" rel="noopener" class="stream-link stream-link--yt">
                <i class="fa-brands fa-youtube"></i>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- ── PODCASTS ── -->
    <div class="tab-panel" id="cf-podcast" role="tabpanel" aria-labelledby="tab-cf-podcast">
      <div style="margin-bottom:2.5rem">
        <h2 class="section-title" style="margin-bottom:0.25rem">🎙️ Podcasts</h2>
        <p style="color:var(--text-muted);font-size:0.9rem">Creative conversations from Africa. Listen on YouTube or Spotify.</p>
      </div>
      <div class="podcast-list">

        <div class="podcast-card fade-up delay-1">
          <div class="podcast-card__header">
            <div class="podcast-card__icon">🎙️</div>
            <div>
              <div class="podcast-card__name">The Cici Files</div>
              <p class="podcast-card__desc">Creative industry conversations from East Africa — raw, honest &amp; inspiring.</p>
            </div>
          </div>
          <div class="episode-row">
            <div class="episode-num">01</div>
            <div class="episode-info">
              <div class="episode-title">Building a Creative Career in Tanzania</div>
              <div class="episode-meta">45 min · April 2026</div>
            </div>
            <div class="episode-links">
              <a href="https://youtube.com" target="_blank" rel="noopener" class="ep-link ep-link--yt" aria-label="Watch on YouTube"><i class="fa-brands fa-youtube"></i> YT</a>
              <a href="https://open.spotify.com" target="_blank" rel="noopener" class="ep-link ep-link--sp" aria-label="Listen on Spotify"><i class="fa-brands fa-spotify"></i> Spotify</a>
            </div>
          </div>
          <div class="episode-row">
            <div class="episode-num">02</div>
            <div class="episode-info">
              <div class="episode-title">Monetising African Content Online</div>
              <div class="episode-meta">38 min · March 2026</div>
            </div>
            <div class="episode-links">
              <a href="https://youtube.com" target="_blank" rel="noopener" class="ep-link ep-link--yt"><i class="fa-brands fa-youtube"></i> YT</a>
              <a href="https://open.spotify.com" target="_blank" rel="noopener" class="ep-link ep-link--sp"><i class="fa-brands fa-spotify"></i> Spotify</a>
            </div>
          </div>
          <div class="episode-row">
            <div class="episode-num">03</div>
            <div class="episode-info">
              <div class="episode-title">The Rise of African Documentary Film</div>
              <div class="episode-meta">52 min · Feb 2026</div>
            </div>
            <div class="episode-links">
              <a href="https://youtube.com" target="_blank" rel="noopener" class="ep-link ep-link--yt"><i class="fa-brands fa-youtube"></i> YT</a>
              <a href="https://open.spotify.com" target="_blank" rel="noopener" class="ep-link ep-link--sp"><i class="fa-brands fa-spotify"></i> Spotify</a>
            </div>
          </div>
        </div>

        <div class="podcast-card fade-up delay-2">
          <div class="podcast-card__header" style="background:linear-gradient(135deg,var(--gold),var(--brown))">
            <div class="podcast-card__icon">🌍</div>
            <div>
              <div class="podcast-card__name">Africa Creative Economy</div>
              <p class="podcast-card__desc">Exploring business, money, and opportunity in Africa's fast-growing creative sector.</p>
            </div>
          </div>
          <div class="episode-row">
            <div class="episode-num">01</div>
            <div class="episode-info">
              <div class="episode-title">Who's Investing in African Creatives?</div>
              <div class="episode-meta">41 min · April 2026</div>
            </div>
            <div class="episode-links">
              <a href="https://youtube.com" target="_blank" rel="noopener" class="ep-link ep-link--yt"><i class="fa-brands fa-youtube"></i> YT</a>
              <a href="https://open.spotify.com" target="_blank" rel="noopener" class="ep-link ep-link--sp"><i class="fa-brands fa-spotify"></i> Spotify</a>
            </div>
          </div>
          <div class="episode-row">
            <div class="episode-num">02</div>
            <div class="episode-info">
              <div class="episode-title">From Side Hustle to Full-Time Creator</div>
              <div class="episode-meta">36 min · March 2026</div>
            </div>
            <div class="episode-links">
              <a href="https://youtube.com" target="_blank" rel="noopener" class="ep-link ep-link--yt"><i class="fa-brands fa-youtube"></i> YT</a>
              <a href="https://open.spotify.com" target="_blank" rel="noopener" class="ep-link ep-link--sp"><i class="fa-brands fa-spotify"></i> Spotify</a>
            </div>
          </div>
          <div class="episode-row">
            <div class="episode-num">03</div>
            <div class="episode-info">
              <div class="episode-title">Social Media Algorithms &amp; African Content</div>
              <div class="episode-meta">29 min · Feb 2026</div>
            </div>
            <div class="episode-links">
              <a href="https://youtube.com" target="_blank" rel="noopener" class="ep-link ep-link--yt"><i class="fa-brands fa-youtube"></i> YT</a>
              <a href="https://open.spotify.com" target="_blank" rel="noopener" class="ep-link ep-link--sp"><i class="fa-brands fa-spotify"></i> Spotify</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ── DOCUMENTARIES ── -->
    <div class="tab-panel" id="cf-docs" role="tabpanel" aria-labelledby="tab-cf-docs">
      <div style="margin-bottom:2.5rem">
        <h2 class="section-title" style="margin-bottom:0.25rem">📽️ Documentaries</h2>
        <p style="color:var(--text-muted);font-size:0.9rem">Highlight reels and full films. Watch on YouTube or Cici Africa+.</p>
      </div>
      <div class="doc-grid">

        <div class="feed-card fade-up delay-1">
          <div class="feed-card__header">
            <span class="badge badge--orange">Cici Africa Original</span>
          </div>
          <div class="feed-card__body">
            <div class="feed-card__thumb thumb-3">🎥</div>
            <div class="feed-card__title">Roots &amp; Routes</div>
            <p class="feed-card__meta">Documentary · 2025 · Dar es Salaam</p>
            <p class="feed-card__desc">A story about young creatives finding their footing in Tanzania's evolving arts scene.</p>
            <a href="https://youtube.com" target="_blank" rel="noopener" class="feed-link">
              <i class="fa-brands fa-youtube"></i> Watch on YouTube <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="feed-card fade-up delay-2">
          <div class="feed-card__header">
            <span class="badge badge--orange">Cici Africa+</span>
          </div>
          <div class="feed-card__body">
            <div class="feed-card__thumb thumb-4">🌍</div>
            <div class="feed-card__title">The Creative Economy</div>
            <p class="feed-card__meta">Documentary · 2026 · East Africa</p>
            <p class="feed-card__desc">Exploring Africa's growing creative economy and the entrepreneurs driving change.</p>
            <a href="#" class="feed-link">
              Watch on Cici Africa+ <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="feed-card fade-up delay-3">
          <div class="feed-card__header">
            <span class="badge">Highlight Reel</span>
          </div>
          <div class="feed-card__body">
            <div class="feed-card__thumb thumb-2">✨</div>
            <div class="feed-card__title">Creative Summit 2025 — Highlights</div>
            <p class="feed-card__meta">Event Highlights · 12 min</p>
            <p class="feed-card__desc">The best moments from Cici Africa's first Creative Industry Summit.</p>
            <a href="https://youtube.com" target="_blank" rel="noopener" class="feed-link">
              <i class="fa-brands fa-youtube"></i> Watch Highlights <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="feed-card fade-up delay-1">
          <div class="feed-card__header">
            <span class="badge badge--orange">Cici Africa Original</span>
          </div>
          <div class="feed-card__body">
            <div class="feed-card__thumb thumb-1">🏙️</div>
            <div class="feed-card__title">Dar After Dark</div>
            <p class="feed-card__meta">Short Film · 2025 · 22 min</p>
            <p class="feed-card__desc">A cinematic exploration of nightlife, art, and culture in Dar es Salaam.</p>
            <a href="https://youtube.com" target="_blank" rel="noopener" class="feed-link">
              <i class="fa-brands fa-youtube"></i> Watch <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="feed-card fade-up delay-2">
          <div class="feed-card__header">
            <span class="badge">Highlight Reel</span>
          </div>
          <div class="feed-card__body">
            <div class="feed-card__thumb thumb-3">🎵</div>
            <div class="feed-card__title">Cici Jams Live — 2025 Recap</div>
            <p class="feed-card__meta">Event Highlights · 8 min</p>
            <p class="feed-card__desc">Relive the energy from our first Cici Jams live music event in Dar es Salaam.</p>
            <a href="https://youtube.com" target="_blank" rel="noopener" class="feed-link">
              <i class="fa-brands fa-youtube"></i> Watch Recap <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="feed-card fade-up delay-3">
          <div class="feed-card__header">
            <span class="badge badge--gold">Coming Soon</span>
          </div>
          <div class="feed-card__body">
            <div class="feed-card__thumb thumb-4" style="opacity:0.5">🎬</div>
            <div class="feed-card__title" style="color:var(--text-muted)">Untitled Project — 2026</div>
            <p class="feed-card__meta">In Production</p>
            <p class="feed-card__desc">A new Cici Africa original documentary is currently in production. Subscribe to be notified when it drops.</p>
            <a href="https://www.instagram.com/ciciafrica_creatives" target="_blank" rel="noopener" class="feed-link">
              Follow for Updates <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

      </div>
    </div>

    <!-- ── SUBSCRIBE BANNER ── -->
    <div class="subscribe-banner fade-up">
      <h3>Stay in the <span style="color:var(--gold-light)">Loop</span></h3>
      <p>Subscribe to get notified when new content drops on the Culture Feed — films, jams, podcasts and more.</p>
      <form class="subscribe-form" novalidate>
        <input class="subscribe-input" type="email" placeholder="Your email address" aria-label="Email address" required>
        <button type="submit" class="btn btn--gold">Subscribe →</button>
      </form>
    </div>

  </div>
</section>

<!-- ═══════ FOOTER ═══════ -->
<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="footer__grid">
      <div>
        <div class="footer__logo"><span class="cici">Cici</span><span class="africa">Africa</span></div>
        <p class="footer__tagline">Where African creativity meets opportunity.<br>Dar es Salaam, Tanzania.</p>
        <div class="footer__socials">
          <a href="https://www.instagram.com/ciciafrica_creatives" target="_blank" rel="noopener" class="footer__social" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.tiktok.com/@ciciafrica_creatives" target="_blank" rel="noopener" class="footer__social" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
          <a href="https://www.youtube.com/@ciciafrica_creatives" target="_blank" rel="noopener" class="footer__social" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
          <a href="https://www.linkedin.com/company/ciciafrica" target="_blank" rel="noopener" class="footer__social" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
        </div>
      </div>
      <div>
        <div class="footer__heading">Navigate</div>
        <ul class="footer__links">
          <li><a href="index.html">Home</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="culture.html">Culture Feed</a></li>
          <li><a href="talents.html">Talents</a></li>
          <li><a href="events.html">Events</a></li>
        </ul>
      </div>
      <div>
        <div class="footer__heading">Culture Feed</div>
        <ul class="footer__links">
          <li><a href="culture.html">Popcorn Time</a></li>
          <li><a href="culture.html">Cici Jams</a></li>
          <li><a href="culture.html">Podcasts</a></li>
          <li><a href="culture.html">Documentaries</a></li>
        </ul>
      </div>
      <div>
        <div class="footer__heading">Contact</div>
        <ul class="footer__links">
          <li><a href="mailto:ciciafrica@outlook.com">ciciafrica@outlook.com</a></li>
          <li><a href="tel:+255796169961">+255 796 169 961</a></li>
          <li><a href="#">@ciciafrica_creatives</a></li>
          <li><span>Survey, Dar es Salaam</span></li>
        </ul>
      </div>
    </div>
    <div class="footer__bottom">
      <span>© 2026 Cici Africa Creatives Co. Ltd. All rights reserved.</span>
      <span>Made with ❤️ for African creatives</span>
    </div>
  </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>
