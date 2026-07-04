@extends('admin.layouts.app')@section('title','Experience')@section('content')
<div class="d-flex justify-content-between mb-3"><h2>Experience</h2><a href="{{ route('admin.experiences.create') }}" class="btn btn-accent"><i class="bi bi-plus"></i> New</a></div>
<div class="card p-3"><table class="table"><thead><tr><th>Role</th><th>Company</th><th>Period</th><th></th></tr></thead><tbody>
@foreach($items as $i)<tr><td>{{ $i->role }}</td><td>{{ $i->company }}</td><td class="text-muted">{{ $i->period }}</td>
<td class="text-end"><a class="btn btn-sm btn-outline-light" href="{{ route('admin.experiences.edit',$i) }}">Edit</a>
<form method="POST" action="{{ route('admin.experiences.destroy',$i) }}" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form></td></tr>@endforeach
</tbody></table>{{ $items->links() }}</div>@endsection
