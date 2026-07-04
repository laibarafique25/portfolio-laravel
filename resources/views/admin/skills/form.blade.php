@extends('admin.layouts.app')@section('title','Skill')@section('content')
<h2 class="mb-3">{{ $skill->exists?'Edit':'New' }} Skill</h2>
<form method="POST" action="{{ $skill->exists?route('admin.skills.update',$skill):route('admin.skills.store') }}">@csrf @if($skill->exists)@method('PUT')@endif
<div class="card p-4"><div class="row g-3">
<div class="col-md-6"><label class="form-label">Name</label><input name="name" class="form-control" value="{{ old('name',$skill->name) }}" required></div>
<div class="col-md-3"><label class="form-label">Category</label><select name="category" class="form-select">
  @foreach(['frontend','backend','tools'] as $c)<option value="{{ $c }}" @selected(old('category',$skill->category)===$c)>{{ ucfirst($c) }}</option>@endforeach
</select></div>
<div class="col-md-3"><label class="form-label">Level (0-100)</label><input type="number" min="0" max="100" name="level" class="form-control" value="{{ old('level',$skill->level ?? 80) }}"></div>
<div class="col-md-3"><label class="form-label">Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order',$skill->sort_order) }}"></div>
</div><div class="mt-4"><button class="btn btn-accent">Save</button></div></div></form>@endsection
