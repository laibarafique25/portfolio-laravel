@extends('layouts.app')
@section('content')

{{-- HERO --}}
<section id="top" class="position-relative overflow-hidden">
  <div class="hero-grid position-absolute top-0 start-0 w-100 h-100" style="opacity:.7"></div>
  <div class="container position-relative py-5 py-md-6">
    <div class="row align-items-center g-5">
      <div class="col-lg-7" data-aos="fade-up">
        <span class="chip mb-4"><span style="width:6px;height:6px;background:var(--accent);border-radius:50%"></span> Available for internships & junior roles</span>
        <div class="eyebrow mb-3">{{ $settings['role'] }}</div>
        <h1 class="display-3 fw-bold lh-1 mb-4">
          {{ $settings['greeting'] }}<br>
          <span class="text-muted-2 fw-medium">I craft web apps that ship.</span>
        </h1>
        <p class="lead text-muted-2 mb-4" style="max-width:560px">{{ $settings['intro'] }}</p>
        <div class="d-flex flex-wrap gap-2 mb-5">
          <a href="#projects" class="btn btn-accent px-4 py-2">View Projects <i class="bi bi-arrow-up-right"></i></a>
          <a href="#contact" class="btn btn-ghost px-4 py-2"><i class="bi bi-envelope me-2"></i>Contact Me</a>
          @if($settings['cv_file'])
            <a href="{{ asset('storage/'.$settings['cv_file']) }}" class="btn btn-ghost px-4 py-2" target="_blank"><i class="bi bi-download me-2"></i>Download CV</a>
          @endif
        </div>
        <div class="row g-3" style="max-width:560px">
          @foreach([[count($projects),'+','Projects Completed'],[$internship_count,'','Internships Done'],[1,'','Teaching Role']] as $stat)
            <div class="col-4">
              <div class="card-panel p-3">
                <div class="h3 fw-bold mb-1">{{ $stat[0].$stat[1] }}</div>
                <div class="text-muted-2 small">{{ $stat[2] }}</div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="mt-4 text-muted-2 small" style="font-family:monospace;letter-spacing:.1em">PHP · LARAVEL · MYSQL · JAVASCRIPT · BOOTSTRAP</div>
      </div>
      <div class="col-lg-5" data-aos="fade-left">
        <div class="position-relative mx-auto" style="max-width:420px">
          <div class="profile-glow"></div>
          <div class="profile-frame">
            @if($settings['profile_image'])
              <img src="{{ asset('storage/'.$settings['profile_image']) }}" alt="Laiba Rafique">
            @else
              <div style="aspect-ratio:4/5;background:#1e293b;display:grid;place-items:center;border-radius:26px;color:var(--muted)">
                <div class="text-center"><i class="bi bi-person-circle" style="font-size:4rem"></i><div class="mt-2 small">Upload profile in Admin → Settings</div></div>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- SERVICES --}}
<section id="services" class="py-6 py-md-7">
  <div class="container">
    <div class="mb-5" data-aos="fade-up">
      <div class="eyebrow mb-2">What I Do</div>
      <h2 class="display-5 fw-bold">Services</h2>
      <p class="text-muted-2">End-to-end web development, from database schema to pixel-perfect UI.</p>
    </div>
    <div class="row g-4">
      @foreach([
        ['bi-globe','Frontend Development','Responsive, accessible interfaces with HTML, CSS, Bootstrap 5 and JavaScript.',['HTML5','CSS3','Bootstrap','JS']],
        ['bi-hdd-stack','Backend Development','Robust server-side apps and REST APIs using PHP 8+ and the Laravel framework.',['PHP','Laravel','REST']],
        ['bi-database','Database Design','Normalized MySQL schemas, migrations and queries tuned for real workloads.',['MySQL','PDO','Eloquent']],
        ['bi-layers','Full Stack MVC Apps','End-to-end apps with auth, CRUD and admin dashboards.',['MVC','Auth','Admin']],
      ] as $i=>$s)
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ $i*80 }}">
          <div class="card-panel p-4 h-100">
            <div class="d-flex justify-content-between mb-4">
              <div class="d-inline-grid" style="width:44px;height:44px;place-items:center;background:rgba(255,107,53,.1);color:var(--accent);border-radius:10px"><i class="bi {{ $s[0] }} fs-5"></i></div>
              <span class="text-muted-2 small" style="font-family:monospace">0{{ $i+1 }}</span>
            </div>
            <h3 class="h4 mb-2">{{ $s[1] }}</h3>
            <p class="text-muted-2 small mb-3">{{ $s[2] }}</p>
            <div class="d-flex flex-wrap gap-1">@foreach($s[3] as $t)<span class="chip">{{ $t }}</span>@endforeach</div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- PROJECTS --}}
<section id="projects" class="py-6 py-md-7">
  <div class="container">
    <div class="mb-5" data-aos="fade-up">
      <div class="eyebrow mb-2">Selected Work</div>
      <h2 class="display-5 fw-bold">Featured Projects</h2>
      <p class="text-muted-2">A selection of full-stack apps and interfaces I've built.</p>
    </div>
    <div class="row g-4">
      @foreach($projects as $i=>$p)
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ $i*50 }}">
          <article class="card-panel p-4 h-100">
            <div class="d-flex justify-content-between align-items-start mb-4">
              <span class="text-muted-2 small" style="font-family:monospace">/ {{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</span>
              <div class="d-flex gap-2">
                @if($p->live_url)
                  <a href="{{ $p->live_url }}" target="_blank" rel="noopener" class="btn btn-ghost btn-sm" title="Live Demo">
                    <i class="bi bi-box-arrow-up-right"></i>
                  </a>
                @endif
                @if($p->github_url)
                  <a href="{{ $p->github_url }}" target="_blank" rel="noopener" class="btn btn-ghost btn-sm" title="GitHub">
                    <i class="bi bi-github"></i>
                  </a>
                @endif
              </div>
            </div>
            <h3 class="h4 mb-1">{{ $p->name }}</h3>
            <p class="text-muted-2 small mb-3">{{ $p->tagline }}</p>
            <div class="d-flex flex-wrap gap-1">@foreach(($p->stack ?? []) as $s)<span class="chip">{{ $s }}</span>@endforeach</div>
          </article>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- EXPERIENCE --}}
<section id="experience" class="py-6 py-md-7">
  <div class="container">
    <div class="mb-5" data-aos="fade-up">
      <div class="eyebrow mb-2">Career</div>
      <h2 class="display-5 fw-bold">Experience Timeline</h2>
    </div>
    <div class="timeline">
      @foreach($experiences as $e)
        <div class="mb-4 position-relative" data-aos="fade-up">
          <span class="timeline-dot" style="top:1.4rem;left:-2rem;transform:translateX(.5rem)"></span>
          <div class="card-panel p-4">
            <div class="d-flex flex-wrap justify-content-between gap-2">
              <h3 class="h5 mb-0"><i class="bi bi-briefcase text-warning me-2"></i>{{ $e->role }}</h3>
              <span class="chip"><i class="bi bi-calendar3"></i> {{ $e->period }}</span>
            </div>
            <div class="small mt-1" style="color:var(--accent)">{{ $e->company }}</div>
            @if($e->location)<div class="small text-muted-2"><i class="bi bi-geo-alt"></i> {{ $e->location }}</div>@endif
            <p class="small text-muted-2 mt-2 mb-0">{{ $e->description }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- SKILLS --}}
<section id="skills" class="py-6 py-md-7">
  <div class="container">
    <div class="mb-5" data-aos="fade-up">
      <div class="eyebrow mb-2">Toolbox</div>
      <h2 class="display-5 fw-bold">Skills & Stack</h2>
    </div>
    <div class="row g-4">
      @foreach(['frontend'=>['Frontend','bi-stars'],'backend'=>['Backend','bi-hdd-stack'],'tools'=>['Tools','bi-tools']] as $cat=>[$label,$icon])
        <div class="col-md-4" data-aos="fade-up">
          <div class="card-panel p-4 h-100">
            <div class="d-flex align-items-center gap-2 mb-3"><i class="bi {{ $icon }}" style="color:var(--accent)"></i><h3 class="h6 mb-0">{{ $label }}</h3></div>
            @foreach(($skills[$cat] ?? []) as $s)
              <div class="mb-3">
                <div class="d-flex justify-content-between small mb-1"><span>{{ $s->name }}</span><span class="text-muted-2">{{ $s->level }}%</span></div>
                <div class="skill-bar"><span style="width:{{ $s->level }}%"></span></div>
              </div>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- EDUCATION --}}
<section id="education" class="py-6 py-md-7">
  <div class="container">
    <div class="mb-5" data-aos="fade-up">
      <div class="eyebrow mb-2">Learning</div>
      <h2 class="display-5 fw-bold">Education</h2>
    </div>
    <div class="row g-4">
      @foreach($education as $e)
        <div class="col-md-6" data-aos="fade-up">
          <div class="card-panel p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="d-inline-grid" style="width:40px;height:40px;place-items:center;background:rgba(255,107,53,.1);color:var(--accent);border-radius:8px"><i class="bi bi-mortarboard fs-5"></i></div>
              <span class="chip">{{ $e->period }}</span>
            </div>
            <h3 class="h5 mb-1">{{ $e->degree }}</h3>
            @if($e->institution_website)
              <a href="{{ $e->institution_website }}" target="_blank" rel="noopener" class="d-inline-flex align-items-center gap-1 text-decoration-none mb-2" style="color:var(--accent);font-weight:600;">
                <span>{{ $e->institution }}</span>
                <i class="bi bi-box-arrow-up-right" style="font-size:.9rem"></i>
              </a>
            @else
              <div class="small mb-2" style="color:var(--accent)">{{ $e->institution }}</div>
            @endif
            <p class="small text-muted-2 mb-1">
              @if($e->start_date)
                {{ $e->start_date->format('M Y') }} – @if($e->in_progress) Present @elseif($e->end_date) {{ $e->end_date->format('M Y') }} @else Present @endif
              @endif
            </p>
            <p class="small text-muted-2 mb-0">{{ $e->description }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- CERTIFICATIONS --}}
<section id="certifications" class="py-6 py-md-7">
  <div class="container">
    <div class="mb-5" data-aos="fade-up">
      <div class="eyebrow mb-2">Credentials</div>
      <h2 class="display-5 fw-bold">Certifications</h2>
    </div>
    <div class="row g-4">
      @foreach($certificates as $i=>$c)
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ $i*80 }}">
          <div class="card-panel overflow-hidden h-100">
            <div class="cert-thumb">
              @if($c->certificate_image)
                <img src="{{ asset('storage/'.$c->certificate_image) }}" alt="{{ $c->title }}" data-bs-toggle="modal" data-bs-target="#certModal{{ $c->id }}" style="cursor:zoom-in">
              @else
                <div class="cert-placeholder"><i class="bi bi-award fs-1"></i></div>
              @endif
            </div>
            <div class="p-4">
              <div class="d-flex justify-content-between mb-2">
                <span class="chip"><i class="bi bi-award" style="color:var(--accent)"></i> {{ $c->organization }}</span>
                @if($c->issue_date)<span class="text-muted-2 small">{{ optional($c->issue_date)->format('M Y') }}</span>@endif
              </div>
              <h3 class="h5">{{ $c->title }}</h3>
              @if($c->description)<p class="small text-muted-2 mb-0">{{ $c->description }}</p>@endif
            </div>
          </div>
          @if($c->certificate_image)
          <div class="modal fade" id="certModal{{ $c->id }}" tabindex="-1">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content bg-transparent border-0">
                <button type="button" class="btn-close btn-close-white align-self-end mb-2" data-bs-dismiss="modal"></button>
                <img src="{{ asset('storage/'.$c->certificate_image) }}" class="w-100 rounded shadow-lg" alt="{{ $c->title }}">
              </div>
            </div>
          </div>
          @endif
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- CONTACT --}}
<section id="contact" class="py-6 py-md-7">
  <div class="container">
    <div class="mb-5" data-aos="fade-up">
      <div class="eyebrow mb-2">Get in Touch</div>
      <h2 class="display-5 fw-bold">Let's build something together</h2>
    </div>
    <div class="row g-4">
      <div class="col-lg-7" data-aos="fade-up">
        <div class="card-panel p-4 p-md-5">
          @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
          @endif
          <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="row g-3">
              <div class="col-md-6"><label class="form-label small text-muted-2">Name</label><input name="name" class="form-control" required></div>
              <div class="col-md-6"><label class="form-label small text-muted-2">Email</label><input type="email" name="email" class="form-control" required></div>
              <div class="col-12"><label class="form-label small text-muted-2">Subject</label><input name="subject" class="form-control"></div>
              <div class="col-12"><label class="form-label small text-muted-2">Message</label><textarea name="body" rows="5" class="form-control" required></textarea></div>
              <div class="col-12"><button class="btn btn-accent px-4">Send Message <i class="bi bi-send"></i></button></div>
            </div>
            @error('body') <div class="text-danger small mt-2">{{ $message }}</div> @enderror
          </form>
        </div>
      </div>
      <div class="col-lg-5" data-aos="fade-up">
        <div class="card-panel p-4 p-md-5 h-100 d-flex flex-column justify-content-between" style="background:linear-gradient(135deg,rgba(255,107,53,.15),rgba(255,107,53,0));border-color:rgba(255,107,53,.4)">
          <div>
            <div class="eyebrow mb-2">Currently</div>
            <h4 class="mb-3">Available for new opportunities</h4>
            <p class="text-muted-2 small">Junior full-stack roles, internships and freelance projects — let's talk.</p>
          </div>
          <div class="d-grid gap-2 mt-4">
            <a href="{{ $settings['linkedin_url'] }}" target="_blank" class="btn btn-accent"><i class="bi bi-linkedin me-2"></i>Connect on LinkedIn</a>
            <a href="{{ $settings['github_url'] }}" target="_blank" class="btn btn-ghost"><i class="bi bi-github me-2"></i>@laibarafique25</a>
            <a href="mailto:{{ $settings['email'] }}" class="btn btn-ghost"><i class="bi bi-envelope me-2"></i>{{ $settings['email'] }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
