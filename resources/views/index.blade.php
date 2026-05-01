<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cici Africa — Where African Creativity Meets Opportunity</title>
  <meta name="description" content="Cici Africa Creatives Co. Ltd — A creative agency and industry hub transforming art, media, and entertainment into sustainable careers across Africa." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&family=Bebas+Neue&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <style>
    /* ── HOME-SPECIFIC STYLES ── */
    .hero {
      background: var(--brown);
      color: var(--white);
      min-height: 92vh;
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      position: relative;
      overflow: hidden;
    }
    .hero::before {
      content: '';
      position: absolute; inset: 0;
      background: radial-gradient(ellipse at 70% 50%, rgba(194,65,15,0.35) 0%, transparent 60%);
      pointer-events: none;
    }
    .hero__pattern {
      position: absolute; inset: 0; opacity: 0.04;
      background-image: repeating-linear-gradient(45deg, var(--gold) 0, var(--gold) 1px, transparent 0, transparent 50%);
      background-size: 30px 30px;
      pointer-events: none;
    }
    .hero__content {
      position: relative; z-index: 2;
      padding: 5rem 3rem 5rem 6rem;
    }
    .hero__title {
      font-size: clamp(3rem, 5.5vw, 5.5rem);
      font-weight: 700; line-height: 1.05; margin-bottom: 1.25rem;
    }
    .hero__title .accent { color: var(--gold-light); font-style: italic; }
    .hero__cursor {
      display: inline-block; width: 3px; height: 0.85em;
      background: var(--gold-light); margin-left: 2px;
      animation: blink 1s step-end infinite;
      vertical-align: text-bottom;
    }
    @keyframes blink { 50% { opacity: 0; } }
    .hero__sub {
      font-size: 1.1rem; color: rgba(255,255,255,0.68);
      line-height: 1.8; max-width: 440px; margin-bottom: 2.5rem;
    }
    .hero__btns { display: flex; gap: 1rem; flex-wrap: wrap; }
    .hero__visual {
      position: relative; z-index: 2;
      padding: 4rem 4rem 4rem 2rem;
      display: flex; align-items: center; justify-content: center;
    }
    .hero__card-stack { position: relative; width: 360px; height: 400px; }
    .hero__card {
      position: absolute;
      background: rgba(255,255,255,0.07);
      border: 1px solid rgba(255,255,255,0.14);
      border-radius: 20px; padding: 1.5rem;
      backdrop-filter: blur(8px);
    }
    .hero__card--main {
      width: 290px; top: 20px; left: 30px;
      background: linear-gradient(135deg, rgba(194,65,15,0.4), rgba(61,26,2,0.6));
      border-color: rgba(194,65,15,0.4);
      animation: floatA 5s ease-in-out infinite;
    }
    .hero__card--stats {
      width: 200px; bottom: 10px; right: 0;
      animation: floatB 5s ease-in-out infinite;
    }
    @keyframes floatA {
      0%, 100% { transform: translateY(0); }
      50%       { transform: translateY(-10px); }
    }
    @keyframes floatB {
      0%, 100% { transform: translateY(0); }
      50%       { transform: translateY(-7px); }
    }
    .hero__stat-num {
      font-family: var(--font-display); font-size: 2.5rem;
      font-weight: 700; color: var(--gold-light); line-height: 1;
    }

    /* About grid */
    .about-grid {
      display: grid; grid-template-columns: 1fr 1fr;
      gap: 5rem; align-items: center;
    }

    /* Services preview */
    .services-section { background: var(--white); }

    /* Partners row */
    .partners-flex { display: flex; flex-wrap: wrap; gap: 0.75rem; }

    /* Opportunity points */
    .opp-grid {
      display: grid; grid-template-columns: repeat(2,1fr); gap: 1rem;
      margin-top: 2rem;
    }
    .opp-item {
      display: flex; align-items: flex-start; gap: 0.75rem;
      background: rgba(255,255,255,0.07); border-radius: var(--radius-md);
      border: 1px solid rgba(255,255,255,0.1); padding: 1.25rem;
    }
    .opp-item__icon { font-size: 1.5rem; flex-shrink: 0; }
    .opp-item__text { font-size: 0.9rem; color: rgba(255,255,255,0.75); line-height: 1.5; }

    @media (max-width: 1024px) {
      .hero { grid-template-columns: 1fr; min-height: auto; }
      .hero__visual { display: none; }
      .hero__content { padding: 5rem 2rem; }
      .about-grid { grid-template-columns: 1fr; gap: 3rem; }
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
        <path d="M38 8 L48 18 L58 30 L62 48 L52 64 L38 70 L26 60 L22 42 L28 24 Z" fill="#b07d2e" opacity="0.25"/>
        <path d="M40 10 L50 20 L60 32 L64 50 L54 66 L40 72 L28 62 L24 44 L30 26 Z" stroke="#b07d2e" stroke-width="3" fill="none"/>
        <path d="M40 72 L36 78 L34 80 M40 72 L44 78 L46 80" stroke="#b07d2e" stroke-width="2.5" stroke-linecap="round"/>
        <circle cx="40" cy="34" r="5" fill="#c2410f"/>
      </svg>
      <div class="navbar__logo-text">
        <span class="cici">Cici</span>
        <span class="africa">Africa</span>
      </div>
    </a>
    <div class="navbar__links">
      <a href="index.html" class="navbar__link active"><i class="fa-solid fa-house"></i> Home</a>
      <a href="services.html" class="navbar__link"><i class="fa-solid fa-video"></i> Services</a>
      <a href="culture.html" class="navbar__link"><i class="fa-solid fa-fire"></i> Culture Feed</a>
      <a href="talents.html" class="navbar__link"><i class="fa-solid fa-star"></i> Talents</a>
      <a href="events.html" class="navbar__link"><i class="fa-solid fa-calendar-days"></i> Events</a>
    </div>
    <a href="services.html#booking" class="navbar__cta">Let's Create →</a>
    <button class="navbar__hamburger" aria-label="Toggle menu" aria-expanded="false">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>
  <div class="mobile-menu" id="mobile-menu">
    <a href="index.html" class="mobile-menu__link">🏠 Home</a>
    <a href="services.html" class="mobile-menu__link">🎥 Services</a>
    <a href="culture.html" class="mobile-menu__link">🔥 Culture Feed</a>
    <a href="talents.html" class="mobile-menu__link">⭐ Talents</a>
    <a href="events.html" class="mobile-menu__link" style="border-bottom:none">📅 Events</a>
    <a href="services.html#booking" class="btn btn--primary btn--block" style="margin-top:1rem">Let's Create →</a>
  </div>
</nav>

<!-- ═══════ HERO ═══════ -->
<section class="hero" aria-label="Hero">
  <div class="hero__pattern" aria-hidden="true"></div>
  <div class="hero__content">
    <div class="hero-badge fade-in">
      <span class="pulse-dot" aria-hidden="true"></span>
      Dar es Salaam, Tanzania
    </div>
    <h1 class="hero__title fade-up">
      Where <span class="accent"><span id="hero-typewriter">African Creativity</span><span class="hero__cursor" aria-hidden="true"></span></span>
    </h1>
    <p class="hero__sub fade-up delay-1">A creative agency &amp; industry hub transforming art, media, and entertainment into sustainable careers across Africa.</p>
    <div class="hero__btns fade-up delay-2">
      <a href="services.html" class="btn btn--primary">
        <i class="fa-solid fa-play"></i> Our Services
      </a>
      <a href="culture.html" class="btn btn--outline">
        <i class="fa-solid fa-fire"></i> Culture Feed
      </a>
    </div>
  </div>
  <div class="hero__visual" aria-hidden="true">
    <div class="hero__card-stack">
      <div class="hero__card hero__card--main">
        <div style="font-size:0.68rem;text-transform:uppercase;letter-spacing:0.14em;color:rgba(255,255,255,0.45);margin-bottom:0.5rem">Creative Agency</div>
        <div style="font-family:var(--font-display);font-size:1.5rem;font-weight:700;line-height:1.2;margin-bottom:1rem;color:var(--white)">Turning Potential<br>Into Impact</div>
        <div style="display:flex;gap:0.5rem;flex-wrap:wrap">
          <span style="background:rgba(255,255,255,0.14);padding:0.28rem 0.7rem;border-radius:99px;font-size:0.72rem;color:rgba(255,255,255,0.8)">📸 Photography</span>
          <span style="background:rgba(255,255,255,0.14);padding:0.28rem 0.7rem;border-radius:99px;font-size:0.72rem;color:rgba(255,255,255,0.8)">🎬 Film</span>
          <span style="background:rgba(255,255,255,0.14);padding:0.28rem 0.7rem;border-radius:99px;font-size:0.72rem;color:rgba(255,255,255,0.8)">📱 Digital</span>
        </div>
      </div>
      <div class="hero__card hero__card--stats">
        <div class="hero__stat-num" data-count="3" data-suffix="+">3+</div>
        <div style="font-size:0.78rem;color:rgba(255,255,255,0.55);margin-top:0.25rem">Years building Africa's creative economy</div>
        <div style="margin-top:1rem;padding-top:0.75rem;border-top:1px solid rgba(255,255,255,0.1);font-size:0.7rem;color:rgba(255,255,255,0.4)">📍 Survey, Dar es Salaam</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ ABOUT ═══════ -->
<section class="section bg-white" id="about">
  <div class="container">
    <div class="about-grid">
      <div class="about-frame slide-left">
        <div class="about-frame__img" style="display:flex;align-items:flex-end;padding:2rem;font-size:6rem;color:rgba(255,255,255,0.15)">
          🎬
          <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(61,26,2,0.75) 0%,transparent 55%);border-radius:var(--radius-xl);display:flex;align-items:flex-end;padding:2rem">
            <div style="color:white">
              <div style="font-family:var(--font-label);font-size:0.72rem;letter-spacing:0.18em;opacity:0.6">EST. 2022</div>
              <div style="font-family:var(--font-display);font-size:1.7rem;font-weight:700">Cici Africa Creatives Co. Ltd</div>
            </div>
          </div>
        </div>
        <div class="about-frame__deco" aria-hidden="true"></div>
        <div class="about-frame__tag">Creative Agency & Hub</div>
      </div>
      <div class="slide-right">
        <span class="section-label">About Us</span>
        <h2 class="section-title">We Build More Than <span>Content</span></h2>
        <p style="color:var(--text-muted);line-height:1.85;margin-bottom:1.25rem">Cici Africa Creatives is where African creativity meets opportunity. We're a creative agency and industry hub on a mission to turn art, media, and entertainment into serious, sustainable careers.</p>
        <p style="color:var(--text-muted);line-height:1.85;margin-bottom:2rem">We produce high-quality content and advertising — but more than that, we connect talent with the resources, networks, and platforms they need to thrive. From short social media videos to full-scale ads and documentaries, every story and every creative voice gets a stage.</p>
        <div class="vision-mission-grid">
          <div class="vm-card">
            <div class="vm-card__label" style="color:var(--orange)">Vision</div>
            <p class="vm-card__text">Transform Tanzania's &amp; Africa's art and entertainment industry into a respected, structured, and economically powerful sector.</p>
          </div>
          <div class="vm-card">
            <div class="vm-card__label" style="color:var(--gold)">Mission</div>
            <p class="vm-card__text">Connect creative talent to resources, networks, and opportunities while producing high-quality content and advertising.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ TEAM ═══════ -->
