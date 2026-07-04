@extends('admin.layouts.app')@section('title','Education')@section('content')
<h2 class="mb-3">{{ $item->exists?'Edit':'New' }} Education</h2>
<form method="POST" action="{{ $item->exists?route('admin.education.update',$item):route('admin.education.store') }}">@csrf @if($item->exists)@method('PUT')@endif
<div class="card p-4"><div class="row g-3">
<div class="col-md-6"><label class="form-label">Degree</label><input name="degree" class="form-control" value="{{ old('degree',$item->degree) }}" required></div>
<div class="col-md-6"><label class="form-label">Institution</label><input name="institution" class="form-control" value="{{ old('institution',$item->institution) }}" required></div>
<div class="col-md-6"><label class="form-label">Institution Website</label><input name="institution_website" class="form-control" value="{{ old('institution_website',$item->institution_website) }}"></div>
<div class="col-md-4"><label class="form-label">Start Date</label><input type="date" name="start_date" class="form-control" value="{{ old('start_date', optional($item->start_date)->format('Y-m-d')) }}"></div>
<div class="col-md-4"><label class="form-label">End Date</label><input type="date" name="end_date" class="form-control" value="{{ old('end_date', optional($item->end_date)->format('Y-m-d')) }}" @if(old('in_progress',$item->in_progress)) disabled @endif></div>
<div class="col-md-4 d-flex align-items-center"><div class="form-check mt-3"><input class="form-check-input" type="checkbox" name="in_progress" value="1" @checked(old('in_progress',$item->in_progress))><label class="form-check-label">In Progress</label></div></div>
<div class="col-md-4"><label class="form-label">Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order',$item->sort_order) }}"></div>
<div class="col-12"><label class="form-label">Description</label><textarea name="description" rows="3" class="form-control">{{ old('description',$item->description) }}</textarea></div>
</div><div class="mt-4"><button class="btn btn-accent">Save</button></div></div></form>@endsection
