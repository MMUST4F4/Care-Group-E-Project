@extends('Admin.HeaderFooter')
@section('content')
<div class="container">
    <h3>Add Cities</h3>
   @if(@session('success'))
 <div
        class="alert alert-primary alert-dismissible fade show"
        role="alert"
    >
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
        <strong>Alert ! City has been added</strong>
    </div>
    
    <script>
        var alertList = document.querySelectorAll(".alert");
        alertList.forEach(function (alert) {
            new bootstrap.Alert(alert);
        });
    </script>
   @endif
    
<form action="/addcity" method="post">
    @csrf
    <input type="text" name="cityname" class="form-control">
    <br>
    <button type="submit" class="btn btn-danger w-100">Add City</button>
    
</form>
</div>
@endsection