<section class="section" id="team">
  <div class="container">
    <div class="text-center mb-xl fade-up">
      <span class="section-label">The People Behind the Vision</span>
      <h2 class="section-title">Meet Our <span>Team</span></h2>
    </div>
    <div class="team-grid">
      <div class="team-card fade-up delay-1">
        <div class="team-card__img-wrap">
          <img src="assets/images/antoinette.jpg" alt="Antoinette Kyababa" data-fallback="👤" loading="lazy">
        </div>
        <div class="team-card__name">Antoinette Kyababa</div>
        <div class="team-card__role">CEO &amp; Founder</div>
        <p class="team-card__desc">Leads vision, creative strategy, and overall direction of Cici Africa.</p>
      </div>
      <div class="team-card fade-up delay-2">
        <div class="team-card__img-wrap">
          <img src="assets/images/isack.jpg" alt="Isack Michuzi" data-fallback="👤" loading="lazy">
        </div>
        <div class="team-card__name">Isack Michuzi</div>
        <div class="team-card__role">CTO &amp; Co-Founder</div>
        <p class="team-card__desc">Oversees technology, digital platforms, and innovation.</p>
      </div>
      <div class="team-card fade-up delay-3">
        <div class="team-card__img-wrap">
          <img src="assets/images/allen.jpg" alt="Allen Achireka" data-fallback="👤" loading="lazy">
        </div>
        <div class="team-card__name">Allen Achireka</div>
        <div class="team-card__role">Chief of Finance &amp; Strategy</div>
        <p class="team-card__desc">Manages finance, investments, and strategic growth.</p>
      </div>
      <div class="team-card fade-up delay-4">
        <div class="team-card__img-wrap">
          <img src="assets/images/lisa.jpg" alt="Lisa Francis" data-fallback="👤" loading="lazy">
        </div>
        <div class="team-card__name">Lisa Francis</div>
        <div class="team-card__role">Operations Manager</div>
        <p class="team-card__desc">Coordinates production, campaigns, and day-to-day operations.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ VALUES ═══════ -->
