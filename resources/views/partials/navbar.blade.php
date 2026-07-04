<nav class="navbar navbar-expand-lg navbar-dark-glass sticky-top py-3">
  <div class="container">
    <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">Laiba<span style="color:var(--accent)">.</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav mx-auto gap-lg-2">
        @foreach(['services'=>'Services','projects'=>'Projects','experience'=>'Experience','skills'=>'Skills','education'=>'Education','certifications'=>'Certifications','contact'=>'Contact'] as $k=>$v)
          <li class="nav-item"><a class="nav-link" href="#{{ $k }}">{{ $v }}</a></li>
        @endforeach
      </ul>
      <div class="d-flex gap-2 align-items-center">
        <a href="{{ \App\Models\Setting::get('github_url','#') }}" target="_blank" class="btn btn-ghost btn-sm"><i class="bi bi-github"></i></a>
        <a href="{{ \App\Models\Setting::get('linkedin_url','#') }}" target="_blank" class="btn btn-ghost btn-sm"><i class="bi bi-linkedin"></i></a>
        <a href="#contact" class="btn btn-accent btn-sm px-3">Let's Talk <i class="bi bi-arrow-up-right"></i></a>
      </div>
    </div>
  </div>
</nav>
