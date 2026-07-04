@extends('admin.layouts.app')@section('title','Experience')@section('content')
<h2 class="mb-3">{{ $item->exists?'Edit':'New' }} Experience</h2>
<form method="POST" action="{{ $item->exists?route('admin.experiences.update',$item):route('admin.experiences.store') }}">@csrf @if($item->exists)@method('PUT')@endif
<div class="card p-4"><div class="row g-3">
<div class="col-md-6"><label class="form-label">Role</label><input name="role" class="form-control" value="{{ old('role',$item->role) }}" required></div>
<div class="col-md-6"><label class="form-label">Company</label><input name="company" class="form-control" value="{{ old('company',$item->company) }}" required></div>
<div class="col-md-4"><label class="form-label">Location</label><input name="location" class="form-control" value="{{ old('location',$item->location) }}"></div>
<div class="col-md-4"><label class="form-label">Period</label><input name="period" class="form-control" value="{{ old('period',$item->period) }}" required></div>
<div class="col-md-4"><label class="form-label">Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order',$item->sort_order) }}"></div>
<div class="col-12"><label class="form-label">Description</label><textarea name="description" rows="4" class="form-control">{{ old('description',$item->description) }}</textarea></div>
</div><div class="mt-4"><button class="btn btn-accent">Save</button></div></div></form>@endsection
