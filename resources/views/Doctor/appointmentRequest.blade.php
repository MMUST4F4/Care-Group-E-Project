@extends('Doctor.Headerfooter')
<style>
.table-responsive {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    border-radius: 8px;
    overflow: hidden;
    margin-top: 30px;
    min-width: 700px; /* Ensures table doesn't shrink too much */
}
.table thead {
    background: linear-gradient(90deg,rgb(111, 255, 44) 0%,rgb(7, 231, 247) 100%);
    color: #fff;
}
.table th, .table td {
    padding: 14px 18px;
    text-align: left;
    border-bottom: 1px solid #f0f0f0;
    transition: background 0.2s;
    white-space: nowrap;
}
.table tbody tr:hover {
    background: #f1f8ff;
    cursor: pointer;
    transition: background 0.2s;
}
.table th {
    font-weight: 600;
    letter-spacing: 1px;
}
.table tr:last-child td {
    border-bottom: none;
}
</style>
@section('content')
<h2> Appointment Requests</h2>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Department</th>
                <th>Phone</th>
                <th>Reason</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->patient_name }}</td>
                <td>{{ $appointment->patient_email }}</td>
                <td>{{ $appointment->appointment_date }}</td>
                <td>{{ $appointment->department }}</td>
                <td>{{ $appointment->phone_number }}</td>
                <td>{{ $appointment->reason_for_visit }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection