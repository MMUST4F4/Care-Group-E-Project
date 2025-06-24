@extends('Admin.HeaderFooter')
@section('content')
<div class="container">
    <h3 class="mt-4 my-4">All Doctors</h3>
    @if(@session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Alert</strong> {{ session('success') }}
    </div>
    <script>
        var alertList = document.querySelectorAll(".alert");
        alertList.forEach(function (alert) {
            new bootstrap.Alert(alert);
        });
    </script>
    @endif
  <div class="tbl-responsive">
      <table class="table table-striped">
        <thead style="background-color: maroon;color:white">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>

                <th>Approved On</th>
                 
            
                <th>View CV</th>
                <th>Status</th>
                    <th>Operations</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->email }}</td>
                <td>{{ $doctor->created_at }}</td>
                <td>
                    <a href="{{ asset('uploads/doctorcvs/' . $doctor->cv) }}" target="_blank">View CV</a>
                </td>
                <td>{{ $doctor->doctorstatus }}</td>

                <td>
                    <form action="/doctoraccept/{{ $doctor->id }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary">Accept</button>
                    </form>
                    <form action="/doctorreject/{{ $doctor->id }}" method="POST" style="display:inline;">
                        @csrf
                        
                        <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection