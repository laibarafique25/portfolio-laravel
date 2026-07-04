<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>@yield('title','Laiba Rafique — Junior Full Stack Web Developer')</title>
<meta name="description" content="Portfolio of Laiba Rafique — Junior Full Stack Developer building responsive, scalable web apps with PHP, Laravel, MySQL, JavaScript & Bootstrap.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Inter+Tight:wght@600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<style>
:root{
  --bg:#0F172A; --card:#111827; --accent:#FF6B35; --text:#F8FAFC; --muted:#94A3B8;
  --hairline:rgba(255,255,255,.08);
}
html,body{background:var(--bg);color:var(--text);font-family:'Inter',sans-serif;-webkit-font-smoothing:antialiased;}
h1,h2,h3,h4{font-family:'Inter Tight',sans-serif;letter-spacing:-.02em;font-weight:700;}
.text-muted-2{color:var(--muted)!important;}
.bg-card{background:var(--card);}
.hairline{border:1px solid var(--hairline);}
.btn-accent{background:var(--accent);color:#0F172A;border:0;font-weight:600;}
.btn-accent:hover{filter:brightness(1.1);color:#0F172A;}
.btn-ghost{background:transparent;border:1px solid var(--hairline);color:var(--text);}
.btn-ghost:hover{background:rgba(255,255,255,.05);color:var(--text);}
.chip{display:inline-flex;align-items:center;gap:.4rem;padding:.35rem .7rem;border-radius:999px;font-size:.72rem;font-weight:500;color:var(--muted);background:rgba(255,255,255,.04);border:1px solid var(--hairline);}
.eyebrow{font-size:.72rem;letter-spacing:.18em;text-transform:uppercase;color:var(--accent);font-weight:600;}
.navbar-dark-glass{backdrop-filter:blur(16px);background:rgba(15,23,42,.7);border-bottom:1px solid var(--hairline);}
.nav-link{color:var(--muted)!important;font-size:.9rem;}
.nav-link:hover,.nav-link.active{color:var(--text)!important;}
.hero-grid{background-image:linear-gradient(rgba(255,255,255,.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.03) 1px,transparent 1px);background-size:44px 44px;-webkit-mask-image:radial-gradient(ellipse at center,#000 30%,transparent 75%);mask-image:radial-gradient(ellipse at center,#000 30%,transparent 75%);}
.profile-frame{padding:2px;border-radius:28px;background:linear-gradient(135deg,var(--accent),transparent 60%,rgba(255,255,255,.1));}
.profile-frame img{border-radius:26px;display:block;width:100%;height:auto;}
.profile-glow{position:absolute;inset:-16px;border-radius:32px;background:radial-gradient(closest-side,rgba(255,107,53,.35),transparent 70%);filter:blur(30px);z-index:-1;}
.card-panel{background:var(--card);border:1px solid var(--hairline);border-radius:20px;transition:.25s;}
.card-panel:hover{border-color:rgba(255,107,53,.4);transform:translateY(-2px);}
.timeline{position:relative;padding-left:2rem;}
.timeline::before{content:"";position:absolute;left:.5rem;top:.5rem;bottom:.5rem;width:1px;background:var(--hairline);}
.timeline-dot{position:absolute;left:0;width:1rem;height:1rem;border-radius:50%;background:var(--accent);box-shadow:0 0 0 4px rgba(255,107,53,.2);}
.skill-bar{height:6px;background:rgba(255,255,255,.06);border-radius:999px;overflow:hidden;}
.skill-bar>span{display:block;height:100%;background:linear-gradient(90deg,var(--accent),#ff8f6b);}
.cert-thumb{aspect-ratio:16/10;background:#fff;border-radius:14px 14px 0 0;overflow:hidden;}
.cert-thumb img{width:100%;height:100%;object-fit:cover;}
.cert-placeholder{width:100%;height:100%;display:grid;place-items:center;color:var(--muted);background:linear-gradient(135deg,#fff,#e2e8f0);}
footer{border-top:1px solid var(--hairline);}
.form-control,.form-select{background:rgba(255,255,255,.04);border:1px solid var(--hairline);color:var(--text);}
.form-control:focus,.form-select:focus{background:rgba(255,255,255,.06);border-color:var(--accent);color:var(--text);box-shadow:0 0 0 .2rem rgba(255,107,53,.15);}
section{scroll-margin-top:80px;}
</style>
@stack('head')
</head>
<body>
@include('partials.navbar')

@yield('content')

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({duration:700,once:true,offset:60});</script>
@stack('scripts')
</body>
</html>
