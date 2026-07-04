<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>@yield('title','Admin') · Laiba</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<style>
:root{--bg:#0F172A;--card:#111827;--accent:#FF6B35;--muted:#94A3B8;--hairline:rgba(255,255,255,.08);}
body{background:var(--bg);color:#F8FAFC;font-family:'Inter',sans-serif;}
.sidebar{background:var(--card);min-height:100vh;border-right:1px solid var(--hairline);}
.sidebar a{color:var(--muted);text-decoration:none;padding:.6rem 1rem;border-radius:8px;display:flex;align-items:center;gap:.6rem;font-size:.9rem;}
.sidebar a:hover,.sidebar a.active{background:rgba(255,255,255,.05);color:#fff;}
.sidebar a.active{color:var(--accent);}
.card{background:var(--card);border:1px solid var(--hairline);}
.btn-accent{background:var(--accent);color:#0F172A;font-weight:600;border:0;}
.btn-accent:hover{filter:brightness(1.1);color:#0F172A;}
.form-control,.form-select{background:rgba(255,255,255,.04);border-color:var(--hairline);color:#fff;}
.form-control:focus,.form-select:focus{background:rgba(255,255,255,.06);border-color:var(--accent);color:#fff;box-shadow:none;}
.table{color:#F8FAFC;} .table>:not(caption)>*>*{border-color:var(--hairline);background:transparent;}
</style>
</head>
<body>
<div class="container-fluid"><div class="row">
  <aside class="col-md-2 sidebar p-3">
    <div class="fw-bold fs-5 mb-4">Laiba <span style="color:var(--accent)">Admin</span></div>
    @php $r = request()->route()?->getName(); @endphp
    <a href="{{ route('admin.dashboard') }}" class="{{ str_contains($r,'dashboard')?'active':'' }}"><i class="bi bi-speedometer2"></i>Dashboard</a>
    <a href="{{ route('admin.hero.edit') }}" class="{{ str_contains($r,'hero')?'active':'' }}"><i class="bi bi-window"></i>Hero</a>
    <a href="{{ route('admin.projects.index') }}" class="{{ str_contains($r,'projects')?'active':'' }}"><i class="bi bi-kanban"></i>Projects</a>
    <a href="{{ route('admin.experiences.index') }}" class="{{ str_contains($r,'experiences')?'active':'' }}"><i class="bi bi-briefcase"></i>Experience</a>
    <a href="{{ route('admin.skills.index') }}" class="{{ str_contains($r,'skills')?'active':'' }}"><i class="bi bi-stars"></i>Skills</a>
    <a href="{{ route('admin.certificates.index') }}" class="{{ str_contains($r,'certificates')?'active':'' }}"><i class="bi bi-award"></i>Certificates</a>
    <a href="{{ route('admin.education.index') }}" class="{{ str_contains($r,'education')?'active':'' }}"><i class="bi bi-mortarboard"></i>Education</a>
    <a href="{{ route('admin.messages.index') }}" class="{{ str_contains($r,'messages')?'active':'' }}"><i class="bi bi-envelope"></i>Messages</a>
    <a href="{{ route('admin.settings.edit') }}" class="{{ str_contains($r,'settings')?'active':'' }}"><i class="bi bi-gear"></i>Site Settings</a>
    <form action="{{ route('admin.logout') }}" method="POST" class="mt-4">@csrf
      <button class="btn btn-outline-danger btn-sm w-100"><i class="bi bi-box-arrow-right"></i> Logout</button>
    </form>
  </aside>
  <main class="col-md-10 p-4">
    @if(session('status')) <div class="alert alert-success">{{ session('status') }}</div> @endif
    @yield('content')
  </main>
</div></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.image-upload-widget').forEach(function(widget) {
    var input = widget.querySelector('.image-upload-input');
    var removeInput = widget.querySelector('.image-remove-input');
    var selectBtn = widget.querySelector('.btn-select-image');
    var removeBtn = widget.querySelector('.btn-remove-image');
    var clearBtn = widget.querySelector('.btn-clear-selection');
    var preview = widget.querySelector('.image-upload-preview');
    var originalUrl = widget.dataset.originalUrl || '';
    var originalExists = originalUrl !== '';
    var placeholder = '<div class="text-muted small image-placeholder">No image selected</div>';

    function renderPreview(url) {
      preview.innerHTML = '<img src="' + url + '" class="image-preview rounded" style="max-height:120px">';
    }

    function resetPreview() {
      if (originalExists && removeInput.value === '0') {
        renderPreview(originalUrl);
      } else {
        preview.innerHTML = placeholder;
      }
      clearBtn.classList.add('d-none');
    }

    selectBtn.addEventListener('click', function() {
      input.click();
    });

    input.addEventListener('change', function() {
      if (input.files && input.files[0]) {
        var fileUrl = URL.createObjectURL(input.files[0]);
        renderPreview(fileUrl);
        removeInput.value = '0';
        clearBtn.classList.remove('d-none');
      } else {
        resetPreview();
      }
    });

    clearBtn.addEventListener('click', function() {
      input.value = '';
      resetPreview();
    });

    removeBtn.addEventListener('click', function() {
      input.value = '';
      removeInput.value = '1';
      preview.innerHTML = placeholder;
      clearBtn.classList.add('d-none');
    });
  });
});
</script>
</body></html>
