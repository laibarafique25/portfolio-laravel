@extends('admin.layouts.app')@section('title','Projects')@section('content')
<div class="d-flex justify-content-between mb-3"><h2>Projects</h2><a href="{{ route('admin.projects.create') }}" class="btn btn-accent"><i class="bi bi-plus"></i> New</a></div>
<form class="mb-3"><input name="q" value="{{ request('q') }}" class="form-control" placeholder="Search projects…"></form>
<div class="card p-3"><table class="table align-middle"><thead><tr><th>#</th><th>Name</th><th>Tagline</th><th>Featured</th><th></th></tr></thead><tbody>
@foreach($projects as $p)
  <tr><td>{{ $p->sort_order }}</td><td>{{ $p->name }}</td><td class="text-muted">{{ $p->tagline }}</td><td>{!! $p->featured?'<span class="badge bg-warning text-dark">Yes</span>':'' !!}</td>
  <td class="text-end"><a href="{{ route('admin.projects.edit',$p) }}" class="btn btn-sm btn-outline-light">Edit</a>
  <form method="POST" action="{{ route('admin.projects.destroy',$p) }}" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form></td></tr>
@endforeach
</tbody></table>{{ $projects->links() }}</div>@endsection