<section class="section bg-white" id="values">
  <div class="container">
    <span class="section-label fade-up">What We Stand For</span>
    <h2 class="section-title fade-up delay-1">Our <span>Values</span></h2>
    <p class="section-desc mb-xl fade-up delay-2">Six principles that shape every decision, every project, and every partnership at Cici Africa.</p>
    <div class="values-grid">
      <div class="value-card fade-up delay-1">
        <div class="value-card__icon"><i class="fa-solid fa-lightbulb" aria-hidden="true"></i></div>
        <div class="value-card__title">Creativity with Purpose</div>
        <p class="value-card__desc">Impact over noise. We create work that matters and delivers real results.</p>
      </div>
      <div class="value-card fade-up delay-2">
        <div class="value-card__icon"><i class="fa-solid fa-globe" aria-hidden="true"></i></div>
        <div class="value-card__title">Culture First</div>
        <p class="value-card__desc">Rooted in African stories, executed at global standards. We don't imitate — we innovate.</p>
      </div>
      <div class="value-card fade-up delay-3">
        <div class="value-card__icon"><i class="fa-solid fa-shield-check" aria-hidden="true"></i></div>
        <div class="value-card__title">Integrity &amp; Authenticity</div>
        <p class="value-card__desc">Principled, honest decisions and work that stays true to our vision. Substance over noise.</p>
      </div>
      <div class="value-card fade-up delay-4">
        <div class="value-card__icon"><i class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i></div>
        <div class="value-card__title">Growth Mindset</div>
        <p class="value-card__desc">We stay curious, adaptable, and committed to constant improvement. Complacency kills creativity.</p>
      </div>
      <div class="value-card fade-up delay-5">
        <div class="value-card__icon"><i class="fa-solid fa-users" aria-hidden="true"></i></div>
        <div class="value-card__title">Diversity &amp; Community</div>
        <p class="value-card__desc">Great ideas come from different voices. We value talent, effort, and collective growth.</p>
      </div>
      <div class="value-card fade-up delay-6">
        <div class="value-card__icon"><i class="fa-solid fa-scale-balanced" aria-hidden="true"></i></div>
        <div class="value-card__title">Independent &amp; Non-Partisan</div>
        <p class="value-card__desc">Not affiliated with any political entity. Our focus is creativity, business, and cultural growth.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ WHY US ═══════ -->
