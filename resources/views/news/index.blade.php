 
@extends('userheaderdooter')
@section('usercontent')

<style>
    .container-fluid {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        
    }
    .care {
        font-size: 40px;
        font-family: inherit;
        padding-right: 2px;
        color: #108916;


        }

        .group {
            color: silver;
            font-size: 45px;
            font-family: inherit;
        }

        .grouplogo {
            color: black;
        }

        .fa-user {
            color: #6dff75;
            font-size: 15px;
            font-weight: 800vh;
            margin-left: -9px;
            padding-right: 2px;
            padding: 5px;
            height: 45px;

        }


        .care-logo {
            font-family: 'Segoe UI', sans-serif;
            font-size: 22px;
            color: #4CAF50;
            /* Care green */
            transition: all 0.3s ease;
            display: flex;
        }
        .care-logo .logo-icon {
    background-color: #4CAF50;
    color: white;
    font-size: 16px;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

<div class="container-fluid d-flex justify-content-center align-items-center flex-column my-5">
    <h2>All News</h2>
   
    <!-- <a href="{{ route('news.create') }}" class="btn btn-success mb-3">Add News</a> -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->author }}</td>
                <td>{{ $item->created_at ? $item->created_at->format('F d, Y') : '' }}</td>
                <td>
                    <a href="{{ route('news.show', $item->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('news.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <!-- You can add delete button here if needed -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection