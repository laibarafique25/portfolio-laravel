<footer class="py-4 mt-5">
  <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
    <div class="text-muted-2 small">© {{ date('Y') }} Laiba Rafique. Crafted with care.</div>
    <div class="d-flex gap-2">
      <a href="{{ \App\Models\Setting::get('github_url','#') }}" target="_blank" class="btn btn-ghost btn-sm"><i class="bi bi-github"></i></a>
      <a href="{{ \App\Models\Setting::get('linkedin_url','#') }}" target="_blank" class="btn btn-ghost btn-sm"><i class="bi bi-linkedin"></i></a>
      <a href="mailto:{{ \App\Models\Setting::get('email','#') }}" class="btn btn-ghost btn-sm"><i class="bi bi-envelope"></i></a>
    </div>
  </div>
</footer>
