@extends('admin.layouts.app')@section('title','Certificate')@section('content')
<h2 class="mb-3">{{ $item->exists?'Edit':'New' }} Certificate</h2>
<form method="POST" enctype="multipart/form-data" action="{{ $item->exists?route('admin.certificates.update',$item):route('admin.certificates.store') }}">@csrf @if($item->exists)@method('PUT')@endif
<div class="card p-4"><div class="row g-3">
<div class="col-md-6"><label class="form-label">Title</label><input name="title" class="form-control" value="{{ old('title',$item->title) }}" required></div>
<div class="col-md-6"><label class="form-label">Organization</label><input name="organization" class="form-control" value="{{ old('organization',$item->organization) }}" required></div>
<div class="col-12"><label class="form-label">Description</label><textarea name="description" rows="3" class="form-control">{{ old('description',$item->description) }}</textarea></div>
<div class="col-md-4"><label class="form-label">Issue Date</label><input type="date" name="issue_date" class="form-control" value="{{ old('issue_date', optional($item->issue_date)->format('Y-m-d')) }}"></div>
<div class="col-md-4"><label class="form-label">Credential Link</label><input name="credential_link" class="form-control" value="{{ old('credential_link',$item->credential_link) }}"></div>
<div class="col-md-2"><label class="form-label">Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order',$item->sort_order) }}"></div>
<div class="col-md-2 d-flex align-items-end"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" name="featured" value="1" @checked(old('featured',$item->featured))><label class="form-check-label">Featured</label></div></div>
<div class="col-md-6"><label class="form-label">Certificate Image</label>
  <div class="image-upload-widget" data-original-url="{{ $item->certificate_image ? asset('storage/'.$item->certificate_image) : '' }}">
    <div class="d-flex flex-wrap gap-2 align-items-center mb-2">
      <button type="button" class="btn btn-outline-light btn-sm btn-select-image">Replace Image</button>
      <button type="button" class="btn btn-outline-danger btn-sm btn-remove-image">Remove Image</button>
      <button type="button" class="btn btn-outline-secondary btn-sm btn-clear-selection d-none">Clear Selection</button>
    </div>
    <input type="file" name="certificate_image" accept="image/*" class="form-control d-none image-upload-input">
    <input type="hidden" name="remove_certificate_image" value="0" class="image-remove-input">
    <div class="mt-2 image-upload-preview">
      @if($item->certificate_image)
        <img src="{{ asset('storage/'.$item->certificate_image) }}" class="image-preview rounded" style="max-height:120px">
      @else
        <div class="text-muted small image-placeholder">No image selected</div>
      @endif
    </div>
  </div>
</div>
<div class="col-md-6"><label class="form-label">Credential PDF (optional)</label><input type="file" name="credential_file" accept="application/pdf" class="form-control">@if($item->credential_file)<div class="small mt-1"><a href="{{ asset('storage/'.$item->credential_file) }}" target="_blank">Current file</a></div>@endif</div>
</div><div class="mt-4"><button class="btn btn-accent">Save</button></div></div></form>@endsection
