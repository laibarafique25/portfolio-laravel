@extends('admin.layouts.app')@section('title','Settings')@section('content')
<h2 class="mb-3">Site Settings</h2>
<form method="POST" enctype="multipart/form-data" action="{{ route('admin.settings.update') }}">@csrf
<div class="card p-4"><div class="row g-3">
<div class="col-md-6"><label class="form-label">Site Name</label><input name="site_name" class="form-control" value="{{ old('site_name',$values['site_name']) }}" required></div>
<div class="col-md-6"><label class="form-label">Email</label><input type="email" name="email" class="form-control" value="{{ old('email',$values['email']) }}" required></div>
<div class="col-md-6"><label class="form-label">GitHub URL</label><input name="github_url" class="form-control" value="{{ old('github_url',$values['github_url']) }}"></div>
<div class="col-md-6"><label class="form-label">LinkedIn URL</label><input name="linkedin_url" class="form-control" value="{{ old('linkedin_url',$values['linkedin_url']) }}"></div>
<div class="col-md-6"><label class="form-label">CV File (PDF)</label><input type="file" name="cv_file" accept="application/pdf" class="form-control">@if($values['cv_file'])<div class="small mt-2"><a href="{{ asset('storage/'.$values['cv_file']) }}" target="_blank">Current CV</a></div>@endif</div>
<div class="col-md-6"><label class="form-label">Profile Image (Hero)</label>
  <div class="image-upload-widget" data-original-url="{{ $values['profile_image'] ? asset('storage/'.$values['profile_image']) : '' }}">
    <div class="d-flex flex-wrap gap-2 align-items-center mb-2">
      <button type="button" class="btn btn-outline-light btn-sm btn-select-image">Replace Image</button>
      <button type="button" class="btn btn-outline-danger btn-sm btn-remove-image">Remove Image</button>
      <button type="button" class="btn btn-outline-secondary btn-sm btn-clear-selection d-none">Clear Selection</button>
    </div>
    <input type="file" name="profile_image" accept="image/*" class="form-control d-none image-upload-input">
    <input type="hidden" name="remove_profile_image" value="0" class="image-remove-input">
    <div class="mt-2 image-upload-preview">
      @if($values['profile_image'])
        <img src="{{ asset('storage/'.$values['profile_image']) }}" class="image-preview rounded" style="max-height:120px">
      @else
        <div class="text-muted small image-placeholder">No image selected</div>
      @endif
    </div>
  </div>
</div>
</div><div class="mt-4"><button class="btn btn-accent">Save</button></div></div></form>@endsection
