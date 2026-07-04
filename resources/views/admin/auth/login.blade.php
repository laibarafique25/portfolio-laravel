<!DOCTYPE html><html lang="en" data-bs-theme="dark"><head><meta charset="UTF-8"><title>Admin Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>body{background:#0F172A;color:#fff;font-family:sans-serif}.card{background:#111827;border:1px solid rgba(255,255,255,.08)}</style>
</head><body><div class="container" style="max-width:420px;margin-top:12vh">
<div class="text-center mb-4"><h1 class="h3">Laiba <span style="color:#FF6B35">Admin</span></h1></div>
<div class="card p-4"><form method="POST" action="{{ route('admin.login.attempt') }}">@csrf
  <div class="mb-3"><label class="form-label">Email</label><input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus></div>
  <div class="mb-3"><label class="form-label">Password</label><input type="password" name="password" class="form-control" required></div>
  @error('email')<div class="text-danger small mb-2">{{ $message }}</div>@enderror
  <button class="btn w-100 fw-bold" style="background:#FF6B35;color:#0F172A">Sign in</button>
</form></div></div></body></html>
