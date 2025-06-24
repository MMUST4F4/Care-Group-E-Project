@extends('Doctor.Headerfooter')

@section('content')
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



<div class="table-responsive" style="margin-top:30px;">
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
<div class="availability-table-responsive" style="margin-top:20px;">
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


<!-- Main-body start -->


<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="Doctor/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="Doctor/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="Doctor/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="Doctor/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="Doctor/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->

@endsection