@extends('Admin.HeaderFooter')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Cities</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>City Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cities as $city)
                        <tr>
                            <td>{{ $city->cityname }}</td>

                            <td>
                                <form action="{{ route('admin.deleteCity', $city->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection