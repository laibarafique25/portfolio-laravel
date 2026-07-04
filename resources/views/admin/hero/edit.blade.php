@extends('admin.layouts.app')@section('title','Hero')@section('content')
<h2 class="mb-3">Hero Section</h2>
<form method="POST" action="{{ route('admin.hero.update') }}">@csrf
<div class="card p-4"><div class="row g-3">
<div class="col-md-6"><label class="form-label">Greeting</label><input name="hero_greeting" class="form-control" value="{{ old('hero_greeting',$greeting) }}" required></div>
<div class="col-md-6"><label class="form-label">Role</label><input name="hero_role" class="form-control" value="{{ old('hero_role',$role) }}" required></div>
<div class="col-12"><label class="form-label">Intro</label><textarea name="hero_intro" rows="4" class="form-control" required>{{ old('hero_intro',$intro) }}</textarea></div>
</div><div class="mt-4"><button class="btn btn-accent">Save</button></div></div></form>@endsection
