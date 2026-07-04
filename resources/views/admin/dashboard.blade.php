@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')
<h2 class="mb-4">Dashboard</h2>
<div class="row g-3">
  @foreach($stats as $label=>$n)
    <div class="col-md-3"><div class="card p-3"><div class="text-muted small">{{ $label }}</div><div class="h3 mb-0">{{ $n }}</div></div></div>
  @endforeach
</div>
<div class="card mt-4 p-3">
  <h5>Recent Messages</h5>
  @forelse($recent as $m)
    <div class="border-bottom py-2"><div class="d-flex justify-content-between"><strong>{{ $m->name }}</strong><small class="text-muted">{{ $m->created_at->diffForHumans() }}</small></div><div class="text-muted small">{{ Str::limit($m->body,120) }}</div></div>
  @empty <div class="text-muted">No messages yet.</div> @endforelse
</div>
@endsection
