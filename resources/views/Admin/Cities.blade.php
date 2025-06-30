@extends('Admin.HeaderFooter')
@section('content')
<style>
    .card-body {
    background-color: #1a1a1a;
    color: rgba(255, 255, 255, 0.99);
    border:rgb(255, 0, 0) 1px solid;
}

.table th, .table td {
    vertical-align: middle;
    border: rgba(146, 2, 2, 0.99) 1px solid;
    color: rgba(255, 255, 255, 0.99);
}
</style>
<br>
<center><h1> Cities Section</h1></center>
<hr>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body">
                    <h2 class="text-center mb-4"> Cities List</h2>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th style="width: 70%">City Name</th>
                                    <th style="width: 30%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cities as $city)
                                    <tr>
                                        <td class="fs-5">{{ $city->cityname }}</td>
                                        <td>
                                            <form action="{{ route('admin.deleteCity', $city->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this city?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm w-100">🗑️ Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection