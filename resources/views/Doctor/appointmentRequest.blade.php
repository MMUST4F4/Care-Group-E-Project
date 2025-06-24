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

.availability-table-responsive {
    width: 100%;
    overflow-x: auto;
    margin-top: 20px;
}

.availability-table {
    width: 100%;
    border-collapse: collapse;
    background: #f9fff9;
    box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    border-radius: 8px;
    overflow: hidden;
    min-width: 500px;
}

.availability-table thead {
    background: linear-gradient(90deg, #00c6ff 0%, #43e97b 100%);
    color: #fff;
}

.availability-table th, .availability-table td {
    padding: 12px 16px;
    text-align: left;
    border-bottom: 1px solid #e0f0e0;
}

.availability-table tbody tr:hover {
    background: #eaffea;
}

.availability-table th {
    font-weight: 600;
    letter-spacing: 1px;
}

.availability-table tr:last-child td {
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
<br>

<h3>Your Availabilities</h3>
<div class="availability-table-responsive">
    <table class="availability-table">
        <thead>
            <tr>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($availabilities as $a)
            <tr>
                <td>{{ $a->day_of_week }}</td>
                <td>{{ $a->start_time }}</td>
                <td>{{ $a->end_time }}</td>
                <td>
                    @if($a->is_available)
                        <span style="color:green;font-weight:bold;">Available</span>
                    @else
                        <span style="color:red;font-weight:bold;">Not Available</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<h3>Update Your Availability</h3>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<form method="POST" action="{{ url('/doctor/availability') }}" style="margin-bottom: 30px;">
    @csrf
    <div style="margin-bottom:10px;">
        <label>Day of Week:</label>
        <select name="day_of_week" required>
            <option value="">Select</option>
            @foreach(['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'] as $day)
                <option value="{{ $day }}">{{ $day }}</option>
            @endforeach
        </select>
    </div>
    <div style="margin-bottom:10px;">
        <label>Start Time:</label>
        <input type="time" name="start_time" required>
    </div>
    <div style="margin-bottom:10px;">
        <label>End Time:</label>
        <input type="time" name="end_time" required>
    </div>
    <div style="margin-bottom:10px;">
        <label>
            <input type="checkbox" name="is_available" checked>
            Available
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection