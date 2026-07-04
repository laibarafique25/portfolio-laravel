@extends('admin.layouts.app')@section('title','Project')@section('content')
<h2 class="mb-3">{{ $project->exists?'Edit':'New' }} Project</h2>
<form method="POST" enctype="multipart/form-data" action="{{ $project->exists?route('admin.projects.update',$project):route('admin.projects.store') }}">
@csrf @if($project->exists) @method('PUT') @endif
<div class="card p-4"><div class="row g-3">
<div class="col-md-6"><label class="form-label">Name</label><input name="name" class="form-control" value="{{ old('name',$project->name) }}" required></div>
<div class="col-md-6"><label class="form-label">Tagline</label><input name="tagline" class="form-control" value="{{ old('tagline',$project->tagline) }}" required></div>
<div class="col-12"><label class="form-label">Description</label><textarea name="description" rows="4" class="form-control">{{ old('description',$project->description) }}</textarea></div>
<div class="col-md-6"><label class="form-label">Stack (comma-separated)</label><input name="stack" class="form-control" value="{{ old('stack', implode(', ', $project->stack ?? [])) }}"></div>
<div class="col-md-3"><label class="form-label">GitHub URL</label><input name="github_url" class="form-control" value="{{ old('github_url',$project->github_url) }}"></div>
<div class="col-md-3"><label class="form-label">Live URL</label><input name="live_url" class="form-control" value="{{ old('live_url',$project->live_url) }}"></div>
<div class="col-md-3"><label class="form-label">Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order',$project->sort_order) }}"></div>
<div class="col-md-3 d-flex align-items-end"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" name="featured" value="1" @checked(old('featured',$project->featured))><label class="form-check-label">Featured</label></div></div>
<div class="col-md-6"><label class="form-label">Image</label>
  <div class="image-upload-widget" data-original-url="{{ $project->image ? asset('storage/'.$project->image) : '' }}">
    <div class="d-flex flex-wrap gap-2 align-items-center mb-2">
      <button type="button" class="btn btn-outline-light btn-sm btn-select-image">Replace Image</button>
      <button type="button" class="btn btn-outline-danger btn-sm btn-remove-image">Remove Image</button>
      <button type="button" class="btn btn-outline-secondary btn-sm btn-clear-selection d-none">Clear Selection</button>
    </div>
    <input type="file" name="image" accept="image/*" class="form-control d-none image-upload-input">
    <input type="hidden" name="remove_image" value="0" class="image-remove-input">
    <div class="mt-2 image-upload-preview">
      @if($project->image)
        <img src="{{ asset('storage/'.$project->image) }}" class="image-preview rounded" style="max-height:100px">
      @else
        <div class="text-muted small image-placeholder">No image selected</div>
      @endif
    </div>
  </div>
</div>
</div><div class="mt-4"><button class="btn btn-accent">Save</button> <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-light">Cancel</a></div></div>
</form>@endsection
