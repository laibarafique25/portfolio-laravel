@extends('admin.layouts.app')@section('title','Skills')@section('content')
<div class="d-flex justify-content-between mb-3"><h2>Skills</h2><a href="{{ route('admin.skills.create') }}" class="btn btn-accent"><i class="bi bi-plus"></i> New</a></div>
<div class="card p-3"><table class="table"><thead><tr><th>Name</th><th>Category</th><th>Level</th><th></th></tr></thead><tbody>
@foreach($skills as $s)<tr><td>{{ $s->name }}</td><td>{{ ucfirst($s->category) }}</td><td>{{ $s->level }}%</td>
<td class="text-end"><a class="btn btn-sm btn-outline-light" href="{{ route('admin.skills.edit',$s) }}">Edit</a>
<form method="POST" action="{{ route('admin.skills.destroy',$s) }}" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form></td></tr>@endforeach
</tbody></table>{{ $skills->links() }}</div>@endsection
