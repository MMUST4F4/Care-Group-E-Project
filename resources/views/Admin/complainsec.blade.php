@extends('Admin.HeaderFooter')
@section('content')
<div class="container mt-4">
    <h2 class="mb-3">All Complaints</h2>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Submitted At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($complaints as $complaint)
                <tr>
                    <td>{{ $complaint->id }}</td>
                    <td>{{ $complaint->name }}</td>
                    <td>{{ $complaint->email }}</td>
                    <td>{{ $complaint->message }}</td>
                    <td>{{ $complaint->created_at->format('d M Y h:i A') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No complaints found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection