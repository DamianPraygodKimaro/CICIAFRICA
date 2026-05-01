(function(){const e=document.querySelector(".navbar");if(!e)return;window.addEventListener("scroll",()=>{e.classList.toggle("scrolled",window.scrollY>30)},{passive:!0});const t=location.pathname.split("/").pop()||"index.html";document.querySelectorAll(".navbar__link").forEach(n=>{const r=n.getAttribute("href")||n.dataset.page||"";r&&t.includes(r.replace(".html",""))&&n.classList.add("active")})})();(function(){const e=document.querySelector(".navbar__hamburger"),t=document.querySelector(".mobile-menu");!e||!t||(e.addEventListener("click",()=>{const n=t.classList.toggle("open");e.setAttribute("aria-expanded",n),e.innerHTML=n?'<i class="fa-solid fa-xmark"></i>':'<i class="fa-solid fa-bars"></i>'}),document.addEventListener("click",n=>{!e.contains(n.target)&&!t.contains(n.target)&&(t.classList.remove("open"),e.setAttribute("aria-expanded",!1),e.innerHTML='<i class="fa-solid fa-bars"></i>')}))})();function m(o){const e=document.querySelector(o);if(!e)return;const t=e.querySelectorAll(".inner-tab"),n=e.querySelectorAll(".tab-panel");t.forEach(r=>{r.addEventListener("click",()=>{const i=r.dataset.tab;t.forEach(s=>s.classList.remove("active")),n.forEach(s=>s.classList.remove("active")),r.classList.add("active");const a=e.querySelector(`#${i}`);a&&a.classList.add("active")})})}document.addEventListener("DOMContentLoaded",()=>{m("#services-tabs-section"),m("#culture-tabs-section"),m("#talents-tabs-section")});(function(){const e=document.querySelectorAll(".fade-up, .fade-in, .slide-left, .slide-right");if(!e.length)return;const t=new IntersectionObserver(n=>{n.forEach(r=>{r.isIntersecting&&(r.target.classList.add("visible"),t.unobserve(r.target))})},{threshold:.12,rootMargin:"0px 0px -40px 0px"});e.forEach(n=>t.observe(n))})();function f(o,e,t=110,n=2200){const r=document.querySelector(o);if(!r)return;let i=0,a=0,s=!1;function l(){const d=e[i];r.textContent=s?d.slice(0,a--):d.slice(0,a++);let u=s?t/2:t;!s&&a>d.length?(u=n,s=!0):s&&a<0&&(s=!1,i=(i+1)%e.length,a=0,u=400),setTimeout(l,u)}l()}document.addEventListener("DOMContentLoaded",()=>{f("#hero-typewriter",["Creativity Meets Opportunity","Stories Come Alive","Talent Meets Industry","Africa Builds Its Future"])});function h(o,e,t=1800){const n=performance.now(),r=0;function i(a){const s=Math.min((a-n)/t,1),l=1-Math.pow(1-s,3);o.textContent=Math.floor(r+(e-r)*l)+(o.dataset.suffix||""),s<1&&requestAnimationFrame(i)}requestAnimationFrame(i)}(function(){const e=document.querySelectorAll("[data-count]");if(!e.length)return;const t=new IntersectionObserver(n=>{n.forEach(r=>{if(r.isIntersecting){const i=r.target,a=parseInt(i.dataset.count,10);h(i,a),t.unobserve(i)}})},{threshold:.5});e.forEach(n=>t.observe(n))})();(function(){const e=document.getElementById("booking-form");e&&e.addEventListener("submit",t=>{t.preventDefault(),c("✅ Project brief received! We'll be in touch within 24 hours.","success"),e.reset()})})();(function(){const e=document.getElementById("talent-booking-form");e&&e.addEventListener("submit",t=>{t.preventDefault(),c("✅ Talent request sent! We'll match you with the right talent within 48 hours.","success"),e.reset()})})();(function(){const e=document.getElementById("talent-signup-form");e&&e.addEventListener("submit",t=>{t.preventDefault(),c("🌟 Welcome to the Cici Africa talent network! We'll review your profile and reach out soon.","success"),e.reset()})})();(function(){document.querySelectorAll(".subscribe-form").forEach(e=>{e.addEventListener("submit",t=>{t.preventDefault();const n=e.querySelector(".subscribe-input");if(!n||!n.value.includes("@")){c("Please enter a valid email address.","error");return}c("✅ Subscribed! You'll receive updates on everything Cici Africa.","success"),n.value=""})})})();(function(){document.querySelectorAll("[data-rsvp]").forEach(e=>{e.addEventListener("click",()=>{const t=e.dataset.rsvp||"this event",n=prompt(`Enter your email to sign up for:
"${t}"`);n&&n.includes("@")&&c(`🎟️ You're registered for "${t}"! Confirmation details coming soon.`,"success")})})})();function c(o,e="success"){document.querySelectorAll(".toast").forEach(n=>n.remove());const t=document.createElement("div");if(t.className=`toast toast--${e}`,t.setAttribute("role","alert"),t.innerHTML=`<span>${o}</span>
    <button onclick="this.parentElement.remove()" aria-label="Close">&times;</button>`,!document.getElementById("toast-styles")){const n=document.createElement("style");n.id="toast-styles",n.textContent=`
      .toast {
        position: fixed; bottom: 2rem; right: 2rem;
        background: #1a0a00; color: #fff;
        padding: 1rem 1.25rem; border-radius: 12px;
        display: flex; align-items: center; gap: 1rem;
        font-size: 0.9rem; z-index: 9999;
        max-width: min(420px, calc(100vw - 4rem));
        box-shadow: 0 12px 40px rgba(0,0,0,0.3);
        animation: toastIn 0.35s cubic-bezier(0.34,1.56,0.64,1);
      }
      .toast--success { border-left: 4px solid #c2410f; }
      .toast--error   { border-left: 4px solid #ef4444; }
      .toast button {
        background: none; border: none; color: rgba(255,255,255,0.5);
        font-size: 1.2rem; cursor: pointer; padding: 0; line-height: 1;
        flex-shrink: 0;
      }
      .toast button:hover { color: #fff; }
      @keyframes toastIn {
        from { opacity: 0; transform: translateY(20px) scale(0.95); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
      }
      @media (max-width: 540px) {
        .toast { bottom: 1rem; right: 1rem; left: 1rem; max-width: none; }
      }
    `,document.head.appendChild(n)}document.body.appendChild(t),setTimeout(()=>t.style.opacity!=="0"&&t.remove(),5e3)}document.addEventListener("DOMContentLoaded",()=>{document.querySelectorAll('a[href^="#"]').forEach(o=>{o.addEventListener("click",e=>{const t=o.getAttribute("href").slice(1),n=document.getElementById(t);n&&(e.preventDefault(),n.scrollIntoView({behavior:"smooth",block:"start"}))})})});document.addEventListener("DOMContentLoaded",()=>{const o=window.location.pathname.split("/").pop()||"index.html";document.querySelectorAll(".navbar__link[href], .mobile-menu__link[href]").forEach(e=>{e.getAttribute("href")===o&&e.classList.add("active")})});document.addEventListener("DOMContentLoaded",()=>{document.querySelectorAll("img[data-fallback]").forEach(o=>{o.addEventListener("error",function(){const e=this.dataset.fallback;if(e){this.style.display="none";const t=document.createElement("div");t.className="img-fallback",t.innerHTML=e,t.style.cssText=`
          width:100%; height:100%;
          background: linear-gradient(135deg, var(--brown), var(--orange));
          display:flex; align-items:center; justify-content:center;
          font-size: 3.5rem; color: rgba(255,255,255,0.25);
          border-radius: inherit;
        `,this.parentElement.appendChild(t)}})})});window.showToast=c;