<section class="why-strip" id="why-us">
  <div class="container">
    <div class="text-center mb-xl">
      <span class="section-label section-label--light fade-up">Why Choose Us</span>
      <h2 class="section-title section-title--light fade-up delay-1">Why <span class="gold">Cici Africa</span></h2>
    </div>
    <div class="why-grid">
      <div class="why-card fade-up delay-1">
        <span class="why-card__icon" aria-hidden="true">🎯</span>
        <div class="why-card__title">Deep Understanding of Gen Z &amp; Digital Culture</div>
      </div>
      <div class="why-card fade-up delay-2">
        <span class="why-card__icon" aria-hidden="true">🏗️</span>
        <div class="why-card__title">Industry-Building Mindset</div>
      </div>
      <div class="why-card fade-up delay-3">
        <span class="why-card__icon" aria-hidden="true">⚖️</span>
        <div class="why-card__title">Strategic + Creative Balance</div>
      </div>
      <div class="why-card fade-up delay-4">
        <span class="why-card__icon" aria-hidden="true">⚡</span>
        <div class="why-card__title">Fast, Adaptive Production</div>
      </div>
      <div class="why-card fade-up delay-5">
        <span class="why-card__icon" aria-hidden="true">🌍</span>
        <div class="why-card__title">Access to Diverse Emerging African Talent</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ SERVICES PREVIEW ═══════ -->
<section class="section services-section" id="services-preview">
  <div class="container">
    <span class="section-label fade-up">What We Do</span>
    <h2 class="section-title fade-up delay-1">Our <span>Services</span></h2>
    <p class="section-desc mb-xl fade-up delay-2">From concept to distribution — we build complete creative systems for brands, individuals, and ideas.</p>
    <div class="service-preview-grid">
      <a href="services.html" class="service-preview-card fade-up delay-1">
        <div class="service-preview-card__num">01</div>
        <div class="service-preview-card__title">Content &amp; Video Production</div>
        <p class="service-preview-card__desc">Commercial photography, social media content, brand films, documentaries, and visual storytelling projects.</p>
        <div class="service-preview-card__more">Learn more →</div>
      </a>
      <a href="services.html" class="service-preview-card fade-up delay-2">
        <div class="service-preview-card__num">02</div>
        <div class="service-preview-card__title">Advertising &amp; Campaign Strategy</div>
        <p class="service-preview-card__desc">Campaign concepts, digital strategy, social media management, brand positioning, and influencer casting.</p>
        <div class="service-preview-card__more">Learn more →</div>
      </a>
      <a href="services.html" class="service-preview-card fade-up delay-3">
        <div class="service-preview-card__num">03</div>
        <div class="service-preview-card__title">Creative Networking &amp; Development</div>
        <p class="service-preview-card__desc">Talent scouting, connecting creatives with brands, collaborative projects, and industry partnerships.</p>
        <div class="service-preview-card__more">Learn more →</div>
      </a>
    </div>
    <div class="text-center mt-xl fade-up">
      <a href="services.html" class="btn btn--primary btn--lg">View All Services &amp; Book →</a>
    </div>
  </div>
</section>

