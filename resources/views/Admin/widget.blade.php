@extends('Admin.HeaderFooter')
@section('content')


<!-- Content Start -->
<h2>Doctors List</h2>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Department</th>
        </tr>
    </thead>
    <tbody>
        @foreach($doctors as $doctor)
        <tr>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->email }}</td>
            <td>{{ $doctor->city }}</td>
            <td>{{ $doctor->department ?: 'Not Assigned'}}</td>
        </tr>
        @endforeach
    </tbody>
</table>




    @endsection