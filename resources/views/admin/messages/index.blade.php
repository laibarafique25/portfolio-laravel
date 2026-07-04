@extends('admin.layouts.app')@section('title','Messages')@section('content')
<h2 class="mb-3">Contact Messages</h2>
<div class="card p-3"><table class="table"><thead><tr><th>Name</th><th>Email</th><th>Subject</th><th>Received</th><th></th></tr></thead><tbody>
@foreach($items as $m)<tr class="{{ $m->is_read?'':'fw-bold' }}"><td>{{ $m->name }}</td><td>{{ $m->email }}</td><td>{{ $m->subject }}</td><td class="text-muted small">{{ $m->created_at->diffForHumans() }}</td>
<td class="text-end"><a class="btn btn-sm btn-outline-light" href="{{ route('admin.messages.show',$m) }}">Open</a>
<form method="POST" action="{{ route('admin.messages.destroy',$m) }}" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form></td></tr>@endforeach
</tbody></table>{{ $items->links() }}</div>@endsection
