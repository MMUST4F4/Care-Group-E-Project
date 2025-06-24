@extends('Admin.HeaderFooter')
@section('content')
<div class="container">
    <h1>Approved Doctors</h1>
    @if($doctors->count())
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Specialization</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->specialization }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No approved doctors found.</p>
    @endif
</div>
@endsection