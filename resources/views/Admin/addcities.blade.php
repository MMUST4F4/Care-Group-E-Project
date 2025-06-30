@extends('Admin.HeaderFooter')
@section('content')

<style>
   
    .add-city-section {
    max-width: 500px;
    background: rgb(80, 6, 6);
     
    padding: 30px 20px;
    border-radius: 12px;
   
}

.city-form input.form-control {
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 8px;
    border: 1px solid #ced4da;
   
}

.city-form button {
    padding: 10px;
    font-size: 16px;
    border-radius: 8px;
}

.alert {
    font-size: 15px;
}
.city-form-card {
    background-color: #400000; /* maroon card background */
    color: white;
    border-radius: 12px;
      
}

.city-form-card .form-control {
    background-color: #fff;
    color: #000;
    border-radius: 8px;
    padding: 10px;
    
}

.city-form-card h3 {
    font-weight: bold;
}

.city-form-card .btn {
    font-size: 16px;
    padding: 10px;
    border-radius: 8px;
    
}
.city-form-wrapper {
    background-color: #300000; /* Dark maroon background */
    border-radius: 20px;
    padding: 2rem;
    color: white;
}

.city-form-wrapper .form-control {
    border-radius: 10px;
    font-size: 1.1rem;
    box-shadow: 0 6px 30px rgb(247, 3, 3);
}

.city-form-wrapper h1 {
    font-weight: bold;
    color: #fff;
    text-shadow: 0 2px 4px rgb(94, 6, 6);  
}

</style>
<br>
<center><h1>Add City Section</h1></center>
<hr>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
  
    <div class="card shadow-lg w-100 city-form-wrapper" style="max-width: 800px;">
        <div class="card-body">
            <h1 class="text-center mb-4">🏙️ Add a New City</h1>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success:</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="/addcity" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="cityname" class="form-label fs-5">City Name</label>
                    <input type="text" name="cityname" id="cityname" class="form-control form-control-lg" placeholder="Enter city name..." required>
                    @error('cityname')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-danger btn-lg w-100 mt-3">
                    ➕ Add City
                </button>
            </form>
        </div>
    </div>
</div>
@endsection