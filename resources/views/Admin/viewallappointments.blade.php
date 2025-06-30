@extends('Admin.HeaderFooter')
@section('content')
<div class="container">
    <h3>All Appointments</h3>
    @if(session('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Alert!</strong> {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Phone Number</th>
                <th>Appointment Date</th>
                <th>Reason For Visit</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->patient_name }}</td>
                    <td>{{ $appointment->phone_number }}</td>
                    <td>{{ $appointment->appointment_date }}</td>
                    <td>{{ $appointment->reason_for_visit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection