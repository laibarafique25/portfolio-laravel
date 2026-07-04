@extends('admin.layouts.app')@section('title','Certificates')@section('content')
<div class="d-flex justify-content-between mb-3"><h2>Certificates</h2><a href="{{ route('admin.certificates.create') }}" class="btn btn-accent"><i class="bi bi-plus"></i> New</a></div>
<div class="card p-3"><table class="table"><thead><tr><th>Title</th><th>Organization</th><th>Issue Date</th><th></th></tr></thead><tbody>
@foreach($items as $i)<tr><td>{{ $i->title }}</td><td>{{ $i->organization }}</td><td>{{ optional($i->issue_date)->format('M Y') }}</td>
<td class="text-end"><a class="btn btn-sm btn-outline-light" href="{{ route('admin.certificates.edit',$i) }}">Edit</a>
<form method="POST" action="{{ route('admin.certificates.destroy',$i) }}" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form></td></tr>@endforeach
</tbody></table>{{ $items->links() }}</div>@endsection
