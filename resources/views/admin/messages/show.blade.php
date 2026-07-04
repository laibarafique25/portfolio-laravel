@extends('admin.layouts.app')@section('title','Message')@section('content')
<a href="{{ route('admin.messages.index') }}" class="btn btn-outline-light btn-sm mb-3"><i class="bi bi-arrow-left"></i> Back</a>
<div class="card p-4"><h4>{{ $item->subject ?: '(no subject)' }}</h4>
<div class="text-muted mb-3">From <strong>{{ $item->name }}</strong> &lt;{{ $item->email }}&gt; · {{ $item->created_at->format('M d, Y H:i') }}</div>
<p style="white-space:pre-line">{{ $item->body }}</p>
<a class="btn btn-accent mt-3" href="mailto:{{ $item->email }}"><i class="bi bi-reply"></i> Reply</a></div>@endsection
