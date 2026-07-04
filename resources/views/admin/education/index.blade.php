@extends('admin.layouts.app')@section('title','Education')@section('content')
<div class="d-flex justify-content-between mb-3"><h2>Education</h2><a href="{{ route('admin.education.create') }}" class="btn btn-accent"><i class="bi bi-plus"></i> New</a></div>
<div class="card p-3"><table class="table"><thead><tr><th>Degree</th><th>Institution</th><th>Period</th><th></th></tr></thead><tbody>
@foreach($items as $i)<tr><td>{{ $i->degree }}</td><td>{{ $i->institution }}</td><td>{{ $i->period }}</td>
<td class="text-end"><a class="btn btn-sm btn-outline-light" href="{{ route('admin.education.edit',$i) }}">Edit</a>
<form method="POST" action="{{ route('admin.education.destroy',$i) }}" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form></td></tr>@endforeach
</tbody></table>{{ $items->links() }}</div>@endsection