<!-- ═══════ PARTNERS & CLIENTS ═══════ -->
<section class="section" id="partners">
  <div class="container">
    <span class="section-label fade-up">Our Network</span>
    <h2 class="section-title fade-up delay-1">Partners &amp; <span>Collaborators</span></h2>
    <p class="section-desc mb-xl fade-up delay-2">Organizations that help us empower creatives and grow Africa's creative industry.</p>
    <div class="partners-flex mb-xl fade-up delay-1">
      <span class="partner-chip">🏢 Hm Rentals — Production spaces &amp; equipment</span>
      <span class="partner-chip">💃 MATO Modelling Agency — Talent for campaigns</span>
      <span class="partner-chip">🌟 Mwanga wa Kesho — Youth upliftment NGO</span>
      <span class="partner-chip">❤️ Good Hope Foundation — Community development</span>
      <span class="partner-chip">🎨 Chakula Gang — Creative community</span>
    </div>
    <span class="section-label fade-up">Clients</span>
    <div style="display:flex;flex-wrap:wrap;gap:1.25rem;margin-top:1rem">
      <div class="client-card fade-up delay-1">
        <div class="client-card__icon">🚚</div>
        <div class="client-card__name">Geamos</div>
        <p class="client-card__desc">Multi-industry company — courier, auto parts &amp; IT solutions.</p>
      </div>
      <div class="client-card fade-up delay-2">
        <div class="client-card__icon">🌸</div>
        <div class="client-card__name">Deco by Star</div>
        <p class="client-card__desc">Event decoration &amp; design services.</p>
      </div>
      <div class="client-card fade-up delay-3">
        <div class="client-card__icon">🌍</div>
        <div class="client-card__name">Siyanto Tours</div>
        <p class="client-card__desc">Tourism &amp; travel guides across Tanzania.</p>
      </div>
      <div class="client-card fade-up delay-4">
        <div class="client-card__icon">🍽️</div>
        <div class="client-card__name">Shawarma</div>
        <p class="client-card__desc">Restaurant &amp; catering business.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ CONTACT CTA ═══════ -->
<section class="contact-cta" id="contact">
  <div class="container contact-cta__inner">
    <span class="section-label section-label--light fade-up">Get In Touch</span>
    <h2 class="section-title section-title--light fade-up delay-1" style="max-width:560px;margin:0 auto 0.75rem">Ready to <span class="gold">Create</span> Something?</h2>
    <p class="section-desc section-desc--light fade-up delay-2" style="margin:0 auto">We're always open to new collaborations and creative partnerships. Reach out to connect with us.</p>
    <div class="contact-cta__row fade-up delay-3">
      <a href="mailto:ciciafrica@outlook.com" class="contact-item"><i class="fa-solid fa-envelope" aria-hidden="true"></i> ciciafrica@outlook.com</a>
      <a href="tel:+255796169961" class="contact-item"><i class="fa-solid fa-phone" aria-hidden="true"></i> +255 796 169 961</a>
      <div class="contact-item"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Survey, Dar es Salaam, Tanzania</div>
    </div>
    <div class="social-row fade-up delay-4" style="justify-content:center;margin:1.5rem 0 2rem">
      <a href="https://www.instagram.com/ciciafrica_creatives" target="_blank" rel="noopener" class="social-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://www.tiktok.com/@ciciafrica_creatives" target="_blank" rel="noopener" class="social-btn" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
      <a href="https://www.youtube.com/@ciciafrica_creatives" target="_blank" rel="noopener" class="social-btn" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
      <a href="https://www.linkedin.com/company/ciciafrica" target="_blank" rel="noopener" class="social-btn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
      <a href="https://www.facebook.com/ciciafrica_creatives" target="_blank" rel="noopener" class="social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
    </div>
    <a href="services.html#booking" class="btn btn--gold btn--lg fade-up delay-5">Book a Project →</a>
  </div>
</section>

<!-- ═══════ FOOTER ═══════ -->
<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="footer__grid">
      <div>
        <div class="footer__logo">
          <span class="cici">Cici</span>
          <span class="africa">Africa</span>
        </div>
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
        <div class="footer__heading">Services</div>
        <ul class="footer__links">
          <li><a href="services.html">Content &amp; Video</a></li>
          <li><a href="services.html">Advertising</a></li>
          <li><a href="services.html">Creative Networking</a></li>
          <li><a href="services.html#booking">Book a Project</a></li>
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
